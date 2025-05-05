<?php
require 'vendor/autoload.php'; // Include PhpSpreadsheet

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

// Initialize variables
$message = '';
$success = false;
$redirectUrl = '';
$serialNumber = '';

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['serialNumber'])) {
    // Get serial number from form
    $serialNumber = trim($_POST['serialNumber']);
    
    if (!empty($serialNumber)) {
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
            
            // Find the column indexes for each header
            $headerRow = 1;
            $headerColumns = [];
            $highestColumn = $sheet->getHighestColumn();
            $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn);
            
            for ($col = 1; $col <= $highestColumnIndex; $col++) {
                $colLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($col);
                $header = $sheet->getCell($colLetter . $headerRow)->getValue();
                if (!empty($header)) {
                    $headerColumns[$header] = $colLetter;
                }
            }
            
            // Find the row with matching serial number
            $rowFound = false;
            $rowIndex = null;
            $highestRow = $sheet->getHighestRow();
            
            for ($row = 2; $row <= $highestRow; $row++) { // Skip header row
                $cellSerial = $sheet->getCell('A' . $row)->getValue();
                
                if (strval($cellSerial) == strval($serialNumber)) {
                    $rowFound = true;
                    $rowIndex = $row;
                    break;
                }
            }
            
            if (!$rowFound) {
                throw new Exception("No record found with the provided serial number.");
            }
            
            // Map form fields to Excel columns
            $fieldMappings = [
                'firstName' => 'First Name',
                'lastName' => 'Last Name',
                'dob' => 'Date of Birth',
                'gender' => 'Gender',
                'nationality' => 'Nationality',
                'email' => 'Email',
                'phone' => 'Phone',
                'addressLine1' => 'Address Line 1',
                'addressLine2' => 'Address Line 2',
                'city' => 'City',
                'state' => 'State',
                'zipCode' => 'Postal Code',
                'country' => 'Country',
                'highestQualification' => 'Highest Qualification',
                'institutionName' => 'Institution Name',
                'fieldOfStudy' => 'Field of Study',
                'yearOfCompletion' => 'Year of Completion',
                'gpa' => 'GPA/Percentage',
                'fatherName' => 'Father\'s Name',
                'fatherOccupation' => 'Father\'s Occupation',
                'fatherContact' => 'Father\'s Contact',
                'motherName' => 'Mother\'s Name',
                'motherOccupation' => 'Mother\'s Occupation',
                'motherContact' => 'Mother\'s Contact',
                'siblings' => 'Number of Siblings',
                'familyIncome' => 'Family Income',
                'religion' => 'Religion',
                'casteCategory' => 'Caste Category',
                'reservation' => 'Reservation',
                'extraCurricular' => 'Extra-Curricular Activities',
                'additionalInfo' => 'Additional Info'
            ];
            
            // Process each field mapping and update the Excel file
            foreach ($fieldMappings as $formField => $excelHeader) {
                if (isset($_POST[$formField]) && isset($headerColumns[$excelHeader])) {
                    $colLetter = $headerColumns[$excelHeader];
                    $sheet->setCellValue($colLetter . $rowIndex, $_POST[$formField]);
                }
            }
            
            // Special handling for array fields that need to be joined
            if (isset($_POST['additionalQualifications']) && isset($headerColumns['Additional Qualifications'])) {
                $additionalQualifications = $_POST['additionalQualifications'];
                $colLetter = $headerColumns['Additional Qualifications'];
                if (is_array($additionalQualifications)) {
                    $sheet->setCellValue($colLetter . $rowIndex, implode(', ', $additionalQualifications));
                }
            }
            
            if (isset($_POST['reservationCategory']) && isset($headerColumns['Reservation Category'])) {
                $reservationCategories = $_POST['reservationCategory'];
                $colLetter = $headerColumns['Reservation Category'];
                if (is_array($reservationCategories)) {
                    $sheet->setCellValue($colLetter . $rowIndex, implode(', ', $reservationCategories));
                }
            }
            
            // Save the updated Excel file
            $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
            $writer->save($fileName);
            
            $success = true;
            $message = "Your registration has been successfully updated!";
            // $redirectUrl = "edit-form.php"; // Can be changed to another page if needed
            
        } catch (Exception $e) {
            $message = "Error updating data: " . $e->getMessage();
        }
    } else {
        $message = "Serial number is required.";
    }
} else {
    // Redirect to edit form if accessed directly
    header("Location: edit-form.php");
    exit();
}

