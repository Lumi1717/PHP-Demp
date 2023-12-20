<?php
    include "config.php";

    if (isset($_POST['update'])) {
        $user_id = $_POST['user_id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];


        echo "First Name: $firstname<br>";
        echo "Last Name: $lastname<br>";
        echo "Email: $email<br>";
        echo "Gender: $gender<br>";
        echo "Password: $password<br>";



        $sql = "UPDATE `users` SET `firstname` = '$firstname', `lastname` = '$lastname', 
        `email` = '$email', `gender` = '$gender', 
        `password` = '$password' WHERE `user_id` = $user_id";

        echo "<br> UPDATE Query: ".$user_id ."<br>";

        echo "<br> SQL Query: $sql <br>";

        
        $result = $conn->query($sql);

        if($result == TRUE){
            header('Location: view.php');
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;

        }

    }

?>