<?php
$passwordLength = '';
$generatedPassword = '';

// Function to generate a random password.
function generateRandomPassword($length)
{
    // Definition of valid characters for the password.
    $validChars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#_-&';

    // Length of valid characters.
    $validCharsLength = strlen($validChars);

    // Variable for the generated password
    $password = '';

    // Loop for generating the random password.
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, $validCharsLength - 1);
        $password .= $validChars[$randomIndex];
    }

    return $password;
}

// Check if the form has been submitted
if (isset($_GET['generate_password'])) {
    // Check if the password length has been passed
    if (isset($_GET['length'])) {
        $passwordLength = $_GET['length'];
        $generatedPassword = generateRandomPassword($passwordLength);
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

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center my-5">Password Generator</h1>
                <form id="passwordForm" action="index.php" method="GET">
                    <div class="mb-3">
                        <label for="passwordLength" class="form-label">Password Length:</label>
                        <input type="number" name="length" class="form-control" id="passwordLength"
                            placeholder="Enter password length" required va">
                    </div>
                    <button type="submit" class="btn btn-primary" name="generate_password">Generate Password</button>
                </form>
                <?php if (!empty($generatedPassword)): ?>
                    <div class="alert bg-success mt-5" role="alert">
                        <strong>Password generated:</strong>
                        <i>
                            <?= $generatedPassword; ?>
                        </i>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

</body>

</html>