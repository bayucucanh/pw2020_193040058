<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pengulangan</title>
    <style>
    .kotak {
        height : 50px;
        width : 50px;
        background-color : salmon;
        text-align : center;
        line-height: 50px;
        transition : .5s;
        float : left ;
        margin : 2px;
    }

    .kotak:hover {
        transform : rotate(360deg);
    }

    .clear {
        clear : both;
    }
    </style>
</head>
<body>

    <?php
    for ($i = 0; $i <= 8; $i++) {
        for ($b = 0; $b <= 10; $b++) {
        echo "<div class='kotak'>$i</div>";
        }
        echo "<div class='clear'></div>";
    } echo "<br>";

    for ($a = 1; $a <= 10; $a++) {
        for ($c = 1; $c <= $a; $c++) {
        echo "<div class='kotak'>$c</div>";
        }
        echo "<div class='clear'></div>";
    } echo "<br>";
    
    for ($j = 10; $j >= 0; $j--) {
        for ($k = 1; $k <= $j; $k++) {
        echo "<div class='kotak'>$k</div>";
        }
        echo "<div class='clear'></div>";
    } 
    
    echo "<br>";

    ?>
</body>
</html>