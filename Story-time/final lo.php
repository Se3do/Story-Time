<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kode+Mono:wght@400..700&display=swap" rel="stylesheet">
  <title>Login</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Css/index.css">
  <link rel="stylesheet" href="Css/about-us.css">
  <link rel="stylesheet" href="Css/final-log.css">
</head>



<body>
  <div style="  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;">
    <form class="form_container" method="post" action="" style=" border: 1px solid rgba(0, 0, 0, 0.493);">
      <div class="title_container">
        <p class="title">Login</p>
        <span class="subtitle">Get started with our app, just Login to your an account and enjoy the experience.</span>
      </div>
      <br>
      <div class="input_container">
        <div class="error_container"></div>
        <label class="input_label" for="email">Email</label>
        <input placeholder="Enter Your Email" name="email" type="email" class="input_field" id="email" required>
        <label class="input_label" for="password">Password</label>
        <input placeholder="Enter Your Password" name="password" type="password" class="input_field" id="password" required>
        <br>
        <input title="Register" type="submit" class="sign-in_btn" value="Login"><span></span></input>
      </div>

      <br> <br>
      <p>Don't have an account? <a href="reg.php">Register Now</a></p>

      <p class="note">Terms of use & Conditions</p>
    </form>
  </div>

  <?php

  if (isset($_POST['submit'])) {

    include 'connection.php';
    $User_Mail = $_POST['email'];
    $User_Password = $_POST['password'];

    #$query="SELECT * FROM `user` WHERE `User_Username`='$User_Username' and `User_Password`='$User_Password'; 

    $q1 = "SELECT * FROM `customers` WHERE `Customer_Mail` ='$User_Mail' and `Customer_Password`='$User_Password'";
    $sql = mysqli_query($con, $query);

    if ($sql->num_rows > 0) {
      

  ?>
    <?php

    } else {
    ?>

      <script type="text/javascript">
        alert("the username and password not found try agin");
      </script>

  <?php
    }
  }
  ?>


  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const form = document.querySelector('.form_container');

      form.addEventListener('submit', function(event) {
        event.preventDefault();

        const email = document.querySelector('input[name="email"]').value.trim();
        const password = document.querySelector('input[name="password"]').value.trim();
        const errorContainer = document.querySelector('.error_container');
        let errorMessage = '';

        if (email === '' || password === '') {
          errorMessage = 'Please fill in all fields.';
          errorContainer.textContent = errorMessage;
          return;
        }

        // Submit the form via AJAX
        fetch(form.action, {
            method: form.method,
            body: new FormData(form)
          })
          .then(response => {
            if (!response.ok) {
              throw new Error('Failed to login.');
            } else {
              return response.text(); // Get response body as text
            }
          })
          .then(data => {
            // Check if response data contains an error message
            if (data.startsWith('Error:')) {
              errorContainer.textContent = data.substr(7); // Remove 'Error:' prefix
            } else {
              // Optionally, you can redirect the user to another page after successful login
              <?php $_SESSION['Customer_Mail'] = $_POST['email']; ?>
              alert("Logged in successfully");
              window.location.href = 'index.php';
            }
          })
          .catch(error => {
            errorContainer.textContent = error.message;
          });
      });
    });
  </script>
</body>

</html>