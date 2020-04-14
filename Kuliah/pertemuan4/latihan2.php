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
    </style>
</head>
<body>
    <?php 
    for ($i = 1; $i <= 1000; $i++) {
        echo "<div class='kotak'>$i</div>" ;
    }
     
    
    ?>

</body>
</html>