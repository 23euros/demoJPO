<?php

$sname= "localhost";

$unmae= "php";

$password = "php";

$db_name = "portal";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}
