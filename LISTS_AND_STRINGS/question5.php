Write a function that returns the elements on odd positions in a list.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>return elements in odd positions</title>
</head>
<body>
    <h1>TO RETURN ODD INDEXED ELEMENTS</h1>
<?php
function oddindexreturner($list1){     
    $newlist=[];                       //NEW LIST to hold all elements of odd index 
 
    $listlenght=count($list1)-1;        //the largest place value index of any given array
    for($i=1;$i<=$listlenght; $i++){       //step through the array, starting from element indexed at 1, since 0 is neither odd nor even
        if($i%2 !== 0){                  //if the index of the current array element has a modulus not equal to zero, then by arithemetic it is odd, and thus extracted to the new list
            $newlist[]=$list1[$i];
           
        }

    }
print_r($newlist); echo " gives the new odd indexed elements list given the list: "; print_r($list1); 
return $newlist;
}
//EXAMPLE LIST TO GET THE ODD INDEXED ELEMENT
$alist=[1,2,3,4,5,6,7,8,9,10];
oddindexreturner($alist);
?>
</body>
</html>