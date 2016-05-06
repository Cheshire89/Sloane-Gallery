<?php 
$page = "index";
$title = "Home";
require_once('php/includes/config.php');
include('php/includes/header.php');
include('php/includes/listOfportraits.php');
?>

  <section class="body">
   <div class="bodyContainer" id="photos">
      
      <?php 
        foreach ($artists as $artist) {
          $container = '<div class="project">';
          $container .= '<a href="'.$artist["link"].'" target="_blank">';
          $container .= '<figure class="effect-chico">';
          $container .= '<img src="'.$artist["img"].'" alt="'.$artist["title"].'">';
          $container .= '<figcaption>
              <h2>'.$artist["title"].'</h2>';
          $container .= '</figcaption></figure>';
          $container .= '</a></div>';
          echo $container;
        }
      ?>




   </div>
  </section>

<?php
include('php/includes/footer.php');
?>


