<?php
include './connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $status = $_POST['status'];

try{ 
    
    $req = "UPDATE users SET name = '$name', Status = '$status' WHERE id = $id";

    $connect->query($req);
    header('Location: main.php') ;


   
}catch(Exception $e){
    echo $e;
}
}

