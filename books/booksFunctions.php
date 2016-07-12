<?php
function displayAddToCart($id){	
	$button = '<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="'.$id.'">
				<span class="button -border btn_books"><input type="submit" value="Add to Cart" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<i class="fa fa-plus-circle" aria-hidden="true"></i></span>
			  </form>';
    return $button;
}
?>