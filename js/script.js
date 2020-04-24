function Createbtn(){
var btn = document.createElement("BUTTON");
  document.body.appendChild(btn);

}

function Errorbtn(){

	var username = document.getElementById("exampleInputEmail1");
	var password = document.getElementById("exampleInputPassword1");
	var no_input = document.getElementById("no-input");
	var error = document.getElementById("error_email");
	var error1 = document.getElementById("error_pwd");
	

	if(!username.value && !password.value)
	{ 
		no_input.style.display = 'inline';
		return false;

	}

	if(!username.value){
		error.style.display = "inline";
		return false;

	} 

	if(!password.value){
		error1.style.display = "inline";
		return false;


}else {

	
	window.open('landing.php');


	
}

}

function UpdateEmail(){

	document.getElementById("error_email").style.display = 'none';
}

function UpdatePwd(){

	document.getElementById("error_pwd").style.display = 'none';
}

function NoInput(){

	document.getElementById("no-input").style.display = 'none';
}