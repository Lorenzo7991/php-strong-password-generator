<?php
require_once __DIR__ . '/partials/validations.php';
require_once __DIR__ . '/partials/functions.php';
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
                            placeholder="Enter password length">
                    </div>
                    <button type="submit" class="btn btn-primary" name="generate_password">Generate Password</button>
                </form>
                <?php if (!empty($generatedPassword) || !empty($errorMessage)): ?>
                    <div class="alert <?= $alertClass ?> mt-5" role="alert">
                        <?php if (!empty($generatedPassword)): ?>
                            <strong>Password generated:</strong>
                            <i>
                                <?= $generatedPassword; ?>
                            </i>
                        <?php elseif (!empty($errorMessage)): ?>
                            <strong>Error:</strong>
                            <?= $errorMessage; ?>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>