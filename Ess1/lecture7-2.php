<?php
  // find if x is even then get the root of x if is odd x power 2
  $x = 71;
  if (($x % 2) === 0)
  {
    echo $x ** .5;
  } elseif (($x % 2) !== 0) {
    echo $x * $x;
  }
?>