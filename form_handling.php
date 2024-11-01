<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

body {
    background-color: #f8f9fa; /* Light background */
    font-family: Arial, sans-serif; /* Clean font */
    color: #333; /* Dark text color */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

form {
    background-color: #ffffff; /* Form background */
    padding: 20px;
    border: 1px solid #ccc; /* Light gray border */
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Light shadow */
    width: 600px; /* Fixed width */
}

label {
    display: block; /* Block display for labels */
    margin: 10px 0 5px; /* Spacing */
}

input, textarea {
    width: 80%; /* Full width inputs */
    padding: 10px; /* Padding inside inputs */
    margin-bottom: 10px; /* Spacing below inputs */
    border: 1px solid #ccc; /* Light gray border */
    border-radius: 4px; /* Rounded corners */
}

input[type="submit"] {
    background-color: #007bff; /* Button color */
    color: white; /* Text color */
    border: none; /* No border */
    padding: 10px; /* Padding */
    border-radius: 4px; /* Rounded corners */
    cursor: pointer; /* Pointer cursor */
    transition: background-color 0.3s; /* Transition effect */
}

input[type="submit"]:hover {
    background-color: #0056b3; /* Darker color on hover */
}


</style>
<body>
    <form action="test.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age"><br>
        <label for="email">Email</label>
        <input type="email" name="email"><br>
        <label for="password">password:</label>
        <input type="password" id="password" name="password"><br>
        <!-- <label for="gender">Gender:</label>
        <label for="male"> Male</label>
        <input type="radio"  id="male" name="gender" value="male"> 
        <label for="male"> female</label>
        <input type="radio" id="female" name="gender" value ="female"> <br>
        <label for="comment">Comment:</label> <br>
        <textarea name="textarea" id="textarea" cols="30" rows="10"></textarea> <br> -->

        <input type="submit" value="Submit">
        
    </form>
    
</body>
</html>