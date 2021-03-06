<!DOCTYPE html>
<html lang="en">
<head>
<a href="<?php echo site_url('/login') ?>"><img class = "logotypePosition" src="<?php echo base_url('images/Logotype.png') ?>"></a>
<title>Register</title>
<link rel="stylesheet" href="<?php echo base_url('css/Style.css') ?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<?php
 $message= NULL;
 session_start();
 if(isset($_SESSION['message'])){
    $message = $_SESSION['message'];
}
?>

<body>

<form method="POST" action = "<?php echo site_url('/saveUser') ?>" >
  <div class = "registerConteiner">  
  <div><h1>Register User</h1></div>
  <div class="mb-3">
    <input name = "name"  class="form-control"   placeholder="Firts Name">
    <input name = "lastName" class="form-control"  placeholder="Last Name" >
</div>

<div class="mb-3">
    <input name = "email"  class="form-control"   placeholder="Email Address">

    <input name = "password" type="password"  class="form-control"  placeholder="Password">
</div>

<div class="mb-3">
    <input name = "address"  class="form-control"   placeholder="Address">

    

<div class="mb-3">
<select name = "country" class="form-select" aria-label="Default select example">
<option value="" disabled selected hidden>Country</option>
<?php
/** API que consume los paises del mundo */
$response = json_decode(file_get_contents("https://countriesnow.space/api/v0.1/countries/states"));
for($i =0; $i<count($response->data); $i++){
    $pais = $response->data[$i]->name;
    echo "<option value=\"$pais\">$pais</option>";
} 
?>
</select>
    <input name = "city"  class="form-control"  placeholder="City">
</div>


<div class="mb-3">

</div>

<div class="mb-3">
    
    <input name = "postalCode"  class="form-control"   placeholder="Postal Code" type="number">

    <input name = "phoneNumber"  class="form-control"  placeholder="Phone Number" type="number">

    
</div>

<div class="mb-3">

<select name = "typeUser" class="form-select" aria-label="Default">
    <option value="" disabled selected hidden>Type of User</option>
    <option value="Administrator" >Administrator</option>
    <option value="Client" >Client</option>
    </select>


</div>


<button name = "registerButton" type="submit" class="btn btn-primary">Sign up</button>
<br>
<br>
<div id="messageLogin" class="labelMessage">
    <?php 
        echo $message;
        unset($_SESSION['message']);
    ?></div>

</form>
</div>


</body>
</html>
