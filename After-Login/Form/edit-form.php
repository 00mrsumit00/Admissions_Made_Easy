<?php
require 'vendor/autoload.php'; // Include PhpSpreadsheet

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

// Initialize variables
$error = '';
$success = false;
$formData = null;

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['serialNumber']) && isset($_POST['dob'])) {
    // Get form data
    $serialNumber = trim($_POST['serialNumber']);
    $dob = trim($_POST['dob']);
    
    if (!empty($serialNumber) && !empty($dob)) {
        try {
            // Path to the Excel file
            $fileName = "DB/student_registrations.xlsx";
            
            // Check if file exists
            if (!file_exists($fileName)) {
                throw new Exception("Database file not found. Please contact the administrator.");
            }
            
            // Load the Excel file
            $spreadsheet = IOFactory::load($fileName);
            $sheet = $spreadsheet->getActiveSheet();
            
            // Get headers from first row
            $headerRow = 1;
            $headers = [];
            foreach ($sheet->getColumnIterator() as $column) {
                $colIndex = $column->getColumnIndex();
                $headers[$colIndex] = $sheet->getCell($colIndex . $headerRow)->getValue();
            }
            
            // Find the columns for Serial Number and Date of Birth
            $serialCol = array_search('Serial Number', $headers) ?: 'A';
            $dobCol = array_search('Date of Birth', $headers) ?: 'D';
            
            // Find the row with matching serial number and DOB
            $rowFound = false;
            $rowIndex = null;
            $rowData = [];
            
            foreach ($sheet->getRowIterator(2) as $row) { // Skip header row
                $rowIdx = $row->getRowIndex();
                $cellSerial = $sheet->getCell($serialCol . $rowIdx)->getValue();
                $cellDob = $sheet->getCell($dobCol . $rowIdx)->getValue();
                
                // Format the date from Excel to Y-m-d for comparison
                if ($cellDob && is_numeric($cellDob)) {
                    // Convert Excel date to PHP DateTime
                    $excelBaseDate = 25569; // Excel's base date (1900-01-01)
                    $phpDate = ($cellDob - $excelBaseDate) * 86400; // Convert to seconds
                    $dateTime = new DateTime("@$phpDate");
                    $formattedDob = $dateTime->format('Y-m-d');
                } else {
                    $formattedDob = $cellDob;
                }
                
                if ($cellSerial == $serialNumber && $formattedDob == $dob) {
                    $rowFound = true;
                    $rowIndex = $rowIdx;
                    
                    // Collect row data
                    foreach ($headers as $colIndex => $header) {
                        if (!empty($header)) {
                            $cellValue = $sheet->getCell($colIndex . $rowIdx)->getValue();
                            $rowData[$header] = $cellValue;
                        }
                    }
                    break;
                }
            }
            
            if (!$rowFound) {
                $error = "No records found with the provided serial number and date of birth.";
            } else {
                $success = true;
                $formData = $rowData;
            }
            
        } catch (Exception $e) {
            $error = "Error retrieving data: " . $e->getMessage();
        }
    } else {
        $error = "Serial number and date of birth are required.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Registration - NEET UG Counseling</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4a6baf;
            --secondary-color: #7f9cd8;
            --accent-color: #2c4578;
            --light-color: #f4f7ff;
            --dark-color: #1e335a;
            --success-color: #28a745;
            --warning-color: #ffc107;
            --danger-color: #dc3545;
        }
        
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .header {
            background-color: var(--primary-color);
            color: white;
            padding: 1.5rem 0;
            box-shadow: 0 3px 10px rgba(0,0,0,0.2);
        }
        
        .header h1 {
            margin: 0;
            font-weight: 700;
        }
        
        .main-content {
            flex: 1;
            padding: 2rem 0;
        }
        
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            overflow: hidden;
        }
        
        .card-header {
            background-color: var(--primary-color);
            color: white;
            padding: 1.25rem 1.5rem;
            border-bottom: none;
        }
        
        .search-card {
            background: linear-gradient(to right, var(--accent-color), var(--primary-color));
            color: white;
            transition: all 0.3s ease;
        }
        
        .search-card .form-control, .search-card .form-control:focus {
            background-color: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 8px;
            padding: 12px 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        
        .search-card .form-control:focus {
            box-shadow: 0 4px 15px rgba(255, 255, 255, 0.2);
        }
        
        .search-card label {
            font-weight: 500;
            margin-bottom: 0.5rem;
        }
        
        .btn-primary {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: var(--dark-color);
            border-color: var(--dark-color);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        .edit-form-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }
        
        .edit-form-card .card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .edit-form-card .form-label {
            font-weight: 500;
            color: #555;
        }
        
        .form-control, .form-select {
            padding: 10px 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
            transition: all 0.3s ease;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 3px rgba(127, 156, 216, 0.2);
        }
        
        .form-section {
            padding: 1.5rem;
            margin-bottom: 1rem;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
            border-left: 4px solid var(--primary-color);
        }
        
        .form-section h3 {
            color: var(--primary-color);
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }
        
        .footer {
            background-color: var(--dark-color);
            color: white;
            padding: 1rem 0;
            margin-top: auto;
        }
        
        .footer p {
            margin: 0;
            font-size: 0.9rem;
        }
        
        .alert {
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        
        .serial-badge {
            background-color: var(--dark-color);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            margin-left: 10px;
            font-size: 0.9rem;
        }
        
        /* Animation for form sections */
        .animate-section {
            animation: fadeInUp 0.6s ease forwards;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Responsive styles */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 1.5rem;
            }
            
            .form-section {
                padding: 1rem;
            }
            
            .form-section h3 {
                font-size: 1.1rem;
            }
        }
        
        /* Form validation styling */
        .was-validated .form-control:invalid, .form-control.is-invalid {
            border-color: var(--danger-color);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5' stroke-width='2'/%3e%3cpath stroke-linejoin='round' stroke-width='2' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(0.375em + 0.1875rem) center;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }
        
        .was-validated .form-control:valid, .form-control.is-valid {
            border-color: var(--success-color);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.4c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(0.375em + 0.1875rem) center;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }
        
        /* Loading indicator */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        /* Toggle switch for theme */
        .theme-toggle {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            cursor: pointer;
            box-shadow: 0 3px 15px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
            z-index: 1000;
        }
        
        .theme-toggle:hover {
            transform: scale(1.1);
        }
        
        /* Dark mode styles */
        body.dark-mode {
            background-color: #121212;
            color: #e0e0e0;
        }
        
        body.dark-mode .card,
        body.dark-mode .form-section {
            background-color: #1e1e1e;
            box-shadow: 0 5px 20px rgba(0,0,0,0.3);
        }
        
        body.dark-mode .form-control,
        body.dark-mode .form-select {
            background-color: #2c2c2c;
            border-color: #444;
            color: #e0e0e0;
        }
        
        body.dark-mode .form-label {
            color: #bbb;
        }
        
        body.dark-mode .card-header {
            background-color: var(--dark-color);
        }
        
        body.dark-mode .form-section h3 {
            color: var(--secondary-color);
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h1><i class="fas fa-user-edit me-2"></i> Registration</h1>
                <nav class="d-none d-md-block">
                    <ul class="list-unstyled d-flex m-0">
                        <li class="me-3"><a href="../Home/dashboard-index.php" class="text-white text-decoration-none"><i class="fas fa-home me-1"></i> Home</a></li>
                        <li class="me-3"><a href="#" class="text-white text-decoration-none"><i class="fas fa-info-circle me-1"></i> About</a></li>
                        <li><a href="#" class="text-white text-decoration-none"><i class="fas fa-question-circle me-1"></i> Help</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="container">
            <?php if (!$success): ?>
                <!-- Search Form -->
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card search-card mb-4">
                            <div class="card-body p-4">
                                <h2 class="text-center mb-4"><i class="fas fa-search me-2"></i> Find Your Registration</h2>
                                
                                <?php if (!empty($error)): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <i class="fas fa-exclamation-circle me-2"></i> <?php echo $error; ?>
                                    </div>
                                <?php endif; ?>
                                
                                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="serialNumber" class="form-label">
                                                <i class="fas fa-fingerprint me-1"></i> Serial Number
                                            </label>
                                            <input type="text" class="form-control" id="serialNumber" name="serialNumber" value="AME2025" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="dob" class="form-label">
                                                <i class="fas fa-calendar-alt me-1"></i> Date of Birth
                                            </label>
                                            <input type="date" class="form-control" id="dob" name="dob" required>
                                        </div>
                                        <div class="col-12 text-center mt-4">
                                            <button type="submit" class="btn btn-primary px-5" id="searchBtn">
                                                <i class="fas fa-search me-2"></i> Search Registration
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <div class="card mt-4">
                            <div class="card-body p-4 text-center">
                                <h3 class="mb-3">New to NEET UG Counseling?</h3>
                                <p>If you haven't registered yet, you can start a new registration to get guidance for NEET UG admissions.</p>
                                <a href="registration_form.php" class="btn btn-outline-primary">
                                    <i class="fas fa-user-plus me-2"></i> New Registration
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <!-- Edit Form -->
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="d-flex align-items-center justify-content-between bg-light p-3 rounded-3 mb-4">
                            <h2 class="m-0">
                                <i class="fas fa-edit me-2"></i> Edit Registration
                                <span class="serial-badge"><?php echo htmlspecialchars($formData['Serial Number']); ?></span>
                            </h2>
                            <a href="edit-form.php" class="btn btn-outline-secondary">
                                <i class="fas fa-search me-1"></i> Search Another
                            </a>
                        </div>
                        
                        <form method="post" action="update_data.php" class="needs-validation" novalidate>
                            <input type="hidden" name="serialNumber" value="<?php echo htmlspecialchars($formData['Serial Number']); ?>">
                            
                            <!-- Personal Information -->
                            <div class="form-section animate-section">
                                <h3><i class="fas fa-user me-2"></i> Personal Information</h3>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo htmlspecialchars($formData['First Name'] ?? ''); ?>" required>
                                        <div class="invalid-feedback">Please enter your first name.</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo htmlspecialchars($formData['Last Name'] ?? ''); ?>" required>
                                        <div class="invalid-feedback">Please enter your last name.</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="dob" class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control" id="dob" name="dob" value="<?php echo htmlspecialchars($dob); ?>" required readonly>
                                        <div class="invalid-feedback">Please enter your date of birth.</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select class="form-select" id="gender" name="gender" required>
                                            <option value="" disabled>Select gender</option>
                                            <option value="male" <?php echo ($formData['Gender'] ?? '') == 'male' ? 'selected' : ''; ?>>Male</option>
                                            <option value="female" <?php echo ($formData['Gender'] ?? '') == 'female' ? 'selected' : ''; ?>>Female</option>
                                            <option value="other" <?php echo ($formData['Gender'] ?? '') == 'other' ? 'selected' : ''; ?>>Other</option>
                                        </select>
                                        <div class="invalid-feedback">Please select your gender.</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="nationality" class="form-label">Nationality</label>
                                        <input type="text" class="form-control" id="nationality" name="nationality" value="<?php echo htmlspecialchars($formData['Nationality'] ?? ''); ?>" required>
                                        <div class="invalid-feedback">Please enter your nationality.</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Contact Information -->
                            <div class="form-section animate-section" style="animation-delay: 0.1s;">
                                <h3><i class="fas fa-address-card me-2"></i> Contact Information</h3>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($formData['Email'] ?? ''); ?>" required>
                                        <div class="invalid-feedback">Please enter a valid email address.</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" value="<?php echo htmlspecialchars($formData['Phone'] ?? ''); ?>" required>
                                        <div class="invalid-feedback">Please enter your phone number.</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="addressLine1" class="form-label">Address Line 1</label>
                                        <input type="text" class="form-control" id="addressLine1" name="addressLine1" value="<?php echo htmlspecialchars($formData['Address Line 1'] ?? ''); ?>" required>
                                        <div class="invalid-feedback">Please enter your address.</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="addressLine2" class="form-label">Address Line 2</label>
                                        <input type="text" class="form-control" id="addressLine2" name="addressLine2" value="<?php echo htmlspecialchars($formData['Address Line 2'] ?? ''); ?>">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="city" class="form-label">City</label>
                                        <input type="text" class="form-control" id="city" name="city" value="<?php echo htmlspecialchars($formData['City'] ?? ''); ?>" required>
                                        <div class="invalid-feedback">Please enter your city.</div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state" class="form-label">State</label>
                                        <input type="text" class="form-control" id="state" name="state" value="<?php echo htmlspecialchars($formData['State'] ?? ''); ?>" required>
                                        <div class="invalid-feedback">Please enter your state.</div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zipCode" class="form-label">ZIP Code</label>
                                        <input type="text" class="form-control" id="zipCode" name="zipCode" value="<?php echo htmlspecialchars($formData['Postal Code'] ?? ''); ?>" required>
                                        <div class="invalid-feedback">Please enter your ZIP code.</div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="country" class="form-label">Country</label>
                                        <input type="text" class="form-control" id="country" name="country" value="<?php echo htmlspecialchars($formData['Country'] ?? ''); ?>" required>
                                        <div class="invalid-feedback">Please enter your country.</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Educational Information -->
                            <div class="form-section animate-section" style="animation-delay: 0.2s;">
                                <h3><i class="fas fa-graduation-cap me-2"></i> Educational Information</h3>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="highestQualification" class="form-label">Highest Qualification</label>
                                        <select class="form-select" id="highestQualification" name="highestQualification" required>
                                            <option value="" disabled>Select qualification</option>
                                            <option value="high_school" <?php echo ($formData['Highest Qualification'] ?? '') == 'high_school' ? 'selected' : ''; ?>>High School</option>
                                            <option value="diploma" <?php echo ($formData['Highest Qualification'] ?? '') == 'diploma' ? 'selected' : ''; ?>>Diploma</option>
                                            <option value="bachelors" <?php echo ($formData['Highest Qualification'] ?? '') == 'bachelors' ? 'selected' : ''; ?>>Bachelor's Degree</option>
                                            <option value="masters" <?php echo ($formData['Highest Qualification'] ?? '') == 'masters' ? 'selected' : ''; ?>>Master's Degree</option>
                                            <option value="phd" <?php echo ($formData['Highest Qualification'] ?? '') == 'phd' ? 'selected' : ''; ?>>PhD or Doctorate</option>
                                            <option value="other" <?php echo ($formData['Highest Qualification'] ?? '') == 'other' ? 'selected' : ''; ?>>Other</option>
                                        </select>
                                        <div class="invalid-feedback">Please select your highest qualification.</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="institutionName" class="form-label">Institution Name</label>
                                        <input type="text" class="form-control" id="institutionName" name="institutionName" value="<?php echo htmlspecialchars($formData['Institution Name'] ?? ''); ?>" required>
                                        <div class="invalid-feedback">Please enter your institution name.</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="fieldOfStudy" class="form-label">Field of Study</label>
                                        <input type="text" class="form-control" id="fieldOfStudy" name="fieldOfStudy" value="<?php echo htmlspecialchars($formData['Field of Study'] ?? ''); ?>" required>
                                        <div class="invalid-feedback">Please enter your field of study.</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="yearOfCompletion" class="form-label">Year of Completion</label>
                                        <select class="form-select" id="yearOfCompletion" name="yearOfCompletion" required>
                                            <option value="" disabled>Select year</option>
                                            <?php
                                            $currentYear = date("Y");
                                            for ($year = $currentYear + 5; $year >= $currentYear - 50; $year--) {
                                                $selected = ($formData['Year of Completion'] ?? '') == $year ? 'selected' : '';
                                                echo "<option value=\"$year\" $selected>$year</option>";
                                            }
                                            ?>
                                        </select>
                                        <div class="invalid-feedback">Please select your year of completion.</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="gpa" class="form-label">GPA/Percentage</label>
                                        <input type="text" class="form-control" id="gpa" name="gpa" value="<?php echo htmlspecialchars($formData['GPA/Percentage'] ?? ''); ?>" required>
                                        <div class="invalid-feedback">Please enter your GPA or percentage.</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Family Information -->
                            <div class="form-section animate-section" style="animation-delay: 0.3s;">
                                <h3><i class="fas fa-users me-2"></i> Family Information</h3>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label for="fatherName" class="form-label">Father's Name</label>
                                        <input type="text" class="form-control" id="fatherName" name="fatherName" value="<?php echo htmlspecialchars($formData["Father's Name"] ?? ''); ?>" required>
                                        <div class="invalid-feedback">Please enter your father's name.</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="fatherOccupation" class="form-label">Father's Occupation</label>
                                        <input type="text" class="form-control" id="fatherOccupation" name="fatherOccupation" value="<?php echo htmlspecialchars($formData["Father's Occupation"] ?? ''); ?>" required>
                                        <div class="invalid-feedback">Please enter your father's occupation.</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="fatherContact" class="form-label">Father's Contact No</label>
                                        <input type="text" class="form-control" id="fatherContact" name="fatherContact" value="<?php echo htmlspecialchars($formData["Father's Contact"] ?? ''); ?>" required>
                                        <div class="invalid-feedback">Please enter your father's contact number.</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="motherName" class="form-label">Mother's Name</label>
                                        <input type="text" class="form-control" id="motherName" name="motherName" value="<?php echo htmlspecialchars($formData["Mother's Name"] ?? ''); ?>">
                                        <div class="invalid-feedback">Please enter your mother's name.</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="motherOccupation" class="form-label">Mother's Occupation</label>
                                        <input type="text" class="form-control" id="motherOccupation" name="motherOccupation" value="<?php echo htmlspecialchars($formData["Mother's Occupation"] ?? ''); ?>" required>
                                        <div class="invalid-feedback">Please enter your mother's occupation.</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="motherContact" class="form-label">Mother's Contact No</label>
                                        <input type="text" class="form-control" id="motherContact" name="motherContact" value="<?php echo htmlspecialchars($formData["Mother's Contact"] ?? ''); ?>" required>
                                        <div class="invalid-feedback">Please enter your mother's contact number.</div>  
                                    </div>
                                    <div class="col-md-6">
                                        <label for="familyAnnualIncome" class="form-label">Family Annual Income</label>
                                        <select class="form-select" id="familyAnnualIncome" name="familyAnnualIncome" required>
                                            <option value="" disabled>Select income</option>
                                            <option value="below 1,00,000" <?php echo ($formData['Family Income'] ?? '') == 'below 1,00,000' ? 'selected' : ''; ?>>Below 1,00,000</option>
                                            <option value="1,00,001 to 5,00,000" <?php echo ($formData['Family Income'] ?? '') == '1,00,001 to 5,00,000' ? 'selected' : ''; ?>>1,00,001 to 5,00,000</option>
                                            <option value="5,00,001 to 8,00,000" <?php echo ($formData['Family Income'] ?? '') == '5,00,001 to 8,00,000' ? 'selected' : ''; ?>>5,00,001 to 8,00,000</option>
                                            <option value="8,00,001 to 10,00,000" <?php echo ($formData['Family Income'] ?? '') == '8,00,001 to 10,00,000' ? 'selected' : ''; ?>>8,00,001 to 10,00,000</option>
                                            <option value="above 10,00,001" <?php echo ($formData['Family Income'] ?? '') == 'above 10,00,001' ? 'selected' : ''; ?>>Above 10,00,001</option>
                                        </select>
                                        <div class="invalid-feedback">Please Select the Family Annual Income.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Additional Information -->
                            <div class="form-section animate-section" style="animation-delay: 0.4s;">
                                <h3><i class="fas fa-info-circle me-2"></i> Additional Information</h3>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="religion" class="form-label">Religion</label>
                                        <select class="form-select" id="religion" name="religion" required>
                                            <option value="" disabled>Select Religion</option>
                                            <option value="buddhism" <?php echo ($formData['Religion'] ?? '') == 'buddhism' ? 'selected' : ''; ?>>Buddhism</option>
                                            <option value="christianity" <?php echo ($formData['Religion'] ?? '') == 'christianity' ? 'selected' : ''; ?>>Christianity</option>
                                            <option value="hinduism" <?php echo ($formData['Religion'] ?? '') == 'hinduism' ? 'selected' : ''; ?>>Hinduism</option>
                                            <option value="islam" <?php echo ($formData['Religion'] ?? '') == 'islam' ? 'selected' : ''; ?>>Islam</option>
                                            <option value="jainism" <?php echo ($formData['Religion'] ?? '') == 'jainism' ? 'selected' : ''; ?>>Jainism</option>
                                            <option value="judaism" <?php echo ($formData['Religion'] ?? '') == 'judaism' ? 'selected' : ''; ?>>Judaism</option>
                                            <option value="sikhism" <?php echo ($formData['Religion'] ?? '') == 'sikhism' ? 'selected' : ''; ?>>Sikhism</option>
                                            <option value="other" <?php echo ($formData['Religion'] ?? '') == 'other' ? 'selected' : ''; ?>>Other</option>
                                        </select>
                                        <div class="invalid-feedback">Please Select the Religion.</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="category" class="form-label">Category</label>
                                        <select class="form-select" id="category" name="category" required>
                                            <option value="" disabled>Select Category</option>
                                            <option value="general" <?php echo ($formData['Caste Category'] ?? '') == 'general' ? 'selected' : ''; ?>>General</option>
                                            <option value="obc" <?php echo ($formData['Caste Category'] ?? '') == 'obc' ? 'selected' : ''; ?>>OBC</option>
                                            <option value="sc" <?php echo ($formData['Caste Category'] ?? '') == 'sc' ? 'selected' : ''; ?>>SC</option>
                                            <option value="st" <?php echo ($formData['Caste Category'] ?? '') == 'st' ? 'selected' : ''; ?>>ST</option>
                                            <option value="ews" <?php echo ($formData['Caste Category'] ?? '') == 'ews' ? 'selected' : ''; ?>>EWS</option>
                                            <option value="other" <?php echo ($formData['Caste Category'] ?? '') == 'other' ? 'selected' : ''; ?>>Other</option>
                                        </select>
                                        <div class="invalid-feedback">Please Select the Category.</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="specialReservation" class="form-label">Do you belongs to any special reservation?</label>
                                        <div class="radio-group">
                                            <label class="radio-label">
                                                <input type="radio" name="reservation" value="yes" <?php echo ($formData['Reservation'] ?? '') == 'yes' ? 'checked' : ''; ?> required> Yes
                                            </label>
                                            <label class="radio-label">
                                                <input type="radio" name="reservation" value="no" <?php echo ($formData['Reservation'] ?? '') == 'no' ? 'checked' : ''; ?>> No
                                            </label>
                                        </div>
                                        <div class="invalid-feedback">Please select an option.</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Submit Button Section -->
                            <!-- <div class="form-section animate-section" style="animation-delay: 0.5s;"> -->
                                <div class="row animate-section" style="animation-delay: 0.5s;">
                                    <div class="col-12 text-center mt-4">
                                        <button type="submit" class="btn btn-primary btn-lg px-5" id="submitBtn">
                                            <i class="fas fa-save me-2"></i> Save Changes
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- RESPONSE MESSAGE CONTAINER -->
                        <div id="responseContainer" style="display: none;" class="mt-4">
                            <div id="responseMessage" class="alert" role="alert"></div>
                        </div>

                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
                                
    <div class="footer">
        <div class="container text-center">
            <p>&copy; <?php echo date("Y"); ?> ADMISSIONS MADE EASY - All rights reserved.</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        // Form validation
        var forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms).forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                } else {
                    // Valid form - submit via AJAX
                    event.preventDefault();
                    submitFormAjax(form);
                }
                form.classList.add('was-validated');
            }, false);
        });

        // AJAX form submission
        function submitFormAjax(form) {
            // Show loading state
            const submitBtn = document.getElementById('submitBtn');
            const originalBtnText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<span class="loading me-2"></span> Processing...';
            submitBtn.disabled = true;

            // Collect form data
            const formData = new FormData(form);
            
            // AJAX request
            fetch('update_data.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(html => {
                // Parse the HTML response
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');
                const isSuccess = doc.querySelector('.status-icon.success') !== null;
                
                // Get the responseContainer element
                const responseContainer = document.getElementById('responseContainer');
                responseContainer.style.display = 'block';
                responseContainer.innerHTML = ''; // Clear previous content

                if (isSuccess) {
                    // Extract the styled confirmation box from the response
                    const confirmationBox = doc.querySelector('.confirmation-box');
                    const successIcon = doc.querySelector('.success-icon');
                    const statusMessage = doc.querySelector('.status-message');
                    
                    // Create a styled response card similar to the one in update_data.php
                    const responseCard = document.createElement('div');
                    responseCard.className = 'card border-0 shadow-sm';
                    
                    // Add card content with styling similar to update_data.php
                    responseCard.innerHTML = `
                        <div class="card-body text-center">
                            ${successIcon ? successIcon.outerHTML : '<div class="success-icon"><i class="fas fa-check"></i></div>'}
                            <h3 class="text-primary mb-3">Update Successful</h3>
                            ${statusMessage ? '<p class="mb-4">' + statusMessage.textContent + '</p>' : ''}
                            ${confirmationBox ? confirmationBox.outerHTML : ''}
                            <div class="mt-4">
                                <button type="button" class="btn btn-secondary me-2" onclick="location.reload();">
                                    <i class="fas fa-edit me-2"></i>Edit Again
                                </button>
                                <a href="index.php" class="btn btn-primary">
                                    <i class="fas fa-home me-2"></i>Home
                                </a>
                            </div>
                        </div>
                    `;
                    
                    // Add animal decorations like in the update_data.php for visual consistency
                    const owlDecoration = document.createElement('div');
                    owlDecoration.className = 'animal-decoration owl';
                    owlDecoration.innerHTML = '🦉';
                    responseCard.appendChild(owlDecoration);
                    
                    const foxDecoration = document.createElement('div');
                    foxDecoration.className = 'animal-decoration fox';
                    foxDecoration.innerHTML = '🦊';
                    responseCard.appendChild(foxDecoration);
                    
                    // Add the styled card to the response container
                    responseContainer.appendChild(responseCard);
                    
                    // Add necessary styles if they don't exist
                    addRequiredStyles();
                    
                    // Scroll to the response container
                    responseContainer.scrollIntoView({ behavior: 'smooth' });
                    
                    // // Hide the form after successful submission
                    // form.style.display = 'none';
                } else {
                    // For error case, extract the error message
                    const statusMessage = doc.querySelector('.status-message');
                    let message = statusMessage ? statusMessage.textContent : 'An error occurred while processing your request.';
                    
                    // Create error message element
                    const errorElement = document.createElement('div');
                    errorElement.className = 'alert alert-danger';
                    errorElement.innerHTML = `
                        <div class="d-flex align-items-center">
                            <div class="status-icon error me-3"><i class="fas fa-exclamation-circle"></i></div>
                            <div>${message}</div>
                        </div>
                        <button type="button" class="btn-close" aria-label="Close" onclick="this.parentElement.remove()"></button>
                    `;
                    
                    responseContainer.appendChild(errorElement);
                }
                
                // Reset button state
                submitBtn.innerHTML = originalBtnText;
                submitBtn.disabled = false;
            })
            .catch(error => {
                console.error('Error:', error);
                
                // Get the responseContainer element and display error
                const responseContainer = document.getElementById('responseContainer');
                responseContainer.style.display = 'block';
                responseContainer.innerHTML = `
                    <div class="alert alert-danger">
                        <div class="d-flex align-items-center">
                            <div class="status-icon error me-3"><i class="fas fa-exclamation-circle"></i></div>
                            <div>An error occurred while processing your request. Please try again.</div>
                        </div>
                        <button type="button" class="btn-close" aria-label="Close" onclick="this.parentElement.remove()"></button>
                    </div>
                `;
                
                // Reset button state
                submitBtn.innerHTML = originalBtnText;
                submitBtn.disabled = false;
            });
        }
        
        // Add required styles if they don't exist
        function addRequiredStyles() {
            // Check if styles already exist
            let styleElement = document.getElementById('response-card-styles');
            if (styleElement) return;
            
            // Create style element
            styleElement = document.createElement('style');
            styleElement.id = 'response-card-styles';
            
            // Add CSS for the confirmation box and icons
            styleElement.textContent = `
                .success-icon {
                    background-color: #4CAF50;
                    color: white;
                    width: 60px;
                    height: 60px;
                    border-radius: 50%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin: 0 auto 20px;
                    font-size: 30px;
                }
                
                .error-icon {
                    background-color: #dc3545;
                    color: white;
                    width: 60px;
                    height: 60px;
                    border-radius: 50%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin: 0 auto 20px;
                    font-size: 30px;
                }
                
                .confirmation-box {
                    background-color: #f0f5ff;
                    border: 1px dashed #b8c4e0;
                    border-radius: 8px;
                    padding: 25px;
                    position: relative;
                    margin-bottom: 25px;
                    text-align: left;
                }
                
                .confirmation-title {
                    text-align: center;
                    color: #5075c5;
                    margin-bottom: 15px;
                    font-size: 18px;
                    font-weight: 600;
                }
                
                .detail-row {
                    display: flex;
                    justify-content: space-between;
                    margin-bottom: 12px;
                }
                
                .detail-label {
                    font-weight: 500;
                    color: #555;
                }
                
                .detail-value {
                    font-weight: 600;
                    color: #333;
                }
                
                .success-value {
                    color: #4CAF50;
                    font-weight: 600;
                }
                
                .note {
                    font-size: 13px;
                    color: #777;
                    text-align: center;
                    margin-bottom: 5px;
                }
                
                .animal-decoration {
                    position: absolute;
                    opacity: 0.1;
                    z-index: 0;
                }

                .print-icon{
                    position: absolute;
                    top: 10px;
                    right: 20px;
                    background-color: #e7eeff;
                    width: 50px;
                    height: 50px;
                    border-radius: 50%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    cursor: pointer;
                    color: #5075c5;
                }
                
                .owl {
                    top: -20px;
                    right: -20px;
                    font-size: 120px;
                    transform: rotate(15deg);
                    color: #5075c5;
                }
                
                .fox {
                    bottom: -30px;
                    left: -30px;
                    font-size: 140px;
                    transform: rotate(-15deg);
                    color: #ff9800;
                }
                
                .status-icon {
                    width: 40px;
                    height: 40px;
                    border-radius: 50%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    font-size: 20px;
                }
                
                .status-icon.success {
                    background-color: #4CAF50;
                    color: white;
                }
                
                .status-icon.error {
                    background-color: #dc3545;
                    color: white;
                }
                
                /* Animation for the response card */
                @keyframes fadeInUp {
                    from {
                        opacity: 0;
                        transform: translateY(20px);
                    }
                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }
                
                #responseContainer .card {
                    animation: fadeInUp 0.5s ease forwards;
                    position: relative;
                    overflow: hidden;
                }
            `;
            
            // Add the style element to the document head
            document.head.appendChild(styleElement);
        }
    });
    </script>
</body>
</html>