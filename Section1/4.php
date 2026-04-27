<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application 4</title>
</head>
<body>
    <?php
    // فتح الملف "file.txt" في وضع القراءة "r"، وفي حال الفشل نستخدم دالة die لطباعة رسالة والخروج
    $myfile = fopen("file.txt", "r") or die("Unable to open file!");

    // قراءة الملف المفتوح باستخدام دالة fread بناءً على حجمه filesize ثم طباعة المحتوى
    echo fread($myfile, filesize("file.txt"));
    ?>
</body>
</html>