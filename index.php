<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/favicon.ico" type="imag/ico">
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
                <form id="passwordForm">
                    <div class="mb-3">
                        <label for="passwordLength" class="form-label">Password Length:</label>
                        <input type="number" class="form-control" id="passwordLength"
                            placeholder="Enter password length" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Generate Password</button>
                </form>
                <div class="alert bg-success mt-5" role="alert">
                    Generated password will appear here.
                </div>
            </div>
        </div>
    </div>

    <body>

</html>