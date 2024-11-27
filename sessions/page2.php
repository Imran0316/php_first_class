<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   session_start();
   if(isset($_SESSION["name"])){
    if((time()- $_SESSION['last_time']>60)){
        header("location:logout.php");
    }else{
        echo "welcome to login page" . $_SESSION["name"];
    }
    echo "welcom, Mr " . $_SESSION["name"];
   }else{
    header("location:page1");
    
   }
  
   ?>
   <br><br>
   <a href="page3.php">NEXT PAGE</a>
</body>
</html>