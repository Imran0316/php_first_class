<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        width:100vw;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
     
     h1{
        color: red;
        text-transform: uppercase;
        font-size: 74px;
     }
     p{
        text-decoration: underline;
        font-size: 28px;
        color : red;
        

    }

   
</style>
<body>
    
</body>
</html>
<?php

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

// echo $_POST["name"];

// foreach ($_POST as $key => $value) {
//     echo  $key. " :" . $value . "<br>";
// }
// if($_POST["name"]==="imran" || $_POST["password"]==="54321" || $_POST["age"] >=18 || $_POST["email"]==="ik775239@gmail.com" ){
//     echo "<h1>";
//     echo "login successfuly🎉";
//     echo "</h1>";
// }else{
//     echo "invalid username or password";


// }

// echo "<h1>";
// print_r($_GET);
// echo "</h1>";

if($_REQUEST["name"]==="imran" && $_REQUEST["Password"]=="031628"){
    echo "<h1>";
    // echo "login successfully";
    echo "</h1>"  ;
    echo "welcome  "  . "MR:"  . "<h2> " . $_REQUEST["name"] . " </h2>" . "  you are login ";
}else{
    echo "<p>";
    echo "username or password is inccorect";
    echo "</p>";
}

// foreach ($_REQUEST as $key => $value) {
//     echo "<h3>" . $key . ":"  ."</h3>". $value . "<br>";
// }
?>