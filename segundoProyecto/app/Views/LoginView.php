<!DOCTYPE html>
<html lang="en">
<head>
<img class = "logotypePosition" src="<?php echo base_url('images/Logotype.png') ?>">
<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href= "<?php echo base_url('css/Style.css') ?>">
</head>

<?php
 // include('functions.php');
?>

<body>
    
<form method="POST" action = "<?php echo site_url('/authentication') ?>" >
<div class = "loginConteiner">  
  <div><h1>User Login</h1></div>
  <div class="mb-3">
    <input name = "EmailLogin" type="email" class="form-control"   placeholder="Email address">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <input  name = "PasswordLogin" type="password" class="form-control"  placeholder="Password">
  </div>    
  <button name = "LoginButton" type="submit" class="btn btn-primary">Login</button>
  <br>
  <div>If you don´t have an account <a href="<?php echo base_url('register') ?>">Signup here</a></div>
</form>
</div>


<?php

//if (isset($_POST["LoginButton"])) 
//{
//$ResultAuthenticate = authenticate(credentials(),"EmailLogin","PasswordLogin");
//if ($ResultAuthenticate == true ){
 // session_start();
  //$_SESSION['user'] = $ResultAuthenticate;
  //if($ResultAuthenticate[10]== "Administrator"){
 // header('Location: categoriesMain.php');
 // }else if ($ResultAuthenticate[10]== "Client"){
 // header('Location: dashboardNews.php');
 // }
//}else {
//  echo '<script>alert("CREDENCIALES INVÁLIDOS")</script>';
//}}

  ?>



</body>
</html>
