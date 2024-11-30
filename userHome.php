<?php
session_start();
if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){
    $user_id = $_SESSION['user_id'];
    if(!isset($user_id)){
        header('Location: login.php');
        exit();
    }
}else
{
    header('Location: login.php');
  
}
 include 'header.php';
?>
<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
        </a>
        <div class="flex items-center space-x-6 rtl:space-x-reverse">
            <a href="tel:5541251234"
                class="text-sm  text-gray-500 dark:text-white hover:underline"><?= $_SESSION['user_email']; ?></a>
            <a href="logout.php" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Logout</a>
        </div>
        <div class="flex items-center space-x-2 rtl:space-x-reverse">
            
            <a href="ticketOperation.php" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Ticket Operation</a>
        </div>

    </div>
</nav>
<!-- User Home Page with html and css -->

<?php include 'footer.php';?>