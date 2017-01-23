/*
* INFO/CS 1300
* Fall 2016
* Aidan Weed
*/

/*Images taken/owned by Haewong Hwang 2014*/
var appleimg = ["apple(2).jpg", "apple(3).jpg", "apple(4).jpg", "apple(5).jpg",
"apple(6).jpg","apple(7).jpg","apple(8).jpg","apple(9).jpg", "apple(10).jpg"];
var index = 1;


function increment(appleimg, inc){
	"use strict";
	if(inc == 1){
		index = index + 1;
	}

	else{
		index = index - 1;
	}

	if(index > appleimg.length-1)
	{
		index = 0;
	} 

	if(index < 0){
		index = appleimg.length-1;
	}
	var apple_get = document.getElementById("apple_image");
    apple_get.src = "images/" + appleimg[index];
}
