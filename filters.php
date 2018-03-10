<?php
/*
  // Check for posted data
  if(filter_has_var(INPUT_POST, "data")) {
    echo "Data Found";
  } else {
    echo "No Data Found";
  }
*/
/*
  // Check if email is valid
  if(filter_has_var(INPUT_POST, "data")) {
    $email = $_POST["data"];
    // Remove illegal chars
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email."<br>";

    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Email is valid";
    } else {
      echo "Email is invalid";
    }
  }
*/
  ## ALL VALIDATION TYPES
  # FILTER_VALIDATE_BOOLEAN
  # FILTER_VALIDATE_EMAIL
  # FILTER_VALIDATE_FLOAT
  # FILTER_VALIDATE_INT
  # FILTER_VALIDATE_IP
  # FILTER_VALIDATE_REGEXP
  # FILTER_VALIDATE_URL

  ## SANITIZE TYPES
  # FILTER_SANITIZE_EMAIL
  # FILTER_SANITIZE_ENCODED
  # FILTER_SANITIZE_NUMBER_FLOAT
  # FILTER_SANITIZE_NUMBER_INT
  # FILTER_SANITIZE_SPECIAL_CHARS
  # FILTER_SANITIZE_STRING
  # FILTER_SANITIZE_URL

  // INT VALIDATION
  /*
  $var = 23;
  if(filter_var($var, FILTER_VALIDATE_INT)) {
    echo "$var is a number";
  } else {
    echo "$var is not a number";
  }
  */
  
  // SANITAZE INT
  $var = "33hgdsjgklsj4wj54ojlgs";
  var_dump(filter_var($var), FILTER_SANITIZE_NUMBER_INT);

?>

<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
  <input type="text" name="data">
  <button type="submit">Submit</button>
</form>