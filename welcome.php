<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: Login\login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
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
                        <a class="nav-link active" href="welcome.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Login/reset-password.php">Reset Password</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Login/logout.php">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="addNew/add-assignment.php">Add Assignment</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Header-->
    <div class="container py-3">
        <div class="row">
            <div class="col text-center">
                <h1>Assignments Overview</h1>
            </div>
        </div>
    </div>

    <!--Assignments Table-->
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-striped table-hover table-sm">
                    <thead id="tableHead"></thead>
                    <tbody id="tableBody"></tbody>
                </table>
            </div>
        </div>
    </div>

    <!--Fill the Table-->
    <?php require 'Database/fetch-data.php' ?>

    <!--Check Boxes-->
    <div class="container">

        <div class="row">
            <div class="col fst-italic">
                <p>Mark as completed below</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <form method="post">
                    <div class="container" id="check-boxes">
                        <div class="form-group align-right pt-2">
                            <input id="submit" type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>


    <!--Fill Check Boxes-->
    <script src="JavaScript/fill-check-boxes.js"></script>

    <!--Add a Submit Button Event Listener-->
    <script>
        // The table will refresh only once the button is clicked.
        let submitButton = document.querySelector("#submit");
        submitButton.addEventListener('click', function() {
            <?php require_once "Database/mark-completed.php" ?>
        })
    </script>



</body>

<!--Footer-->
<footer class="footer">
    <div class="container-fluid position-absolute bottom-0" style=" background-color: #f0f0f5;">
        <span class="text-muted">Created by Marcus Codrescu</span>
    </div>
</footer>

</html>