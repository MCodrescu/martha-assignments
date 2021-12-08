<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ..\Login\login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Assignment</title>
    <!--Bootsrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">Martha Assignments</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="../welcome.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Login/reset-password.php">Reset Password</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Login/logout.php">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add-assignment.php">Add Assignment</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Header-->
    <div class="container py-3">
        <div class="row">
            <div class="col text-center">
                <h1>Add New Assignment</h1>
            </div>
        </div>
    </div>

    <!--Add New Assignment Form-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="post">
                    <div class="mb-3">
                        <label for="ClassInput" class="form-label">Class</label>
                        <input type="text" class="form-control" id="ClassInput">
                    </div>
                    <div class="mb-3">
                        <label for="AssignmentNameInput" class="form-label">Assignment Name</label>
                        <input type="text" class="form-control" id="AssignmentNameInput">
                    </div>
                    <div class="mb-3">
                        <label for="DueDateInput" class="form-label">Due Date</label>
                        <input type="date" class="form-control" id="DueDateInput">
                    </div>
                </form>

            </div>
        </div>
    </div>


</body>

<!--Footer-->
<footer class="footer">
    <div class="container-fluid position-absolute bottom-0" style=" background-color: #f0f0f5;">
        <span class="text-muted">Created by Marcus Codrescu</span>
    </div>
</footer>

</html>