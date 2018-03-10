<?php
  // Single line comment
  # Single line comment
  /* Multi
    line
    comment
  */
  # VARAIBLES
    /* 
      - Prefix with $
      - Start with a letter or underscore
      - Only letters, numbers and underscores -> case sensitive
    */

  # DATA TYPES
    /*
      - String -> wrapped in quotes
      - Integers 
      - Floats
      - Booleans
      - Arrays
      - Objects
      - NULL
      - Resource
    */
  $output = "Hello World!";
  $num1 = 4;
  $num2 = 10;
  $sum = $num1 + $num2;

  $string1 = "Hello";
  $string2 = "Max";
  $greeting = $string1 ." ". $string2."!";
  $greeting2 = "$string1 $string2";

  $string3 = "They're here";
  $string4 = 'They\'re here';

  $float1 = 4.4;
  $bool1 = true;
  echo $output;
  echo $sum;
  echo $greeting;
  echo $greeting2;
  echo $string3;
  echo $string4;

  # CONSTANTS -> make them uppercase
    # if you define them with uppercase and call them with lowercase add a third parametar to define("", "", true) 
  define("GREETING", "Hello Everyone");
  echo GREETING;
?>