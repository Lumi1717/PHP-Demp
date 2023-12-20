<?php
    // To show the values in the update field
    include "config.php";
    if(isset($_GET['id'])){
        $user_id = $_GET['id'];
        $sql = "SELECT * FROM `users` WHERE `user_id`=$user_id";
        $result = $conn->query($sql);

        if($result->num_rows >0){
            while($row = $result->fetch_assoc()){
                $user_id = $row['user_id'];
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $email = $row['email'];
                $gender = $row['gender'];
                $password = $row['password'];
                
            }   
        } 
    
    }else{
        echo "testing update_config duh";
        // header('Location: view.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Update Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


</head>
<body>
<div class="container mt-5">

    <h2> User Update Form</h2>
    <form action="update_config.php" method="POST">
        <div class="form-group">
            <label for="firstname">First Name:</label>
            <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $firstname; ?>">
        </div>

        <div class="form-group">
            <label for="lastname">Last Name:</label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $lastname; ?>">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <div class="input-group">
                <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>">
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="fas fa-eye" id="togglePassword"></i>
                    </span>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
            const passwordInput = document.getElementById('password');
            const togglePassword = document.getElementById('togglePassword');

            togglePassword.addEventListener('click', () => {
                const type = passwordInput.type === 'password' ? 'text' : 'password';
                passwordInput.type = type;
                togglePassword.classList.toggle('fa-eye-slash');
            });
        </script>

        <div class="form-group">
            <label>Gender:</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="female" name="gender" value="Female" <?php echo ($gender === 'Female') ? 'checked' : ''; ?>>
                <label class="form-check-label" for="female">Female</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="male" name="gender" value="Male" <?php echo ($gender === 'Male') ? 'checked' : ''; ?>>
                <label class="form-check-label" for="male">Male</label>
            </div>
        </div>
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
        <button type="submit" value="Update"class="btn btn-primary" name="update">Update</button>
</div>
</body>
</html>

<?php






