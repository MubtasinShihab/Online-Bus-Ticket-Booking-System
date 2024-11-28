<?php
session_start();
include 'connection.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Function to fetch a user/admin single data
    function fetch($sql)
    {
        global $conn;
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    // Check user credentials
    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $user = fetch($sql);
    if ($user) {
        // Save user data in session
        $_SESSION['loggedIn'] = true;
        foreach ($user as $key => $value) {
            $_SESSION["user_$key"] = $value; // $_SESSION['user_id'] = $user['id'];
        }
      

        header('Location: userHome.php');
        exit();
    }

    // Check admin credentials only if user credentials are invalid
    $sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
    $admin = fetch($sql);
    if ($admin) {
        // Save admin data in session
        $_SESSION['loggedIn'] = true;
        foreach ($admin as $key => $value) {
            $_SESSION["admin_$key"] = $value; // $_SESSION['admin_id'] = $admin['id'];
            //echo $_SESSION['admin_$key']."<br>";
        }

        //print_r($_SESSION);
        header('Location: adminHome.php');
        exit();
    }

    // Handle invalid credentials
   // $_SESSION['error_msg'] = "Invalid email or password.";
    //header('Location: login.php');
    //exit();
} else {
    $_SESSION['error_msg'] = "Please enter both email and password.";
    header('Location: login.php');
    exit();
}
?>
