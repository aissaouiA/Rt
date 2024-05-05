<?php
// بيانات الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poiu";

// إنشاء اتصال
$conn = mysqli_connect($servername, $username, $password, $dbname);

// التحقق من الاتصال
if (!$conn) {
    die("فشل الاتصال: " . mysqli_connect_error());
}

// استقبال بيانات تسجيل الدخول من النموذج
$email_input = mysqli_real_escape_string($conn, $_POST['Email']); // تجزئة اسم المستخدم للوقاية من هجمات حقن SQL
$password_input = mysqli_real_escape_string($conn, $_POST['Password']); // تجزئة كلمة المرور للوقاية من هجمات حقن SQL

// استعلام SQL للتحقق من صحة بيانات تسجيل الدخول
$sql = "SELECT * FROM poi WHERE Email='$email_input' AND Password='$password_input'";
$result = mysqli_query($conn, $sql);

// التحقق من وجود نتيجة (إذا كان هناك مستخدم بنفس بيانات تسجيل الدخول)
if (mysqli_num_rows($result) > 0) {
    // تحويل المستخدم إلى الصفحة المطلوبة
    header("Location: http://localhost/مجلد%20جديد/images/مجلد/M.html");
    exit();
} else {
    header("Location: http://localhost/مجلد%20جديد/images/مجلد/f.html");
    exit();
}

// إغلاق الاتصال
mysqli_close($conn);
?>
