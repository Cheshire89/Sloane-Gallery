<?php
$colors =array("red","green","orange","blue","black","pink");
$colorLen = count($colors);
?>

<!DOCTYPE html>
<html>
<head>
  <link href="stylesheets/reset.css" rel="stylesheet" type="text/css" />
  <link href="stylesheets/normalize.css" rel="stylesheet" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<title></title>

<style type="text/css">
	.myDiv{float:left; width:150px; height:150px; margin:10px; display: none;}
  .myDiv img{width:100%; height: 100%;}
  .myDiv p{text-align: center; margin: 0px; padding: 0px;}
  .hidden{display: none;}
  .selected{display: block;}
  .myLink{margin:20px;}
  #prev{float: left;}
  #next{float: right;}
</style>

<script type="text/javascript">

</script>

</head>
<body style="display:inline-block; width:auto;">

<a id="prev" class="myLink" href="#">Prev</a>

<?php
$i =0;
while ($i != $colorLen) {
	echo '<div class="myDiv" style="background-color:'.$colors[$i].';">
        <img src="#" alt="'.$colors[$i].'"/><p>'.ucfirst($colors[$i]).'</p>
         </div>';
	$i++;
}
?>

<a id="next" class="myLink" href="#">Next</a>


<script type="text/javascript">

if(!$('.myDiv').first().hasClass('selected')){ //Set the first div to be visible
  $('.myDiv').first().addClass('selected');
}

var $first = $('.myDiv:first', 'body'),
    $last = $('.myDiv:last', 'body');

$("#next").click(function () {
 
    var $next,
        $selected = $(".selected");
    // get the selected item
    // If next  is empty , get the first
    $next = $selected.next('div').length ? $selected.next('div') :$first;
    $selected.removeClass("selected").fadeOut('slow');
    $next.addClass('selected').fadeIn('slow');
});

$("#prev").click(function () {
    var $prev,
        $selected = $(".selected");
    // get the selected item
    // If prev li is empty , get the last
    $prev = $selected.prev('div').length ? $selected.prev('div') : $last;
    $selected.removeClass("selected").fadeOut('slow');
    $prev.addClass('selected').fadeIn('slow');
});
</script>

</body>
</html>