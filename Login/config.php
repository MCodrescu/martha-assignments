<?php

define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'MCodrescu');
define('DB_PASSWORD', 'Blackcar1997!');
define('DB_NAME', 'mysql');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
