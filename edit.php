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
    <title>Edit User</title>
</head>
<body>
    <?php require 'config.php'; ?>
<div class="container">
    <h2>Edit User</h2>

    <form autocomplete="off" action="" method="post">
        <?php 
        require 'config.php';
        $id = $_GET["id"];
        $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id = $id")); 
         ?>
        <input type="hidden" id="id"  value="<?php echo $rows['id']; ?>">
        <label for="">Name</label>
        <input type="text" id="name" name="name" value="<?php echo $rows['name']; ?>"><br>
        <label for="">Email</label>
        <input type="text" id="email" name="email" value="<?php echo $rows['email']; ?>"><br> 
        <label for="">Gender</label> 
        <select class="" name="gender" id="gender">
            <option value="Male" <?php if($rows["gender"] == "Male") echo "selected"; ?> >Male</option>
            <option value="Female" <?php if($rows["gender"] == "Female") echo "selected"; ?>>Female</option>
        </select><br>
        <button type="submit" name="edit" id="submit" onclick="submit('edit');">Edit</button>  
        <!-- <button type="submit" name="submit" class="btn">Update User</button> -->
    </form> <br>
    <a href="index.php">Go to Index</a>    
    <?php require 'script.php'; ?>

</div>




</body>
</html>