<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-100">

    <!-- Header Section with Login/Logout -->
    <header class="bg-indigo-600 text-white p-4 flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <i class="fas fa-user-circle text-3xl"></i>
            <span class="text-xl font-semibold">Dashboard</span>
        </div>
        <div>
            <?php 
            if(isset($_SESSION['email'])){
                echo '<a href="javascript:void(0);" onclick="showLogoutModal()" class="text-lg hover:text-blue-300 font-semibold">Logout</a>';
            } else {
                echo '<a href="login.php" class="text-lg hover:text-blue-300 font-semibold">Login</a>';
            }
            ?>
        </div>
    </header>

    <!-- Main Content Section -->
    <div class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-r from-blue-400 to-indigo-600">
        <h1 class="text-4xl text-white mb-4 text-center">"A winner is a dreamer who never gives up" <br><span class="text-xl text-blue-200">-Nelson Mandela</span></h1>

        <!-- Card with Image and Name Section -->
        <div class="bg-white p-8 rounded-lg shadow-xl w-full sm:w-96 md:w-1/2 lg:w-1/3 text-center flex flex-col items-center justify-center space-y-4">
            <!-- Image Section -->
            <img src="download (4).jfif" alt="User Image" class="w-32 h-32 rounded-full border-4 border-white shadow-lg">

            <!-- Name Section -->
            <p class="text-2xl font-bold text-gray-800">
            <p class="text-2xl font-bold text-gray-800">
    <?php 
    if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
        $query = mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row = mysqli_fetch_array($query)){
            echo $row['firstName'] . ' ' . $row['lastName'];
        }
    }
    ?>
</p>


<script>
    window.onload = function() {
        <?php 
        if(isset($_SESSION['email'])){ 
            $email = $_SESSION['email'];
            $query = mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
            while($row = mysqli_fetch_array($query)){
                $userName = $row['firstName'] . ' ' . $row['lastName'];
            }
        ?>
            // JavaScript to announce the user's name
            var speech = new SpeechSynthesisUtterance("Your Welcome to Ferguson's metaverse, <?php echo $userName; ?>!");
            speech.lang = 'en-US';
            window.speechSynthesis.speak(speech);
        <?php } ?>
    }
</script>

            </p>
        </div>
    </div>

    <!-- Logout Confirmation Modal -->
    <div id="logoutModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center z-50 hidden">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h2 class="text-2xl font-semibold text-center mb-4">Are you sure you want to logout?</h2>
            <div class="flex justify-center space-x-4">
                <button onclick="logout()" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-500">Yes</button>
                <button onclick="closeModal()" class="bg-gray-300 text-black px-4 py-2 rounded-lg hover:bg-gray-200">No</button>
            </div>
        </div>
    </div>

    <script>
    
        function showLogoutModal() {
            document.getElementById('logoutModal').classList.remove('hidden');
        }


        function closeModal() {
            document.getElementById('logoutModal').classList.add('hidden');
        }

        
        function logout() {
            window.location.href = 'logout.php'; 
        }
    </script>

</body>
</html>
