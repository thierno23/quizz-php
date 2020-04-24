<?php
     if(isset($_POST["button_submit"])){
         $login=$_POST["login"];
         $password=$_POST["password"];
           $result=  connexion($login, $password);
           if($result=="error"){
               echo " Login ou Mot de Passe incorret";
           }else{
               header("location:index.php?lien=".$result);
           }
     }
?>



<div class="container">
    <div class="container-header">
        <div class="title">Login Form</div>
    </div>
    <div class="container-body">
        <form action="" method="post" id="form-connexion" >
    
            <div class="input-form">
                <div class="icon-form  icon-form-login"></div>
                <input type="text" name="login" class="form-control" error="error-1" placeholder="Login"  id="">
                <div class="error-form" id="error-1"></div>
            </div>

            <div class="input-form">
                <div class="icon-form  icon-form-password"></div>
                <input type="password" name="password" class="form-control" error="error-2" placeholder="Password"  id="">
                <div class="error-form" id="error-2"></div>
            </div>

            <div class="input-form">
                <button type="submit" name="button_submit" class="button-form" id="">Connexion</button>
               <a href="./pages/compte.php" class="link-form">S'inscrire pour jouer ?</a>
            </div>
        </form> 

     </div>      
</div>

<script>
    const inputs= document.getElementsByTagName("input");
    for(input of inputs){
        input.addEventListener("keyup",function(e){
          if( e.target.hasAttribute("error")) {
            var idDivError=e.target.getAttribute("error") ;
            document.getElementById(idDivError).innerText=""
          }
        })
     }

document.getElementById("form-connexion").addEventListener("submit",function(e){
   const inputs= document.getElementsByTagName("input");
   var error=false ;
     for(input of inputs){
        if(input.hasAttribute("error")){
           var idDivError=input.getAttribute("error") ;
                 if(!input.value){
                    document.getElementById(idDivError).innerText="Ce champs est obligatoire"
                    error=true
                 }
            
         }
     }

if(error){
    e.preventDefault();
    return false
}
     
       
})



</script>
