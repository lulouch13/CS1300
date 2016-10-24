$(document).ready(function() {
    // pragma
    "use strict";
    
    // hide the footer
    $("#date").click(function() {
        $("footer").hide();
    });

    // move the car
    $("#car").click(function() {
        $(this).animate({marginLeft: "100%"}, 1000);
    });

    // fade in and fade out the ghost
    $("#clicktext").click(function() {
        $("#ghost") .toggle(3000);
    });

});

// change the color
function setSpringTheme() {
    // pragma
    "use strict";
    // change color to green
    $("body").css("background-color", "#D8ECC3");
    $("nav").css("background-color", "#1C4905");
}

function setFallTheme() {
    // pragma
    "use strict";
    // change color to orange
    $("body").css("background-color", "#FFBF80");
    $("nav").css("background-color", "#FF8000");
}
