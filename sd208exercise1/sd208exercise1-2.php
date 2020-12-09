<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>
<center>CHESS BOARD<center>
<table width= "500px"cellspacing="1px color=black" cellpadding="1px" border="5px ">

    <?php

// //2. create a chess board//
for($row=1;$row<=8;$row++){
    echo"<tr>";
    for($col=1;$col<=8;$col++){
        $totalCells= $row + $col;
        if($totalCells%2==0){
            echo "<td height=50px width=200px bgcolor=pink ></td>";
            
        }else{
            echo "<td height=50px width=200px bgcolor=black ></td>";

        }
    }
}
    ?>
</body>
</html>