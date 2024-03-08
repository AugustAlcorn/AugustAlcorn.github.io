<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userInput = $_POST["userInput"];

    // Here, you can process and save the $userInput data to your server/database
    // For example, you could use a database connection to store the data.

    // Placeholder response for demonstration purposes
    echo "Data saved: $userInput";
}
?>
