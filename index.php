<?php 
$page = "index";
$title = "Home";
require_once('php/includes/config.php');
include('php/listOfportraits.php');
include('php/functionList.php');
$description = "Sloane Gallery of Art Contemporary Art Denver CO. Represents World Famous Russian Artists since 1981";
$keywords = ", Home, Page, Artists, Preview";
include('php/includes/header.php');

?>

  <section class="body">
   <div class="bodyContainer" id="photos">
   <div id="info-container" itemprop="description">
        <p>Open since 1981, the Sloane Gallery, founded by Mina Litinsky, 
        is located in historic district of lower downtown (LoDo) Denver, 
        CO U.S.A. . The gallery is internationally recognized as one of 
        the major dealers in Contemporary and Modern Russian Art.</p>
        <p>The gallery represents more than fifty artists including Russian, 
        Russian-American and artists from other republics of the former 
        Soviet Union. Among them are such masters as Alexander Anufriev, 
        Gleb Bogomolov, Erik Boulatov, Genia Chef, Mihail Chemiakin, Igor 
        Galanin, Alexander Isachev, Ilya Kabakov, Viatcheslav Kalinin, Ketevan, 
        Marc Klionsky, Vitaly Komar, Komar &amp; Melamid, Alexander Kosolapov, 
        Yuri Krasny, Roman Kriheli, Alexander Melamid, Lev Meshberg, Ernst 
        Neizvestny, Vladimir Nemukhin, Alexander Ney, Shimon Okshteyn, Oskar
         Rabine, Alek Rapoport, Alexander Rikhter, Albert Shvilly, Ilya Shenker, 
         Leonid Sokov, Tengiz, Igor Tiulipanov, Oleg Tselkov, Oleg Vassiliev, 
         Vladimir Yakovlev, Eugene Yelchin and Anatoly Zverev.</p>
        <p>The Sloane Gallery shows works in different artistic styles such as 
        Surrealist, Political, Conceptual, Avant-Garde, Abstract, and Sots Art. 
        Works of many gallery artists are part of the permanent public collections 
        of the Metropolitan Museum of Art N.Y., The Guggenheim Museum, N.Y., 
        MOMA, N.Y., The Centre Georges Pompidou, Paris, Pushkin Museum, Moscow, 
        and many other major museums throughout the world.
        </p>
      </div>
      
      <?php 
        foreach ($artists as $artist) {
          $container = '<div class="artistPortrait">';
          $container .= '<figure class="effect-apollo">';
          $container .= '<img src="'.$artist["img"].'" alt="'.$artist["title"].'">';
          $container .= '<figcaption>
                         <h2>'.wrapLastNameSpan($artist["title"]).'</h2>';
          $container .= '<a href="'.$artist["link"].'"></a>';
          $container .= '</figcaption></figure>';
          $container .= '</div>';
          echo $container;
        }
      ?>




   </div>
  </section>

<?php
include('php/includes/footer.php');
?>


