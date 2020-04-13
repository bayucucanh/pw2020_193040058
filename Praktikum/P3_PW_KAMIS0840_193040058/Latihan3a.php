<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    .pembungkus{
        border:2px solid black;
        box-shadow:4px 4px 5px;
        border-radius:2px;
    }
    .tulisan {
        font-family:arial;
        font-size:28px;
        color: #8c782d;
        font-weight:bolder;
        font-style:italic;
        text-align:center;
    }
    </style>
</head>
<body>
    <?php
    
    function gantiStyle($tulisan, $style, $style2){
        echo "<div class=$style><h1 class=$style2>$tulisan</h1></div>";

    } 
    
    
    ?>

<?= gantiStyle("Selamat datang di praktikum PW 2020", "pembungkus", "tulisan") ?>

</body>
</html>