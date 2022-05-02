<!DOCTYPE html>
<html lang="en">
<head>
<img class = "logotypePosition" src="<?php echo base_url('images/Logotype.png') ?>">
<title>Category</title>
<link rel="stylesheet" href="<?php echo base_url('css/Style.css') ?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<body>

<form method="POST" action = "<?php echo site_url('/logout') ?>" >

<div class = "logoutButtonPosition">
<button name = "LogoutButton" type="submit" class="btn btn-primary">Logout</button>
</div>

</form>




<form method="POST" action = "<?php echo site_url('/saveCategory') ?>" >


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
    foreach ($category as $categoryy):
    ?>
    <tr>
    <td><?php echo $categoryy ['id'] ?></td>
      <td><?php echo $categoryy ['nameCategory'] ?></td>


      <td>
        

      <a href="<?php echo base_url('deleteCategory/'.$categoryy ['id']);?>" class="btn btn-primary">Delete

      </a>

      <a href="<?php echo base_url('editCategory/'.$categoryy ['id']);?>" class="btn btn-primary">Edit

      </a>

      

      
    
    </td>

    </tr>
    <?php
    endforeach;
    ?>
    </tbody>
  </table>
    </div>

</form>





</body>
</html>