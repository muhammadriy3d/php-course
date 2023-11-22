<?php
  $x = 85;
  
  if ($x < 0) 
    echo 8;
  elseif ($x >= 0 and $x <= 10)
    echo (2 * $x);
  elseif ($x >= 11 and $x <= 100)
    echo (5 / 6) * ($x ** 2); // (5x**4) / (6x**2)
  elseif ($x > 100)
    echo (9 * $x); // 4x + 5x
?>