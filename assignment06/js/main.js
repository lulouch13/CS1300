
/* index used to store the index of the image, the initial 
   index is 0. 
   flag used to decide previous or next.
   flag = 1 when next, flag = -1 when previous.
*/
index = 0
function animation(flag) {
    "use strict";
    // variables
    var animation_images = ["animation01.png", "animation02.png", "animation03.png", "animation04.png"],
        current_animation = document.getElementById('animation_image');
    var len = animation_images.length;
    // % len to deal with overflow
    index = (index + flag + len) % len;
    // procedural code
    current_animation.src = 'images/' + animation_images[index];
}

window.onload = function today() {
    "use strict";
    // month from number to English word
    var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    // get pieces of date
    var date = new Date(),
        day = date.getDate(), 
        month = monthNames[date.getMonth()],
        year = date.getFullYear();
    var date_text = day + ' ' + month + ', ' + year

    document.getElementsByTagName('footer')[0].textContent = date_text;
};
