<?php
 $stud_id = $_GET['id'];
 $conn=mysqli_connect('localhost', 'root','','students');
 $sql = "DELETE FROM `user_data` WHERE id = $id";
 $run = mysqli_query($conn,$sql);

 if($run){
    header("location:display.php");
 }
?>