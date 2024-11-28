<?php session_start();
//print_r($_SESSION);
include 'connection.php';
include 'header.php';
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
    if (isset($_SESSION['admin_id'])) {
        $admin_id = $_SESSION['admin_id'];
        // echo "Welcome $admin_id";
    } else { // If admin_id is not set, redirect to login 
        //header('Location: login.php');
        exit();
    }
} else { // If not logged in, redirect to 
    //header('Location: login.php');
    exit();
} ?>


<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
        </a>
        <div class="flex items-center space-x-6 rtl:space-x-reverse">
            <a href="tel:5541251234"
                class="text-sm  text-gray-500 dark:text-white hover:underline"><?php echo $_SESSION['admin_email']; ?></a>
            <a href="logout.php" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Logout</a>
        </div>
    </div>
</nav>
<nav class="bg-gray-50 dark:bg-gray-700">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:underline">Company</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:underline">Team</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:underline">Features</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<?php include 'footer.php'; ?>