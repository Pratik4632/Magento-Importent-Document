<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Html inside Php</title>
    <style>
        h2{
            color:red;
        }
    </style>
</head>
<body>
    <?php
        $a = "GeekyShows";
        echo "<h1>Hello $a</h1>";                                   // Html
        echo "<h2 style='background:aqua;'>Hello $a</h2>";          //Html and inline css
        echo "<script>alert('GeekyShows')</script>";                // JavaScript
    ?>
</body>
</html>