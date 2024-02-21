<?php
require_once __DIR__ . '/partials/functions.php';

session_start(); // Start the session

$errorMessage = '';
$alertClass = '';
$avoidRepetition = isset($_GET['avoid_repetition']) && $_GET['avoid_repetition'] === 'on';

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
            // Generate the password
            $generatedPassword = generateRandomPassword($passwordLength);
            // Save the generated password in the session variable
            $_SESSION['generated_password'] = $generatedPassword;
            // Redirect the user to the dedicated page to show the password
            header('Location: show_password.php');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <title>Password Generator</title>
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css'
        integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=='
        crossorigin='anonymous' />
</head>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <title>Password Generator</title>
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css'
        integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=='
        crossorigin='anonymous' />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center my-5">Password Generator</h1>
                <form id="passwordForm" action="index.php" method="GET">
                    <div class="mb-3">
                        <label for="passwordLength" class="form-label">Password Length:</label>
                        <input type="number" name="length" class="form-control" id="passwordLength"
                            placeholder="Enter password length" required>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="avoidRepetitionCheckbox"
                            name="avoid_repetition">
                        <label class="form-check-label" for="avoidRepetitionCheckbox">Avoid Character Repetition</label>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3" name="generate_password">Generate
                        Password</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>