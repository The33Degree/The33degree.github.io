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

	<div class="menuPageNoSearch" style="overflow: hidden;">
		<div class="livestreamLeft">
			<div class="livestreamVideo"></div>
			<div class="livestreamBottom">
				<div class="livestreamDescription">
					<div class="livestreamProfilePicture"></div>
					<div class="livestreamDenName">Holden Caulfield</div>
					<div class="livestreamFollowers">100 followers</div>
					<div class="livestreamDescriptionExpandableButton" onclick="expandExpandable(0)">
						Event Description
						<div id="carrot0" class="livestreamExpandableButtonCarrot"></div>
					</div>
					<div id="expandable0" class="livestreamDescriptionExpandableBox">
						<span>Tester</span>
					</div>
					<div class="livestreamDescriptionExpandableButton" onclick="expandExpandable(1)">
						Side Description
						<div id="carrot1" class="livestreamExpandableButtonCarrot"></div>
					</div>
					<div id="expandable1" class="livestreamDescriptionExpandableBox">
						<span>Hi holden</span>
					</div>
					<div class="livestreamDescriptionExpandableButton" onclick="expandExpandable(2)">
						About Den
						<div id="carrot2" class="livestreamExpandableButtonCarrot"></div>
					</div>
					<div id="expandable2" class="livestreamDescriptionExpandableBox">
						<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
					</div>
				</div>
				<div class="livestreamBets">
					<div class="livestreamBetsSideButtons">Side 1</div><!--
					--><div class="livestreamBetsSideButtons">Side 2</div>
					<div class="livestreamBetsBetAmounts">Side 1</div><!--
					--><div class="livestreamBetsBetAmounts">Side 2</div>
				</div>
			</div>
		</div><!--
		--><div class="livestreamChat"></div>
	</div>
  </body>
</html>