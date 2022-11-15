<?php
   session_start();
   @$login=$_POST["login"];
   @$pass=md5($_POST["pass"]);
   @$valider=$_POST["valider"];
   $message="";
   if(isset($valider)){
      include("./sessions/connexion.php");
      $sel=$connexion->prepare("SELECT * from users where login=? and pass=? limit 1");
      $sel->execute(array($login,$pass));
      $tab=$sel->fetchAll();
      if(count($tab)>0){
         $_SESSION["prenomNom"]=ucfirst(strtolower($tab[0]["prenom"])).
         " ".strtoupper($tab[0]["nom"]);
         $_SESSION["autoriser"]="oui";
         header("location:./pages/acceuil.php");
      }
      else
         $erreur="Mauvais login ou mot de passe!";
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/cf6fa412bd.js"> </script>
</head>
<body>
  
<div id="best">
        <div class="buttonsForm">
                <div class="btnColor">  
                <button id="btnSignin"> Connexion </button> 
                </div>  
        </div>
            <form action="" method="POST" id="signin">
                <input type="text" name="login" id="login" placeholder="Login" required/>
                <i class="fas fa-user iLogin"> </i>
                <input type="password" name="pass" id="pass" placeholder="Password" required/>
                <i class="fas fa-lock  iPassword"> </i>
                <input type="submit" name="valider" id="valider" value="Connectez-Vous!">
                <p text-align="justify"> 
                  <h4>
                       <a href="./pages/authentification.php"> S'inscrire</a> 
                    </h4>
                </p>
            </form>
    </div>
    <?php if(!empty($message)){?>
  <div id="message"><?php echo $message?></div>
  <?php } ?> 

  <style>
    @import url(
    'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&display=swap');
*{
    margin: 0;
    padding: 0%;
    box-sizing: border-box;
    font-family: 'poppins',sans-serif;
}
body {
    width: 100vw;
    height: 100vh;
    display: flex;
    align-items:center;
    justify-content: center;

}

#best{
    background:linear-gradient(45deg,#e2a9e5 40%,#2b94e5 60%);
    padding: 6px;
    width:400px;
    height: 400px;
    display:flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    overflow:hidden;
    border-radius: 10px;
    box-shadow:0 0 20px darkgrey;
    margin-top: 100px;

}
form{ 
    position: relative;
    margin-top: 20px;
    transition:.5s;
    width: 250px;
    height: 300px;
}

.buttonsForm{
    margin-top:30px ;
    position: relative;
    border-radius: 30px;
    box-shadow: 0 0 7px 0 blueviolet;
}
.buttonsForm button {
    background-color:#e2a9e5;
    border:none;
    border-radius: 30px;
    position:relative;
    padding:10px 29px;
    cursor: pointer;
}
input[type="text"],input[type="password"]{
    border:none;
    margin-top:40px;
    border-radius:60px;
    padding:8px 0 8px 35px;
    outline: none;
    width:100%;
} 
input[type="submit"] {
    background-color:#2b94e5;
    color:black;
    border-radius:30px;
    width:100%;
    border:none;
    outline:none;
    padding:8px 0 8px 15px;
    font-size: 15px;
    margin-top:40px;
    cursor:pointer;
}
i{
    position: absolute;
    left:0;
    padding:10px 10px;
}
.iLogin{
    top:40px;
}
.iPassword{
    top:114px;
}
       </style>
</body>
</html>