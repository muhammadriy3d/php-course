<?php
   
  // 1 if x is {7,9,12}
  // 2 if x is in [31 - 41]
  // -4 if x is in [31- 41)
  // otherwise 3
  
  $x = 71;
  if ($x == 7 || $x == 9 || $x == 12)
  {
    echo 1;
  } 
  elseif ($x >= 31 and $x <= 41) 
  {
    echo 2;
  } 
  elseif ($x >= 31 and $x < 41) 
  {
    echo -4;
  } 
  else 
  {
    echo 3;
  }
?>