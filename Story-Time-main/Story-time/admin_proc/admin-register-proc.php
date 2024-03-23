<?php
// Include database connection file
include "../proc/connection.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["adminUsername"];
    $password = $_POST["adminPassword"];
    $email = $_POST["adminEmail"];
    $phone = $_POST["adminPhone"];

    // Check if all fields are filled
    if (!empty($username) && !empty($password) && !empty($email) && !empty($phone)) {
        // Check if the email is already registered
        $check_email_query = "SELECT * FROM admin WHERE admin_Mail='$email'";
        $check_email_result = mysqli_query($con, $check_email_query);

        if (mysqli_num_rows($check_email_result) > 0) {
            echo "<script>alert('Email already registered. Please use a different email address.');</script>";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            //  insert data into the database
            $sql = "INSERT INTO admin (admin_UserName, admin_Password, admin_Mail, admin_Phone) VALUES ('$username', '$hashed_password', '$email', '$phone')";

            // Execute the query
            if (mysqli_query($con, $sql)) {
                echo "<script>alert('Admin account added successfully.');</script>";
            } else {
                // Print error message
                echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
            }
        }
    } else {
        echo "<script>alert('Please fill in all fields.');</script>";
    }
}

echo "<script>window.location.reload();</script>";
