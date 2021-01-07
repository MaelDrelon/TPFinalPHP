<?php
$maBase= new PDO('mysql:host=192.168.65.227; dbname=TPFinalPHPRabasteDrelon; charset=utf8','mael', '');
//Début Menu Déroulant
function menu(){
?>
  <p>
    <nav>
      <ul>
        <li class="deroulant"><a href="">Eleves &ensp;</a>
          <ul class="sous">
            <li><a href="ListeEleve.php">Liste Eleves</a></li>
            <li><a href="AjouterEleve.php">Ajouter Eleve</a></li>
            <li><a href="SupprimerEleve.php">Supprimer Eleve</a></li>
            <li><a href="UpdateEleve.php">Modifier Eleve</a></li>
          </ul>
        </li>
        <li class="deroulant"><a href="">Professeurs &ensp;</a>
          <ul class="sous">
            <li><a href="ListeProf.php">Liste Professeurs</a></li>
            <li><a href="AjouterProf.php">Ajouter Professeur</a></li>
            <li><a href="SupprimerProf.php">Supprimer Professeur</a></li>
            <li><a href="UpdateProf.php">Modifier Professeur</a></li>
          </ul>
        </li>
        <li class="deroulant"><a href="">Classes</a>
          <ul class="sous">
            <li><a href="ListeClasse.php">Liste Classes</a></li>
            <li><a href="AjouterClasse.php">Ajouter Classe</a></li>
            <li><a href="SupprimerClasse.php">Supprimer Classe</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </p>
<?php
    }
    //Fin Menu Déroulant
?>