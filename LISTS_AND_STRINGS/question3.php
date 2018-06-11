Write a function that checks whether an element occurs in a list.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>page to search for elelment in list</title>
</head>
<body>
<h1>TO SEARCH FOR AN ELEMENT IN A LIST</h1>

<?php                                                         //start of the php script
function elementfinder($list1, $element){                     
    $comparator=0;                                 //container for the element at a particular index to be compared with the element to be found to be found
    $locator=0;                                    
    $indexes="occuring at index(ices): ";          // gives the container for the number of timed the element was located
    $listlength=count($list1)-1;                   //efffective largest index of the given list
     
    for($i=0; $i<=$listlength;$i++){               //step through the list
$comparator=$list1[$i];                            //get the element at the current index
/**if this element equals the element to be found, then upgrade the number of times the element has been found(that is the locator variable)and add the index it was found to the index variable */
if($element==$comparator){
    $locator=$locator+1;
    $indexes=$indexes.$i. " ";
}
    }
    /** print out result and the given list operated upon */
    echo "given the list: "; print_r($list1); echo "<br>";
    echo $locator." matches found ";
    echo $indexes;
    return $locator;
}
// EXAMPLE LIST TO LOCATE ELEMENT 3
$alist = [1,2,3,4,3,2,4,3,4,3,3];
$s=3;
elementfinder($alist,$s);
?>
    
</body>
</html>
