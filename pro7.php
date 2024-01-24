<?php
// Retrieve the user's details from the database based on their logged-in session or user ID

// Connect to the MySQL database
$conn = mysqli_connect('localhost', 'username', 'password', 'database_name');

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the user's details from the database using the logged-in session or user ID
$userId = 1; // Replace with the logged-in session or user ID
$sql = "SELECT * FROM users WHERE id = '$userId'";
$result = mysqli_query($conn, $sql);

// Display the user's details
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo "Welcome, " . $row['fullname'] . "!<br>";
    echo "Email: " . $row['email'] . "<br>";
    // Display additional user details as needed
} else {
    echo "User details not found.";
}

// Close the database connection
mysqli_close($conn);
?>
