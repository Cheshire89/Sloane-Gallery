<?php 
$page = "404";
$title = "Page Not Found";
require_once('php/includes/config.php');
include('php/functionList.php');
$description = "Our appologies. Page could not be found";
$keywords = "404";
include('php/includes/header.php');
?>

  <section class="body">
   <div class="bodyContainer" id="photos">
      <h1>Sorry (404)</h1>
      <h4>Looks like something went wrong</h4>
      <h4>Please head to our artists page.</h4>
      <h4>For the list of represented artists &amp; available works.</h4>
      <?php
        echo '<a href="'.BASE_URL.'artists/">Go Back &nbsp; <span class="fa fa-rotate-left" aria-hidden="true"></span></a>';
      ?>

   </div>
  </section>

<?php
include('php/includes/footer.php');
?>


