<?php

// Start session 
session_start(); 

// include database connection
include_once("db-config.php");

// If form submitted, collect email and password from form
if (isset($_POST['login'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    // Check if a user exists with username & password
    $result = mysqli_query($conn, "SELECT 'email', 'password' FROM users WHERE email='$email' AND password='$password'");

    // Count the number of user/rows returned by query 
    $user_matched = mysqli_num_rows($result);

    // Check If user matched and redirect
    if ($user_matched > 0) {

        $_SESSION["email"] = $email;
        header("location: orderform.php");
    } else {
        echo "User email or password is not matched <br/><br/>";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>D's Auto Parts - Login</title>
</head>
<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        Email
        <input type="text" name="email">
        Password
        <input type="password" name="password">
        <br>
        <input type="submit" name="login" value="login">
    </form>
    <a href="register.php">Register</a>

</body>
</html>


