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
<div>
    Nom de l'élève: <?php echo "<p>".$donnees['Nom']."</p>"; ?>
    Prenom de l'élève: <?php echo "<p>".$donnees['Prenom']."</p>"; ?>
    Sa classe: <?php echo "<p>".$donnees['Classe']."</p>"; ?>
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
