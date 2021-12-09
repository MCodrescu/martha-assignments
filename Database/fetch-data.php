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
}

$today = date("Y-m-d");
$sql = "SELECT * FROM assignments_fall_2021  WHERE DueDate >= " . "'" . $today . "'" . " AND Completed = 'No' ORDER BY DueDate;";
$result = mysqli_query($conn, $sql);

// Create an array of table data
while ($row = mysqli_fetch_assoc($result)) {
    $array[] = $row;
}

// Close connection
mysqli_close($conn);

?>

<!--Pass the PHP array to js and fill the table -->
<script src="JavaScript/fillTable.js"></script>
<script>
    let tableData = <?= json_encode($array); ?>;
    fillTable(tableData,
        tableHeadId = "#tableHead",
        tableBodyId = "#tableBody",
        colNames = ["Class", "AssignmentName", "DueDate", "Completed"],
        colLabels = ["Class", "Assignment", "Due Date", "Completed?"]);
</script>