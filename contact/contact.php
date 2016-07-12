<?php
$page = "contact";
$title = "contact";
require_once("../php/includes/config.php");

$description = "Contact page with address, map, and email form to keep in touch with Sloane Gallery of Art";
$keywords = " , contact, email, map, location, inquire";

include(ROOT_PATH."php/includes/header.php");
?>
<section class="body">
   <div class="bodyContainer">
       	<div id="contact" class="contact-container">
	   		<ul class="page">
	   			<li id="address"><a>Address</a></li>
	   			<li id="send"><a>Send Email</a></li>
	   		</ul>
	   		<div id="info" class="contact-block">
	   			<div id="general-info">
		   			<ul>
		   				<li><h4 id="first">Contact:</h4></li>
		   				<li><p itemscope itemtype="http://schema.org/Person"><span itemprop="name">Mina Litinsky</span> - <span itemprop="jobTitle">Owner/Director</span></p></li>
		        		<li><p itemscope itemtype="http://schema.org/Person"><span itemprop="name"> Aleksandr Antonov</span> - Assistant </p></li>
		        	</ul>
		        	<ul itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
		        		<li><h4>Address:</h4></li>
		        		<li itemprop="streetAddress">
			        		<p>Sloane Gallery of Art</p>
							<p>1777 Larimer St Unit 102B<p>
							<p><span itemprop="addressLocality">Denver</span>, 
							<span itemprop="addressRegion">CO</span> 
							<span itemprop="postalCode">80202-1545</span></p>
						</li><br/>
						<li><p>Tell: <span itemprop="telephone">+1(303)595 4230</span></p></li>
						<li><p>Email: <span itemprop="email">sloanegallery@hotmail.com</span></p></li>
					</ul>
					<ul>
						<li><h4>Gallery Hours:</h4></li>
						<li><p>Tuesday - Saturday: 11am - 7pm</p></li>
						<li><p>and by appointment at other times  </p></li>
		   			</ul>
	   			</div>
	   		</div>
	   		<div id="email" class="contact-block">
	   			<?php include("email.php"); ?>
	   		</div>
	   	</div>
	   	<div id="map" class="map-content" itemscope itemprop="hasMap" itemtype="http://schema.org/Map"></div>
</section>
<script type="text/javascript" src="map.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCF-N67li13yxETx0fnF8f-JAztGoeWF0c&callback=initMap"></script>
<?php include(ROOT_PATH.'php/includes/footer.php');?>
<script type="text/javascript" src="contact.js"></script>
<script type="text/javascript" src="validate.js"></script>