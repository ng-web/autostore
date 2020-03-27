<!DOCTYPE html>
<html>
<head>
    <title>D's Auto Parts - Register</title>
</head>
<body>

    <br>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    Name
    <input type="text" name="name" required>
    Email
    <input type="text" name="email" required>
    Password
    <input type="password" name="password" required>
    <br>
    <input type="submit" name="register" >

    <a href="login.php">Login</a>

    <?php
    //included our database connection
    include_once("db-config.php");

    //check if our form data is submitted
    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        //check if email already exists
        $email_result = mysqli_query($conn, "select 'email' from users where email='$email' and password='$password'");

        //count the rows that match
        $user_matched = mysqli_num_rows($email_result);

        //check if rows in database matched
        if($user_matched > 0){
            echo "<br><strong>Error: User already exists with email '$email'.";
        }else{
            $result = mysqli_query($conn, "insert into users(name,email,password) values('$name','$email','$password')");

            //check if user was inserted successfully
            if($result){
                echo 'User registered successfully.';
            }else{
                echo 'There was an error trying to register. Please try again. ' . mysqli_error($conn);
            }
        }
    }//end if statement


    ?>
    </form>
    </body>
</html>