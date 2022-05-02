
<!DOCTYPE html>
<html lang="en">
<head>
<a href=<?php echo site_url('/dashboard') ?>><img class = "logotypePosition" src="<?php echo base_url('images/Logotype.png') ?>"></a>
<title>News Sources</title>
<link rel="stylesheet" href="<?php echo base_url('css/Style.css') ?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<?php


?>

<body>

<form method="POST" action = "<?php echo site_url('/logout') ?>" >

<div class = "logoutButtonPosition">
<button name = "LogoutButton" type="submit" class="btn btn-primary">Logout</button>
</div>

</form>

<form method="POST" action = "<?php echo site_url('/saveNewsSources') ?>" >

<div class = "categorieAddConteiner">  
<div><h3>News Source</h3></div>
<input name = "nameSource" type="text" class="form-control"   placeholder="Name">
<br>
<input name = "url" type="text" class="form-control"   placeholder="RSS URL">
<br>

<select name = "category" class="form-select" aria-label="Default select example">
<option value="" disabled selected hidden>Category</option>

<?php


foreach ($info[0] as $categories):
  foreach ($categories as $categoryy):
    $categoryyy = $categoryy ['nameCategory'];
    echo "<option value=\"$categoryyy\">$categoryyy</option>";
  endforeach;
endforeach;
?>
</select>
<br>
<button name = "saveNewSource" type="submit" class="btn btn-primary">Save</button>
</div>


</form>


<div class = "tableCategoriesPosition">

<div><h3>Categories</h3></div>

<div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    <tbody>

    <?php
      foreach ($info[1] as $sources):
        foreach ($sources as $source):  
    ?>
    <tr>
    <td><?php echo $source ['nameSource'] ?></td>
      <td><?php echo $source ['categorySource'] ?></td>


      <td>
        

      <a href="<?php echo base_url('deleteSource/'.$source ['id']);?>" class="btn btn-primary">Delete

      </a>


      <a href="<?php echo base_url('editSource/'.$source ['id']);?>" class="btn btn-primary">Edit

      </a>


      

      

      
    
    </td>

    </tr>
    <?php
    endforeach;
    endforeach;
    ?>
    </tbody>
  </table>
    </div>

</form>


</body>
</html>