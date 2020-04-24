Admin
<?php
is_connect();

echo $_SESSION['user']['nom'] ;
echo $_SESSION['user']['prénom'] ;
echo $_SESSION['user']['login'] ;
echo $_SESSION['user']['profil'] ;
echo $_SESSION['user']['photo'] ;


?>
<br>
<a href="index.php?statut=logout">Se Déconnecter</a>