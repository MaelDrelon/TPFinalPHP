<?php 
include "fonction.php";
menu();
try 
{
  $maBase= new PDO('mysql:host=192.168.65.227; dbname=TPFinalPHPRabasteDrelon; charset=utf8','mael', '');
  $reponse = $maBase->query('SELECT `Nom`,`Prenom` FROM `Prof`');
  while ($donnees = $reponse->fetch())
{    
        
?>
<head>
  <link rel="stylesheet" href="index.css">
</head>

<body>
<div>
  Nom du Professeur: <?php echo "<p>".$donnees['Nom']."</p>"; ?>
  Prenom du Professeur: <?php echo "<p>".$donnees['Prenom']."</p>"; ?>
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