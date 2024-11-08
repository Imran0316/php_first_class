<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$connection=mysqli_connect("localhost","root","","employ");
$sql_quer= "SELECT * FROM emp_detail";
$run = mysqli_query($connection,$sql_quer);
if(mysqli_num_rows($run)>0){

?>


<table>
  <thead>
    <tr>
        <th>Username</th>
        <th>email</th>
        <th>password</th>
        <th>phone</th>
        <th>age</th>
        <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($data= mysqli_fetch_assoc($run)){
    ?>
    <tr>
        <td><?php echo $data['User name']; ?></td>
        <td><?php echo $data['Email']; ?></td>
        <td><?php echo $data['password']; ?></td>
        <td><?php echo $data['Phone']; ?></td>
        <td><?php echo $data['age']; ?></td>

        <td><a href="">edit</a></td>
        <td><a href="">delete</a></td>
    </tr>
     <?php }?>
  </tbody>
</table>
<br><br>

<a href="connection.php"><button>add new </button></a>
<?php }?>

</body>
</html>
