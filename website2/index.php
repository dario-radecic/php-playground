<?php include "server-info.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>System Info</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Server &amp; File Info</h1>
    <?php if($server): ?>
      <ul class="list-group">
        <?php foreach($server as $key => $value): ?>
          <li class="list-group item">
            <strong><?php echo $key; ?>: </strong>
            <?php echo $value; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>


  <h1>Client info</h1>
    <?php if($client): ?>
      <ul class="list-group">
        <?php foreach($client as $key => $value): ?>
          <li class="list-group item">
            <strong><?php echo $key; ?>: </strong>
            <?php echo $value; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>
  
</body>
</html>