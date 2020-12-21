
function display_c(){
	var refresh=1000; // Refresh rate in milli seconds
	mytime=setTimeout('display_ct()', refresh)
}

function pad_with_zeroes(number, length) {
    var my_string = '' + number;
    while (my_string.length < length) {
        my_string = '0' + my_string;
    }
    return my_string;
}

function display_ct() {
	var x = new Date()
	document.getElementById('datetime1').innerHTML = pad_with_zeroes(x.getHours(), 2) + ":" +  pad_with_zeroes(x.getMinutes(), 2) + ":" +  pad_with_zeroes(x.getSeconds(), 2);
	display_c();
 }

function dropdown1() {
  document.getElementById("dropdowncontent1").classList.toggle("show");
}

function dropdown2() {
  document.getElementById("dropdowncontent2").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.button13')) {
    var dropdowns = document.getElementsByClassName("dropdown-content1");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }

  if (!event.target.matches('.button14')) {
    var dropdowns = document.getElementsByClassName("dropdown-content2");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


function show1() {
	var profile1 = document.getElementById("profile1"), profile2 = document.getElementById("profile2"), profile3 = document.getElementById("profile3"), profile4 = document.getElementById("profile4"), profile5 = document.getElementById("profile5"), profile6 = document.getElementById("profile6");

	profile1.style.display = "block";
	profile2.style.display = "none";
	profile3.style.display = "none";
	profile4.style.display = "none";
	profile5.style.display = "none";
	profile6.style.display = "none";
}

function show2() {
	var profile1 = document.getElementById("profile1"), profile2 = document.getElementById("profile2"), profile3 = document.getElementById("profile3"), profile4 = document.getElementById("profile4"), profile5 = document.getElementById("profile5"), profile6 = document.getElementById("profile6");

	profile1.style.display = "none";
	profile2.style.display = "block";
	profile3.style.display = "none";
	profile4.style.display = "none";
	profile5.style.display = "none";
	profile6.style.display = "none";
}

function show3() {
	var profile1 = document.getElementById("profile1"), profile2 = document.getElementById("profile2"), profile3 = document.getElementById("profile3"), profile4 = document.getElementById("profile4"), profile5 = document.getElementById("profile5"), profile6 = document.getElementById("profile6");

	profile1.style.display = "none";
	profile2.style.display = "none";
	profile3.style.display = "block";
	profile4.style.display = "none";
	profile5.style.display = "none";
	profile6.style.display = "none";
}

function show4() {
	var profile1 = document.getElementById("profile1"), profile2 = document.getElementById("profile2"), profile3 = document.getElementById("profile3"), profile4 = document.getElementById("profile4"), profile5 = document.getElementById("profile5"), profile6 = document.getElementById("profile6");

	profile1.style.display = "none";
	profile2.style.display = "none";
	profile3.style.display = "none";
	profile4.style.display = "block";
	profile5.style.display = "none";
	profile6.style.display = "none";
}

function show5() {
	var profile1 = document.getElementById("profile1"), profile2 = document.getElementById("profile2"), profile3 = document.getElementById("profile3"), profile4 = document.getElementById("profile4"), profile5 = document.getElementById("profile5"), profile6 = document.getElementById("profile6");

	profile1.style.display = "none";
	profile2.style.display = "none";
	profile3.style.display = "none";
	profile4.style.display = "none";
	profile5.style.display = "block";
	profile6.style.display = "none";
}

function show6() {
	var profile1 = document.getElementById("profile1"), profile2 = document.getElementById("profile2"), profile3 = document.getElementById("profile3"), profile4 = document.getElementById("profile4"), profile5 = document.getElementById("profile5"), profile6 = document.getElementById("profile6");

	profile1.style.display = "none";
	profile2.style.display = "none";
	profile3.style.display = "none";
	profile4.style.display = "none";
	profile5.style.display = "none";
	profile6.style.display = "block";
}

function showLogin() {
	var signUp = document.getElementById("signUp"), login = document.getElementById("login");

	signUp.style.display = "none";
	login.style.display = "block";
}

function showSignUp() {
	var signUp = document.getElementById("signUp"), login = document.getElementById("login");

	signUp.style.display = "block";
	login.style.display = "none";
}

function showDenChart() {
	var den = document.getElementById("den_chart"), bet = document.getElementById("bet_chart");

	den.style.display = "block";
	bet.style.display = "none";
}

function showBetChart() {
	var den = document.getElementById("den_chart"), bet = document.getElementById("bet_chart");

	den.style.display = "none";
	bet.style.display = "block";
}