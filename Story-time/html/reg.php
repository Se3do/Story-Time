<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register Now</title>
  <link rel="stylesheet" href="/Story-time/Css/final-log.css" />
  <script>
    function validateForm() {
      // Get all input elements with the "required" attribute
      const inputs = document.querySelectorAll('input[required]');

      // Check if all required fields are filled
      for (let i = 0; i < inputs.length; i++) {
        if (inputs[i].value === '') {
          alert("Please fill in all required fields.");
          return false; // Prevent form submission
        }
      }

      // Check if passwords match
      const password = document.getElementById('password').value;
      const confirmPassword = document.getElementById('cpassword').value;
      if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return false;
      }

      // All fields are filled and passwords match, allow form submission
      return true;
    }
  </script>
</head>

<body>
  <div class="container">
    <form id="form" method="POST">
      <a href="html/index.html"><img src="css/imgs/txtb.png" class="avatar" /></a>
      <h1>Register Now</h1>
      <div class="input-field">
        <label for="username">Name</label>
        <input type="text" id="username" name="username" placeholder="Enter your name" required />
      </div>
      <div class="input-field">
        <label for="username">Email</label>
        <input type="email" id="email" name="User_Email" placeholder="Enter your email" required />
      </div>
      <div class="input-field">
        <label for="username">Phone number</label>
        <input type="tel" id="phone-num" name="User_phone" placeholder="Enter your Phone number" required />
      </div>
      <div class="input-field">
        <label for="password">Password</label>
        <input type="password" id="password" name="User_Password" placeholder="Enter your password" required />
      </div>
      <div class="input-field">
        <label for="password">Confirm Password</label>
        <input type="password" id="cpassword" name="cpassword" placeholder="Enter your password" required />
      </div>

      <button type="submit">Register</button>
      <br />
      <br />

      <a href="#">Reset your Password?</a>
      <div class="social-login">
        <p>- register with -</p>
        <a href="#"><img src="/Story-time/images/face-png.jpg" alt="Facebook" /></a>
        <a href="#"><img src="/Story-time/images/google-logo.png" alt="Twitter" /></a>
      </div>
    </form>
  </div>
</body>

</html>
<?php

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "story-time";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$username = $_POST['username'];
$email = $_POST['User_Email'];
$phone = $_POST['User_phone'];
$password = password_hash($_POST['User_Password'], PASSWORD_DEFAULT); // Hash password

// Create SQL query (ensure column names match your table)
$sql = "INSERT INTO users (Username, User_Email, User_phone, User_Password)
VALUES ('$username', '$email', '$phone', '$password')";

// Execute query
if ($conn->query($sql) === TRUE) {
  echo "New user created successfully!";
} else {
  echo "Error: " . $conn->error;
}

// Close connection
$conn->close();
?>