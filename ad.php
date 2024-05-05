<?php
// معلومات الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "message";

// معلومات النموذج
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// الاستعلام لإدخال البيانات
$sql = "INSERT INTO messag (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
        header("Location: http://localhost/مجلد%20جديد/images/مجلد/h.html");
    exit();
} else {
    echo "خطأ في الارسال : " . $conn->error;
}

// إغلاق الاتصال
$conn->close();
?>
