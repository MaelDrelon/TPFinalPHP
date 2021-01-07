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
//Début d'enegistrement des valeurs
try 
    {      
        if(isset($_POST['oldNom'])) 
        {
            if ((!empty($_POST['oldNom']))	&& (!empty($_POST['oldPrenom'])) && (!empty($_POST['newNom'])) && (!empty($_POST['newPrenom'])))
            {
                //Début UPDATE
                $req ="UPDATE `Eleves` SET `Nom`= ('".$_POST['newNom']."'), `Prenom`= ('".$_POST['newPrenom']."') WHERE('".$_POST['oldNom']."') = `Nom` AND ('".$_POST['oldPrenom']."') = `Prenom`";
                Insert($req);
                //Fin UPDATE
            }
        }
    } 
//Fin d'enregistrement des valeurs
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
<!-- Début Formulaire -->
  <p>Entrez les valeurs de l'élève à modifier:</p>
 <form method="post">
    <p>Vieux Nom: <input type="text" name="oldNom" /></p>
	<p>Vieux Prénom: <input type="text" name="oldPrenom" /></p>  
 
 <p>Entrez les nouvelles valeurs:</p>
    <p>Nouveau Nom: <input type="text" name="newNom" /></p>
	<p>Nouveau Prénom: <input type="text" name="newPrenom" /></p> 
    <p><input type="submit" value="Envoyer"/></p>     
 </form>
 <!-- Fin formulaire -->
</div>
</div>
</body>