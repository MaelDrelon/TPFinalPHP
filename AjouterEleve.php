<?php
include "fonction.php";
menu();
$maBase= new PDO('mysql:host=192.168.65.227; dbname=TPFinalPHPRabasteDrelon; charset=utf8','mael', '');
function Insert($maBase,$req)
{
    try
    {
        $dataBrute = $maBase->query($req);
        if(!$dataBrute)
        {
            die('<p style="color:#FF0000";>impossible d’ajouter cet enregistrement : vérifiez</p>');
        }
        else
        {
            echo "<p style='color:#027C0D'>L’enregistrement est ajouté </p>";
        }
    }
    catch(Exception $e)
    {
        echo 'Erreur : '.$e ->getMessage(); 
        die('<p style="color:#FF0000";>impossible d’ajouter cet enregistrement : vérifiez</p>');
    }  
}
//Début d'enregistrement des valeurs donnée dans le formulaire
try 
    {      
        if(isset($_POST['Nom'])) 
        {
            if ((!empty($_POST['Nom']))	&& (!empty($_POST['Prenom'])) && (!empty($_POST['Classe'])))
            {
                //Début INSERT
                $req ="INSERT INTO `Eleves`( `Nom`, `Prenom`,`Classe`) VALUES('".$_POST['Nom']."','".$_POST['Prenom']."','".$_POST['Classe']."')";
                Insert($maBase,$req);
                //Fin INSERT
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
<!-- Début du formulaire -->
<p>Entrez les valeurs de l'élève :</p>
 <form action="" method="post">
    <p>Nom: <input type="text" name="Nom" /></p>
	<p>Prénom: <input type="text" name="Prenom" /></p>        
    <p>Classe: <select name="Classe" >

               <?php
               $resultat = $maBase->query('SELECT * FROM `Classe` ');
               while ($donnees = $resultat->fetch())
               {
                   echo '<option>'.$donnees['Nom']."".'</option>';
               }
               ?>

               </select></p>
    <p><input type="submit" value="Envoyer"/></p>        
</form>
<!-- Fin formulaire -->
</div>
</div>
</body>