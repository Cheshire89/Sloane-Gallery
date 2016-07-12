<?php
$page = "books";
$title = "books";
$description = "Books available for sale from the Sloane Gallery of Art";
require_once("../php/includes/config.php");
require_once("booksFunctions.php");
include(ROOT_PATH.'php/functionList.php');
$books = selectQuery('select * from books');

$booksListHTML = "";
$keywords = ""; 
      foreach($books as $book){
            $booksListHTML .= '<div class="book" itemscope itemtype="http://schema.org/Book">
                   <div class="img">
                      <img src="img/'.$book["image"].'" alt="'.$book["title"].' by '.$book["author"].'"/>
                   </div>
                   <div class="info">
                      <ul>';
                        foreach ($book as $key => $value){
                            if($key == "price"){
                              $booksListHTML .= '<li><strong>'.ucfirst($key).':</strong>:  $'.$value.'</li>';
                            } elseif($key == "bkid" || $key == "image" || $value === 0 || !isset($value) || $value === 0){
                              continue;
                            } elseif($key == 'isbn'){
                              $booksListHTML .= '<li><strong>'.ucfirst($key).':</strong><span itemprop="isbn">'.$value.'</span></li>';
                              $keywords .= $value.", ";
                            }  elseif($key == "paypalId"){
                              $booksListHTML .= '<li>'.displayAddToCart($value).'</li>';
                            }elseif($key == "title"){
                              $booksListHTML .= '<li><strong>'.ucfirst($key).':</strong><span itemprop="name">'.$value.'</span></li>';
                              $keywords .= $value.", ";
                            }elseif($key == "year"){
                              $booksListHTML .= '<li><strong>'.ucfirst($key).':</strong><span itemprop="dateCreated">'.$value.'</span></li>';
                            }
                            else{
                              $booksListHTML .= '<li><strong>'.ucfirst($key).':</strong>  '.$value.'</li>';
                            }
                          }
                  $booksListHTML .=  '<ul></div></div>';      
        }

include(ROOT_PATH."php/includes/header.php");
?>
<section class="body">
   
   <form class="" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
    ">
    <span class="button -border checkout"><input type="submit" value="Checkout" border="0" name="checkout"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span> 
    </form>
   <div class="bodyContainer">

      <?php
          echo $booksListHTML;
       ?>
   </div>
</section>
<?php
include(ROOT_PATH.'php/includes/footer.php');
?>