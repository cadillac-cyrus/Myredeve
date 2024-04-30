<?php
// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection file
    include_once "db_connection.php";

    // Get username and password from the form
    $username = $_POST["username"];
    $password = $_POST["PASSWORD"]; // Note: Corrected "PASSWORD" to "password" to match input field name

    // Validate input (you might want to add more validation)
    if (empty($username) || empty($password)) {
        // Handle empty fields
        echo "Please enter username and password.";
    } else {
        // Prepare SQL statement to fetch user from the database
        $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);

        // Execute the statement
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();

        // Check if user exists
        if ($result->num_rows == 1) {
            // User exists, set session variables and redirect to dashboard
            $_SESSION["username"] = $username;
            header("Location: dashboard.php");
            exit();
        } else {
            // User does not exist or credentials are incorrect
            echo "Invalid username or password.";
        }
    }
}
?>
