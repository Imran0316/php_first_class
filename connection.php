<form action="" method="post">
    <label for="">Name:</label> <br>
    <input type="text" name="name"> <br>

    <label for="">Email:</label> <br>
    <input type="email" name="email"> <br>

    <label for="">Password:</label> <br>
    <input type="password" name="password"> <br>

    <label for="">Phone:</label> <br>
    <input type="tel" name="phone"> <br>

    <label for="">Age:</label> <br>
    <input type="number" name="age"> <br>

    <input type="submit" value="submit " name="sub">
</form>
<?php

if(isset($_POST["sub"])){
$uname=$_POST["name"];
$uemail=$_POST["email"];
$upass=$_POST["password"];
$uphone=$_POST["phone"];
$uage=$_POST["age"];

$connection=mysqli_connect("localhost","root","","employ");
if($connection){
    echo"connected";
}else{
    echo "not connected";
};

$quer= "INSERT INTO `emp_detail`(`User name`, `Email`, `password`, `Phone`, `age`) VALUES ('$uname','$uemail','$upass','$uphone','$uage')";

$run=mysqli_query($connection,$quer);
if($run){
    echo " <script>alert('connected')</script>";
    header("location:display.php");
}else{
    echo " <script>alert('not connected')</script>";

}
}
?>