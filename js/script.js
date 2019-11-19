var btn = document.querySelector('.toggle_btn');
var nav = document.querySelector('.twonav');
var navbar = document.querySelector('.navbar');

btn.onclick = function(){
  nav.classList.toggle('twonav_open');
  btn.classList.toggle('cross');
  navbar.classList.toggle('barnav');
  navbar.classList.toggle('navbar_open');
}

// if (window.matchMedia("(min-width: 1000px)").matches){
var option_a = document.querySelector('.option_a');
option_a.onclick = function(){
  	btn.classList.toggle('cross');
	nav.classList.toggle('twonav_open');
	navbar.classList.toggle('navbar_open');
	// if(document.getElementById('pres').style.display == 'none'){
	// 	document.getElementById('pres').style.display = 'block';
	// 	document.getElementById('techno').style.display = 'none';
	// 	document.getElementById('project').style.display = 'none';
	// 	document.getElementById('contact_res').style.display = 'none';
	// }
}
// getElementByClassName

var option_b = document.querySelector('.option_b');
option_b.onclick = function(){
  	btn.classList.toggle('cross');
	nav.classList.toggle('twonav_open');
	navbar.classList.toggle('navbar_open');
}

var option_c = document.querySelector('.option_c');
option_c.onclick = function(){
  	btn.classList.toggle('cross');
	nav.classList.toggle('twonav_open');
	navbar.classList.toggle('navbar_open');
}

var option_d = document.querySelector('.option_d');
option_d.onclick = function(){
  	btn.classList.toggle('cross');
	nav.classList.toggle('twonav_open');
	navbar.classList.toggle('navbar_open');
}

var option_e = document.querySelector('.option_e');
option_e.onclick = function(){
  	btn.classList.toggle('cross');
	nav.classList.toggle('twonav_open');
	navbar.classList.toggle('navbar_open');
}

// }
