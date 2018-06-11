<?php
//Write a program that asks the user for their name and greets them with their name
echo "hi there ! "."what is your name:  \n";
$username = trim(fgets(STDIN));//this gets the name of the uservia a console  and inputs into variable username
echo "GOOD DAY ".$username." how's it going";
?>