Write a function that combines two lists by alternatingly taking elements, e.g. [a,b,c], [1,2,3] ?
[a,1,b,2,c,3].


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>alternate concatenation</title>
</head>
<body>
<h1>ALTERNATE CONCATENATION</h1>
<?php
function alternatelistconc($lista,$listb){
$alength=count($lista)-1;           //lenth of the first list
     $blength=count($listb)-1;            //length of the second list
     $newconcatenated=[]; $indexer=0;    //declarations for the new array and index assigning variables.
     for($i=0;$i<=$alength;$i++){       //looping through the first list
        
         if($i==0){                   
      $newconcatenated[0]=$lista[0];   
     }
     else{
         $newconcatenated[$indexer]=$lista[$i];
         $indexer += 2;
     }
     /* the if else is used to assign the alternate index keys to the elements from the first list.
      */
    }
    
     for($b=0;$b<=$blength;$b++){       //looping through the second list
         if($b==0){
        $newconcatenated[1]=$listb[$b];  
        $indexer=1; 
       }
          else{
              $newconcatenated[$indexer]=$listb[$b];
          }
          $indexer += 2;
        /* the if else is used to assign the alternate index keys to the elements from the first list.
      */  
    }

     print_r($newconcatenated); echo "gives thwe newly concatenated list from the given lists of: "."<br>";
     echo "first list: "; print_r($lista); echo "<br>"; echo "second list: "; print_r($listb);
}
/* AN EXAMPLE LIST TO CONCCATENATE IS GIVEN; WITH APPLICATION OF THE alternatelistconc() function */
$a=['a','s','d','f','g'];
$b=[1,2,3,4,5,6,7];
alternatelistconc($a,$b);

?>    
</body>
</html>