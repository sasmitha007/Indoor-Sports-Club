<?php
include('../partials/header.php');

// Redirect if not logged in
if (!isset($_SESSION['user'])) {
    echo "<div class='text-center py-20 text-red-500 font-semibold text-lg'>
            You must <a href='/login.php' class='underline text-yellow-400 hover:text-yellow-300'>login</a> to book a session.
            </div>";
    include('../partials/footer.php');
    exit;
}
?>

<section class="max-w-2xl mx-auto px-4 py-10 min-h-[60vh]">
    <h1 class="text-3xl font-bold mb-6 text-center">Book a Session</h1>

    <form action="../../controllers/BookingController.php" method="POST" class="bg-gray-800 p-6 rounded-lg shadow-md">
        <!-- Sport selection -->
        <div class="mb-4">
            <label for="sport" class="block text-sm font-medium mb-2">Choose a Sport</label>
            <select name="sport" id="sport" required class="w-full px-4 py-2 rounded bg-gray-700 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                <option value="">-- Select Sport --</option>
                <option value="Badminton">Badminton</option>
                <option value="Basketball">Basketball</option>
                <option value="Futsal">Futsal</option>
                <option value="Boxing">Boxing</option>
                <option value="Climbing">Climbing</option>
                <option value="Table Tennis">Table Tennis</option>
                <option value="Volleyball">Volleyball</option>
            </select>
        </div>

        <!-- Date selection -->
        <div class="mb-4">
            <label for="date" class="block text-sm font-medium mb-2">Select a Date</label>
            <input type="date" name="date" id="date" required class="w-full px-4 py-2 rounded bg-gray-700 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-400">
        </div>

        <!-- Time slot -->
        <div class="mb-4">
            <label for="time" class="block text-sm font-medium mb-2">Select Time Slot</label>
            <select name="time" id="time" required class="w-full px-4 py-2 rounded bg-gray-700 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                <option value="">-- Select Time --</option>
                <option value="08:00 - 10:00">08:00 AM – 10:00 AM</option>
                <option value="10:00 - 12:00">10:00 AM – 12:00 PM</option>
                <option value="14:00 - 16:00">02:00 PM – 04:00 PM</option>
                <option value="16:00 - 18:00">04:00 PM – 06:00 PM</option>
            </select>
        </div>

        <!-- Submit Button -->
        <div class="text-center mt-6">
            <button type="submit" name="book" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-full shadow transition">
                Confirm Booking
            </button>
        </div>
    </form>
</section>

<?php include('../partials/footer.php'); ?>
