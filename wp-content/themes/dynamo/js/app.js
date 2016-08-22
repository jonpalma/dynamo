$('.navbar-nav li').not('.inactive').click(function() {
    $('.navbar-nav li.active').removeClass('active');
    $(this).addClass('active');
});

/* LOAD IFRAME ON SHOWN MODAL */
$('.modal').on('shown.bs.modal',function() {
    $(this).find('iframe').attr('src','http://201.144.124.50:5400/MasterTrack%20ticketTracker/tickettracker.aspx')
});

/* HIDE LOADER WHEN IFRAME FINISH LOADING */
$('iframe').load(function () {
    if(!$(this).attr('src') == '') {
        $('.loader').css('display', 'none');
    }
});

/* RELOAD MODAL ON CLOSE */
$('.modal').on('hidden.bs.modal', function () {
    $(this).find('iframe').attr('src','')
    $('.loader').css('display', 'block');
})

/* 
	PAGE LOAD WITH HASH OFFSET 
*/
(function($, window) {
    $navbar_height = $('.navbar').height();
    var adjustAnchor= function() {
        var $anchor = $(':target'),
            fixedElementHeight = $navbar_height;
        if ($anchor.length > 0) {
            $('html, body')
                .stop()
                .animate({
                scrollTop: $anchor.offset().top - fixedElementHeight
            }, 800);
        }
    };
    $(window).on('hashchange load', function() {
        adjustAnchor();
    });
})(jQuery, window)