<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        clear:both;
    }
    </style>

</head>
<body>
    
<?php 

// Array multidimensi
// array di dalam array
$angka = [10, 5, [3, [4], 6], 80];
echo $angka[2][1][0];
echo '<hr>';

$angka2 = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];

foreach($angka2 as $baris){
    foreach($baris as $ang2){
        echo "<div class='kotak'>$ang2</div>";
    }echo '<div class="clear"</div>';
}

?>

</body>
</html>