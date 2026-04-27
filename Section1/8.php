<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application 8</title>
</head>
<body>
    <?php
    $a = 20;     // رقم
    $b = '20';   // نص

    // دالة var_dump تطبع نوع القيمة والنتيجة المنطقية (ترجع ترو أو فولس)
    var_dump($a == $b);   // التساوي في القيمة فقط (ترجع true)
    var_dump($a === $b);  // التطابق في القيمة والنوع معاً (ترجع false لأن الأنواع مختلفة)
    var_dump($a != $b);   // لا يساوي

    $c = 30;
    $d = 25;
    var_dump($c > $d);    // أكبر من
    ?>
</body>
</html>