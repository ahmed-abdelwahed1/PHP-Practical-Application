<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application 10</title>
</head>
<body>
    <?php
    $a = 100;
    $b = 50;

    // شرط (و - and): ينفذ الكود إذا كان كلا الشرطين صحيحين
    if ($a == 100 and $b == 50) {
        echo "A is 100 and B is 50<br>";
    }

    // شرط (أو - or): ينفذ الكود إذا كان أحد الشرطين صحيحاً
    if ($a == 100 or $b == 10) {
        echo "A is 100 or B is 50<br>";
    }

    // شرط (xor): ينفذ الكود إذا كان أحد الشرطين صحيحاً ولكن ليس كلاهما
    if ($a == 100 xor $b == 10) {
        echo "Maybe A is 100 or B is 50 But not togther";
    }
    ?>
</body>
</html>