<?php

//Set connection variables
$servername = "127.0.0.1";
$username = "MCodrescu";
$password = "Blackcar1997!";
$dbname = "mysql";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
};

// Update the database to change assignment to completed.
if (count($_POST) != 0) {
    $sql = "UPDATE assignments_fall_2021 SET Completed = 'Yes' WHERE AssignmentName = ";

    foreach ($_POST as $assignment) {
        $sql .= "'" . $assignment . "'";
        mysqli_query($conn, $sql);
    };

    // Reset the POST array and refresh the page.
    $_POST = array();
    mysqli_close($conn);
    header("Reset: ..\welcome.php");
}
