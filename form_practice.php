<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        width: 100vw;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        
    }

</style>
<body>
    <form action="test.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name"> <br>
        <label for="password">Password:</label>
        <input type="text" name="Password"> <br>
        <input type="submit" value="submit">
        
    </form>
</body>
</html>