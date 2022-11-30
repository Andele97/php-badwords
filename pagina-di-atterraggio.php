<?php
$name = $_GET['nome'];
$lastname = $_GET['cognome'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pagina di atterraggio</title>
</head>
<body>

<h1>
  Benvenuto/a <?php echo ucwords($name . ' ' . $lastname) ?> <br>
  la stringa è lunga <?php echo strlen($name . ' ' . $lastname) ?> caratteri
</h1>

<h2>
Benvenuto/a <?php echo ucwords($name . ' ' . $lastname) ?>
</h2>
  
</body>
</html>