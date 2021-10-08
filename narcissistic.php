<?php

function narcissistic(int $value): bool {
     
    $digit =   array_map('intval', str_split($value));
    $digit_len = count($digit);
    $check_total=0;for ($i=0; $i < $digit_len; $i++) { 

    $check_total = $check_total+ pow($digit[$i], $digit_len); 
    }
    if($check_total == $value)
    {
    return true;        
    }
    else
    {
    return false;
    }

}

 var_dump(narcissistic(22));
?>