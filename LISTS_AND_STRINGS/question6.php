Write a function that tests whether a string is a palindrome.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>checking for a palindrome</title>
</head>
<body>
    <h1>TO CHECK IF A STRING IS A PALINDROME</h1>
    <?php
    function palindromeCheck($string1){
        $beta = strtolower($string1);  //converts string to lower case, so as to efficiently check as  php is case sensitive; Madam != madam in php
        $newstring="";                  //holds the reversed string
        $listlength=strlen($string1)-1;  //holds the highest index of the given string
        for($i=0;$i<=$listlength;$i++){  //step through the string and extracts element at the current index to the mirrored opposite side of the string
            $newstring[-($i-$listlength)]= $beta[$i];

        }
       if($newstring==$beta){                   //  if the reversed string equals that of the original, then hooray it is palindromic
           print "$string1 is a palindrome <br>";
       }
       else{print "$string1 is not a palindrome  <br>";}
    }
    //EXAMPLE STRING TO CHECK;
    $e="Madam";
    palindromeCheck($e);
    $a= "AUNTY";
    palindromeCheck($a);
    ?>
</body>
</html>