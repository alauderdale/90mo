jQuery(document).ready(function($) {

$(window).load(function() {
        $('#slider').nivoSlider({
            effect: 'fade',
            controlNav: true,
            directionNav: false,
            pauseTime: 30000000 // How long each slide will show


        });
    });

    $('a#open').click(function(){

        $('.login').slideToggle(200);

        var $this = $(this);

        $(this).toggleClass("expanded");

        if ($this.hasClass("expanded")) {
                    $this.html("close");
                    $('.info-tri').css('visibility','hidden');
                } else {
                    $this.html("open");
                    $('.info-tri').css('visibility','visible');
                }




});


});