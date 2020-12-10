<?php 
include "fonction.php";
menu();
try 
{
  $maBase= new PDO('mysql:host=192.168.65.227; dbname=TPFinalPHPRabasteDrelon; charset=utf8','mael', '');
  $reponse = $maBase->query('SELECT `Nom` FROM `Classe`');
  while ($donnees = $reponse->fetch())
{    
        
?>
<head>
  <link rel="stylesheet" href="index.css">
</head>

<body>
    <p>
    <p>Nom de la classe: <?php echo $donnees['Nom']; ?></p>
    </p>
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