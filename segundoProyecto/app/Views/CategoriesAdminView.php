<!DOCTYPE html>
<html lang="en">
<head>
<img class = "logotypePosition" src="<?php echo base_url('images/Logotype.png') ?>">
<title>Category</title>
<link rel="stylesheet" href="<?php echo base_url('css/Style.css') ?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<body>
<?php// print_r($category);?>
<form method="POST" action = "<?php echo site_url('/saveCategory') ?>" >

<div class = "logoutButtonPosition">
<button name = "LogoutButton" type="submit" class="btn btn-primary">Logout</button>
</div>


<div class = "categorieAddConteiner">  
<div><h3>Category</h3></div>
<input name = "nameCategorie" type="text" class="form-control"   placeholder="Name">
<br>
<button name = "saveCategrieButton" type="submit" class="btn btn-primary">Save</button>
</div>


<div class = "tableCategoriesPosition">

<div><h3>Categories</h3></div>

<div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    <tbody>

    <?php
    //$query = "SELECT * FROM categories";
    //$excutingQuery = mysqli_query(credentials(),$query);
    //while ($row = mysqli_fetch_array($excutingQuery)){
    ?>
    <tr>
    <td><?php //echo $row ["id"] ?></td>
      <td><?php //echo $row ["category"] ?></td>


      <td>
        

      <a href="editCategory.php?id=<?php //echo $row["id"]?>" class="btn btn-primary">Edit

      </a>

      <a href="deleteCategory.php?id=<?php //echo $row["id"]?>" class="btn btn-primary">Delete

      </a>

      

      
    
    </td>

    </tr>
    <?php
    //}
    ?>
    </tbody>
  </table>
    </div>

</form>


  



  <?php

   // if (isset($_POST["saveCategrieButton"])) {

     // if(empty($_POST['nameCategorie'])) {

     //   echo '<script>alert("DEBES COLOCARLE NOMBRE A LA CATEGORÍA")</script>';
     //   }
    //  else{

      //  saveCategorie(credentials(),"nameCategorie");
      //  header('Location: categoriesMain.php');
      //  }
     // }

    //if (isset($_POST["LogoutButton"])) {
    //    session_start();
    //    session_destroy();
     //   header('Location: login.php');
     // }
      
      
    

  ?>



</body>
</html>