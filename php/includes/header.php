<?php 
$gallery = "Sloane Gallery";
include("config.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title><?php 
  if(isset($page) == TRUE){
    echo $gallery." | ".ucfirst($page);
  } else {
    echo $gallery;
  } 
  ?></title>
  <link href="<?php echo BASE_URL; ?>stylesheets/reset.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo BASE_URL; ?>stylesheets/normalize.css" rel="stylesheet" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="<?php echo BASE_URL; ?>stylesheets/defult.css.css" rel="stylesheet" type="text/css" />
<?php 
      if($page == "index" || $page == "artists" || $page == "artist" ||$page == "shows" 
        || $page == "contact" || $page == "about"){
        echo '<link href="'.BASE_URL.'stylesheets/'.$page.'.css" rel="stylesheet" type="text/css" />'; // index style file
      } 

       echo '<style type="text/css">
          html { 
            background: url('.BASE_URL.'images/bg'.rand(1,4).'.jpg) no-repeat center center fixed; 
            background-color: #d6d6d6;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
              }
        </style>';

?>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>scripts/browser-compatibility.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>scripts/sticky.js"></script>
  
 </head>
 <body>
  <header class="header">
   <div class="headerContainer gridContainer">
    <div class="logo logo_align">
     <img class="image" alt="Sloane Logo" src="<?php echo BASE_URL; ?>images/Sloane_Logo.png" />
    </div>
    <div class="menu_unit_wrapper">
     <div class="menu menu_align">
      <nav class="clearfix">
       <ul class="hmenubar1_list">
        
        <li <?php if ($page == "artists" || $page == "artist"){echo'class="item"';} ?>><a <?php if ($page == "artists" || $page == "artist"){echo'class="clicked"';} ?> href="<?php echo BASE_URL;?>artists/">Artists</a></li>
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
     <script type="text/javascript" src="<?php echo "../../"; ?>scripts/mobile_menu_selection.js"></script>
    </div>
  
   </div>
  </header>