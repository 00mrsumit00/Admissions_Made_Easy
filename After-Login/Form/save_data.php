<?php
require 'vendor/autoload.php'; // Include PHPSpreadsheet

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Function to sanitize input data
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$fileName = "DB/student_registrations.xlsx"; // Excel file name

// Check if file exists, if not create a new one
if (file_exists($fileName)) {
    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
    $sheet = $spreadsheet->getActiveSheet();
} else {
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Find the row with matching serial number
    $rowToUpdate = null;
    foreach ($sheet->getRowIterator(2) as $row) { // Skip header row
        $rowIndex = $row->getRowIndex();
        $cellSerial = $sheet->getCell('A' . $rowIndex)->getValue();
        
        if ($cellSerial == $serialNumber) {
            $rowToUpdate = $rowIndex;
            break;
        }
    }

    // Define column headers (added Serial Number as the first column)
    $headers = [
        'Serial Number',
        'First Name', 'Last Name', 'Date of Birth', 'Gender', 'Nationality',
        'Email', 'Phone', 'Address Line 1', 'Address Line 2', 'City', 'State', 'Postal Code', 'Country',
        'Highest Qualification', 'Institution Name', 'Field of Study', 'Year of Completion', 'GPA/Percentage',
        'Additional Qualifications',
        'Father\'s Name', 'Father\'s Occupation', 'Father\'s Contact',
        'Mother\'s Name', 'Mother\'s Occupation', 'Mother\'s Contact',
        'Number of Siblings', 'Family Income',
        'Religion', 'Caste Category', 'Reservation', 'Reservation Category',
        'Extra-Curricular Activities', 'Additional Info',
        'Submission Date'
    ];


    // Style the header row
    $headerRow = $sheet->getStyle('A1:' . $column . '1');
    $headerRow->getFont()->setBold(true);
    $headerRow->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                        ->getStartColor()->setRGB('DDDDDD');
}

// Get last row number from column B
$lastRow = $sheet->getHighestDataRow('B') + 1;

// Capture Serial Number from POST
$serialNumber = isset($_POST['serial_number']) ? sanitizeInput($_POST['serial_number']) : '';

// Get form data and sanitize
$firstName = isset($_POST['firstName']) ? sanitizeInput($_POST['firstName']) : '';
$lastName = isset($_POST['lastName']) ? sanitizeInput($_POST['lastName']) : '';
$dob = isset($_POST['dob']) ? sanitizeInput($_POST['dob']) : '';
$gender = isset($_POST['gender']) ? sanitizeInput($_POST['gender']) : '';
$nationality = isset($_POST['nationality']) ? sanitizeInput($_POST['nationality']) : '';

$email = isset($_POST['email']) ? sanitizeInput($_POST['email']) : '';
$phone = isset($_POST['phone']) ? sanitizeInput($_POST['phone']) : '';
$addressLine1 = isset($_POST['addressLine1']) ? sanitizeInput($_POST['addressLine1']) : '';
$addressLine2 = isset($_POST['addressLine2']) ? sanitizeInput($_POST['addressLine2']) : '';
$city = isset($_POST['city']) ? sanitizeInput($_POST['city']) : '';
$state = isset($_POST['state']) ? sanitizeInput($_POST['state']) : '';
$zipCode = isset($_POST['zipCode']) ? sanitizeInput($_POST['zipCode']) : '';
$country = isset($_POST['country']) ? sanitizeInput($_POST['country']) : '';

$highestQualification = isset($_POST['highestQualification']) ? sanitizeInput($_POST['highestQualification']) : '';
$institutionName = isset($_POST['institutionName']) ? sanitizeInput($_POST['institutionName']) : '';
$fieldOfStudy = isset($_POST['fieldOfStudy']) ? sanitizeInput($_POST['fieldOfStudy']) : '';
$yearOfCompletion = isset($_POST['yearOfCompletion']) ? sanitizeInput($_POST['yearOfCompletion']) : '';
$gpa = isset($_POST['cgpa']) ? sanitizeInput($_POST['cgpa']) : '';

$additionalQualifications = isset($_POST['additionalQualifications']) ?
    (is_array($_POST['additionalQualifications']) ? implode(', ', $_POST['additionalQualifications']) : $_POST['additionalQualifications']) : '';

$fatherName = isset($_POST['fatherName']) ? sanitizeInput($_POST['fatherName']) : '';
$fatherOccupation = isset($_POST['fatherOccupation']) ? sanitizeInput($_POST['fatherOccupation']) : '';
$fatherContact = isset($_POST['fatherContact']) ? sanitizeInput($_POST['fatherContact']) : '';
$motherName = isset($_POST['motherName']) ? sanitizeInput($_POST['motherName']) : '';
$motherOccupation = isset($_POST['motherOccupation']) ? sanitizeInput($_POST['motherOccupation']) : '';
$motherContact = isset($_POST['motherContact']) ? sanitizeInput($_POST['motherContact']) : '';
$siblings = isset($_POST['siblings']) ? sanitizeInput($_POST['siblings']) : '';
$familyIncome = isset($_POST['familyIncome']) ? sanitizeInput($_POST['familyIncome']) : '';

$religion = isset($_POST['religion']) ? sanitizeInput($_POST['religion']) : '';
$casteCategory = isset($_POST['casteCategory']) ? sanitizeInput($_POST['casteCategory']) : '';
$reservation = isset($_POST['reservation']) ? sanitizeInput($_POST['reservation']) : '';

$reservationCategory = isset($_POST['reservationCategory']) ?
    (is_array($_POST['reservationCategory']) ? implode(', ', $_POST['reservationCategory']) : $_POST['reservationCategory']) : '';

$extraCurricular = isset($_POST['extraCurricular']) ? sanitizeInput($_POST['extraCurricular']) : '';
$additionalInfo = isset($_POST['additionalInfo']) ? sanitizeInput($_POST['additionalInfo']) : '';

date_default_timezone_set('Asia/Kolkata'); // Set timezone to India
$submissionDate = date('Y-m-d H:i:s');

$data = [
    $firstName, $lastName, $dob, $gender, $nationality,
    $email, $phone, $addressLine1, $addressLine2, $city, $state, $zipCode, $country,
    $highestQualification, $institutionName, $fieldOfStudy, $yearOfCompletion, $gpa,
    $additionalQualifications,
    $fatherName, $fatherOccupation, $fatherContact,
    $motherName, $motherOccupation, $motherContact,
    $siblings, $familyIncome,
    $religion, $casteCategory, $reservation, $reservationCategory,
    $extraCurricular, $additionalInfo,
    $submissionDate
];

// Add data to sheet
$column = 'B';
foreach ($data as $cellValue) {
    $sheet->setCellValue($column . $lastRow, $cellValue);
    $column++;
}

// Auto-size columns for better readability
foreach (range('A', $column) as $columnID) {
    $sheet->getColumnDimension($columnID)->setAutoSize(true);
}

// Save the Excel file
$writer = new Xlsx($spreadsheet);
$writer->save($fileName);

// Return JSON response for AJAX handling
header('Content-Type: application/json');
echo json_encode([
    'status' => 'success',
    'message' => 'Registration data saved successfully',
    'serialNumber' => $serialNumber
]);
?>
