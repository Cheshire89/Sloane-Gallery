<?php
$page = "contact";
$title = "contact";
require_once("../php/includes/config.php");
include(ROOT_PATH."php/includes/header.php");
?>
<section class="body">
   <div class="bodyContainer">
	   <div id="general-info">
	   			<ul>
	   				<li><h4>Contact Information:</h4></li>
	   				<li><p> Mina Litinsky - Owner/Director </p></li>
	        		<li><p> Aleksandr Antonov - Assistant </p></li>
	        	</ul>
	        	<ul>
	        		<li><h4>Address:</h4></li>
	        		<li>
		        		<p> Sloane Gallery of Art</p>
						<p>1777 Larimer St Unit 102B<p>
						<p>Denver, CO 80202 - 1545</p>
						<p>U.S.A</p>
					</li><br/>
					<li><p>Tell: +1(303)595 4230</p></li>
					<li><p>Email: sloanegallery@hotmail.com</p></li>
				</ul>
				<ul>
					<li><h4>Gallery Hours:</h4></li>
					<li><p>Tuesday - Saturday: 11am - 7pm</p></li>
					<li><p>and by appointment at other times  </p></li>
	   			</ul>
	   		</div>

	   	<div id="map-holder" class="right">

	   		<div id="gallery-img" class="map-content">
	   			<img src="../about/img/slide1.jpg" onmouseout="this.src='../about/img/slide1.jpg'" onmouseover="this.src='../about/img/slide3.jpg'" alt="Gallery Artworks">
	   		</div>
	   		<div id="map" class="map-content">
	   		</div>
	   	</div>

   		<div id="contact-email" class="right">

	   		<form id="contact-form" method="POST" action="">
	   		<div class="field name-box">
		        <input type="text" id="name" name="name" placeholder="Ex:John Smith" required />
        		<label for="name">Name*</label>
		        <span class="glyphicon-ok"></span>
		        <span class="error"><?php if ($_SERVER["REQUEST_METHOD"] == "POST"){$name = setName($_POST["name"]);}?></span>
	      	</div>
	      	<div class="field name-box">
		        <input type="text" id="company" name="company" placeholder="Ex:Company Name"/>
        		<label for="name">Company</label>
		        <span class="glyphicon-ok"></span>
		        <span class="error"><?php if ($_SERVER["REQUEST_METHOD"] == "POST"){$name = setName($_POST["company"]);}?></span>
	      	</div>
	      	<div class="field name-box">
		        <input type="text" id="phone" name="phone" placeholder="Ex:(333)456 7890"/>
        		<label for="name">Phone</label>
		        <span class="glyphicon-ok"></span>
		        <span class="error"><?php if ($_SERVER["REQUEST_METHOD"] == "POST"){$name = setName($_POST["phone"]);}?></span>
	      	</div>

		      <div class="field email-box">
			        <input type="text" type="email" id="email" name="email" placeholder="Ex:Name@email.com" required />
			        <label for="email">Email*</label>
			        <span class="glyphicon-ok"></span>
			        <span class="error"><?php if ($_SERVER["REQUEST_METHOD"] == "POST"){$email = setEmail($_POST["email"]);}?></span>
		      </div>

	      <div class="field msg-box">
		        <textarea id="msg" rows="4" name="message" value="<?php echo $message;?>" placeholder="Ex:How may we assist you ?"/></textarea>
		        <label for="msg">Msg*</label>
		        <span class="glyphicon-ok"></span>
		        <span class="error"><?php if ($_SERVER["REQUEST_METHOD"] == "POST"){$message = setMessage($_POST["message"]);}?></span>
	      </div>
		  <div id="send">
	      	<input id="send_btn" class="button" type="submit" value="Send" />
	      </div>

	   		</form>	
   		</div>
   </div>
</section>

<?php
include(ROOT_PATH.'php/includes/footer.php');
?>