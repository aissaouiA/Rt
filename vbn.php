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

// استقبال البيانات من النموذج HTML
$Username = $_POST['Username'];
$Email = $_POST['Email']; // تأكد من أن "email" كبيرة الحروف ومتطابقة مع اسم الحقل في النموذج HTML
$Password = $_POST['Password'];

// إدراج البيانات في قاعدة البيانات
$sql = "INSERT INTO poi (Username, Password, Email) VALUES ('$Username', '$Password', '$Email')";
if (mysqli_query($conn, $sql)) {
    header("Location: Location: http://localhost/مجلد%20جديد/images/مجلد/E.html");
    exit();
} else {
    echo "حدث خطأ أثناء إضافة السجل: " . mysqli_error($conn);
}

// إغلاق الاتصال
mysqli_close($conn);
?>
