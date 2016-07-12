<?php 
 include(ROOT_PATH.'php/functionList.php');
 $workId= getWorkId();

  if(is_numeric($workId)){
    $artWork = selectQuery('select * from `art_works` WHERE work_id='.$workId);
    $artistName = selectQuery('select artist_name from artists WHERE artist_id='.$artWork[0]["artist"]);
  }

function parseArtWork($artWork, $artistName){
  $detailsList = "Hello,  &#13;&#10; &#13;&#10;";
  $detailsList .= "I am interested in a work by ".$artistName.".&#13;&#10;&#13;&#10;";
  $workDetails = "";
  foreach($artWork[0] as $key => $value){
        if($key != "work_id" && $key != "artist" && $value != "" && $key != "exception"){
            if($key === "size"){ 
              $workDetails .= $value .' in | ('.valueToCm($value).')'.' .';
            }elseif($key === "image" || $key === "category" || $key==="availability"){
              continue;
            }else{
              $workDetails .= ucwords($value).' , ';
            }
        }
  }
  
  return $detailsList.$workDetails;
}
?>
<div id="contact-form">
  <div class='container'>
  <form id="form" method="POST" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class='name'>
    <input name="name" class='first' placeholder='Full Name *' type='text' data-validation="length" data-validation-length="min3" required>
  </div>
  <div class='phone'>
    <input name="phone" class='telephone' placeholder='Telephone' type='text'>
  </div>
  <div class='contact'>
    <input name="email" data-validation="email" class='email' placeholder='E-mail Address *' type='text' required>
  </div>
  <div class='message'>
    <textarea name="message" data-validation="required" wrap="hard" cols="52" required><?php if(isset($_GET["workId"])){echo parseArtWork($artWork, $artistName[0]["artist_name"]);}?></textarea>
  </div>
  <footer id="contact-footer">
    <button type="submit" class="button -border">Send &nbsp; <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
  </footer>
  <?php

      if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $telephone = $_POST["phone"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        $messages = "Name: ".$name."\r\n Telephone: ".$telephone."\r\n E-mail: ".$email."\r\n Message: ".$message;

        $to = "sloanegallery@hotmail.com";
        $subject = "SGA Website";
       $header = 'From: '.$email.'\r\n'; 
       $header.= "Content-Type: text/plain; charset=utf-8\r\n"; 
       $header.= "X-Priority: 1\r\n"; 

       
          if(mail($to, $subject, $messages, $header)){
              echo '<div class="field sucess"><span id="set">Your message had been sent<span></div>'; 
          } else{
              echo '<div class="field fail"><span id="set">Something Went Wrong<span></div>';
          }
        
      }
  ?>
  </form>
</div>
</div>
    
