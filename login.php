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
		<form method="post" id="loginForm"></form>
		<form method="post" id="signupComForm"></form>
		<form method="post" id="signupProForm"></form>
		<div id="loginDivision" class="loginSignupDivision" style="clip-path: polygon(0 0, calc(100% - 5vw) 0, 100% 100%, 0 100%);">
			<div id="loginBox" class="loginSignupBox" style="margin-left: calc(25vw - min(20vw, 0.9 * (100vh - 5.5vw) * 3 / 8));">
				<div id="loginBack" class="loginSignupBackButton"><div class="loginSignupBackArrow"></div></div>
				<div id="loginHeader" class="loginSignupHeader">Welcome back!</div>
				<table id="loginTable" class="loginSignupTable" style="margin-top: calc(min(1vw, 0.09 * (100vh - 5.5vw) * 3 / 16) * 15);">
					<tr>
						<td>Username / Den Name</td>
						<td><input type="text" class="textField loginSignupTableTextField" form="loginForm" id="loginUsername" name="loginUsername"/></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="text" class="textField loginSignupTableTextField" form="loginForm" id="loginPassword" name="loginPassword"/></td>
					</tr>
				</table>
				<button class="loginSignupButton" id="loginButton" onclick="expandLogin()">Login</button>
			</div>
		</div><!--
		--><div id="signupDivision" class="loginSignupDivision" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 5vw 100%); right: 0;">
			<div id="signupBox" class="loginSignupBox" style="margin-left: calc(25vw - min(20vw, 0.9 * (100vh - 5.5vw) * 3 / 8) + 2.5vw);">
				<div id="signupBack" class="loginSignupBackButton"><div class="loginSignupBackArrow"></div></div>
				<div id="signupHeader" class="loginSignupHeader">Need an account?</div>
				<button id="signupComSelect" class="signupSelectButton" onclick="expandSignupCom()" style="margin-right: min(20vw, 0.9 * (100vh - 5.5vw) * 3 / 8);">Community<br>Sign Up</button>
				<button id="signupProSelect" class="signupSelectButton" onclick="expandSignupPro()" style="margin-left: min(20vw, 0.9 * (100vh - 5.5vw) * 3 / 8);">Professional<br>Sign Up</button>
				<table id="signupComTable" class="loginSignupTable" style="margin-top: calc(min(1vw, 0.09 * (100vh - 5.5vw) * 3 / 16) * 15);">
					<tr>
						<td>Email</td>
						<td><input type="text" class="textField loginSignupTableTextField" form="signupComForm" id="signupComEmail" name="signupComEmail"/></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input type="text" class="textField loginSignupTableTextField" form="signupComForm" id="signupComUsername" name="signupComUsername"/></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="text" class="textField loginSignupTableTextField" form="signupComForm" id="signupComPassword" name="signupComPassword"/></td>
					</tr>
					<tr>
						<td>Confirm Password</td>
						<td><input type="text" class="textField loginSignupTableTextField" form="signupComForm" id="signupComConfirmPassword" name="signupComConfirmPassword"/></td>
					</tr>
				</table>
				<table id="signupProTable" class="loginSignupTable" style="margin-top: calc(min(1vw, 0.09 * (100vh - 5.5vw) * 3 / 16) * 12);">
					<tr>
						<td>Email</td>
						<td><input type="text" class="textField loginSignupTableTextField" form="signupProForm" id="signupProEmail" name="signupProEmail"/></td>
					</tr>
					<tr>
						<td>Business Name</td>
						<td><input type="text" class="textField loginSignupTableTextField" form="signupProForm" id="signupProBusinessName" name="signupProBusinessName"/></td>
					</tr>
					<tr>
						<td>Den Name</td>
						<td><input type="text" class="textField loginSignupTableTextField" form="signupProForm" id="signupProDenName" name="signupProDenName"/></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="text" class="textField loginSignupTableTextField" form="signupProForm" id="signupProPassword" name="signupProPassword"/></td>
					</tr>
					<tr>
						<td>Confirm Password</td>
						<td><input type="text" class="textField loginSignupTableTextField" form="signupProForm" id="signupProConfirmPassword" name="signupProConfirmPassword"/></td>
					</tr>
				</table>
				<button id="signupButton" class="loginSignupButton" onclick="expandSignup()">Sign Up</button>
			</div>
		</div>
	</div>
  </body>
</html>