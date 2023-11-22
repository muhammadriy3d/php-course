<?php 

  // what deferent ??????????????????
  $a = 0;
  
  if (++$a == 3)
    echo $a . "<br/>";
  elseif (++$a == 2)
    echo $a . "<br/>";
  elseif (++$a == 1)
    echo $a . "<br/>";
  else 
    echo "no match!";
  
  $a = 0;
  
  switch (++$a)
  {
    case (3):
      echo $a . "<br/>";
      break;
    case (2):
      echo $a . "<br/>";
      break;
    case (1):
      echo $a . "<br/>";
      break;
    default:
      echo "No match!";
  }
?>