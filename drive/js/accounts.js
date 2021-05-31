function checkpass(){
	$npass = document.getElementById('npass').value;
	$cpass = document.getElementById('cpass').value;

	if ($npass != $cpass) {
		document.getElementById('cpass').style.backgroundColor = "#ffbdbd";
		document.getElementById("submit-btn").disabled = true;
	}else{
		document.getElementById('cpass').style.backgroundColor = "transparent";
		document.getElementById("submit-btn").disabled = false;
	}

}