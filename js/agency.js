// JavaScript
var jQuery = require('jquery');


(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    //$('body').scrollspy({
    //    target: '.navbar-fixed-top',
    //    offset: 51
    //});

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function(){ 
            $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })
})(jQuery); // End of use strict      

$(document).ready(function () {
    $(".text-video a").click(function () {
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        if ($.browser.safari) {
            $('body').animate({ scrollTop: destination }, 100); //1100 - speed
        } else {
            $('html').animate({ scrollTop: destination }, 1100);
        }
        return false; 
    });

     //Hide PopUp, when you run a page
    PopUpHide();
    // Show PopUp
    function PopUpShow() {
        $("#popup1").show();
        $("#video_play")[0].play();
    }
    // Hide PopUp
    function PopUpHide() {
        $("#video_play")[0].pause();
        $("#popup1").hide();
    }
});

window.onload = function() { // when page was uploaded

    var scrollUp = document.getElementById('scrollup'); // найти элемент

    scrollUp.onmouseover = function() { // add opacity 
        scrollUp.style.opacity=0.3;
        scrollUp.style.filter  = 'alpha(opacity=30)';
    };

    scrollUp.onmouseout = function() { //remove opacity 
        scrollUp.style.opacity = 0.5;
        scrollUp.style.filter  = 'alpha(opacity=50)';
    };

    scrollUp.onclick = function() { //hendler
        window.scrollTo(0,0);
    };

// show button

    window.onscroll = function () { // show or hide block
        if ( window.pageYOffset > 0 ) {
            scrollUp.style.display = 'block';
        } else {
            scrollUp.style.display = 'none';
        }
    };
};


