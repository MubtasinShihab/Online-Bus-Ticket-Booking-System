<?php
session_start();
include 'connection.php';
include 'dynamicTable.php';
if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){

    if(isset($_SESSION['user_id'])){
        header('Location: userHome.php');
        exit();
    }
    if(isset($_SESSION['admin_id'])){
        header('Location: adminHome.php');
        exit();
    }
}

include 'header.php';
?>

<?php
if (isset($_SESSION['error_msg'])) {
    echo "<p style='color:red;'>" . $_SESSION['error_msg'] . "</p>";
    unset($_SESSION['error_msg']);
}
?>

<?php include 'loginForm.php'; ?>

<?php include 'footer.php'; ?>