<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application 9</title>
</head>
<body>
    <?php
    $a = 20;

    echo ++$a . "<br>"; // الزيادة أولاً ثم الطباعة (الناتج 21)
    echo $a++ . "<br>"; // الطباعة أولاً ثم الزيادة (سيطبع 21، ثم تصبح قيمته في الذاكرة 22)
    echo $a . "<br>";   // سيطبع القيمة الحالية (22)

    echo --$a . "<br>"; // النقصان أولاً ثم الطباعة (ستصبح 21 ويطبع 21)
    echo $a-- . "<br>"; // الطباعة أولاً ثم النقصان (سيطبع 21، ثم تصبح 20)
    echo $a . "<br>";   // سيطبع القيمة الحالية (20)
    ?>
</body>
</html>