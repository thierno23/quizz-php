<?php
require_once('../traitement/fonctions.php');

if(isset($_POST['submit'])){

    $user['login']=$_POST['login'];
    $user['nom']=$_POST['nom'];
    $user['prenom']=$_POST['prenom'];
    $user['password']=$_POST['password'];
    $user['ficher']=$_POST['ficher'];

    if (log_existe($user['login'])) {
        echo " Ce login Existe déja";
    }else{
        enregistrement($user);
        header('location:../index.php');
    }

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ei=edge">
    <title>création compte</title>
    <link rel="stylesheet" href="compte.css">
</head>

<body> 

<div class="h">
   <div class="log"> </div>
   <div class="h-text">Le Plaisir de Jouer</div>
</div>   
<div class="contenu">
    <div class="white-block">
  
        <div class="text">
    <h2>S'INSCRIRE</h2>
    <p style="font-family:arial;" >Pour tester votre niveau de culture générale</p>
       </div>
    <hr>
    <div class="img">
    <img src="img5.jpg" alt="" id="avatar" style="width:260px; height:260px; border-radius:50%" value="<?php if(isset($_POST['fichier'])){echo $_POST['fichier'];}?>">
    <p>Avatar du joueur<p>
    </div>
    <form method="POST" enctype="multipart/form-data" id="form-joueur">
        <div  class="blok">
                    <label>Prénom</label>
                    <br>
					<input type="text" name="prenom" id="prenom" class="prenom" placeholder="Aaaaa">
                    <br>
                    <label>Nom</label>
                    <br>
					<input type="text" name="nom"id="nom" class="nom" placeholder="BBBBB">
                    <br>
                    <label>Login</label>
                    <br>
                    <input type="text" name="login" id="login" class="login" placeholder="aabaab">
                    <br>
                    <label>Password</label>
                    <br>
                    <input style="border: 2px solid  #51BFD0;" type="password" name="password" id="password" class="password">
                    <br>
                    <label>Confirmer Password</label>
                    <br>
					<input style="border: 2px solid  #51BFD0;" type="password" name="confpass" id="confpass" class="confpass">
                
					<h4>Avatar</h4>
					<label for="file"></label>
                    <input input type="file" name="fichier" id="fichier"  accept="image/*" onchange="loadFile(event)"
                     syle="background-color:#51BFD0;" class="file" >
                     <br>
                     <br>
                     <br>
                     <br>
                     <br>
                     <br>
                     <br>
                     <br>
                    <div class="bas">
                    <input type="submit" name="submit" value="Créer un Compte" class="submit">
                    </div>
			</div>
					
	</form>
 </div>
</div>

</body>
<script  type="text/javascript" src="js/quizzcreation.js"></script>
<script>
var loadFile = function(event) {
    var avatar = document.getElementById('avatar');
    avatar.src = URL.createObjectURL(event.target.files[0]);
    avatar.onload = function() {
      URL.revokeObjectURL(avatar.src) 
    }
  };
</script>