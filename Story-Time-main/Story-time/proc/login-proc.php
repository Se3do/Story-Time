<?php
// Start the session
session_start();

include "../proc/connection.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check if both fields are filled
    if (!empty($email) && !empty($password)) {
        // Query to check if email exists in the database
        $check_email_query = "SELECT * FROM customers WHERE Customer_Mail='$email'";
        $check_email_result = mysqli_query($con, $check_email_query);

        if (mysqli_num_rows($check_email_result) > 0) {
            // Fetch the user's data
            $user_data = mysqli_fetch_assoc($check_email_result);
            $hashed_password = $user_data['Customer_Password'];

            // Verify the password
            if (password_verify($password, $hashed_password)) {
                // Password is correct, set session variables and redirect to dashboard or homepage
                $_SESSION['user_id'] = $user_data['Customer_ID'];
                $_SESSION['username'] = $user_data['Customer_UserName'];
                header("Location: ./index.php");
                exit();
            } else {
                // Password is incorrect
                echo "Error: Incorrect password. Please try again.";
            }
        } else {
            // Email not found
            echo "Error: Email not registered. Please sign up.";
        }
    } else {
        // Both fields are required
        echo "Error: Please fill in all fields.";
    }
}
