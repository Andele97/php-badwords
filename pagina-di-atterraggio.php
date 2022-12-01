<?php
$name = $_POST['nome'];
$paragraph = $_POST['paragraph'];
$cens_string = str_replace($name , '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pagina di atterraggio</title>
  <style>

    .container{
      width: 50%;
      margin: auto;
      text-align: center;
      margin-top: 15%;
    }

  </style>
</head>
<body>

<div class="container">
<h2>Benvenuto/a <?php echo ucwords($name . ' ' . $lastname) ?> </h2> <br>
<p><?php echo $paragraph ?></p>
<p>la stringa è lunga <?php echo strlen($paragraph) ?> caratteri</p>

<h2>Benvenuto/a <?php echo ucwords($name)?></h2><br>
<p>la stringa è lunga <?php echo strlen($cens_string) ?> caratteri:</p>
<p><?php echo $cens_string ?></p>
</div>
  
</body>
</html>