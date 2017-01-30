jQuery(document).ready(function ($) {
    // $() will work as an alias for jQuery() inside of this function
    $('#header__icon').click(function (e) {
        e.preventDefault();
        $('body').toggleClass('with--sidebar');
    });

    $('#site-cache').click(function (e) {
        $('body').removeClass('with--sidebar');
    });

    $('#up').click(function (e) {
        window.scroll({top: 0, left: 0, behavior: 'smooth'});
    })

    var mainHeader = $('.header'),
        secondaryNavigation = $('.cd-secondary-nav'),
        headerHeight = mainHeader.height();

    //set scrolling variables
    var scrolling = false,
        previousTop = 0,
        currentTop = 0,
        scrollDelta = 10,
        scrollOffset = 150;

    $(window).on('scroll', function () {
        if (!scrolling) {
            scrolling = true;
            (!window.requestAnimationFrame) ?
                setTimeout(autoHideHeader, 250) : requestAnimationFrame(autoHideHeader);
        }
    });

    $(window).on('resize', function () {
        headerHeight = mainHeader.height();
    });

    function autoHideHeader() {
        var currentTop = $(window).scrollTop();
        checkSimpleNavigation(currentTop);

        previousTop = currentTop;
        scrolling = false;
    }

    function checkSimpleNavigation(currentTop) {
        //there's no secondary nav or secondary nav is below primary nav
        if (previousTop - currentTop > scrollDelta) {
            //if scrolling up...
            mainHeader.removeClass('is-hidden');
            $('#up').removeClass('up--show');
        } else if (currentTop - previousTop > scrollDelta && currentTop > scrollOffset) {
            //if scrolling down...
            mainHeader.addClass('is-hidden');
            $('#up').addClass('up--show');
        }
    }

    //event for flickity  and velocity effect on carousel content
    $('.carousel-content, .carousel-title, .carousel-body').velocity('transition.slideUpIn', {stagger: 250});
    var $carousel = $('.carousel').flickity();
    var flkty = $carousel.data('flickity');
    $carousel.on('settle.flickity', function () {
        //index of current slide flkty.selectedIndex
    });
    //init isotope
    var $grid = $('.project-grids').isotope({
        itemSelector: '.projects-item',
        layoutMode: 'fitRows'
    });

    // bind filter button click
    $('.filters-button-group').on('click', 'li', function () {
        var filterValue = $(this).attr('data-filter');
        // use filterFn if matches value
        $grid.isotope({filter: filterValue});
    });
// change is-checked class on buttons


});
