<!DOCTYPE html>
<html lang="en">
<head>
<a href="newSources.php"><img class = "logotypePosition" src="<?php echo base_url('images/Logotype.png') ?>"/></a>
<title>Edit</title>
<link rel="stylesheet" href= "<?php echo base_url('css/Style.css') ?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<body>


<form action="<?php echo base_url('/updateSource') ?>" method="POST">
<?php
 
      foreach ($info[0] as $sources):
            $id=$sources['id'];
            $name= $sources['nameSource'];
            $categorySelected=$sources['categorySource'];
        endforeach;
    ?>
<div class = "categorieEditConteiner">  
<input type="hidden" name="idEditSource" value="<?php echo $id; ?>">
<div><h3>News Source</h3></div>
<input name = "nameNewsSource" type="text" class="form-control"   placeholder="Name" value = <?php echo $name ?>>
<br>


<select name = "categoryNewsSource" class="form-select" aria-label="Default select example" >
<option value= <?php echo $categorySelected?>> <?php echo $categorySelected?> </option>



   <?php
        foreach ($info[1] as $categories):
            foreach ($categories as $category): 
                $categoryyy = $category ['nameCategory']; 
                echo "<option value=\"$categoryyy\">$categoryyy</option>";
            endforeach;
        endforeach;

                

            
    ?>

</select>


<br>
<button name = "save" type="submit" class="btn btn-primary">Update</button>
</div>

</body>
</html>
