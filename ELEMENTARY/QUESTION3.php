<?php
date_default_timezone_get("Africa/lagos");
$username = $_GET['filed_in_name'];
$username=strtolower($username);
$username=ucfirst($username);
$current_time =date("h/i/sa");$period=date("a");
if ($username=="Alice" || $username=="Bob"){

if($period=="am"){
    echo "helllo! GOOD MORNING " . $username;
}
else{
    if($current_time<5){echo "HELLO! GOOD AFTERRNOON " . $username;}
    elseif($current_time<=7){echo "hello! GOOD EVENING " . $username;}
    else{echo "hello! GOOD NIGHT " . $username;} 

}
}
else{
    if($period=="am"){
        echo "helllo! GOOD MORNING " ;
    }
    else{
        if($current_time<5){echo "HELLO! GOOD AFTERRNOON ";}
        elseif($current_time<=7){echo "hello! GOOD EVENING ";}
        else{echo "hello! GOOD NIGHT ";} 
    
    }
}
?>