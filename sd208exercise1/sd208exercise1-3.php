<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 //number3 .number of word occurences//

function countWords($str){
    
    $msg= (explode(" ",$str));
    print_r(array_count_values($msg));
    
}
countWords("wake wake up in feel feel the heat of the sunshine in the morning wake");


?>
</body>
</html>