<?php
// Include functions.php to access the generateRandomPassword function
require_once __DIR__ . '/functions.php';

$errorMessage = '';
$generatedPassword = '';
$alertClass = '';

// Check if the form has been submitted
if (isset($_GET['generate_password'])) {
    // Check if the password length has been passed
    if (isset($_GET['length'])) {
        $passwordLength = $_GET['length'];
        // Check if the input is valid
        if ($passwordLength === '') {
            $errorMessage = 'Invalid input. Please enter a value.';
            $alertClass = 'bg-danger'; // Set alert class to 'bg-danger' for error
        } elseif (!ctype_digit($passwordLength) || $passwordLength < 1) {
            $errorMessage = 'Invalid input. Please enter a positive integer.';
            $alertClass = 'bg-danger'; // Set alert class to 'bg-danger' for error
        } else {
            $generatedPassword = generateRandomPassword($passwordLength);
            $alertClass = 'bg-success'; // Set alert class to 'bg-success' for success
        }
    }
}
?>