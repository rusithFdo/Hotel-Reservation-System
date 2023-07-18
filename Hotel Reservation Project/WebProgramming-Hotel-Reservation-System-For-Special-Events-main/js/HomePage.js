var i = 0;
var images = [];
var time = 2000;

images[0] = 'images/image10.jpg';
images[1] = 'images/image11.jpg';
images[2] = 'images/image14.jpg';
images[3] = 'images/image13.jpg';
images[4] = 'images/image18.jpg';

function changeImg(){
	document.slide.src = images[i];

	if (i < images.length - 1) {
		i++;
	}
	else{
		i = 0;
	}

	setTimeout("changeImg()", time);
}
window.onload = changeImg;

// var j =0;
// var dots = [];
// var times = 1000;

// function changeDot(){
// 	document.dot.src = dots[j];

// 	if (j < dots.length - 1) {
// 		j++;
// 	}
// 	else{
// 		j = 0;
// 	}

// 	setTimeout("changeDot()", times);
// }
// window.onload = changeDot;