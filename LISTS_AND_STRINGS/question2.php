Write function that reverses a list, preferably in place.


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DISPLAYS A LIST REVERSAL FUNCTION</title>
</head>
<body>
<h1>PAGE DISPLAYS A LIST REVERSAL OPERATION</h1>
  <?php
  function reverseArray($list1){
      print_r($list1); echo "was the given list" . "<br>";
      $reversedArray= [];    //dictionary for the new array resuting from the reversal operation.
      $mylistlength=count($list1)-1; //GETS THE MAXIMUM INDEX OF array
      $elementholder=0; //keeps element of current index.
      $index=0;        //keeps current index
      for($i=0; $i<=$mylistlength;$i++){        //to step through the list, index by index.
       $index=$i;                        //keeps the index to avoid tempering with the counter variable.
       $elementholder=$list1[$i];       //holds the element in the above index 
       $index= (-($index-$mylistlength));    //pushes the element in the elementholder to the mirrored position oof the opposite end to achieve reversal.
       $reversedArray[$index] = $elementholder;
      }
    return $reversedArray;
  } 
// EXAMPLE OF LIST TO RETURN THE REVERSED ARRAY
  $A = [1,2,3,4,5,6,7,8,9];
print_r(reverseArray($A));
echo "is the reversed arrray";
  ?>  
</body>
</html>