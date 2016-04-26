<?php 
$gallery = "Sloane Gallery";
include("config.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title><?php 
  if(isset($title) == TRUE){
    echo $gallery." | ".ucfirst($title);
  } else {
    echo $gallery;
  } 
  ?></title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta http-equiv="content-script-type" content="text/javascript">
  <meta http-equiv="content-style-type" content="text/css">
  <meta http-equiv="content-language" content="en">
  <meta name="author" content="Aleksandr Antonov">
  <meta name="keywords" content="Sloane Gallery, Art Gallery, Art, Russian, Contemporary">
  <meta name="robots" content="index, follow">
  <meta name="revisit-after" content="7 days">
  <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
  <link rel="shortcut icon" href="<?php echo BASE_URL; ?>images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo BASE_URL; ?>images/favicon.ico" type="image/x-icon">
  <link href="<?php echo BASE_URL; ?>stylesheets/reset.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo BASE_URL; ?>stylesheets/normalize.css" rel="stylesheet" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="<?php echo BASE_URL; ?>stylesheets/defult.css.css" rel="stylesheet" type="text/css" />
<?php 
    if($page == "index" || $page == "artists" || $page == "artist" ||$page == "shows" 
      || $page == "contact" || $page == "about" || $page == "work"){
      echo '<link href="'.BASE_URL.'stylesheets/'.$page.'.css" rel="stylesheet" type="text/css" />'; // index style file
    } 

    if($page == "work"){
      echo '<link href="'.BASE_URL.'scripts/slick/slick-theme.css" rel="stylesheet" type="text/css" />';
      echo '<link href="'.BASE_URL.'scripts/slick/slick.css" rel="stylesheet" type="text/css" />';
    }
    echo '<style type="text/css">
          html { 
            background: url('.BASE_URL.'images/bg'.rand(1,4).'.jpg) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
          }
          </style>';
?>
 </head>
 <body
 <?php
  if($page === "about"){
    echo 'onload="slider();"';
  }
?>
 >
  <header class="header">
   <div class="headerContainer gridContainer">
    <div class="logo logo_align">
     <img class="image" alt="Sloane Logo" src="<?php echo BASE_URL; ?>images/Sloane_Logo.png" />
    </div>
    <div class="menu_unit_wrapper">
     <div class="menu menu_align">
      <nav class="clearfix">
       <ul class="hmenubar1_list">
        
        <li <?php if ($page == "artists" || $page == "artist" || $page == "work"){echo'class="clicked"';} ?>><a <?php if($page == "artists" || $page == "artist"){echo 'class="active"';} ?>href="<?php echo BASE_URL;?>artists/">Artists</a></li>
        <li <?php if ($page == "shows"){echo'class="item"';} ?>><a <?php if ($page == "shows"){echo'class="clicked"';} ?> href="<?php echo BASE_URL;?>shows/">Shows</a></li>
        <li <?php if ($page == "publications"){echo'class="item"';} ?>><a <?php if ($page == "publications"){echo'class="clicked"';} ?> href="<?php echo BASE_URL;?>publications/">Publications</a></li>
        <li <?php if ($page == "about"){echo'class="item"';} ?>><a <?php if ($page == "about"){echo'class="clicked"';} ?> href="<?php echo BASE_URL;?>about/">About</a></li>
        <li <?php if ($page == "contact"){echo'class="item"';} ?>><a <?php if ($page == "contact"){echo'class="clicked"';} ?> href="<?php echo BASE_URL;?>contact/">Contact</a></li>
        
       </ul>
       <select>
        <option value="" selected="">MENU</option>
       </select>
       <script type="text/javascript" src="<?php echo BASE_URL; ?>scripts/menu_selection.js"></script>
      </nav>
     </div>
    </div>
    <div class="mobile_menu">
     <select>
      <option value="#">MENU</option>
      <option value="#">----------------------------------</option>
      <option value="#">Artists</option>
      <option value="#">Shows</option>
      <option value="#">Publications</option>
      <option value="#">About</option>
      <option value="#">Contact</option>
     </select>
    </div>
  
   </div>
<?php
if($page === 'about'){
  echo'<script type="text/javascript">
  var slideImages = new Array();
  slideImages[0] = new Image();
  slideImages[0].src = "img/slide1.jpg";
  slideImages[1] = new Image();
  slideImages[1].src = "img/slide2.jpg";
  slideImages[2] = new Image();
  slideImages[2].src = "img/slide3.jpg";
  </script>';
}
?>
  </header>