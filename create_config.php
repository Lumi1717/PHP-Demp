<?php
    include "config.php";
    print_r($_POST);

    if( isset($_POST['submit'])){

        if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['gender']) 
        && isset($_POST['password']) ) {

            $first_name = $_POST['firstname'];
            $last_name = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $gender = $_POST['gender'];
        
            echo"YUH!";
            
            
            echo "First Name: $first_name<br>";
            echo "Last Name: $last_name<br>";
            echo "Email: $email<br>";
            echo "Password: $password<br>";
            echo "Gender: $gender<br>";
    
            $sql = "INSERT INTO `users` (`firstname`, `lastname`, `email`, `gender`, `password`)
            VALUES ('$first_name', '$last_name', '$email', '$gender', '$password')";
            
    
            echo "SQL Query: $sql<br>"; 
            $result = $conn->query($sql);
            
            if($result == TRUE){
                echo "New record created successfully !";
            }else{
                echo "Error: " .$sql. "<br>". $conn->error;
            }



        }
    }else{
        echo "testing creat";
        header('Location: view.php');
    }


    // if(isset($_POST['submit'])){
    
    //     $first_name = $_POST['firstname'];
    //     $last_name = $_POST['lastname'];
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];
    //     $gender = $_POST['gender'];
    
    //     echo"YUH!";
        
        
    //     echo "First Name: $first_name<br>";
    //     echo "Last Name: $last_name<br>";
    //     echo "Email: $email<br>";
    //     echo "Password: $password<br>";
    //     echo "Gender: $gender<br>";

    //     $sql = "INSERT INTO `users` (`firstname`, `lastname`, `email`, `gender`, `password`)
    //     VALUES ('$first_name', '$last_name', '$email', '$gender', '$password')";
        

    //     echo "SQL Query: $sql<br>"; 
    //     $result = $conn->query($sql);
        
    //     if($result == TRUE){
    //         echo "New record created successfully !";
    //     }else{
    //         echo "Error: " .$sql. "<br>". $conn->error;
    //     }
    //     }
?>