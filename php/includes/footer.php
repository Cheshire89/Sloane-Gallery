 <footer class="footer">
   <div class="footerContainer">
    	<h2 class="heading"> Sloane Gallery of Art | 1777 Larimer St Unit 102B Denver, CO 80202 | (303)595 4230 | <?php echo "&copy;".date("Y"); ?> </h2>

   </div>
  </footer>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>scripts/browser-compatibility.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>scripts/sticky.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>scripts/mobile_menu_selection.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<?php 
  if($page === "artists"){
   echo '<script type="text/javascript" src="'.BASE_URL.'scripts/mouse_over.js"></script>';
  } elseif ($page === "work") {
   echo '<script type="text/javascript" src="'.BASE_URL.'scripts/slick/slick.min.js"></script>';
  }
?>
 </body>

</html>