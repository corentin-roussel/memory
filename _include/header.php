<?php if(isset($_SESSION['login'])) {  ?>
<a class="link" href="index.php">Accueil</a>
<a class="link" href="jeux.php">Memory</a>
<a class="link" href="score.php">Score</a>
<a class="link" href="profil.php">Profil</a>
<a class="link" href="deconnexion.php">Déconnexion</a>
<?php }else{  ?>
<a class="link" href="index.php">Accueil</a>
<a class="link" href="inscription.php">Inscription</a>
<a class="link" href="connexion.php">Connexion</a>
<?php } ?>