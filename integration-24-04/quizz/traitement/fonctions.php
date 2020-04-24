<?php
function connexion($login,$password){
    $users=getData();
    foreach ($users as $key => $user) {
       
        if($user["login"]===$login && $user["password"]===$password){
            $_SESSION['user']=$user;
            $_SESSION['statut']=$login;

            if($user["profil"]==="admin"){
                return "accueil" ;
            }else{
                return "jeux" ;
            }
        }
    } 

    return "error" ;
}
function is_connect(){
    if(!isset($_SESSION['statut'])){
        header("location:index.php");
    }
}

function log_existe($login){
    $data=file_get_contents('../data/utilisateur.json');
    $data_decode=json_decode($data,true);
    foreach ($data_decode as $value) {
        if ($value['login']==$login) {
            return TRUE;
        }
    }
    return FALSE;
}

function enregistrement($user){
    $data=file_get_contents('../data/utilisateur.json');
    $data_decode=json_decode($data,true);
    $data_decode[]=$user;
    $data_encode=json_encode($data_decode);
    file_put_contents('../data/utilisateur.json',$data_encode);
}

function deconnexion(){
      unset($_SESSION['user']);
      unset($_SESSION['statut']);
      session_destroy();
      
}

function getData($file="utilisateur"){
         $data=file_get_contents("./data/".$file.".json");
         $data=json_decode($data,true);
         return $data ;
}
?>