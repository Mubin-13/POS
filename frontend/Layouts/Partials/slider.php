<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
$dataslide = file_get_contents($datasource .'slideritems.json');
$slides = json_decode($dataslide, "ture");
// dd($slides);
?>


<div class="carousel-indicators">
<?php 
      $active = '';
      foreach($slides as $key=>$slide):
        if(0 == $key){
          $active = 'active';
        }else{
          $active='';
        }
      ?>

    <button type="button" 
            data-bs-target="#carouselExampleCaptions" 
            data-bs-slide-to="<?=$key?>" 
            class="<?=$active?>" 
            aria-current="true" 
            aria-label="Slide 1">
    </button>
    <?php
        endforeach
    ?>
  </div>
  <div class="carousel-inner">
  <?php 
      foreach($slides as $key=>$slide):
        if(0 == $key){
          $active = 'active';
        }else{
          $active='';
        }
      ?>
    <div class="carousel-item <?=$active?>">
      <img src="<?=$slide['src']?>" class="d-block w-100" alt="<?=$slide['alt']?>">
      <div class="carousel-caption d-none d-md-block">
        <h5><?=$slide['title']?></h5>
        <p><?=$slide['caption']?></p>
      </div>
    </div>
<?php
  endforeach
?>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>