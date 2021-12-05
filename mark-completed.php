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

$checkBoxValue = $_REQUEST;
?>

<script>
    let request = <?= json_encode($checkBoxValue); ?>;
</script>