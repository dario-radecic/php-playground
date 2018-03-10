<?php

  # substr()
    # Returns a portion of a string
  $output = substr("Hello", 1);
  echo $output; # -> ello
  echo "<br>";
  $output = substr("Hello", 1, 3);
  echo $output; # -> ell
  echo "<br>";
  $output = substr("Hello", -2);
  echo $output; # -> lo

  # strlen()
    # Returns the length of a string
  $output = strlen("Hello world");
  echo "<br>";
  echo $output;

  # strpos()
    # Find the position of the first occurence of a sub string
  echo "<br>";
  $output = strpos("Hello World", "o");
  echo $output;

  # strpos()
    # Find the position of the last occurence of a sub string
  echo "<br>";
  $output = strrpos("Hello World", "o");
  echo $output;

  #trim ()
    # Strips whitespace
  $text = "Hello world                  ";
  echo "<br>";
  var_dump($text);
  $trimmed = trim($text);
  echo "<br>";
  var_dump($trimmed);

  # strtoupper()
    # Makes everything uppercase
  $output = strtoupper("Hello World");
  echo "<br>";
  echo $output;

  # strtolower()
    # Makes everything lowercase
  $output = strtolower("Hello World");
  echo "<br>";
  echo $output;

  # ucwords()
    # Capitalize every word
  $output = ucwords("hello world");
  echo "<br>";
  echo $output;

  # str_replace()
    # Replace all occurences of a search string with a replpacement
  $text = "Hello World";
  $output = str_replace("World", "Everyone", "$text");
  echo "<br>";
  echo $output;

  # is_string()
    # Checks if string
  $val = "Hello";
  $output = is_string($val);
  echo "<br>";
  echo $output; # -> 1 if string, noting if not
  $values = array(true, false, null, "abc", 33, "33", 22.4, "22.4", "", " ", 0, "0");
  foreach($values as $value) {
    if(is_string($value)) {
      echo "{$value} is a string<br>";
    }
  }

  # gzcompress()
    # Compress a string
  $string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, cumque. Eius repellendus consequatur officiis cumque nisi laudantium aliquid rem alias culpa, ratione qui earum inventore harum, neque, possimus fugiat fuga. Tempora voluptatem id incidunt repellendus illo, voluptatum harum nisi sit velit esse. Repellendus cumque adipisci iusto! Distinctio eaque quo praesentium ad quis reiciendis rerum quam, nesciunt quisquam esse doloribus dignissimos laudantium culpa sunt. At veritatis veniam beatae maiores est ducimus voluptates eos aliquid natus commodi dolore obcaecati ipsa et, nemo odit vero tempora iusto totam officiis adipisci voluptas eaque! Dolores repellendus quis omnis similique, esse impedit fuga dolor ab consequuntur.";
  $compressed = gzcompress($string);
  echo "<br>";
  echo $compressed;
  $original = gzuncompress($compressed);;
  echo "<br>";
  echo $original;


?>