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
  $reponse = $maBase->query('SELECT `Nom`,`Prenom`,`Classe`,`NumEleves` FROM `Eleves`');
  while ($donnees = $reponse->fetch())
{        
?>

<body>
<div class=conteneur>
    <hr width=100% noshade size=8>
    <p>Nom de l'élève: <?php echo $donnees['Nom']; ?></p>
    <p>Prenom de l'élève: <?php echo $donnees['Prenom']; ?></p>
    <p>Sa classe: <?php echo $donnees['Classe']; ?></p>
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
