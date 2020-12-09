<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
//4.fizzbuz//
function myFunction(){
for($number=1;$number<=100;$number++){
    if($number%3==0 && $number%5==0){
        echo "FIZZBUZZ <br/>";
     } elseif($number%3==0){
            echo "FIZZ<br/>";
          }elseif($number%5==0){
                echo "BUZZ<br/>";
            }else{
                echo $number ."<br/>";
            }
            
        }
}
myFunction();
?>

</body>
</html>