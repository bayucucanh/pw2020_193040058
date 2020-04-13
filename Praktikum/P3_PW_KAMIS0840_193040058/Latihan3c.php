<?php 

function tumpukanBola($tumpukan){
    for ($A = 1; $A <= $tumpukan; $A++){
        for ($B = 1; $B <= $A; $B++){
            echo '<div class="bulat">'.$A.'</div>';
        
        }
        echo '<div class="clear"></div>';
        echo "<br>";
    }
}

?>
<!DOCTYPE html>
<head>
    <title></title>
    
    <style>
    
    .bulat {
    width : 50px;
    height : 50px;
    background-color : salmon;
    text-align :center;
    line-height : 50px;
    float : left;
    margin : 2px;
    border-radius : 50px;
    border : 2px solid black;
    font-weight : bold; 
            }

    .clear {
        clear : both;
            }
    </style>
</head>


<body> 

    <?php

    tumpukanBola(5);

    
?>

</div>
</body>
</html>