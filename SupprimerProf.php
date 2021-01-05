<?php 
include "fonction.php";
menu();
function Insert($req)
{
    try
    {
        $maBase= new PDO('mysql:host=192.168.65.227; dbname=TPFinalPHPRabasteDrelon; charset=utf8','mael', '');
        $dataBrute = $maBase->query($req);
        if(!$dataBrute)
        {
            die('<p style="color:#FF0000";>impossible d’effectuer cet enregistrement : vérifiez</p>');
        }
        else
        {
            echo "<p style='color:#027C0D'>L’enregistrement a était effectuer </p>";
        }  
    }
    catch(Exception $e)
    {
        echo 'Erreur : '.$e ->getMessage(); 
        die('<p style="color:#FF0000";>impossible d’effectuer cet enregistrement : vérifiez</p>');
    }  
}
try 
    {      
        if(isset($_POST['Nom'])) 
        {
            if ((!empty($_POST['Nom']))	&& (!empty($_POST['Prenom'])))
            {
                $req ="DELETE FROM `Prof` WHERE ('".$_POST['Nom']."') = `Nom` AND ('".$_POST['Prenom']."') = `Prenom` ";
                Insert($req);
            }
        }
    } 
    catch (Exception $erreur)
    {
        die ('Erreur : '.$erreur ->getMessage());
    }
?>

<head>
  <link rel="stylesheet" href="index.css">
</head>
<body>
<div class=fond>
<div class=conteneur>

  <p>Entrez les valeurs de l'élève à supprimer:</p>
 <form method="post">
    <p>Nom: <input type="text" name="Nom" /></p>
	  <p>Prénom: <input type="text" name="Prenom" /></p>  
    <p><input type="submit" value="Envoyer"/></p> 
 </form>
</div>
</div>
</body>