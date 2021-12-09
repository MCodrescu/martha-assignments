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


if (count($_POST) != 0) {

    // Insert new record
    $sql = "INSERT INTO assignments_fall_2021 (Class, AssignmentName, DueDate, Completed) VALUES (";

    foreach ($_POST as $value) {
        $sql .= "'" . $value . "',";
    };

    $sql .= "'No');";
    mysqli_query($conn, $sql);

    // Reset the POST array and refresh the page.
    $_POST = array();
}
