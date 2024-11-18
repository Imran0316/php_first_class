<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$connection=mysqli_connect("localhost","root","","students");
$sql_quer= "SELECT * FROM std_details";
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
        <td><?php echo $data['Age']; ?></td>
        <td><?php echo $data['Phone']; ?></td>

        <td><a href="edit.php?id=<?php echo $data['Id'];?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $data['Id'];?>">delete</a></td>
    </tr>
     <?php }?>
  </tbody>
</table>
<br><br>

<a href="form_connection.php"><button>add new </button></a>
<?php }?>

</body>
</html>
