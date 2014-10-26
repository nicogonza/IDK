<?php # Script 9.2 - mysqli_connect.php

// This file contains the database access information. 
// This file also establishes a connection to MySQL, 
// selects the database, and sets the encoding.

// Set the database access information as constants:
DEFINE ('DB_USER', 'gonzodev_kavy');
DEFINE ('DB_PASSWORD', 'hacknc2014');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'gonzodev_idk');

// Make the connection:
$dbc = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); // Check connection