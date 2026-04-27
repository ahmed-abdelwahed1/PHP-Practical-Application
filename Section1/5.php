<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application 5</title>
</head>
<body>
    <?php
    $var1; // متغير بدون قيمة (تم تعريفه فقط)
    $var2 = 12; // متغير من نوع عدد صحيح (Integer)
    $var3 = 11.45; // متغير من نوع عدد عشري (Float/Double)
    $var4 = null; // متغير يحمل قيمة فارغة (Null)
    $var5 = true; // متغير منطقي يحمل قيمة صح (Boolean)
    $var6 = "Ahmed"; // متغير يحمل سلسلة نصية (String)

    // ربط المتغيرات ببعضها عند الطباعة باستخدام النقطة
    echo $var1 . $var2 . $var3 . $var4 . $var5 . $var6;
    ?>
</body>
</html>