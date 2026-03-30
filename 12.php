<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application 12</title>
</head>
<body>
    <?php
    $x = 5; // متغير معرف خارج الدالة (مجال عام Global)

    // بناء دالة جديدة
    function myTest() {
        $y = 10; // متغير معرف داخل الدالة (مجال محلي Local)

        echo "<p>تجربة متغير داخل الدالة</p>";
        // هنا سيظهر خطأ (تنبيه) لأن $x لا يمكن رؤيته داخل الدالة لكونه خارجها
        echo "The variable x is " . $x . "<br>";
        // ستتم الطباعة بنجاح لأن $y متغير محلي لنفس الدالة
        echo "The variable y is " . $y . "<br>";
    }

    // استدعاء وتنفيذ الدالة
    myTest();

    echo "<p>تجربة المتغير خارج الدالة</p>";
    // ستتم الطباعة بنجاح لأن $x متغير عام
    echo "The variable x is " . $x . "<br>";
    // هنا سيظهر خطأ (تنبيه) لأن $y تم تعريفه داخل الدالة وانتهى بانتهاء الدالة
    echo "The variable y is " . $y . "<br>";
    ?>
</body>
</html>