<?php 

  # Array -> Variable that holds multiple values
    /*
      - Indexed
      - Associative
      - Multi-dimensional
    */
  
  # INDEXED
  $people = array("Kevin", "Jeremy", "Sara");
  $ids = array(23, 55, 12);
  $cars = ["Honda", "Toyota", "Ford"];

  $cars[3] = "Chevy";
  $cars[] = "BMW";

  //echo count($cars); # -> prints the array
  //print_r($cars); # -> prints the array with data types
  //var_dump($cars);

  //echo $ids[2];
  //echo $people[1];
  //echo $cars[4];


  # ASSOCIATIVE
  $people = array("Brad" => 35, "Jose" => 32, "William" => 37);
  $idds = [22 => "Brad", 44 => "Jose", 63 => "William"];
  //echo $people["Brad"];
  //echo $idds[22];

  $people["Jill"] = 42;
  //echo $people["Jill"];
  //print_r($people);
  //var_dump($people);


  # MULTI-DIMENSIONAL
  $cars = array(
    array("Honda", 20, 10),
    array("Toyota", 30, 20),
    array("Ford", 23, 12)
  );
  echo $cars[1][2];

?>