$(document).ready(function () {
    $('.preload').parent().addClass('hidenOverflow');
    
    $('.t-h1').addClass('animated slideInLeft');
    $('.t-v1').addClass('animated slideInDown');
    setTimeout(function () {
        $('.t-v2').removeClass('hide');
        $('.t-v2').addClass('animated slideInUp');
        $('.t-h2').removeClass('hide');
        $('.t-h2').addClass('animated slideInRight');
    }, 400);

    setTimeout(function () {
        $('.img1').removeClass('hide');
        $('.img1').addClass('animated zoomIn');
    }, 1050);

    setTimeout(function () {
        $('.headTxt').removeClass('hide');
        $('.headTxt').addClass('animated zoomIn');
    }, 800);

    setTimeout(function () {
        $('.subheadTxt').removeClass('hide');
        $('.subheadTxt').addClass('animated zoomIn');
    }, 1300);
    
    //out animation
    setTimeout(function () {
        $('.main').addClass('animated zoomOutLeft');
    }, 3000);
    setTimeout(function(){
        $('.t-h1').removeClass('slideInLeft');
        $('.t-h1').addClass('slideOutRight');
        $('.t-v1').removeClass('slideInDown');
        $('.t-v1').addClass('slideOutDown');
        
        $('.t-v2').removeClass('slideInUp');
        $('.t-v2').addClass('slideOutUp');
        $('.t-h2').removeClass('slideInRight');
        $('.t-h2').addClass('slideOutLeft');
    }, 2000);
    
    //after 3000ms show main content
    setTimeout(function(){
        $('.preload').hide(300);
        $('.whole').show(300);
        $('.preload').parent().removeClass('hidenOverflow');
    },3500);


    $('.host-p').click(function () {
        $('.host-p').removeClass('packet-active');
        $(this).addClass('packet-active');
    });
    $('.social-p').click(function () {
        $('.social-p').removeClass('packet-active');
        $(this).addClass('packet-active');
    });
    $('.marketing-p').click(function () {
        $('.marketing-p').removeClass('packet-active');
        $(this).addClass('packet-active');
    });

    //next-chapter
    $('.next-chapter').click(function () {
        $('.about-site-form').hide();
        $('.contact-form').show();
        $('.naslov').text('KORAK 3 : O VAMA');
        scrollTo('#toThis');
    });
    $('.back-to-about').click(function () {
        $('.about-site-form').show();
        $('.contact-form').hide();
        $('.naslov').text('KORAK 2 : O SAJTU');
        scrollTo('#toThis');
    });




});
