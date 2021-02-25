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
		<div class="profileCard">
			<div style="width: calc( (100vh - 5.5vw) * 63 / 88 * 0.8 - (100vh - 5.5vw) * 0.8 * 0.1 - (100vh - 5.5vw) * 0.8 * 0.01 * 2); height: calc((100vh - 5.5vw) * 0.8 * 0.88); margin: calc((100vh - 5.5vw) * 0.8 * 0.1 / 2); border: calc((100vh - 5.5vw) * 0.8 * 0.01) solid var(--colorMaroon); border-radius: calc((100vh - 5.5vw) * 0.8 * 0.05)">
				<div style="background-color: var(--colorBackground); height: calc((100vh - 5.5vw) * 0.8 * 0.22); width: calc((100vh - 5.5vw) * 0.8 * 0.22); margin: calc((100vh - 5.5vw) * 0.8 * 0.02) auto; clip-path: circle(50%); background-size: cover; background-image: url('./holden.PNG');"></div>
				<div style="width: 100%; height: calc((100vh - 5.5vw) * 0.8 * 0.08); color: black; font-size: calc((100vh - 5.5vw) * 0.8 * 0.06); text-align: center;">Den Name</div>
				<div style="width: 100%; height: calc((100vh - 5.5vw) * 0.8 * 0.05); color: black; font-size: calc((100vh - 5.5vw) * 0.8 * 0.04); text-align: center;">Followers</div>
				<div style="width: 100%; height: calc((100vh - 5.5vw) * 0.8 * 0.05); color: black; font-size: calc((100vh - 5.5vw) * 0.8 * 0.04); text-align: center;">Following</div>
				<div class="profileCardButton"><span>About Den</span></div>
				<div class="profileCardButton"><span>Top Events</span></div>
				<div class="profileCardButton"><span>Antichamber</span></div>
			</div>
		</div>
		<div class="profileBackground"></div>
		<div class="profileBottom">
			<div class="profileMainPanel">
				<div class="profileButtonPanel">
					<table style="width: 100%; height: 100%;" cellspacing="0" cellpadding="0">
						<tr>
							<th>Watchlist</th>
							<th>Stream</th>
							<th>Archive</th>
							<th>Analytics</th>
							<th>Schedule</th>
							<th>Wallet</th>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
  </body>
</html>