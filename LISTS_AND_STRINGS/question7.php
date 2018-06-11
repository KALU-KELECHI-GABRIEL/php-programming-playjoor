Write three functions that compute the sum of the numbers in a list: using a for-loop, a while-loop and recursion. (Subject to availability of these constructs in your language of choice.)

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>improve on sum function</title>
</head>
<body>
    <h1>A. USING A WHILE LOOP FOR SUMING</h1>
   <?php
   function whilelooptotal($list1){                 
       $i=0; $listlength=count($list1)-1;$counter=0;        //get the start index, the highest index present, and the counter variable.
      while($i<=$listlength){                               //step through if the current index is still less than the highest index
          $counter=$counter+$list1[$i];                     //add to the total
          $i++;                                             //increment the index holder
      }
       print "the total using a while loop is: $counter , given the list: "; print_r($list1);  
   return $counter;
    }
    //ExamplE LIST TO TOTAL USING WHILE LOOP
$s=[1,2,3,4,5,6,7,8,9,10];
whilelooptotal($s);
   ?> 
</body>
</html>