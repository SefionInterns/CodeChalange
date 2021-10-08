<?php

function validBraces($braces) {
    if (!is_string($braces))
        return false;

    if (trim($braces, '(){}[]') !== '')
       return false;

   $priority = array('(','[','{');
    $stack = array();

    for ($i = 0; $i < strlen($braces); $i++) {

     if($braces[$i] === '(' || $braces[$i] === '[' || $braces[$i] === '{')
     {

     array_push($stack,$braces[$i]); 
     
     }
     else
     {
        if(count($stack) == 0)
            return false;
      $last = end($stack);
        if( ($braces[$i] === ']' && $last === '[') || ($braces[$i] === '}' && $last === '{') || ($braces[$i] === ')' && $last === '('))
      {
        array_pop($stack);

      } 
      else {
        break;
      }
     }
     
        
    }
    if(count($stack) == 0)
            return true;
        else
        {
                
            return false;
        }
}

 var_dump(validBraces('({}[])'));
?>