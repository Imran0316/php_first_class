<?php
 $stud_id = $_GET['id'];
 $conn=mysqli_connect('localhost', 'root','','students');
 $sql = "DELETE FROM `std_details` WHERE id = $stud_id";
 $run = mysqli_query($conn,$sql);

 if($run){
    header("location:display.php");
 }else{
   echo "not running";
 }
?>