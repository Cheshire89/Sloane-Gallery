<?php
$page = "books";
$title = "books";
require_once("../php/includes/config.php");
include(ROOT_PATH."php/includes/header.php");

include(ROOT_PATH.'php/includes/functionList.php');
include(ROOT_PATH.'php/includes/displayLargePreview.php');

$books = selectQuery('select * from books');



?>
<section class="body">
   <button type="button" class="button -border checkout" name="addToCart" value="Add to Cart">Checkout &nbsp;<i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
   <div class="bodyContainer">

      <?php 
      $myfile = fopen("listofBooks.txt", "w");
      foreach($books as $book){
            echo '<div class="book">
                   <div class="img">
                      <img src="img/'.$book["image"].'" alt="'.$book["title"].' by '.$book["author"].'"/>
                   </div>
                   <div class="info">
                      <ul>';
                       $listItem = '';
                        foreach ($book as $key => $value){
                          if($key == "price"){
                            echo '<li><strong>'.ucfirst($key).':</strong>:  $'.$value.'</li>';
                          } elseif($key == "bkid" || $key == "image" || $value === 0 || !isset($value) || $value === 0){
                            continue;
                          } else{
                            echo '<li><strong>'.ucfirst($key).':</strong>  '.$value.'</li>';
                          }

                         
                          $listItem .= $value.', ';
                        }
        

                  echo '<li>
                          <button type="button" class="button -border center" name="addToCart" value="Add to Cart">Add to Cart &nbsp;<i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                        </li>
                      <ul>
                   </div>
                 </div>';
                 
                 
                 fwrite($myfile, $listItem."\n\n");
        }    
       ?>
      
   </div>

</section>

<?php
include(ROOT_PATH.'php/includes/footer.php');
?>