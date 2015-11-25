<?php 
$gallery = "Sloane Gallery";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title><?php echo $gallery." | ".ucfirst($page) ?></title>
  <link href="/stylesheets/normalize.css" rel="stylesheet" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="/stylesheets/defult.css.css" rel="stylesheet" type="text/css" />
<?php 
      if($page == "index" || $page == "artists" || $page == "shows" 
        || $page == "contact" || $page == "about"){
        echo '<link href="/stylesheets/'.$page.'.css" rel="stylesheet" type="text/css" />'; // index style file
      }

       echo '<style type="text/css">
          html { 
            background: url(/images/bg'.rand(1,4).'.jpg) no-repeat center center fixed; 
            background-color: #d6d6d6;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
              }
        </style>';

?>
  <script type="text/javascript" src="scripts/browser-compatibility.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="/scripts/sticky.js"></script>
  
 </head>
 <body>
  <header class="header">
   <div class="headerContainer gridContainer">
    <div class="logo logo_align">
     <img class="image" alt="Sloane Logo" src="images/Sloane_Logo.png" />
    </div>
    <div class="menu_unit_wrapper">
     <div class="menu menu_align">
      <nav class="clearfix">
       <ul class="hmenubar1_list">
        <li class="item"><a class="clicked" href="#" target="_self">Artists</a></li>
        <li><a href="#" target="_self">Shows</a></li>
        <li><a href="#">Publications</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#" target="_self">Contact<br/></a></li>
       </ul>
       <select>
        <option value="" selected="">MENU</option>
       </select>
       <script type="text/javascript" src="scripts/menu_selection.js"></script>
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
     <script type="text/javascript" src="scripts/mobile_menu_selection.js"></script>
    </div>
  
   </div>
  </header>