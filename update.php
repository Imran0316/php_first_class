<?php
if(isset($_POST["update"])){
    $uid=$_POST["id"];
    $uname=$_POST["User name"];
    $email=$_POST["Email"];
    $password=$_POST["password"];
    $age=$_POST["age"];
    $phonenumber=$_POST["Phone"];

    $con = mysqli_connect("localhost","root","","students");
    $sql = "UPDATE `std_details` SET `User name`='{$uname}',`Email`='{$email}',`password`='{$password}',`age`='{$age}',`Phone`='$phonenumber' WHERE id = '{$uid}'";

    $run = mysqli_query($con,$sql);
    if($run){
        header("Location:display.php");
    }else{
        echo "not";
    }
}
?>