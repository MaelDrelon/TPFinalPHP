<?php
    function menu(){
?>
  <p>
    <nav>
      <ul>
        <li class="deroulant"><a href="">Eleves &ensp;</a>
          <ul class="sous">
            <li><a href="ListeEleve.php">Liste Eleves</a></li>
            <li><a href="AjouterEleve.php">Ajouter Eleve</a></li>
          </ul>
        </li>
        <li class="deroulant"><a href="">Professeurs &ensp;</a>
          <ul class="sous">
            <li><a href="ListeProf.php">Liste Professeurs</a></li>
            <li><a href="AjouterProf.php">Ajouter Professeur</a></li>
          </ul>
        </li>
        <li class="deroulant"><a href="">Classes</a>
          <ul class="sous">
            <li><a href="ListeClasse.php">Liste Classes</a></li>
            <li><a href="AjouterClasse.php">Ajouter Classe</a></li>
          </ul>
        </li>
        <li><a href="#">A propos</a></li>
      </ul>
    </nav>
  </p>
<?php
    }
?>