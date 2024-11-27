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
if(isset($_GET["sub"])){
  $sql_quer= "SELECT * FROM std_details WHERE id=" . $_GET["search"];
}
$run = mysqli_query($connection,$sql_quer);
if(mysqli_num_rows($run)>0){

?>

<form action="" method="$_GET">
  <label for="">search by id</label>
  <input type="number" name="search" value="0">
  <input type="submit" value="search" name="sub" >
</form>


<table border="1" cellpadding="10px">
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
        <td><?php echo $data['age']; ?></td>
        <td><?php echo $data['Phone']; ?></td>

        <td><a href="edit.php?id=<?php echo $data['id'];?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $data['id'];?>">delete</a></td>
    </tr>
     <?php }?>
  </tbody>
</table>
<br><br>

<a href="form_connection.php"><button>add new </button></a>
<?php }?>

</body>
</html>
