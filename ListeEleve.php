<?php 
include "fonction.php";
menu();
try 
{
  $maBase= new PDO('mysql:host=192.168.65.227; dbname=TPFinalPHPRabasteDrelon; charset=utf8','mael', '');
  $reponse = $maBase->query('SELECT `Nom`,`Prenom`,`Classe` FROM `Eleves`');
  while ($donnees = $reponse->fetch())
{    
        
?>
<head>
  <link rel="stylesheet" href="index.css">
</head>

<body>
<div class=conteneur>
    <p>Nom de l'élève: <?php echo $donnees['Nom']; ?></p>
    <p>Prenom de l'élève: <?php echo $donnees['Prenom']; ?></p>
    <p>Sa classe: <?php echo $donnees['Classe']; ?></p>
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
</body>
