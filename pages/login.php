<?php
include('../partials/header.php');

// Show error alert if login failed (optional session flag)
if (isset($_SESSION['login_error'])) {
    echo "<div class='bg-red-600 text-white text-center py-2 px-4 font-medium'>
            Invalid email or password. Please try again.
          </div>";
    unset($_SESSION['login_error']);
}
?>

<section class="max-w-md mx-auto px-4 py-10 min-h-[60vh]">
    <h1 class="text-3xl font-bold mb-6 text-center">Login to Your Account</h1>

    <form action="../../controllers/AuthController.php" method="POST" class="bg-gray-800 p-6 rounded-lg shadow-lg">
        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium mb-2">Email</label>
            <input type="email" name="email" id="email" required
                class="w-full px-4 py-2 rounded bg-gray-700 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                placeholder="example@email.com">
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium mb-2">Password</label>
            <input type="password" name="password" id="password" required
                class="w-full px-4 py-2 rounded bg-gray-700 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                placeholder="••••••••">
        </div>

        <!-- Submit Button -->
        <div class="text-center mt-6">
            <button type="submit" name="login"
                class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-full shadow transition">
                Login
            </button>
        </div>

        <!-- Redirect to Register -->
        <div class="text-sm text-gray-400 mt-4 text-center">
            Don’t have an account? <a href="register.php" class="text-yellow-400 hover:underline">Register here</a>
        </div>
    </form>
</section>

<?php include('../partials/footer.php'); ?>
