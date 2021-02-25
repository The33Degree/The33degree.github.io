<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
    <title>The District</title>
	<link rel="icon" href="./images/ace.png">
	<link href="style.css" rel="stylesheet" type="text/css"/>
  </head>
  <body onload=display_ct();>
    <script src="script.js"></script>

	<div class="topbar">
		<div class="logo" onclick="window.location.replace('./index.php');">
			<div style="margin: auto; width: 82.5%;">
				<img src="images/ace.png" style="width: 2vw; margin-top: 1vw; float: left;">
				<div style="margin-left: 1vw; margin-top: 0.7vw; float: left;">THE<br>DISTRICT<p style="font-size: 1vw; margin-top: 0vw; letter-spacing: normal; font-family: 'Proxima Nova';"><span id="datetime1"></span></p></div>
				<img src="images/ace.png" style="width: 2vw; margin-left: 1vw; margin-top: 1vw; float: left;">
			</div>
		</div>
		<div class="topbarButtonPanel">
			<div id="dropdownbutton1" class="topbarButton" onclick="dropdown1()"><div class="topbarText">PROFESSIONAL</div></div><!--
			--><div id="dropdownbutton2" class="topbarButton" onclick="dropdown2()"><div class="topbarText">COMMUNITY</div></div><!--
			--><div class="topbarButton"><div class="topbarText">PROFILE</div><a href="./login.php"><span class="divButton"></span></a></div>
		</div>
		<div class="notifBox">
			<img src="./images/notification_icon.png" style="width: 3vw">
			Notifications
		</div>
		<div id="dropdowncontent1" class="dropdownContent">
			<a href="./live_events_professional.php">Live Events</a>
			<a href="">Upcoming Events</a>
			<a href="">Event Archive</a>
		</div>
		<div id="dropdowncontent2" class="dropdownContent">
			<a href="./live_events_community.php">Live Events</a>
			<a href="">Upcoming Events</a>
			<a href="">Event Archive</a>
		</div>
	</div>

	<div class="menuPageNoSearch">
		<div style="font-size: 2.4vw; margin: 2vw;">Professional Sign Up</div>
		<table id="signupProTable2">
			<tr>
				<td>Email</td>
				<td><input type="text" class="textField"/></td>
			</tr>
			<tr>
				<td>Business Name</td>
				<td><input type="text" class="textField"/></td>
			</tr>
			<tr>
				<td>Website</td>
				<td><input type="text" class="textField"/></td>
			</tr>
			<tr>
				<td>Phone Number</td>
				<td><input type="text" class="textField"/></td>
			</tr>
			<tr>
				<td>Company Description</td>
				<td><textarea class="textField" style="resize: vertical; min-height: 5vw;"></textarea></td>
			</tr>
			<tr>
				<td>Den Name</td>
				<td><input type="text" class="textField"/></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" class="textField"/></td>
			</tr>
			<tr>
				<td>Confirm Password</td>
				<td><input type="text" class="textField"/></td>
			</tr>
			<tr>
				<td></td>
				<td><div class="signupSelectButton" style="display: block; width: 10vw; height: 1.5vw; padding: 0.5vw; margin: 0; border-radius: 0.5vw; background: var(--colorMaroon); font-size: 1.2vw; text-align: center; opacity: 100%">Sign Up</div></td>
			</tr>
		</table>
	</div>
  </body>
</html>