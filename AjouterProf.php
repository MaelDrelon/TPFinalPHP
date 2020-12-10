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
try 
    {
        
        if(isset($_POST['Nom'])) 
        {
            if ((!empty($_POST['Nom'])) && (!empty($_POST['Prenom'])))
            {
                $req ="INSERT INTO `Prof`(`Nom`,`Prenom`) VALUES('".$_POST['Nom']."','".$_POST['Prenom']."')";
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
<p>Entrez les valeurs du Professeur :</p>
<form action="" method="post">
    <p>Nom: <input type="text" name="Nom" /></p>
    <p>Prenom: <input type="text" name="Prenom" /></p>
    <p><input type="submit" /></p>        
</form>