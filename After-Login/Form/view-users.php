<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

// Set error reporting for debugging (remove in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Initialize variables
$fileName = "student_registrations.xlsx";
$users = [];
$message = '';

// Process form data if submitted (for user editing)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'update_user') {
    try {
        // Load the Excel file
        $spreadsheet = IOFactory::load($fileName);
        $sheet = $spreadsheet->getActiveSheet();
        
        // Get headers
        $headers = [];
        $highestColumn = $sheet->getHighestColumn();
        foreach (range('A', $highestColumn) as $column) {
            $headers[$column] = $sheet->getCell($column . '1')->getValue();
        }
        
        // Flip headers to get column by name
        $headerMap = array_flip($headers);
        
        // Find the row with matching serial number
        $serialNumber = $_POST['serial_number'];
        $rowToUpdate = null;
        
        $highestRow = $sheet->getHighestRow();
        for ($row = 2; $row <= $highestRow; $row++) {
            $currentSerial = $sheet->getCell('A' . $row)->getValue();
            if ($currentSerial == $serialNumber) {
                $rowToUpdate = $row;
                break;
            }
        }
        
        if ($rowToUpdate) {
            // Update fields in the Excel file
            foreach ($_POST as $field => $value) {
                // Skip action and serial_number fields
                if ($field === 'action' || $field === 'serial_number') continue;
                
                // Find the column for this field
                if (isset($headerMap[$field])) {
                    $column = $headerMap[$field];
                    $sheet->setCellValue($column . $rowToUpdate, $value);
                }
            }
            
            // Save changes back to the Excel file
            $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
            $writer->save($fileName);
            
            $message = '<div class="alert alert-success">User data updated successfully!</div>';
        } else {
            $message = '<div class="alert alert-danger">User not found!</div>';
        }
    } catch (Exception $e) {
        $message = '<div class="alert alert-danger">Error updating user: ' . $e->getMessage() . '</div>';
    }
}

// Load the Excel file
if (file_exists($fileName)) {
    $spreadsheet = IOFactory::load($fileName);
    $sheet = $spreadsheet->getActiveSheet();
    
    // Get headers
    $headers = [];
    $highestColumn = $sheet->getHighestColumn();
    foreach (range('A', $highestColumn) as $column) {
        $headers[$column] = $sheet->getCell($column . '1')->getValue();
    }
    
    // Get user data from Excel
    $highestRow = $sheet->getHighestRow();
    for ($row = 2; $row <= $highestRow; $row++) {
        $userData = [];
        foreach (range('A', $highestColumn) as $column) {
            $userData[$headers[$column]] = $sheet->getCell($column . $row)->getValue();
        }
        
        // Make sure we have required fields, even if empty
        $requiredFields = ['Serial Number', 'First Name', 'Last Name', 'Submission Date'];
        foreach ($requiredFields as $field) {
            if (!isset($userData[$field])) {
                $userData[$field] = '';
            }
        }
        
        // Only add user if serial number AND at least one of first/last name exists
        if (!empty($userData['Serial Number']) && 
            (!empty($userData['First Name']) || !empty($userData['Last Name']))) {
            $users[] = $userData;
        }
    }
}

// Handle search query
$searchQuery = isset($_GET['search']) ? $_GET['search'] : '';
if (!empty($searchQuery)) {
    $filteredUsers = [];
    foreach ($users as $user) {
        if (
            stripos($user['Serial Number'], $searchQuery) !== false ||
            stripos($user['First Name'], $searchQuery) !== false ||
            stripos($user['Last Name'], $searchQuery) !== false
        ) {
            $filteredUsers[] = $user;
        }
    }
    $users = $filteredUsers;
}

// Handle sorting
$sortField = isset($_GET['sort']) ? $_GET['sort'] : 'Serial Number';
$sortDirection = isset($_GET['direction']) ? $_GET['direction'] : 'asc';

// Sort the users array
usort($users, function($a, $b) use ($sortField, $sortDirection) {
    if ($sortDirection == 'asc') {
        return $a[$sortField] <=> $b[$sortField];
    } else {
        return $b[$sortField] <=> $a[$sortField];
    }
});

// Pagination settings
$itemsPerPage = 10;
$totalUsers = count($users);
$totalPages = ceil($totalUsers / $itemsPerPage);
$currentPage = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$offset = ($currentPage - 1) * $itemsPerPage;

