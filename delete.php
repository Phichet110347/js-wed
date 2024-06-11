<?php

    include './connect.php';

if (isset($_GET["id"])) {

    $id = $_GET["id"];


    try{

        $req = "DELETE FROM users WHERE id =$id";
        $connect->query($req);
        header("Location: main.php");

    }catch(Exception $e){

        echo $e;
    }

    $connect->close();

    
}
