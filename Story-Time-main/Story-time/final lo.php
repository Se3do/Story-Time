  <?php include "header.php" ?>
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
              window.location.href = 'index.php';
            }
          })
          .catch(error => {
            errorContainer.textContent = error.message;
          });
      });
    });
  </script>

  <link rel="stylesheet" href="./Css/final-log.css">
  <form class="form_container" method="post" action="./proc/login-proc.php">
    <div class="title_container">
      <p class="title">Login</p>
      <span class="subtitle">Get started with our app, just create an account and enjoy the experience.</span>
    </div>
    <br>
    <div class="input_container">
      <div class="error_container"></div>
      <label class="input_label" for="email">Email</label>
      <input placeholder="Enter Your Email" name="email" type="email" class="input_field" id="email" required>
      <label class="input_label" for="password">Password</label>
      <input placeholder="Enter Your Password" name="password" type="password" class="input_field" id="password" required>
      <br>
      <button title="Register" type="submit" class="sign-in_btn"><span>Sign In</span></button>
    </div>

    <br> <br>
    <p>Don't have Account? <a href="./reg.php">Join US</a></p>

    <p class="note">Terms of use & Conditions</p>
  </form>

  <?php include("footer.php"); ?>