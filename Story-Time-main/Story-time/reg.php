<?php include "header.php" ?>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector('.form_container');

    form.addEventListener('submit', function(event) {
      event.preventDefault();

      const name = document.querySelector('input[name="username"]').value.trim();
      const email = document.querySelector('input[name="email"]').value.trim();
      const phone = document.querySelector('input[name="phone"]').value.trim();
      const password = document.querySelector('input[name="password"]').value.trim();
      const cpassword = document.querySelector('input[name="cpassword"]').value.trim();
      const errorContainer = document.querySelector('.error_container');
      let errorMessage = '';

      if (name === '' || email === '' || phone === '' || password === '' || cpassword === '') {
        errorMessage = 'Please fill in all fields.';
        errorContainer.textContent = errorMessage;
        return;
      } else if (password !== cpassword) {
        errorMessage = 'Password and Confirm Password fields must match.';
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
            throw new Error('Failed to add account.');
          } else {
            return response.text(); // Get response body as text
          }
        })
        .then(data => {
          // Check if response data contains an error message
          if (data.startsWith('Error:')) {
            errorContainer.textContent = data.substr(7); // Remove 'Error:' prefix
          } else {
            errorContainer.textContent = 'Account added successfully!';
            // Optionally, you can redirect the user to another page after successful registration
            setTimeout(() => {
              window.location.href = 'reg.php';
            }, 3000); // Redirect after 3 seconds (3000 milliseconds)
          }
        })
        .catch(error => {
          errorContainer.textContent = error.message;
        });
    });
  });
</script>
<form class="form_container" method="post" action="./proc/register.php">
  <div class="title_container">
    <p class="title">Register</p>
    <span class="subtitle">Get started with our app, just create an account and enjoy the experience.</span>
  </div>
  <br>
  <div class="input_container">
    <div class="error_container"></div>
    <label class="input_label" for="username">Username</label>
    <input placeholder="Enter Your Username" name="username" type="text" class="input_field" id="username" required>
    <label class="input_label" for="email">Email</label>
    <input placeholder="Enter Your Email" name="email" type="email" class="input_field" id="email" required>
    <label class="input_label" for="phone">Phone</label>
    <input placeholder="Enter Your Phone" name="phone" type="text" class="input_field" id="phone" required>
    <label class="input_label" for="password">Password</label>
    <input placeholder="Enter Your Password" name="password" type="password" class="input_field" id="password" required>
    <label class="input_label" for="cpassword">Confirm Password</label>
    <input placeholder="Confirm Your Password" name="cpassword" type="password" class="input_field" id="cpassword" required>
    <br>
    <button title="Register" type="submit" class="sign-in_btn"><span>Register</span></button>
  </div>

  <br> <br>
  <p>Already have an account? <a href="./final lo.php">Login Page</a></p>

  <p class="note">Terms of use & Conditions</p>
</form>

<?php include("footer.php"); ?>