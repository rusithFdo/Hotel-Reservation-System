function loadData(name)
{
	if(name=='btn1')
	{
		document.getElementById("para").innerHTML = "Long Stay Offer " ;
		document.getElementById("image1").src="images/img3.jpg";
	}
	else if(name=='btn2') {

		document.getElementById("para").innerHTML = "Early Bird Offer" ;
		document.getElementById("image1").src="images/bird.jpg";
	}

        else if(name=="btn3") {

		document.getElementById("para").innerHTML = "Honeymoon Offer" ;
		document.getElementById("image1").src="images/img2.jpg";
	}

        else(name=="btn4") {

		document.getElementById("para").innerHTML = "Long Stay Offer" ;
		document.getElementById("image1").src="images/img1.jpg";
	}



}

