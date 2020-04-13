<head>
    <title>Latihan 2c</title>
    
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

for ($A = 1; $A <= 3; $A++){
    for ($B = 1; $B <= 3; $B++){
        echo <div class="bulat">$j</div>;
    }
    echo <div class="bulat"></div>;
}
    
?>
</div>
</body>
</html>