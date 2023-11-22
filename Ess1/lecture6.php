<?php
 
  /* 
    if (condition satisfaied) then
      execute this 
    otherwise
      execute this
  */
  
  $x = 0;
  if ($x <= 0) 
  {
    echo "Hello World! ";
    $x++;
  }
  
  if ($x != 0) 
    echo "Hi ";
  else
    echo "World ";
  
	$x = 12;
  $y = 8;
  if ($x+$y >= 15)
    echo "Hello ";
    echo "In";
    $x++;
  if ($x>=10)
    echo "$x";
  else
    echo ++$x;
  echo $x;
  
  
?>