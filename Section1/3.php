<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application 3</title>
</head>
<body>
    <?php
    // تعريف ثابت من نوع نص
    const APP_STRING = "حور";
    // تعريف ثابت من نوع رقم عشري
    const PI = 3.14;
    // تعريف ثابت من نوع مصفوفة (Array)
    const APP_LANGUAGES = ["Arabic", "English"];

    // طباعة الثوابت ودمجها مع وسم النزول لسطر جديد
    echo APP_STRING . "<br>";
    echo PI . "<br>";
    // طباعة عناصر المصفوفة باستخدام الفهرس الخاص بها (0 ثم 1) ووضع مسافة بينهما
    echo APP_LANGUAGES[0] . " " . APP_LANGUAGES[1];
    ?>
</body>
</html>