<?php
require 'vendor/autoload.php'; // PhpSpreadsheet

use PhpOffice\PhpSpreadsheet\IOFactory;

$spreadsheet = IOFactory::load('DB/student_registrations.xlsx'); // Load the existing spreadsheet
$sheet = $spreadsheet->getActiveSheet();

$nextAvailableSerial = null;

foreach ($sheet->getRowIterator(2) as $row) { // Start from row 2 (skip header)
    $rowIndex = $row->getRowIndex();
    $serial = $sheet->getCell('A' . $rowIndex)->getValue();

    // Check if the row has empty values in critical columns (e.g., B to I)
    $isEmpty = true;
    foreach (range('B', 'I') as $col) {
        if (trim((string)$sheet->getCell($col . $rowIndex)->getValue()) !== '') {
            $isEmpty = false;
            break;
        }
    }

    if ($isEmpty && !empty($serial)) {
        $nextAvailableSerial = $serial;
        break;
    }
}

if ($nextAvailableSerial !== null) {
    echo $nextAvailableSerial;
} else {
    echo "No available serial numbers left.";
}
?>