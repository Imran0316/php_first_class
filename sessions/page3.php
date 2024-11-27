<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
    h1{
        color:red;
    }
</style>
<body>
    
    <?php
   session_start();
   if(isset($_SESSION["name"])){
    echo "<h1>";
    echo "welcome to next page, Mr " . $_SESSION["name"] . " 👏 ";
    echo "</h1>";
   }else{
    header("location:page1");
    
   }
   ?>
   <br><br><br>
   <a href="logout.php">logout</a>
</body>
</html>