// Slice the array for pagination
$paginatedUsers = array_slice($users, $offset, $itemsPerPage);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Records</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .header {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            padding: 30px 0;
            margin-bottom: 30px;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border: none;
        }
        .table {
            margin-bottom: 0;
        }
        .table thead th {
            background-color: #f1f5f9;
            border-bottom: 2px solid #dee2e6;
            font-weight: 600;
            color: #344767;
        }
        .btn-view {
            background-color: #2575fc;
            color: white;
            border: none;
        }
        .btn-view:hover {
            background-color: #1a5dc6;
            color: white;
        }
        .btn-edit {
            background-color: #6a11cb;
            color: white;
            border: none;
        }
        .btn-edit:hover {
            background-color: #5c0eb8;
            color: white;
        }
        .page-item.active .page-link {
            background-color: #6a11cb;
            border-color: #6a11cb;
        }
        .page-link {
            color: #6a11cb;
        }
        .search-box {
            position: relative;
        }
        .search-box .form-control {
            padding-right: 40px;
            border-radius: 20px;
        }
        .search-box .search-icon {
            position: absolute;
            right: 15px;
            top: 10px;
            color: #6c757d;
        }
        .empty-state {
            text-align: center;
            padding: 40px 0;
        }
        .empty-state i {
            font-size: 60px;
            color: #dee2e6;
            margin-bottom: 20px;
        }
        .sort-icon {
            cursor: pointer;
        }
        .btn-sm {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            border-radius: 0.2rem;
        }
        .actions {
            white-space: nowrap;
        }
        
        /* Preview Modal Styles */
        .preview-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1050;
            opacity: 0;
            transition: opacity 0.3s ease;
            justify-content: center;
            align-items: center;
        }
        
        .preview-modal.show {
            opacity: 1;
        }
        
        .preview-content {
            width: 90%;
            max-width: 900px;
            max-height: 90vh;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            display: flex;
            flex-direction: column;
            transform: translateY(20px);
            transition: transform 0.3s ease;
            overflow: hidden;
        }
        
        .preview-modal.show .preview-content {
            transform: translateY(0);
        }
        
        .preview-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border-bottom: 1px solid #e5e5e5;
        }
        
        .preview-header h2 {
            margin: 0;
            font-size: 1.5rem;
            color: #333;
        }
        
        .close-btn {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #666;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            transition: background-color 0.2s;
        }
        
        .close-btn:hover {
            background-color: #f0f0f0;
            color: #333;
        }
        
        .preview-body {
            flex: 1;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }
        
        .preview-tabs {
            display: flex;
            padding: 10px 20px 0;
            background-color: #f8f9fa;
            border-bottom: 1px solid #e5e5e5;
            gap: 10px;
            overflow-x: auto;
        }
        
        .tab-btn {
            background: none;
            border: none;
            padding: 10px 16px;
            font-size: 0.9rem;
            font-weight: 500;
            color: #666;
            border-bottom: 2px solid transparent;
            cursor: pointer;
            transition: all 0.2s;
            white-space: nowrap;
        }
        
        .tab-btn:hover {
            color: #2575fc;
        }
        
        .tab-btn.active {
            color: #6a11cb;
            border-bottom: 2px solid #6a11cb;
        }
        
        .preview-serial {
            padding: 15px 20px;
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            border-bottom: 1px solid #e5e5e5;
        }
        
        .serial-label {
            font-weight: 600;
            margin-right: 10px;
            color: #333;
        }
        
        .serial-number {
            font-weight: 500;
            color: #6a11cb;
            font-size: 1.1em;
        }
        
        .preview-content-scroll {
            flex: 1;
            overflow-y: auto;
            padding: 20px;
        }
        
        .preview-section {
            margin-bottom: 25px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            padding: 20px;
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.3s ease;
        }
        
        .preview-section.animated {
            opacity: 1;
            transform: translateY(0);
        }
        
        .preview-section h3 {
            margin-top: 0;
            margin-bottom: 15px;
            font-size: 1.2rem;
            color: #333;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
        
        .preview-row {
            display: flex;
            margin-bottom: 12px;
            font-size: 0.95rem;
        }
        
        .preview-label {
            flex: 0 0 35%;
            font-weight: 500;
            color: #666;
        }
        
        .preview-value {
            flex: 0 0 65%;
            color: #333;
        }
        
        .preview-editable {
            cursor: pointer;
            padding: 2px 8px;
            border-radius: 4px;
            transition: background-color 0.2s;
        }
        
        .preview-editable:hover {
            background-color: #f0f4f8;
        }
        
        .preview-editable:focus {
            background-color: #e8f0fe;
            outline: none;
            box-shadow: 0 0 0 2px rgba(106, 17, 203, 0.2);
        }
        
        .preview-footer {
            padding: 15px 20px;
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            border-top: 1px solid #e5e5e5;
            background-color: #f8f9fa;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }
        
        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }
        
        .btn-secondary:hover {
            background-color: #5a6268;
            color: white;
        }
        
        .btn-primary {
            background-color: #6a11cb;
            border-color: #6a11cb;
        }
        
        .btn-primary:hover {
            background-color: #5c0eb8;
            border-color: #5c0eb8;
        }
        
        .success-message {
            display: none;
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #28a745;
            color: white;
            padding: 15px 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 1060;
            opacity: 0;
            transform: translateY(-20px);
            transition: all 0.3s ease;
        }
        
        .success-message.show {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1><i class="fas fa-users me-2"></i>Student Registrations</h1>
                    <p class="mb-0">View and manage all submitted registration forms</p>
                </div>
                <div class="col-md-6">
                    <form action="" method="GET" class="search-box float-md-end mt-3 mt-md-0">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control form-control-lg" 
                                   placeholder="Search by name or serial number" value="<?= htmlspecialchars($searchQuery) ?>">
                            <button type="submit" class="btn btn-lg btn-outline-light">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <?php if (!empty($message)): ?>
            <?= $message ?>
        <?php endif; ?>
        
        <div class="card">
            <div class="card-header bg-white py-3">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="mb-0">Registration Records</h5>
                    </div>
                    <div class="col text-end">
                        <a href="index.php" class="btn btn-success">
                            <i class="fas fa-plus me-1"></i> New Registration
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <?php if (empty($paginatedUsers)): ?>
                    <div class="empty-state">
                        <i class="fas fa-folder-open"></i>
                        <h4>No Records Found</h4>
                        <?php if (!empty($searchQuery)): ?>
                            <p>No results matching your search "<?= htmlspecialchars($searchQuery) ?>"</p>
                            <a href="view_users.php" class="btn btn-primary">Clear Search</a>
                        <?php else: ?>
                            <p>No student registrations have been submitted yet.</p>
                        <?php endif; ?>
                    </div>
                <?php else: ?>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead>
                                <tr>
                                    <th>
                                        <a href="?sort=Serial+Number&direction=<?= ($sortField == 'Serial Number' && $sortDirection == 'asc') ? 'desc' : 'asc' ?><?= !empty($searchQuery) ? '&search='.urlencode($searchQuery) : '' ?>">
                                            Serial Number
                                            <?php if ($sortField == 'Serial Number'): ?>
                                                <i class="fas fa-sort-<?= $sortDirection == 'asc' ? 'up' : 'down' ?>"></i>
                                            <?php else: ?>
                                                <i class="fas fa-sort text-muted"></i>
                                            <?php endif; ?>
                                        </a>
                                    </th>
                                    <th>
                                        <a href="?sort=First+Name&direction=<?= ($sortField == 'First Name' && $sortDirection == 'asc') ? 'desc' : 'asc' ?><?= !empty($searchQuery) ? '&search='.urlencode($searchQuery) : '' ?>">
                                            First Name
                                            <?php if ($sortField == 'First Name'): ?>
                                                <i class="fas fa-sort-<?= $sortDirection == 'asc' ? 'up' : 'down' ?>"></i>
                                            <?php else: ?>
                                                <i class="fas fa-sort text-muted"></i>
                                            <?php endif; ?>
                                        </a>
                                    </th>
                                    <th>
                                        <a href="?sort=Last+Name&direction=<?= ($sortField == 'Last Name' && $sortDirection == 'asc') ? 'desc' : 'asc' ?><?= !empty($searchQuery) ? '&search='.urlencode($searchQuery) : '' ?>">
                                            Last Name
                                            <?php if ($sortField == 'Last Name'): ?>
                                                <i class="fas fa-sort-<?= $sortDirection == 'asc' ? 'up' : 'down' ?>"></i>
                                            <?php else: ?>
                                                <i class="fas fa-sort text-muted"></i>
                                            <?php endif; ?>
                                        </a>
                                    </th>
                                    <th>
                                        <a href="?sort=Submission+Date&direction=<?= ($sortField == 'Submission Date' && $sortDirection == 'asc') ? 'desc' : 'asc' ?><?= !empty($searchQuery) ? '&search='.urlencode($searchQuery) : '' ?>">
                                            Submission Date
                                            <?php if ($sortField == 'Submission Date'): ?>
                                                <i class="fas fa-sort-<?= $sortDirection == 'asc' ? 'up' : 'down' ?>"></i>
                                            <?php else: ?>
                                                <i class="fas fa-sort text-muted"></i>
                                            <?php endif; ?>
                                        </a>
                                    </th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($paginatedUsers as $user): ?>
                                <tr>
                                    <td><?= htmlspecialchars($user['Serial Number'] ?? '') ?></td>
                                    <td><?= htmlspecialchars($user['First Name'] ?? '') ?></td>
                                    <td><?= htmlspecialchars($user['Last Name'] ?? '') ?></td>
                                    <td><?= htmlspecialchars($user['Submission Date'] ?? '') ?></td>
                                    <td class="actions text-center">
                                        <button type="button" class="btn btn-sm btn-view me-1 view-user-btn" 
                                           data-serial="<?= htmlspecialchars($user['Serial Number']) ?>">
                                            <i class="fas fa-eye me-1"></i> View
                                        </button>
                                        <a href="edit_user.php?serial=<?= urlencode($user['Serial Number']) ?>" 
                                           class="btn btn-sm btn-edit">
                                            <i class="fas fa-pencil-alt me-1"></i> Edit
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    
                    <?php if ($totalPages > 1): ?>
                    <div class="card-footer bg-white">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item <?= ($currentPage == 1) ? 'disabled' : '' ?>">
                                    <a class="page-link" href="?page=<?= $currentPage - 1 ?><?= !empty($searchQuery) ? '&search='.urlencode($searchQuery) : '' ?><?= !empty($sortField) ? '&sort='.urlencode($sortField).'&direction='.urlencode($sortDirection) : '' ?>">
                                        <i class="fas fa-chevron-left"></i>
                                    </a>
                                </li>
                                
                                <?php
                                $startPage = max(1, $currentPage - 2);
                                $endPage = min($totalPages, $startPage + 4);
                                if ($endPage - $startPage < 4) {
                                    $startPage = max(1, $endPage - 4);
                                }
                                
                                for ($i = $startPage; $i <= $endPage; $i++):
                                ?>
                                <li class="page-item <?= ($i == $currentPage) ? 'active' : '' ?>">
                                    <a class="page-link" href="?page=<?= $i ?><?= !empty($searchQuery) ? '&search='.urlencode($searchQuery) : '' ?><?= !empty($sortField) ? '&sort='.urlencode($sortField).'&direction='.urlencode($sortDirection) : '' ?>">
                                        <?= $i ?>
                                    </a>
                                </li>
                                <?php endfor; ?>
                                
                                <li class="page-item <?= ($currentPage == $totalPages) ? 'disabled' : '' ?>">
                                    <a class="page-link" href="?page=<?= $currentPage + 1 ?><?= !empty($searchQuery) ? '&search='.urlencode($searchQuery) : '' ?><?= !empty($sortField) ? '&sort='.urlencode($sortField).'&direction='.urlencode($sortDirection) : '' ?>">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
        
        <div class="mt-4 text-center text-muted">
            <small>Showing <?= count($paginatedUsers) ?> of <?= $totalUsers ?> records</small>
        </div>
    </div>

    <!-- Preview Popup Modal -->
    <div class="preview-modal" id="previewModal">
        <div class="preview-content">
            <div class="preview-header">
                <h2>Student Details</h2>
                <button class="close-btn" id="closePreview" aria-label="Close preview">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
            <div class="preview-body">
                <div class="preview-tabs">
                    <button class="tab-btn active" data-tab="all">All Details</button>
                    <button class="tab-btn" data-tab="personal">Personal</button>
                    <button class="tab-btn" data-tab="contact">Contact</button>
                    <button class="tab-btn" data-tab="education">Education</button>
                    <button class="tab-btn" data-tab="family">Family</button>
                    <button class="tab-btn" data-tab="additional">Additional</button>
                </div>
                <div class="preview-serial">
                    <span class="serial-label">Application ID:</span>
                    <span id="serialNumber" class="serial-number"></span>
                </div>
                <div class="preview-content-scroll">
                    <div id="previewData"></div>
                </div>
            </div>
            <div class="preview-footer">
                <button class="btn btn-secondary" id="closePreviewBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                    Close
                </button>
                <button class="btn btn-primary" id="saveChangesBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                        <polyline points="17 21 17 13 7 13 7 21"></polyline>
                        <polyline points="7 3 7 8 15 8"></polyline>
                    </svg>
                    Save Changes
                </button>
            </div>
        </div>
    </div>

    <!-- Success message toast -->
    <div class="success-message" id="successMessage">
        Changes saved successfully!
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const previewModal = document.getElementById('previewModal');
            const closePreview = document.getElementById('closePreview');
            const closePreviewBtn = document.getElementById('closePreviewBtn');
            const saveChangesBtn = document.getElementById('saveChangesBtn');
            const serialNumberElement = document.getElementById('serialNumber');
            const previewData = document.getElementById('previewData');
            const viewUserButtons = document.querySelectorAll('.view-user-btn');
            const successMessage = document.getElementById('successMessage');
            
            // Store all edited fields
            let editedFields = {};
            let currentSerialNumber = '';
            
            // Field labels mapping
            const fieldLabels = {
                'Serial Number': 'Serial Number',
                'First Name': 'First Name',
                'Last Name': 'Last Name',
                'Submission Date': 'Submission Date',
                'dob': 'Date of Birth',
            }
        )}