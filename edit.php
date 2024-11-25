<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $connect=mysqli_connect("localhost","root","","students");
    $id = $_GET['id'];
    $sql = "SELECT * FROM std_details WHERE id = '{$id}' ";
    $run= mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($run);
    ?>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">  <br>
        <input type="text" name="username" value="<?php echo $row['User name']; ?>"> <br>
        <input type="email" name="email" value="<?php echo $row['Email']; ?>"> <br>
        <input type="password" name="password" value="<?php echo $row['password']; ?>"> <br>
        <input type="number" name="age" value="<?php echo $row['age']; ?>"> <br>
        <input type="number" name="phone" value="<?php echo $row['Phone']; ?>"> <br>
        <input type="submit" value="update" name="update">
    </form>
</body>
</html>