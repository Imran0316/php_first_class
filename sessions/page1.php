<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



    <form action="" >
         <h1>login from</h1>
        <label for="">user name</label> <br>
        <input type="text" name="name"> <br>

        <label for="">paswword</label> <br>
        <input type="text" name="password"> <br>

        <input type="submit" value="submit" name="submit">
    </form>


    <?php
    session_start();
    if(isset($_REQUEST["submit"])){
        if($_REQUEST["name"]=="imran" && $_REQUEST["password"]=="imran321"){
            $_SESSION["name"] = $_REQUEST["name"];
            $_SESSION['last_time'] = time();
            header("location:page2.php");
        }
    }
    ?>
</body>
</html>