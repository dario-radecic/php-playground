<?php

  if (isset($_GET["name"])) {
    $name = htmlentities($_GET["name"]);
  }
  //echo $name;
  /*
  if (isset($_POST["name"])) {
    //$name = htmlentities($_POST["name"]);
  }
  if (isset($_REQUEST["name"])) {
    print_r($_REQUEST);
    $name = htmlentities($_REQUEST["name"]);
    echo $name;
  }
  */
  //echo $_SERVER["QUERY_STRING"];
?>

<!DOCTYPE html>
<head>
  <title>My Website</title>
</head>
<body>
  <form method="GET" action="get_post.php">
    <div>
      <label>Name</label><br>
      <input type="text" name="name">
    </div>
    <div>
      <label>Email</label><br>
      <input type="text" name="email">
    </div>
    <input type="submit" value="Submit">
  </form>
  <ul>
    <li><a href="get_post.php?name=Brad">Brad</a></li>
    <li><a href="get_post.php?name=Steve">Steve</a></li>
  </ul>
  <?php echo "{$name}'s Profile"; ?>
</body>
</html>