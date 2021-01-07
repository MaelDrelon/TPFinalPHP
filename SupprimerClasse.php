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
        if(isset($_POST['Classe'])) 
        {
            if ((!empty($_POST['Classe'])))
            {
                //Début DELETE
                $req ="DELETE FROM `Classe` WHERE ('".$_POST['Classe']."') = `Nom`";
                Insert($req);
                //Fin DELETE
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
<p>Entrez les valeurs de la classe à supprimer:</p>
<form method="post">
<select name="Classe" >
<?php
  $resultat = $maBase->query('SELECT * FROM `Classe` ');
  while ($donnees = $resultat->fetch())
  {
    echo '<option>'.$donnees['Nom']."".'</option>';
  }
 ?>
</select>
<p><input type="submit" value="Envoyer"/></p> 
</form>
<!-- Fin formulaire -->
</div>
</div>
</body>