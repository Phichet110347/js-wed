<?php

    include './connect.php';

if (isset($_GET["id"])) {

    $id = $_GET["id"];
    
    try{
        $req = "SELECT * FROM users WHERE id = $id";
        $res = $connect->query($req);
        $row = $res->fetch_assoc();

    }catch(Exception $e){

        echo $e;

    }


    $connect->close();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormEdit</title>
</head>
<body>
<div class="container mt-5 mx-auto">
    <h2 class="mb-4">Add New Record</h2>
    <form method="post" action="update.php">

        <input type="hidden" name="id" value="<?php echo $row['id'] ?>" >

        <div class="form-group">
            <label for="name">NEW NAME</label>
            <input value="<?php echo $row['name']?>" type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="status">NEW STATUS</label>
            <input value="<?php echo $row['Status']?>" type="status" class="form-control" id="status" name="status" required>
        </div>
        <button type="submit" class="btn btn-primary">UPDATE</button>
</body>


</html>