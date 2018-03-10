<?php

/*
  echo date("d"); # Day
  echo date("m"); # Month
  echo date("Y"); # Year
  echo date("l"); # Day of the week
  echo "<br>";

  echo date("Y/m/d");
*/
/*
  echo date("h"); # Hour
  echo date("i"); # Min
  echo date("s"); # Seconds
  echo date("a"); # AM or PM
*/

  //echo date("h:i:sa")

  $timestamp = mktime(10, 14, 54, 9, 10, 1981); # hours, minutes, seconds, month, day, year
  //echo($timestamp);
  //echo date("m/d/Y", $timestamp);

  $timestamp2 = strtotime("7:00pm March 22 2016");
  //echo($timestamp2);
  echo date("m/d/Y h:i:sa", $timestamp2);

  $timestamp3 = strtotime("tomorrow");
  $timestamp4 = strtotime("next Sunday");
  $timestamp5 = strtotime("+2 Months");
  echo "<br>";
  echo date("m/d/Y h:i:sa", $timestamp3);

?>