(function($) {

    var stickAt;
    var windowWidth;
    var isSticky = false;

    var nav        = $('#mainNav');
    var siteHeader = $("#flexHeader");

    function doResizeActions(sticky) {

        windowWidth = window.innerWidth;
        if(sticky) {
            stickAt  = $(siteHeader).innerHeight();
        }

        // Mobile or desktop nav
        //if( windowWidth < 992 ) {
        //    $(nav).removeClass('main-nav').addClass('mobile-nav');
        //} else {
        //    $(nav).addClass('main-nav').removeClass('mobile-nav');
        //}

        // return true;

    }

    $(document).ready(function() {

        doResizeActions(true);
        if($('.halfbg').length > 0) {
            halfResize();
        }
        if($('.greenbluebg').length > 0) {
            greenblueResize();
        }
        if($('.halfmap').length > 0) {
            halfmapResize();
        }
        if($(window).innerWidth() > 991) {
            if($('.halfslider').length > 0) {
                halfsliderResize();
            }
        }
        $('.quote-pop').on('click',function(e) {
            e.preventDefault();
            $('#popForm').modal('show');
        })

    });

    // @todo set/check variable for peformance optimization
    $(window).on('resize', function() {
        doResizeActions(false); // don't recalculate sticky-header
        halfResize();
        halfmapResize();
        greenblueResize();
        if($(window).innerWidth() > 991) {
            halfsliderResize();
        }
    });


    $(document).on("scroll", function() {
        if ( $(document).scrollTop() >= stickAt ) {
            if(!isSticky) {
                $("body").addClass("sticky-header");
                isSticky = true;
            }
        } else {
            if(isSticky) {
                $("body").removeClass("sticky-header");
                isSticky = false;
            }
        }
    });

    $('#navToggle, #closeNav, #openNavOverlay').on('click', function() {
        if($(this).context.className != 'get-quote') {
            $(mainNav).toggleClass('open');
            $('#closeNav').toggleClass('open');
            $('#bodyslide').toggleClass('open');
            $('body').toggleClass('no-scroll');
        } else {
            $(mainNav).removeClass('open');
            $('#closeNav').removeClass('open');
            $('#bodyslide').removeClass('open');
            $('body').removeClass('no-scroll');
        }
    });

    $('.accordion-title').on('click',function() {
        var openAccordion = $('.accordion-content.open');
        var openAccordionClosed = $(openAccordion).prev('.accordion-title').children('i').attr('data-closed');
        var openAccordionOpen = $(openAccordion).prev('.accordion-title').children('i').attr('data-open');
        var closed = $(this).children('i').attr('data-closed');
        var open = $(this).children('i').attr('data-open');

        if($('.accordion-content.open').length > 0) {
            if($(this).next('.accordion-content').hasClass('open')) {
                $(this).next('.accordion-content').slideToggle().removeClass('open');
                $(this).children('i').removeClass('fa-'+open).addClass('fa-'+closed);
            }
            else {
                $(openAccordion).slideToggle().removeClass('open');
                $(openAccordion).prev('h3').children('i').removeClass('fa-'+openAccordionOpen).addClass('fa-'+openAccordionClosed);
                $(this).next('.accordion-content').addClass('open').slideToggle();
                $(this).children('i').removeClass('fa-'+closed).addClass('fa-'+open);
            }
        }
        else {
            $(this).children('i').removeClass('fa-'+closed).addClass('fa-'+open);
            $(this).next('.accordion-content').addClass('open').slideToggle();
        }

        // $('html, body').animate({
        //     scrollTop: $(this).offset().top - 125
        // }, 125);
    });

    //$(".menu-item-has-children").click(function(){
    //  $(".sub-menu").addClass("displayblock");
    //    return false;

  //  })

    //$(".menu-item-has-children").dblclick(function(){
    //    return true;
    //});
    function setup_collapsible_submenus() {
        var $menu = $('#mainNav.mobile-nav'),
            top_level_link = '#mainNav.mobile-nav .menu-item-has-children > a';

        $menu.find('a').each(function() {
            $(this).off('click');

            if ( $(this).is(top_level_link) ) {
                $(this).attr('href', '#');
            }

            if ( ! $(this).siblings('.sub-menu').length ) {
                $(this).on('click', function(event) {
                    $(this).parents('.mobile_nav').trigger('click');
                });
            } else {
                $(this).on('click', function(event) {
                    event.preventDefault();
                    $(this).parent().toggleClass('visible');
                });
            }
        });
    }

    $(window).load(function() {
        setTimeout(function() {
            setup_collapsible_submenus();
        }, 700);
    });

    /////////////////////////////Smooth Scrolling For Scroll to top/////////////////////////////////////
      $(document).ready(function(){
      //Check to see if the window is top if not then display button
      $(window).scroll(function(){
        if ($(this).scrollTop() > 400) {
          $('.scrollToTop').fadeIn();
        } else {
          $('.scrollToTop').fadeOut();
        }
      });
      //Click event to scroll to top
      $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},1000);
        return false;
      });

    });

////////////////////////////Fix Conflict With Bootstrap & Woocommerce//////////////////////////////

$( '.woocommerce-tabs .panel.entry-content' ).hide();

$( '.woocommerce-tabs ul.tabs li a' ).click( function() {

    var $tab = $( this ),
        $tabs_wrapper = $tab.closest( '.woocommerce-tabs' );

    $( 'ul.tabs li', $tabs_wrapper ).removeClass( 'active' );
    $( 'div.panel.entry-content', $tabs_wrapper ).hide();
    $( 'div' + $tab.attr( 'href' ), $tabs_wrapper).show();
    $tab.parent().addClass( 'active' );

    return false;
});
})(jQuery);
