<?php
include "../proc/connection.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Check if all fields are filled
    if (!empty($username) && !empty($password) && !empty($email) && !empty($phone)) {
        // Check if the email is already registered
        $check_email_query = "SELECT * FROM customers WHERE Customer_Mail='$email'";
        $check_email_result = mysqli_query($con, $check_email_query);

        if (mysqli_num_rows($check_email_result) > 0) {
            echo "<script>alert('Email already registered. Please use a different email address.');</script>";
        } else {
            $hashed_password = $password;

            //  insert data into the database
            $sql = "INSERT INTO customers (Customer_UserName, Customer_Password, Customer_Mail, Customer_Phone) VALUES ('$username', '$hashed_password', '$email', '$phone')";

            // Execute the query
            if (mysqli_query($con, $sql)) {
                echo "<script>alert('Account added successfully.');</script>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
            }
        }
    } else {
        echo "<script>alert('Please fill in all fields.');</script>";
    }
}

echo "<script>window.location.reload();</script>";
