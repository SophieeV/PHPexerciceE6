<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exerciceE4</title>
</head>
<body>
<?php
if (isset($_GET['language']) AND isset($_GET['serveur']))
{
		echo htmlspecialchart('vous êtes sur le serveur ' .$_GET['serveur'] . ' en ' . $_GET['language'] . ' !<br />);
}
else
{
   echo 'serveur et langue non valide !';
}
?> 
    
</body>
</html>


<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo htmlspecialchars($_POST['prenom']); ?> !</p>