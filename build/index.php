<?php
session_start();

include("connector.php");
include("functions.php");

$user_data = checkLogin($con);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    unset($_SESSION["user_id"]);
    header("Location: login.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Profile</title>
</head>

<body>
    <div class="flex items-center justify-center h-screen">
        <div
            class="overflow-hidden shadow-lg rounded-lg h-auto w-80 md:w-80 m-auto p-4 bg-indigo-50 transition duration-500 ease-in-out transform hover:translate-y-5 hover:shadow-2xl">
            <img alt="blog photo" src="./img/profile.jpg" class="max-h-60 w-full object-cover mb-5" />
            <div class="w-full">
                <p class="text-black text-2xl font-medium font-serif">
                    <?php echo $user_data["fname"] ?>
                    <?php echo $user_data["sname"] ?>
                </p>
                <p class="text-gray-800 dark:text-gray-600 text-md font-medium mb-2 pl-5">
                <div class="flex gap-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207">
                        </path>
                    </svg>
                    <?php echo $user_data["email"] ?>
                </div>
                </p>
                <p class="text-gray-600 dark:text-gray-500 font-light text-md mt-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </p>
                <div class="flex flex-wrap justify-center items-center mt-4 border-t-2 border-gray-400 pt-5 ">
                    <form method="post">
                        <div class="w-full px-3 mb-1">
                            <button type="submit"
                                class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold cursor-pointer">
                                Logout</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>