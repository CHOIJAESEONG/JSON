<?php
	include_once("../../include/header.php");
	if (isset($_REQUEST['is_ifr'])){$is_ifr = $_REQUEST['is_ifr'];}else{$is_ifr = '';}
	
	
	echo "
		<style>.views{padding-bottom:50px;}</style>
	";
?>

<script src="<?=WEBPATH?>js/frm7.min.js"></script>
<link href="<?=WEBPATH?>css/frm7.material.min.css" rel="stylesheet">
<link href="<?=WEBPATH?>css/frm7.material.colors.min.css" rel="stylesheet">
<div class="views">
<div class="view view-main">
<div class="pages">
<div data-page="home" class="page navbar-fixed">
<div class="navbar">
<div class="navbar-inner">
<div class="center">Progress Bar</div>
</div>
</div>
<div class="page-content">
<div class="content-block-title">Determinate Progress Bar</div>
<div class="content-block">
<div class="content-block-inner">
<p>Inline determinate progress bar:</p>
<div class="demo-progressbar-inline">
<p><span data-progress="10" class="progressbar"></span></p>
<p class="buttons-row"><a href="#" data-progress="10" class="button button-raised">10%</a><a href="#" data-progress="30" class="button button-raised">30%</a><a href="#" data-progress="50" class="button button-raised">50%</a><a href="#" data-progress="100" class="button button-raised">100%</a></p>
</div>
<p>Inline determinate load & hide:</p>
<div class="demo-progressbar-load-hide">
<p style="height:2px"></p>
<p><a href="#" class="button button-raised">Start Loading</a></p>
</div>
<p>Overlay with determinate progress bar on top of the app:</p>
<p class="demo-progressbar-overlay"><a href="#" class="button button-raised">Start Loading</a></p>
</div>
</div>
<div class="content-block-title">Infinite Progress Bar</div>
<div class="content-block">
<div class="content-block-inner">
<p>Inline infinite progress bar</p>
<p><span class="progressbar-infinite"></span></p>
<p>Multi-color infinite progress bar</p>
<p><span class="progressbar-infinite color-multi"></span></p>
<p>Overlay with infinite progress bar on top of the app</p>
<p class="demo-progressbar-infinite-overlay"><a href="#" class="button button-raised">Start Loading</a></p>
<p>Overlay with infinite multi-color progress bar on top of the app</p>
<p class="demo-progressbar-infinite-multi-overlay"><a href="#" class="button button-raised">Start Loading</a></p>
</div>
</div>
<div class="content-block-title">Colored</div>
<div class="list-block">
<ul>
<li class="item-content">
<div class="item-inner">
<div data-progress="5" class="progressbar color-red"></div>
</div>
</li>
<li class="item-content">
<div class="item-inner">
<div data-progress="10" class="progressbar color-pink"></div>
</div>
</li>
<li class="item-content">
<div class="item-inner">
<div data-progress="15" class="progressbar color-purple"></div>
</div>
</li>
<li class="item-content">
<div class="item-inner">
<div data-progress="20" class="progressbar color-deeppurple"></div>
</div>
</li>
<li class="item-content">
<div class="item-inner">
<div data-progress="25" class="progressbar color-indigo"></div>
</div>
</li>
<li class="item-content">
<div class="item-inner">
<div data-progress="30" class="progressbar color-blue"></div>
</div>
</li>
<li class="item-content">
<div class="item-inner">
<div data-progress="35" class="progressbar color-lightblue"></div>
</div>
</li>
<li class="item-content">
<div class="item-inner">
<div data-progress="40" class="progressbar color-cyan"></div>
</div>
</li>
<li class="item-content">
<div class="item-inner">
<div data-progress="45" class="progressbar color-teal"></div>
</div>
</li>
<li class="item-content">
<div class="item-inner">
<div data-progress="50" class="progressbar color-green"></div>
</div>
</li>
<li class="item-content">
<div class="item-inner">
<div data-progress="55" class="progressbar color-lightgreen"></div>
</div>
</li>
<li class="item-content">
<div class="item-inner">
<div data-progress="60" class="progressbar color-lime"></div>
</div>
</li>
<li class="item-content">
<div class="item-inner">
<div data-progress="65" class="progressbar color-yellow"></div>
</div>
</li>
<li class="item-content">
<div class="item-inner">
<div data-progress="70" class="progressbar color-amber"></div>
</div>
</li>
<li class="item-content">
<div class="item-inner">
<div data-progress="75" class="progressbar color-orange"></div>
</div>
</li>
<li class="item-content">
<div class="item-inner">
<div data-progress="80" class="progressbar color-deeporange"></div>
</div>
</li>
<li class="item-content">
<div class="item-inner">
<div data-progress="85" class="progressbar color-brown"></div>
</div>
</li>
<li class="item-content">
<div class="item-inner">
<div data-progress="90" class="progressbar color-gray"></div>
</div>
</li>
<li class="item-content">
<div class="item-inner">
<div data-progress="95" class="progressbar color-bluegray"></div>
</div>
</li>
<li class="item-content">
<div class="item-inner">
<div data-progress="100" class="progressbar color-black"></div>
</div>
</li>
<li style="background-color: #999" class="item-content">
<div class="item-inner">
<div data-progress="95" class="progressbar color-white"></div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<script>var myApp = new Framework7();</script>
<script>
      var myApp = new Framework7({
        material: true
      });
      var $$ = Dom7;
      
      $$('.demo-progressbar-inline .button').on('click', function () {
          var progress = $$(this).attr('data-progress');
          var progressbar = $$('.demo-progressbar-inline .progressbar');
          myApp.setProgressbar(progressbar, progress);
      });
      $$('.demo-progressbar-load-hide .button').on('click', function () {
          var container = $$('.demo-progressbar-load-hide p:first-child');
          if (container.children('.progressbar').length) return; //don't run all this if there is a current progressbar loading
      
          myApp.showProgressbar(container, 0);
      
          // Simluate Loading Something
          var progress = 0;
          function simulateLoading() {
              setTimeout(function () {
                  var progressBefore = progress;
                  progress += Math.random() * 20;
                  myApp.setProgressbar(container, progress);
                  if (progressBefore < 100) {
                      simulateLoading(); //keep "loading"
                  }
                  else myApp.hideProgressbar(container); //hide
              }, Math.random() * 200 + 200);
          }
          simulateLoading();
      });
      $$('.demo-progressbar-overlay .button').on('click', function () {
          // Add Directly To Body
          var container = $$('body');
          if (container.children('.progressbar, .progressbar-infinite').length) return; //don't run all this if there is a current progressbar loading
      
          myApp.showProgressbar(container, 0, 'yellow');
      
          // Simluate Loading Something
          var progress = 0;
          function simulateLoading() {
              setTimeout(function () {
                  var progressBefore = progress;
                  progress += Math.random() * 20;
                  myApp.setProgressbar(container, progress);
                  if (progressBefore < 100) {
                      simulateLoading(); //keep "loading"
                  }
                  else myApp.hideProgressbar(container); //hide
              }, Math.random() * 200 + 200);
          }
          simulateLoading();
      });
      $$('.demo-progressbar-infinite-overlay .button').on('click', function () {
          var container = $$('body');
          if (container.children('.progressbar, .progressbar-infinite').length) return; //don't run all this if there is a current progressbar loading
          myApp.showProgressbar(container, 'yellow');
          setTimeout(function () {
              myApp.hideProgressbar();
          }, 5000);
      });
      $$('.demo-progressbar-infinite-multi-overlay .button').on('click', function () {
          var container = $$('body');
          if (container.children('.progressbar, .progressbar-infinite').length) return; //don't run all this if there is a current progressbar loading
          myApp.showProgressbar(container, 'multi');
          setTimeout(function () {
              myApp.hideProgressbar();
          }, 5000);
      });
</script>
</body>
</html>