<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$strings = array (
'Saya adalah Abdullah',
'Saya punya seekor kucing yang sangat lucu',
'Setiap hari ku ajak dia bermain'
);
$search = array (
'Abdullah',
'kucing',
'lucu',
'bermain'
);
$replace = array (
    'Abdurrahman',
    'bebek',
    'gemuk',
    'berenang'
    );
    $replaced = str_replace ( $search, $replace, $strings );
    foreach ($replaced as $key => $value) {
    echo $value."<br>";
    }
    ?>
</body>
</html>