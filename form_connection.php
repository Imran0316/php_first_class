<form action="" method="post">
    <label for="name">User name:</label>
    <input type="text" name="name"> <br>

    <label for="email">Email:</label>
    <input type="email" name="email"> <br>

    <label for="password">Password:</label>
    <input type="password" name="password"> <br>

    <label for="age">Age:</label>
    <input type="number" name="age"> <br>

    <label for="phone">phone number:</label>
    <input type="tel" name="phone"> <br>

    <input type="submit" value="submit" name="submit">

</form>

<?php

if(isset($_POST["submit"])){
    $_uname=$_POST["name"];
    $_email=$_POST["email"];
    $_password=$_POST["password"];
    $_age=$_POST["age"];
    $_phone_number=$_POST["phone"];


$connection=mysqli_connect("localhost","root","","students");
if(!$connection){
    echo"Not connected";
}

$quer= "INSERT INTO `std_details`( `User name`, `Email`, `password`, `Age`, `Phone`) VALUES ('$_uname','$_email','$_password','$_age','$_phone_number')";

$run=mysqli_query($connection,$quer);
if($run){
    echo " <script>alert('connected')</script>";
}else{
    echo " <script>alert('not connected')</script>";

}
}
?>