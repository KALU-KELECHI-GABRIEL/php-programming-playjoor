. Write a function that concatenates two lists. [a,b,c], [1,2,3] ? [a,b,c,1,2,3]
 

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>list concatenation </title>
 </head>
 <body>
 <h1>LIST CONCATENATOR</h1>
<?php
 function concatenatelists($lista,$listb){
     $alength=count($lista)-1;
     $blength=count($listb)-1;
     $newconcatenated=[];
     for($i=0;$i<=$alength;$i++){
      $newconcatenated[$i]=$lista[$i];   
     }
     for($b=0;$b<=$blength;$b++){
        $newconcatenated[$alength+$b]=$listb[$b];   
       }
     print_r($newconcatenated); echo "gives thwe newly concatenated list from the given lists of: "."<br>";
     echo "first list: "; print_r($lista); echo "<br>"; echo "second list: "; print_r($listb);
}
$a=['a','s','d','f','g'];
$b=[1,2,3,4,5,6,7];
concatenatelists($a,$b);
 ?>
 </body>
 </html>
 
 