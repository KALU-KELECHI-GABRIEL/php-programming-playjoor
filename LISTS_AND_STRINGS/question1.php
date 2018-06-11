Write a function that returns the largest element in a list.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARGEST ELEMENT IN A LIST</title>
</head>
<body>
<h1>PAGE GIVES THE LARGEST ELEMENT IN A LIST</h1>
<?php
//Write a function that returns the largest element in a list.
function biggest_in_list($myList){  //FUNCTION DECLARATION
print_r($myList); echo " was given.\n"."<br>";
echo "thus the largest is";
    $myListLength=count($myList)-1;     //count() gives the length,subtract 1 and we get the maximum index,thus the $myListLength effectively gives the index maximum
    $comparator = 0;               //variable to hold the maximum of two consecutive elements in an array
for($i=0; $i<$myListLength; $i++)
{
    if($myList[$i]>$comparator){   //if the current resident of the comparator is less than the next index element then the next indexed element is housed in comparator inside
    $comparator=$myList[$i];    
}

}
return $comparator;     //the largest is returned to the program to be used if needed.

}
// EXAMPLE OF LIST TO RETURN THE BIGGEST
$list1=[1,2,3,100,5,6,92,8,9]; 
echo biggest_in_list($list1);  
?>

</body>
</html>
