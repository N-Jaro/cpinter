$(document).ready(function() {

    $('#mobile-menu').hide();
    $('.cart-content').hide();

    $('.mobile-menu-btn').on('click', function() {
        $('#mobile-menu').slideToggle(200);
    });

    $('#mobile-menu .menu-item-has-children > a').on('click', function(e) {
        e.preventDefault();
        $(this).parent().children('ul').slideToggle(200);
    });

    $('.my-cart-btn').on('click', function() {
        $('.cart-content').slideToggle(200);
    });

    var $myCarousel = $('.carousel');

    $myCarousel.carousel({
        interval: 40000000
    })

    function doAnimations(elems) {
        var animEndEv = 'webkitAnimationEnd animationend';

        elems.each(function() {
            var $this = $(this),
                $animationType = $this.data('animation');

            // Add animate.css classes to
            // the elements to be animated 
            // Remove animate.css classes
            // once the animation event has ended
            $this.addClass($animationType).one(animEndEv, function() {
                $this.removeClass($animationType);
            });
        });
    }

    // Select the elements to be animated
    // in the first slide on page load
    var $firstAnimatingElems = $myCarousel.find('.item:first')
        .find('[data-animation ^= "animated"]');

    // Apply the animation using our function
    doAnimations($firstAnimatingElems);

    // Pause the carousel 
    $myCarousel.carousel('pause');

    // Attach our doAnimations() function to the
    // carousel's slide.bs.carousel event 
    $myCarousel.on('slide.bs.carousel', function(e) {
        // Select the elements to be animated inside the active slide 
        var $animatingElems = $(e.relatedTarget)
            .find("[data-animation ^= 'animated']");
        doAnimations($animatingElems);
    });

});