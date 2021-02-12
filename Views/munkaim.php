
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <meta name='robots' content='noindex,nofollow' />
  <link rel="icon" href="./Assets/images/logo.svg" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="/Assets/css/css.css" >
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Open+Sans&family=Open+Sans:wght@300&family=Srisakdi:wght@700&family=Roboto&family=Caveat&display=swap" rel="stylesheet">
  <style>
    
  </style>
</head>
<body>

<?php
include "common/navbar.php";
?>

<div class="big-picture-window" >
  <div class="picture-header" >
    <div class="close-ct" >
      <img src= "../Assets/images/close.svg">
    </div>
  </div>
  <div class="big-picture-ct" >
    <img src="../Assets/images/dekor/diszlet/d1.png" alt="Kép">
  </div>
</div>

<section class='section-basic section1' >
    <h2>Saját készítésű esküvői dekorációk</h2>
    <div class="dekor-ct">
      <?php 
        for ($i=1; $i<17; $i++ ){ 
          $imgSrc = "../Assets/images/dekor/diszlet/d".$i.".png";
      ?>
        <div class="img-ct" >
          <img src=<?=$imgSrc?> ></img>
        </div>
      <?php
      }
    ?>  
    <div>
</section>

<section class="section-basic section2">
    <h2>Köszönetajándékok</h2>
    <div class="ajandek-ct">
      <?php 
        for ($i=1; $i<7; $i++ ){ 
          $imgSrc = "/Assets/images/dekor/ajandek/a".$i.".png";
      ?>
        <div class="img-ct" >
          <img src=<?=$imgSrc?> ></img>
        </div>
      <?php
      }
    ?>  
    <div>
</section>

<section class="section-basic section3">
    <h2>Esküvői és menyecske ékszer</h2>
    <div class="ajandek-ct">
      <?php 
        for ($i=1; $i<3; $i++ ){ 
          $imgSrc = "/Assets/images/dekor/ekszer/e".$i.".png";
      ?>
        <div class="img-ct" >
          <img src=<?=$imgSrc?> ></img>
        </div>
      <?php
      }
    ?>  
    <div>
</section>

<?php
include "common/footer.php";
?>
<script src="../Scripts/script.js" >
</script>
</body>
</html>