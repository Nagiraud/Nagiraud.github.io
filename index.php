<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
  <p>Bjour</p></br>
  <?php echo 'Bjour 2';
  try{
    $Po = "SELECT idR 
           FROM rolesutilisateurprojet 
           WHERE IdU = 2";
  }
  catch (PDOException $e){
    echo 'Bjour 2784487747';
  }?>
</body>
</html>