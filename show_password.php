<?php
session_start(); // Start the session

// Check if the generated password is set in the session variable
if (isset($_SESSION['generated_password'])) {
    $generatedPassword = $_SESSION['generated_password'];
    // Unset the generated password from the session variable
    unset($_SESSION['generated_password']);
} else {
    // Redirect the user back to the index if the generated password is not set
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <title>Password Generated</title>
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css'
        integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=='
        crossorigin='anonymous' />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center my-5">Password Generated</h1>
                <div class="alert bg-success mt-5" role="alert">
                    <strong>Password generated:</strong>
                    <i>
                        <?= $generatedPassword; ?>
                    </i>
                </div>
                <div class="text-center mt-3">
                    <!-- Add a button to regenerate the password -->
                    <a href="index.php" class="btn btn-primary">Regenerate</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>