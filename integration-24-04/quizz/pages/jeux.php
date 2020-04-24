Joueur
<?php
is_connect();

echo $_SESSION['user']['nom'] ;
echo"<br>";
echo $_SESSION['user']['prenom'] ;



?>
<br>
<a href="index.php?statut=logout">Se Déconnecter</a>







