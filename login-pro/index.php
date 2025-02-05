<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="bg-gradient-to-r from-gray-200 to-indigo-200 font-sans">
    <div class="container mx-auto mt-16 px-6 py-8 bg-white rounded-lg shadow-2xl w-full sm:w-96">
        <!-- Signup Form -->
        <div id="signup" class="hidden">
            <h1 class="text-2xl font-bold text-center py-6 mb-4">Register</h1>
            <form method="post" action="register.php">
                <div class="relative mb-4">
                    <i class="fas fa-user absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-600"></i>
                    <input type="text" name="fName" id="fName" placeholder="First Name" required
                        class="w-full py-2 pl-12 pr-4 border-b border-gray-500 focus:outline-none focus:border-indigo-600 text-gray-700 text-base">
                    <label for="fName" class="absolute left-4 -top-4 text-gray-600 text-sm transition-all">First Name</label>
                </div>
                <div class="relative mb-4">
                    <i class="fas fa-user absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-600"></i>
                    <input type="text" name="lName" id="lName" placeholder="Last Name" required
                        class="w-full py-2 pl-12 pr-4 border-b border-gray-500 focus:outline-none focus:border-indigo-600 text-gray-700 text-base">
                    <label for="lName" class="absolute left-4 -top-4 text-gray-600 text-sm transition-all">Last Name</label>
                </div>
                <div class="relative mb-4">
                    <i class="fas fa-envelope absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-600"></i>
                    <input type="email" name="email" id="email" placeholder="Email" required
                        class="w-full py-2 pl-12 pr-4 border-b border-gray-500 focus:outline-none focus:border-indigo-600 text-gray-700 text-base">
                    <label for="email" class="absolute left-4 -top-4 text-gray-600 text-sm transition-all">Email</label>
                </div>
                <div class="relative mb-4">
                    <i class="fas fa-lock absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-600"></i>
                    <input type="password" name="password" id="password" placeholder="Password" required
                        class="w-full py-2 pl-12 pr-4 border-b border-gray-500 focus:outline-none focus:border-indigo-600 text-gray-700 text-base">
                    <label for="password" class="absolute left-4 -top-4 text-gray-600 text-sm transition-all">Password</label>
                </div>
                <input type="submit" class="w-full py-2 bg-indigo-600 text-white rounded-md text-lg cursor-pointer transition duration-300 hover:bg-indigo-800" value="Sign Up" name="signUp">
            </form>
            <p class="text-center text-gray-500 mt-4">----------or--------</p>
            <div class="flex justify-center mt-4">
                <i class="fab fa-google text-indigo-600 px-6 py-3 rounded-full border-2 border-indigo-200 cursor-pointer transition duration-300 hover:bg-indigo-600 hover:text-white"></i>
                <i class="fab fa-facebook text-indigo-600 px-6 py-3 rounded-full border-2 border-indigo-200 cursor-pointer transition duration-300 hover:bg-indigo-600 hover:text-white"></i>
            </div>
            <div class="flex justify-between items-center mt-6 font-bold">
                <p>Already Have Account?</p>
                <button id="signInButton" class="text-indigo-600 hover:underline">Sign In</button>
            </div>
        </div>

        <!-- Sign In Form -->
        <div id="signIn">
            <h1 class="text-2xl font-bold text-center py-6 mb-4">Sign In</h1>
            <form method="post" action="register.php">
                <div class="relative mb-4">
                    <i class="fas fa-envelope absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-600"></i>
                    <input type="email" name="email" id="email" placeholder="Email" required
                        class="w-full py-2 pl-12 pr-4 border-b border-gray-500 focus:outline-none focus:border-indigo-600 text-gray-700 text-base">
                    <label for="email" class="absolute left-4 -top-4 text-gray-600 text-sm transition-all">Email</label>
                </div>
                <div class="relative mb-4">
                    <i class="fas fa-lock absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-600"></i>
                    <input type="password" name="password" id="password" placeholder="Password" required
                        class="w-full py-2 pl-12 pr-4 border-b border-gray-500 focus:outline-none focus:border-indigo-600 text-gray-700 text-base">
                    <label for="password" class="absolute left-4 -top-4 text-gray-600 text-sm transition-all">Password</label>
                </div>
                <p class="text-right text-sm">
                    <a href="#" class="text-indigo-600 hover:underline">Recover Password</a>
                </p>
                <input type="submit" class="w-full py-2 bg-indigo-600 text-white rounded-md text-lg cursor-pointer transition duration-300 hover:bg-indigo-800" value="Sign In" name="signIn">
            </form>
            <p class="text-center text-gray-500 mt-4">----------or--------</p>
            <div class="flex justify-center mt-4">
                <i class="fab fa-google text-indigo-600 px-6 py-3 rounded-full border-2 border-indigo-200 cursor-pointer transition duration-300 hover:bg-indigo-600 hover:text-white"></i>
                <i class="fab fa-facebook text-indigo-600 px-6 py-3 rounded-full border-2 border-indigo-200 cursor-pointer transition duration-300 hover:bg-indigo-600 hover:text-white"></i>
            </div>
            <div class="flex justify-between items-center mt-6 font-bold">
                <p>Don't have an account yet?</p>
                <button id="signUpButton" class="text-indigo-600 hover:underline">Sign Up</button>
            </div>
        </div>
    </div>

    <script>
        const signUpButton = document.getElementById('signUpButton');
        const signInButton = document.getElementById('signInButton');
        const signInForm = document.getElementById('signIn');
        const signUpForm = document.getElementById('signup');

        signUpButton.addEventListener('click', function () {
            signInForm.style.display = "none";
            signUpForm.style.display = "block";
        });

        signInButton.addEventListener('click', function () {
            signInForm.style.display = "block";
            signUpForm.style.display = "none";
        });
    </script>
</body>

</html>
