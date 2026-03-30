<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application 11</title>
</head>
<body>
    <?php
    $text1 = "Ahmed";
    $text2 = "Abdelwahed";

    // دمج النصين بغرض الطباعة فقط دون تغيير قيمة المتغيرات الأصلية
    echo $text1 . " " . $text2 . "<br>";

    // إضافة محتوى المتغير الثاني وتخزينه داخل المتغير الأول
    $text1 .= $text2;
    echo $text1;
    ?>
</body>
</html>