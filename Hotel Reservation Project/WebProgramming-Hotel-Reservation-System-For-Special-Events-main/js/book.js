function enablebutton(termsCheckBox){
	if(termsCheckBox.checked){
		document.getElementById("submitBtn").disabled=false;
	}
	 
	else{
		document.getElementById("submitBtn").disabled=true;
	}
}