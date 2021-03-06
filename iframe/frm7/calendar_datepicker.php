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
<div class="views">
<div class="view view-main">
<div class="pages">
<div data-page="home" class="page navbar-fixed">
<div class="navbar">
<div class="navbar-inner">
<div class="left"> </div>
<div class="center">Calendar</div>
<div class="right"> </div>
</div>
</div>
<div class="page-content">
<div class="content-block-title">Default setup</div>
<div class="list-block">
<ul>
<li>
<div class="item-content">
<div class="item-inner">
<div class="item-input">
<input type="text" placeholder="Your birth date" readonly id="calendar-default">
</div>
</div>
</div>
</li>
</ul>
</div>
<div class="content-block-title">Custom date format</div>
<div class="list-block">
<ul>
<li>
<div class="item-content">
<div class="item-inner">
<div class="item-input">
<input type="text" placeholder="Select date" readonly id="calendar-date-format">
</div>
</div>
</div>
</li>
</ul>
</div>
<div class="content-block-title">Multiple Values</div>
<div class="list-block">
<ul>
<li>
<div class="item-content">
<div class="item-inner">
<div class="item-input">
<input type="text" placeholder="Select multiple dates" readonly id="calendar-multiple">
</div>
</div>
</div>
</li>
</ul>
</div>
<div class="content-block-title">Range Picker</div>
<div class="list-block">
<ul>
<li>
<div class="item-content">
<div class="item-inner">
<div class="item-input">
<input type="text" placeholder="Select date range" readonly id="calendar-range">
</div>
</div>
</div>
</li>
</ul>
</div>
<div class="content-block-title">With Events</div>
<div class="list-block">
<ul>
<li>
<div class="item-content">
<div class="item-inner">
<div class="item-input">
<input type="text" placeholder="Select date" readonly id="calendar-events">
</div>
</div>
</div>
</li>
</ul>
</div>
<div class="content-block-title">Disabled Dates</div>
<div class="list-block">
<ul>
<li>
<div class="item-content">
<div class="item-inner">
<div class="item-input">
<input type="text" placeholder="Select date" readonly id="calendar-disabled">
</div>
</div>
</div>
</li>
</ul>
</div>
<div class="content-block-title">Inline with custom toolbar</div>
<div class="content-block">
<div style="padding:0; margin-right:-15px; width:auto" class="content-block-inner">
<div id="calendar-inline-container"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script>var myApp = new Framework7();</script>
<style>#picker-date-container .picker-item{color:#999;}#picker-date-container .picker-selected{color:#000;}@media (max-width: 767px) {#picker-date-container .picker-items{font-size:21px;}#picker-date-container .picker-item{height:36px;line-height:36px;padding:0 6px;}}</style>
<script>
      var myApp = new Framework7();
      
      // Default
      var calendarDefault = myApp.calendar({
          input: '#calendar-default',
      });
      // With custom date format
      var calendarDateFormat = myApp.calendar({
          input: '#calendar-date-format',
          dateFormat: 'DD, MM dd, yyyy'
      });
      // With multiple values
      var calendarMultiple = myApp.calendar({
          input: '#calendar-multiple',
          dateFormat: 'M dd yyyy',
          multiple: true
      });
      // Range Picker
      var calendarRange = myApp.calendar({
          input: '#calendar-range',
          dateFormat: 'M dd yyyy',
          rangePicker: true
      });
      // With events
      var today = new Date();
      var weekLater = new Date().setDate(today.getDate() + 7);
      var calendarEvents = myApp.calendar({
          input: '#calendar-events',
          dateFormat: 'M dd yyyy',
          events: {
            from: today,
            to: weekLater
          }
      });
      // Disabled
      var today = new Date();
      var weekLater = new Date().setDate(today.getDate() + 7);
      var calendarDisabled = myApp.calendar({
          input: '#calendar-disabled',
          dateFormat: 'M dd yyyy',
          disabled: {
            from: today,
            to: weekLater
          }
      });
      // Inline with custom toolbar
      var $$ = Dom7;
      var monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August' , 'September' , 'October', 'November', 'December'];
      var calendarInline = myApp.calendar({
          container: '#calendar-inline-container',
          value: [new Date()],
          weekHeader: false,
          toolbarTemplate: 
              '<div class="toolbar calendar-custom-toolbar">' +
                  '<div class="toolbar-inner">' +
                      '<div class="left">' +
                          '<a href="#" class="link icon-only"><i class="icon icon-back"></i></a>' +
                      '</div>' +
                      '<div class="center"></div>' +
                      '<div class="right">' +
                          '<a href="#" class="link icon-only"><i class="icon icon-forward"></i></a>' +
                      '</div>' +
                  '</div>' +
              '</div>',
          onOpen: function (p) {
              $$('.calendar-custom-toolbar .center').text(monthNames[p.currentMonth] +', ' + p.currentYear);
              $$('.calendar-custom-toolbar .left .link').on('click', function () {
                  calendarInline.prevMonth();
              });
              $$('.calendar-custom-toolbar .right .link').on('click', function () {
                  calendarInline.nextMonth();
              });
          },
          onMonthYearChangeStart: function (p) {
              $$('.calendar-custom-toolbar .center').text(monthNames[p.currentMonth] +', ' + p.currentYear);
          }
      });
</script>
</body>
</html>