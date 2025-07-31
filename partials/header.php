<?php if (session_status() == PHP_SESSION_NONE) session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Indoor Sports Club | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/style.css">
</head>

<body class="bg-gray-900 text-white min-h-screen flex flex-col" style="font-family: 'Playfair Display', serif;">

<!-- NAVBAR -->
<nav class="bg-gray-800 shadow-md">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        <!-- LOGO LEFT -->
        <div class="flex items-center">
            <a href="/" class="text-2xl font-bold text-white">🏸 Sports Club</a>
        </div>

        <!-- NAV LINKS RIGHT -->
        <div class="hidden md:flex space-x-6">
            <a href="../pages/home.php" class="hover:text-[#f0d58c] hover:drop-shadow-[0_0_8px_#f0d58c]">Home</a>
            <a href="../pages/about.php" class="hover:text-[#f0d58c] hover:drop-shadow-[0_0_8px_#f0d58c]">About Us</a>
            <a href="../pages/contact.php" class="hover:text-[#f0d58c] hover:drop-shadow-[0_0_8px_#f0d58c]">Contact Us</a>
            <a href="../pages/timetable.php" class="hover:text-[#f0d58c] hover:drop-shadow-[0_0_8px_#f0d58c]">Timetable</a>
            <a href="../pages/book.php" class="hover:text-[#f0d58c] hover:drop-shadow-[0_0_8px_#f0d58c]">Book Session</a>
            <?php if (isset($_SESSION['user'])): ?>
                <a href="/dashboard.php" class="hover:text-[#f0d58c] hover:drop-shadow-[0_0_8px_#f0d58c]">Dashboard</a>
                <a href="/logout.php" class="hover:text-[#f0d58c] hover:drop-shadow-[0_0_8px_#f0d58c]">Logout</a>
            <?php else: ?>
                <a href="../pages/login.php" class="hover:text-[#f0d58c] hover:drop-shadow-[0_0_8px_#f0d58c]">Login</a>
                <a href="../pages/register.php" class="hover:text-[#f0d58c] hover:drop-shadow-[0_0_8px_#f0d58c]">Register</a>
            <?php endif; ?>
        </div>
    </div>
</nav>

<main class="flex-grow">