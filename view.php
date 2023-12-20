<?php

    include "config.php";

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    // Check for the message query parameter
    $message = isset($_GET['message']) ? $_GET['message'] : '';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
            <!-- Display the message in a JavaScript popup -->
            <?php if ($message) : ?>
                <script>
                    alert("<?php echo $message; ?>");
                </script>
            <?php endif; ?>

    <div class="container">
        <h2>Users</h2>
        <table class="table">
            <head>
                <thred>
                <tr>
                    <th>ID</th>
                    <th>First Name </th>
                    <th>Last Name </th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thred>
<tbody>
    <?php
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
    ?> 
    <tr>        
        <td> <?php echo $row['user_id']; ?></td>
        <td> <?php echo $row['firstname']; ?></td>
        <td> <?php echo $row['lastname']; ?></td>
        <td> <?php echo $row['email']; ?></td>
        <td> <?php echo $row['password']; ?></td>
        <td> <?php echo $row['gender']; ?></td>
        <td>    
            <a class="btn btn-info" href="update.php?id=<?php echo $row['user_id']; ?>">Edit </a>
            <a class="btn btn-danger" href="delete.php?id=<?php echo $row['user_id']; ?>">Delete</a>


        </td>
    </tr>

    <?php
    }

        }

    ?>

</tbody>
            </head>
        </table>
    </div>
    </div>

</body>
</html>

