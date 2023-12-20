<?php
 include "config.php";

 if(isset($_GET['id'])){
    $user_id = $_GET['id'];

    $sql = "DELETE FROM `users` WHERE `user_id`= '$user_id'";

    $result = $conn->query($sql);

    if($result ==TRUE){
        header("Location: view.php?message=Record deleted successfully");
    }else{
        echo "Error: ".$sql. "<br>" ,$conn->error;
    }
 }
?>