// Current date and time formatted
$currentDateTime = date('d-m-Y h:i A');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Status - NEET UG Counseling</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #5075c5;
            --secondary-color: #7f9cd8;
            --accent-color: #2c4578;
            --light-color: #f0f5ff;
            --dark-color: #1e335a;
            --success-color: #4CAF50;
            --danger-color: #dc3545;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .header {
            background-color: var(--primary-color);
            color: white;
            padding: 1.5rem 0;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        
        .header h1 {
            margin: 0;
            font-weight: 700;
        }
        
        .main-content {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 0;
        }
        
        .container {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            padding: 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .success-icon {
            background-color: var(--success-color);
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
            background-color: var(--danger-color);
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
        
        h1 {
            color: var(--primary-color);
            font-size: 24px;
            margin-bottom: 10px;
        }
        
        .message {
            color: #666;
            margin-bottom: 25px;
        }
        
        .confirmation-box {
            background-color: var(--light-color);
            border: 1px dashed #b8c4e0;
            border-radius: 8px;
            padding: 25px;
            position: relative;
            margin-bottom: 25px;
            text-align: left;
        }
        
        .confirmation-title {
            text-align: center;
            color: var(--primary-color);
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
            color: var(--success-color);
            font-weight: 600;
        }
        
        .note {
            font-size: 13px;
            color: #777;
            text-align: center;
            margin-bottom: 5px;
        }
        
        .button-container {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }
        
        .button {
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        
        .primary-button {
            background-color: var(--primary-color);
            color: white;
            border: none;
        }
        
        .primary-button:hover {
            background-color: var(--accent-color);
        }
        
        .secondary-button {
            background-color: #e7eeff;
            color: var(--primary-color);
            border: 1px solid #c7d4f0;
        }
        
        .secondary-button:hover {
            background-color: #d7e4ff;
        }
        
        .print-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #e7eeff;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            color: #5075c5;
        }
        
        .print-icon:hover {
            background-color: #d7e4ff;
        }
        
        /* Animal decorations */
        .animal-decoration {
            position: absolute;
            opacity: 0.1;
            z-index: 0;
        }
        
        .owl {
            top: -20px;
            right: -20px;
            font-size: 120px;
            transform: rotate(15deg);
            color: var(--primary-color);
        }
        
        .fox {
            bottom: -30px;
            left: -30px;
            font-size: 140px;
            transform: rotate(-15deg);
            color: #ff9800;
        }
        
        .turtle {
            bottom: -20px;
            right: -20px;
            font-size: 120px;
            transform: rotate(-15deg);
            color: #43a047;
        }
        
        .squirrel {
            top: -15px;
            left: -15px;
            font-size: 100px;
            transform: rotate(15deg);
            color: #8d6e63;
        }
        
        /* Added elements */
        .content-wrapper {
            position: relative;
            z-index: 1;
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
            text-align: center;
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
        .success {
            background-color: #4CAF50;
            color: white;
        }

        .print-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #e7eeff;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            color: #5075c5;
        }

        .error {
            background-color: #dc3545;
            color: white;
        }
        .receipt {
            background-color: #f0f5ff;
            border: 1px dashed #b8c4e0;
            border-radius: 8px;
            padding: 15px;
            margin-top: 15px;
        }
        
        @media print {
            .no-print {
                display: none;
            }
            
            body {
                background-color: white;
            }
            
            .container {
                box-shadow: none;
            }
            
            .animal-decoration {
                display: none;
            }
            
            .print-icon {
                display: none;
            }
        }
        
        @media (max-width: 576px) {
            .container {
                border-radius: 0;
                box-shadow: none;
                padding: 20px 15px;
            }
            
            .button-container {
                flex-direction: column;
            }
            
            .animal-decoration {
                font-size: 80px;
            }
        }
    </style>
</head>
<body>
    <div class="header no-print">
        <div class="container-fluid">
            <div class="d-flex justify-content-center align-items-center">
                <h1><i class="fas fa-graduation-cap me-2"></i> NEET UG Counseling Portal</h1>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="container">
            <?php if ($success): ?>
                <!-- Animal decorations -->
                <div class="animal-decoration owl">🦉</div>
                <div class="animal-decoration fox">🦊</div>
                
                <div class="content-wrapper">
                    <div class="success-icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <h1>Update Successful</h1>
                    <div class="status-message"><?php echo htmlspecialchars($message); ?></div>
                    <div class="status-icon success"><i class="fas fa-check-circle"></i></div>
                    
                    <div class="confirmation-box">
                        
                        <div class="print-icon">
                            <button class="print-icon no-print" onclick="window.print();">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                                    <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                                </svg>
                            </button>
                        </div>
                        <div class="confirmation-title">Update Confirmation<br/>NEET UG Counseling Portal</div>
                        
                        <div class="detail-row">
                            <span class="detail-label">Serial Number:</span>
                            <span class="detail-value"><?php echo htmlspecialchars($serialNumber); ?></span>
                        </div>
                        
                        <div class="detail-row">
                            <span class="detail-label">Date & Time:</span>
                            <span class="detail-value"><?php echo $currentDateTime; ?></span>
                        </div>
                        
                        <div class="detail-row">
                            <span class="detail-label">Status:</span>
                            <span class="success-value">Information Updated Successfully</span>
                        </div>
                        
                        <p class="note">Please keep this receipt for your records. For any queries, please contact our support team.</p>
                    </div>
                    
                    <div class="button-container no-print">
                        <a href="<?php echo $redirectUrl; ?>" class="button secondary-button">
                            <i class="fas fa-edit"></i>
                            Edit Again
                        </a>
                        <a href="index.php" class="button primary-button">
                            <i class="fas fa-home"></i>
                            Home
                        </a>
                    </div>
                </div>
            <?php else: ?>
                <!-- Animal decorations for error state -->
                <div class="animal-decoration squirrel">🐿️</div>
                <div class="animal-decoration turtle">🐢</div>
                
                <div class="content-wrapper">
                    <div class="error-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <h1>Update Failed</h1>
                    <div class="status-message"><?php echo htmlspecialchars($message); ?></div>
                    <div class="status-icon error"><i class="fas fa-exclamation-circle"></i></div>
                    
                    <div class="button-container">
                        <a href="edit-form.php" class="button secondary-button">
                            <i class="fas fa-arrow-left"></i>
                            Go Back
                        </a>
                        <a href="index.php" class="button primary-button">
                            <i class="fas fa-home"></i>
                            Home
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <footer class="footer no-print">
        <div class="container-fluid">
            <p>&copy; <?php echo date('Y'); ?> NEET UG Counseling Portal. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>