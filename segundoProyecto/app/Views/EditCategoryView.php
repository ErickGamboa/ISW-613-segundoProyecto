<!DOCTYPE html>
<html lang="en">
<head>
<a href="categoriesMain.php"><img class = "logotypePosition" src="<?php echo base_url('images/Logotype.png') ?>"/></a>
<title>Edit</title>
<link rel="stylesheet" href="<?php echo base_url('css/Style.css') ?>" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<body>


<form method="POST" action="<?php echo base_url('/updateCategory') ?>">
<div class = "categorieEditConteiner">  
<div><h3>Category</h3></div>
<input name = "nameCategorieEdit" type="text" class="form-control"   placeholder="Name" value = <?php echo $category['nameCategory'] ?>>
<br>
<button name = "update" type="submit" class="btn btn-primary">Update</button>
<input type="hidden" name="id" value="<?php echo $category['id']; ?>">
</div>

</body>
</html>
