<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
  <style>

    form{
      width: 50%;
    }
  
    textarea{
      width: 20%;
      height: 150px;
    }

  </style>
</head>
<body>

  
<form action="./pagina-di-atterraggio.php" method="POST">
  <input type="text" name="nome" placeholder="Nome e Cogome"> <br>
  <textarea name="paragraph" placeholder="Scrivi qualcosa.."></textarea>
  <button type="submit">Invia</button>
</form>

</body>
</html>