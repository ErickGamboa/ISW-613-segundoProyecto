<!DOCTYPE html>
<html lang="en">
<head>
<img class = "logotypePosition" src="<?php echo base_url('images/Logotype.png') ?>">
<title>News Sources</title>
<link rel="stylesheet"href= "<?php echo base_url('css/Style.css') ?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<body>

<form method="POST" action = "<?php echo site_url('/logout') ?>" >

<div class = "logoutButtonPosition">
<button name = "LogoutButton" type="submit" class="btn btn-primary">Logout</button>
</div>

</form>

<form method="POST" action = "<?php echo site_url('/NewSourcesView') ?>">

<div class = "nSourcestButtonPosition">
<button name = "nSorucestButtonPosition" type="submit" class="btn btn-primary">News Sources</button>
</div>

</form>

<div class="dashboarButtonsPosition">
<div class="btn-group">
  <button name = "portadaButton" type="submit" class="btn btn-primary">Portada</button>



  <?php
  foreach($info as $source):
    ?>
    <a href="<?php //echo base_url('link/'.$source['categorySource'])?>" class="btn btn-primary"><?php echo $source['categorySource']?>
</a>

    <?php
    endforeach;
    ?>

</div>
</div>


</form>



<div class="content">

<?php




$url = "https://feeds.feedburner.com/crhoy/wSjk" ;



 if(isset($_POST['submit'])){
   if($_POST['feedurl'] != ''){
     $url = $_POST['feedurl'];
   }
 }

 $invalidurl = false;
 if(@simplexml_load_file($url)){
  $feeds = simplexml_load_file($url);
 }else{
  $invalidurl = true;
  echo "<h2>Invalid RSS feed URL.</h2>";
 }


 $i=0;
 if(!empty($feeds)){

  $site = $feeds->channel->title;
  $sitelink = $feeds->channel->link;

  echo "<h2>".$site."</h2>";
  foreach ($feeds->channel->item as $item) {

   $title = $item->title;
   $link = $item->link;
   $description = $item->description;
   $postDate = $item->pubDate;
   $pubDate = date('D, d M Y',strtotime($postDate));


   if($i>=5) break;?>
   
   <div class="post">
     <div class="post-head">
       <h2><a class="feed_title" href="<?php echo $link;?>"><?php echo $title;?></a></h2>
       <span><?php echo $pubDate;?></span>
     </div>
     <div class="post-content">
       <?php echo implode(' ', array_slice(explode(' ', $description), 0, 20)) . "...";?><a href="<?php echo $link;?>">Read more</a>
     </div>
   </div>
   

<?php
    $i++;
   }
 }else{
   if(!$invalidurl){
     echo "<h2>No item found</h2>";
   }
 }
 
 ?>


</div>

</body>
</html>