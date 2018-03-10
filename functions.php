<?php

  # FUNCTION - Block of code that can be repeatedly called
  /* 
    Camel Case - myFunction()
    Lower Case - my_function()
    Pascal Case - MyFunction()
  */

  function simpleFunction() {
    echo "Hello World<br>";
  }
  simpleFunction();

  function sayHello($name = "World") {
    echo "Hello $name<br>";
  }
  sayHello("Joe");
  sayHello();


  function addNumbers($num1, $num2) {
    return $num1 + $num2;
  }

  addNumbers(2, 3);
  echo addNumbers(2, 3);

  // By Reference
  $myNum = 10;
  function addFive($num) {
    $num += 5;
  }

  function addTen(&$num) {
    $num += 10;
  }

  addFive($myNum);
  echo "$myNum<br>";

  addTen($myNum);
  echo "$myNum<br>";

?>