<?php 
$page = "index";
require_once('/php/includes/config.php');
include('/php/includes/header.php');
include('/php/includes/listOfportraits.php');
?>

  <section class="body">
   <div class="bodyContainer" id="photos">
      
      <?php 
          foreach($listOfPortraits as $key => $portrait){
            $length = count($listOfPortraits);
            $alt = substr($portrait, 8,$length-4);
            echo '<img src="'.$portrait.'" alt="'.$alt.'"/>';
          }
      ?>

   </div>
  </section>

<?php
include('/php/includes/footer.php');
?>


