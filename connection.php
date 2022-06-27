<?php

session_start();
$host = "host = ec2-18-204-142-254.compute-1.amazonaws.com";
$port = "port = 5432";
$dbname = "dbname = d8abh16alptjmm";
$username = "user = rnpczexnchvkba";
$password = "password = fd0c70ea4e93d2c27ba09b00dd7829f213db5987de6f91fc1c10b2af2a200bd9";

$connection = pg_connect("$host $port $dbname $username $password");
// if ($connection) {
//     echo "Connected";
// } else {
//     echo "Cant Connect";
// }

?>