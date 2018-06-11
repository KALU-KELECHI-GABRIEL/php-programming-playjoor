Write a function that computes the running total of a list.


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>total of a list</title>
</head>
<body>
<h1>TO COMPUTE THE RUNNING TOTAL OF A LIST</h1>
    <?php                                       //start of the script
    function totalofalist($list1){              //
        $counter=0;                             // to hold the total as it updates
        $listlength=count($list1)-1;            //to hold the highest index of any given list
        for($i=0;$i<=$listlength;$i++){         //stepping through the list
            $counter=$counter+$list1[$i];       //adding the values at each index to the counter variable
        // DISPLAY THE TOTAL IN APPROPRIATE FORM
        }
        print "$counter "."gives the running total of  the list: ";
        print_r($list1);
        return $counter;
    }
    //EXAMPLE LIST TO WORK ON
    $alist=[1,2,3,4,5,6,7,8,9,10];
    totalofalist($alist);
    ?>
</body>
</html>