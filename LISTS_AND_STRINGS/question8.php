Write a function on_all that applies a function to every element of a list. Use it to print the first twenty perfect squares (a natural number n is a perfect square if it can be written as n=m*m for some other natural number m. 1,4,9,16,25 are the first 5).

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>function that applies to every element in a list</title>
</head>
<body>
<?php
function perfectSquare($jlist,$i){
    $a = $jlist[$i];
    $squares=[];
    $a = $a *$a;
    echo "$a, ";
    //$squares[$i]=$a; 
    //print_r($squares); 
}


function on_all($list1){
   $squares=[]; $a=0;
    $length=count($list1)-1;
  for($i=0;$i<=$length;$i++){
     perfectSquare($list1,$i);
     //echo "$a";
     //$squares[$i] = $a;
    
  }
  echo "is the perfect square list for the list u provided: "; print_r($list1);
  return $squares;
}
$d = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
on_all($d);
?>
    
</body>
</html>