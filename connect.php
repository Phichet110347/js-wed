<?php

try {
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "datait";

    $connect = mysqli_connect($host, $user, $password, $database);

} catch (Exception $e) {
    echo "Error is" . $e;
}
