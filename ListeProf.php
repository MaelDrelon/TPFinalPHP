<?php 
include "fonction.php";
menu();
?>

<head>
  <link rel="stylesheet" href="index.css">
</head>
<div class=fond>

<?php
try 
{
  $maBase= new PDO('mysql:host=192.168.65.227; dbname=TPFinalPHPRabasteDrelon; charset=utf8','mael', '');
  $reponse = $maBase->query('SELECT `Nom`,`Prenom` FROM `Prof`');
  while ($donnees = $reponse->fetch())
{           
?>

<body>
<div class=conteneur>
  <hr width=100% noshade size=8>
  <p>Nom du Professeur: <?php echo $donnees['Nom']; ?></p>
  <p>Prenom du Professeur: <?php echo $donnees['Prenom']; ?></p>
  <hr width=100% noshade size=8>
</div>

<?php
        }
        $reponse->closeCursor();
    } 

catch (Exception $erreur)
    {
        die ('Erreur : '.$erreur ->getMessage());
    }
  
    ?>

</div>
</body>