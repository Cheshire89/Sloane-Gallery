<?php 
$page = "index";
include('/php/includes/header.php');
include('/php/includes/listOfportraits.php');
?>

  <section class="body">
   <div class="bodyContainer" id="photos">
      
      <?php 
          foreach($listOfPortraits as $portrait){
            $length = count($portrait);
            $alt = substr($portrait, 8,$length-4);
            echo '<img src="'.$portrait.'" alt="'.$alt.'"/>';
          }
      ?>

   </div>
  </section>

<?php
include('/php/includes/footer.php');
?>


