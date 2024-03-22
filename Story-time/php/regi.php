<?php

// إجراء الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "story-time";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// تلقي البيانات من النموذج
$Username = $_POST['Username'];
$email = $_POST['email'];
$password = $_POST['password'];

// التحقق من وجود البريد الإلكتروني في قاعدة البيانات
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['User_Email'];
    $password = $_POST['User_Password'];

    // تحقق من وجود البريد الإلكتروني في قاعدة البيانات
    $sql = "SELECT * FROM users WHERE email='$email'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // البريد الإلكتروني موجود بالفعل
        echo "هذا البريد الإلكتروني موجود بالفعل";
        // هنا يمكنك عرض رسالة أو قد تقوم بإعادة توجيه المستخدم إلى صفحة أخرى
    } else {
        // إذا لم يكن البريد الإلكتروني موجودًا، قم بإدراج البيانات في قاعدة البيانات
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO users (Username, User_Email, User_Password) VALUES ('$Username', '$email', '$hashedPassword')";

        if ($conn->query($sql) === TRUE) {
            // تم إدراج البيانات بنجاح
            header("Location: signin.php"); // قم بتوجيه المستخدم إلى صفحة الدخول
            exit();
        } else {
            // فشل إدراج البيانات
            echo "خطأ: " . $sql . "<br>" . $conn->error;
        }
    }
}

// أغلق الاتصال بقاعدة البيانات
$conn->close();
