  <?php include "header.php" ?>

  <link rel="stylesheet" href="./Css/final-log.css">
  <form class="form_container" method="post" action="./proc/login-proc.php">
    <div class="title_container">
      <p class="title">Register</p>
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
      <button title="Register" type="submit" class="sign-in_btn"><span>Register</span></button>
    </div>

    <br> <br>
    <p>Already have an account? <a href="./final lo.php">Login Page</a></p>

    <p class="note">Terms of use & Conditions</p>
  </form>

  <?php include("footer.php"); ?>