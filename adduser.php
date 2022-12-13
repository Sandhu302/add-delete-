<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
       <!-- css link -->
       <link rel="stylesheet" href="css/style.css">
    <title>Add user</title>
</head>
<body>
    <?php require 'config.php'; ?>
    <?php require 'function.php'; ?>
<div class="container">
    <h2>Add User</h2>

    <form autocomplete="off" action="" method="post">
        <label for="">Name</label>
        <input type="text" name="name" id="name" value=""><br>
        <label for="">Email</label>
        <input type="text" name="email" id="email" value=""><br> 
        <label for="">Gender</label> 
        <select class="" name="gender" id="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br>
        <button type="insert"  class="insert" name="insert"  id="submit" onclick="submit('insert');">Insert</button>     
    </form> <br>
    <a href="index.php">Go to Index</a>    
    <?php require 'script.php'; ?>

</div>




</body>
</html>