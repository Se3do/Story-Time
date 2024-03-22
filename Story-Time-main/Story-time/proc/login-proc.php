<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['submit']) && $_POST['submit'] == 'Login') {
    include 'connection.php';

    $User_Username = $_POST['email'];
    $User_Password = $_POST['password'];

    $query = "SELECT * FROM `user` WHERE `User_Username`='$User_Username' AND `User_Password`='$User_Password'";
    $sql = mysqli_query($con, $query);

    if ($sql->num_rows > 0) {
        session_start();
        $_SESSION['username'] = $User_Username;
?>
        <script type="text/javascript">
            alert("Logged in successfully");
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert("The username and password were not found. Please try again.");
        </script>
<?php
    }
}
?>