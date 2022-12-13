<?php
require 'config.php';

if(isset($_POST["action"])){
    if($_POST["action"] == "insert"){           
        insert();
    }
    elseif($_POST["action"] == "edit"){
        edit();
    }
    else{
        delete();
    }
 


function insert(){
    global $conn;

    $name = $_POST["name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];

 
    //insert new user into user table
    $query = "INSERT INTO `users` (`id`, `name`, `email`, `gender`) VALUES ('', '$name', '$email', '$gender') ";
    echo "Inserted Successfully";





    
// $sql = "INSERT INTO `users` (`id`, `name`, `email`, `gender`) VALUES (NULL, '$name', '$email', '$gender') ";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();
}

function edit(){
    global $conn;

    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];

    $query =  "UPDATE users SET name = '$name', email = '$email', gender = '$gender' WHERE id = $id";
    mysqli_query($conn, $query);
    echo "Updated Successfully";
}
    function delete(){
        global $conn;

        $id = $_POST["action"];

        $query =  "DELETE FROM users WHERE id = $id";
        mysqli_query($conn ,$query);
        echo "Deleted Successfully";
    }
}
?>