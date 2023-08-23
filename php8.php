<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"ontent="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    funtion mytest(){
        static $x = 0;
        echo $x;
        #x++;
    }
    mytest();
    mytest();
    mytest();
    ?>
</body>
</html>