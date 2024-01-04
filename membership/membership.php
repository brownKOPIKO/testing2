<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css">
    <title>GHCCI</title>
</head>

<body class="vh-100 overfloww-hidden">
    <div class="container mt-5 d-flex justify-content-center">
        <form action="membership_process.php" method="post" class="w-md-75 mx-auto">
            <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
                <label for="lastName" class="form-label">Last Name:</label>
                <input type="text" class="form-control" id="lastName" name="lastname" required>
            </div>

            <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
                <label for="firstName" class="form-label">First Name:</label>
                <input type="text" class="form-control" id="firstName" name="firstname" required>
            </div>

            <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
                <label for="middleName" class="form-label">Middle Name:</label>
                <input type="text" class="form-control" id="middleName" name="middlename" required>
            </div>

            <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
                <label for="age" class="form-label">Age:</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>

            <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
                <label for="ministry" class="form-label">Ministry:</label>
                <input type="text" class="form-control" id="ministry" name="ministry" required>
            </div>

            <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
                <label for="gmail" class="form-label">Gmail:</label>
                <input type="email" class="form-control" id="gmail" name="gmail" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</body>

</html>
