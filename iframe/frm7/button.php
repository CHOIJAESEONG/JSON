<?php
	include_once("../../include/header.php");
	if (isset($_REQUEST['is_ifr'])){$is_ifr = $_REQUEST['is_ifr'];}else{$is_ifr = '';}
	
	
	echo "
		<style>.views{padding-bottom:50px;}</style>
	";
?>

<script src="<?=WEBPATH?>js/frm7.min.js"></script>
<link href="<?=WEBPATH?>css/frm7.ios.min.css" rel="stylesheet">
<link href="<?=WEBPATH?>css/frm7.ios.colors.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?=WEBPATH?>css/frm7-icons.css">
<div class="views">
<div class="view view-main">
<div class="pages">
<div data-page="home" class="page navbar-fixed">
<div class="navbar">
<div class="navbar-inner">
<div class="left"> </div>
<div class="center">Buttons</div>
<div class="right"> </div>
</div>
</div>
<div class="page-content">
<div class="content-block-title">Usual Buttons</div>
<div class="content-block">
<p> <a href="#" class="button">Usual Button 1</a></p>
<p> <a href="#" class="button">Usual Button 2</a></p>
<p> <a href="#" class="button">Usual Button 3</a></p>
</div>
<div class="content-block-title">Active Button</div>
<div class="content-block">
<p> <a href="#" class="button active">Active Button</a></p>
</div>
<div class="content-block-title">Round Buttons</div>
<div class="content-block">
<p> <a href="#" class="button button-round">Round Button 1</a></p>
<p> <a href="#" class="button button-round">Round Button 2</a></p>
<p> <a href="#" class="button button-round active">Round Button Active</a></p>
</div>
<div class="content-block-title">Big Buttons</div>
<div class="content-block">
<p> <a href="#" class="button button-big">Big Button </a></p>
<p> <a href="#" class="button button-big button-round">Big Round Button </a></p>
<p> <a href="#" class="button button-big button-round active">Big Round Active Button </a></p>
</div>
<div class="content-block-title">Buttons Row / Segmented Controller</div>
<div class="content-block">
<p class="buttons-row"> <a href="#" class="button">Button 1</a><a href="#" class="button">Button 2</a><a href="#" class="button">Button 3</a></p>
<p class="buttons-row"> <a href="#" class="button active">Button 1</a><a href="#" class="button">Button 2</a><a href="#" class="button">Button 3</a></p>
<p class="buttons-row"> <a href="#" class="button button-round">Button 1</a><a href="#" class="button button-round">Button 2</a></p>
<p class="buttons-row"> <a href="#" class="button button-round">Button 1</a><a href="#" class="button button-round active">Button 2</a></p>
</div>
<div class="content-block-title">Fill buttons </div>
<div class="content-block">
<p><a href="#" class="button button-fill">Fill Button </a></p>
<p><a href="#" class="button button-round button-fill">Round Fill Button</a></p>
<p><a href="#" class="button button-big button-fill">Big Fill Button </a></p>
</div>
<div class="content-block-title">Color buttons</div>
<div class="content-block">
<p class="buttons-row theme-pink"> <a href="#" class="button active">Button 1</a><a href="#" class="button">Button 2</a><a href="#" class="button">Button 3</a></p>
<p class="buttons-row theme-orange"> <a href="#" class="button">Button 1</a><a href="#" class="button active">Button 2</a><a href="#" class="button">Button 3</a></p>
<p><a href="#" class="button button-fill color-green">Green</a></p>
<p><a href="#" class="button button-fill color-red button-round">Round Red</a></p>
<p><a href="#" class="button button-big button-fill color-gray">Big Gray</a></p>
<p><a href="#" class="button button-fill button-big color-yellow">Big Yellow</a></p>
</div>
<div class="content-block-title">List block buttons</div>
<div class="list-block">
<ul>
<li><a href="#" class="item-link list-button">List Button 1</a></li>
<li><a href="#" class="item-link list-button">List Button 2</a></li>
<li><a href="#" class="item-link list-button">List Button 3</a></li>
</ul>
</div>
<div class="content-block-title">Inset list block buttons</div>
<div class="list-block inset">
<ul>
<li><a href="#" class="item-link list-button">List Button 1</a></li>
<li><a href="#" class="item-link list-button">List Button 2</a></li>
<li><a href="#" class="item-link list-button">List Button 3</a></li>
</ul>
</div>
<div class="content-block-title">Using Grid</div>
<div class="content-block">
<div class="row">
<div class="col-50"><a href="#" class="button button-big button-fill color-red">Cancel</a></div>
<div class="col-50"><a href="#" class="button button-big button-fill color-green">Submit</a></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script>var myApp = new Framework7();</script>
</body>
</html>