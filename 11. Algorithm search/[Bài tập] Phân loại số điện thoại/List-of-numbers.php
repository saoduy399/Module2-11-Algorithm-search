<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <form method="post">
        <fieldset>
            <legend>SORST NUMBERS</legend>
            <textarea name="phoneNumbers" cols="50" rows="50"></textarea>
        </fieldset>
    </form>
</div>
</body>
</html>
<?php
// viettel:032, 033, 034, 035, 036, 037, 038, 039
//vinaphone: 0127, 0129, 0123, 0124, 0125
//Mobifone:  090 – 093 – 089 – 0120 – 0121 – 0122 – 0126 – 0128
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $phoneNumbers = $_REQUEST["phoneNumbers"];
    if (empty($phoneNumbers)){
        echo "you haven't type in anything!";
     }

s
}

