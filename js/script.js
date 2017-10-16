$(document).ready(function() {

/* показать всех спикеров */
$(".all-speakers.show").click(function(){
    $(this).css('display' , 'none');
    $('.all-speakers.hide').css('display' , 'inline-block');
    $('.block4 .peoples .block.hide').css('display' , 'inline-block');
});

$(".all-speakers.hide").click(function(){
    $(this).css('display' , 'none');
     $('.all-speakers.show').css('display' , 'inline-block');
    $('.block4 .peoples .block.hide').css('display' , 'none');
});


/* гамбургер меню */
$(".menu-toggle").on("click", function(){
  $(this).nextAll('.menu').slideToggle();
});

/* мобильное меню */
$(document).click(function (event) {
    if ($(event.target).closest(".header-fixed .toggle").length){
        $('.header-fixed .toggle').closest('.header-fixed').toggleClass('menu-open');
        return;
    }
    $('.header-fixed').removeClass('menu-open');
    event.stopPropagation();
});


$("a[href^=#]").click(function(e){
    /*$(".menu").slideToggle("");*/
    e.preventDefault();

    $(document).off("scroll");
    $(menu_selector + " a.active").removeClass("active");
    $(this).addClass("active");
    var hash = $(this).attr("href");
    var target = $(hash);

    if (target.offset()){
        $("html, body").animate({
            scrollTop: target.offset().top-60
        }, 500, function(){
            window.location.hash = hash;
            $(document).on("scroll", onScroll);
        });
    }
});


/* стилизация селектов */
$(function() {
  $('.select').styler();
});

jQuery(function($){
   $(".field-phone").mask("+7(999) 999-9999");
});


$('#form, #form1').submit(function(event) {
    var formName;
    var data = $(this).serialize();

    if ($(this).attr('id') == 'form1'){
        formName = 'Верхняя форма';
    }
    if ($(this).attr('id') == 'form'){
        formName = 'Нижняя форма';
    }

    $.ajax({
     url: "send.php",
     type: "POST",
     data: data,
     success: function(res){
        ga("send", "event", "form", "success", formName);
        window.location.href = "thank.html"
    $('#form, #form1')[0].reset();
     },
     error: function(){
        window.location.href = "thank.html"
     }
    });
    return false;
   });

$('#form2').submit(function(event) {
    var formName;
    var data = $(this).serialize();

    formName = 'Стать партнером';

    $.ajax({
     url: "send-become-partner.php",
     type: "POST",
     data: data,
     success: function(res){
        ga("send", "event", "form", "success", formName);
        window.location.href = "thank.html"
    $('#form2')[0].reset();
     },
     error: function(){
        window.location.href = "thank.html"
     }
    });
    return false;
   });

$(".btn-become-partner").on("click", function(){
    $('.block--become-partner').addClass('active');
});

$(".block--become-partner .close").on("click", function(){
    $('.block--become-partner').removeClass('active');
});

(function($){
    jQuery.fn.lightTabs = function(options){

        var createTabs = function(){
            tabs = this;
            i = 0;

            showPage = function(i){
                $(tabs).children("div").children("div").hide();
                $(tabs).children("div").children("div").eq(i).show();
                $(tabs).children("ul").children("li").removeClass("active");
                $(tabs).children("ul").children("li").eq(i).addClass("active");
            }

            showPage(0);

            $(tabs).children("ul").children("li").each(function(index, element){
                $(element).attr("data-page", i);
                i++;
            });

            $(tabs).children("ul").children("li").click(function(){
                showPage(parseInt($(this).attr("data-page")));
            });
        };
        return this.each(createTabs);
    };
})(jQuery);
$(document).ready(function(){
    $(".tabs").lightTabs();
});



$(".link-user a").on("click", function(){
  $(this).prevAll('.about-link-user').css('display' , 'inline-block');
});

$("body").click(function(e) {
    if($(e.target).closest(".link-user").length==0) $(".about-link-user").css("display","none");
});


var now = 0;
function div23() {

    var count = $('.link-user-container').find('.link-user').length;
    if (now == count) {
        now = 0;
    }
    $('.link-user-container').find('.link-user').eq(now).addClass('active');
    setTimeout(function() {
        $('.link-user-container').find('.link-user').eq(now).removeClass('active');
        now++;
    }, 1000);

}
setInterval(function() {
    div23();
}, 2000);

});

$(document).ready(function(){

    setTimeout(function() {
        ga("send", "event", "page", "spent_on_page_15_sec");
    }, 15000);

    $( ".registration-form input.field-email, .registration-form input.field-phone" ).keyup(function() {
        var fieldPhoneLength = $(this).closest('.registration-form').find('.field-phone').val().length;
        var fieldEmailLength = $(this).closest('.registration-form').find('.field-email').val().length;
        var $inputSubmit = $(this).closest('.registration-form').find('input[type="submit"]');

        if (fieldPhoneLength && fieldEmailLength){
            $inputSubmit.removeClass("disabled");
        }else {
            $inputSubmit.addClass("disabled");
        }
    });

    $( ".form--become-partner .field-name, .form--become-partner .field-email, .form--become-partner .field-phone" ).keyup(function() {
        var fieldPhoneLength = $(this).closest('.form--become-partner').find('.field-phone').val().length;
        var fieldEmailLength = $(this).closest('.form--become-partner').find('.field-email').val().length;
        var fieldNameLength = $(this).closest('.form--become-partner').find('.field-name').val().length;
        var $inputSubmit = $(this).closest('.form--become-partner').find('input[type="submit"]');

        if (fieldPhoneLength && fieldEmailLength && fieldNameLength){
            $inputSubmit.removeClass("disabled");
        }else {
            $inputSubmit.addClass("disabled");
        }
    });
});

function selectTicketType(type) {
    $('.jq-selectbox__select-text').text(type);

    $('.jq-selectbox__dropdown li').each(function(){
        $(this).removeClass('sel selected');
        if (type == $(this).text()){
            $(this).addClass('sel selected');
        }
    })
}

jQuery(function() {
    jQuery.scrollDepth({
        userTiming: false,
        pixelDepth: false
    });
});

$( '.cycle-slideshow-main' ).on( 'cycle-after', function(event, optionHash, outgoingSlideEl, incomingSlideEl, forwardFlag) {
    $('#block-slider .pager .item').removeClass('active');
    $('#block-slider .pager .item').eq(optionHash.slideNum-1).addClass('active');

    $('#block-slider .cycle-pager .item').removeClass('active');
    $('#block-slider .cycle-pager .item').eq(optionHash.slideNum-1).addClass('active');

    switch (optionHash.slideNum) {
        case 1:
            ga("send", "event", "slider", "show slide", "Конференция «Блокчейн и криптовалюты-2017»", {nonInteraction: true});
            break;
        case 2:
            ga("send", "event", "slider", "show slide", "Шоу блокчейн-проектов и технологий", {nonInteraction: true});
            break;
        case 3:
            ga("send", "event", "slider", "show slide", "Blockchain.EXPO-2017", {nonInteraction: true});
            break;
        case 4:
            ga("send", "event", "slider", "show slide", "Blockchain.Night", {nonInteraction: true});
            break;
    }
});


$(document).ready(function() {
    var currentPage = window.location.href;

    $('#form1 :input').blur(function () {
        if($(this).val().length > 0){
            ga("send", "event", "form_top", "success", $(this).attr('name')+' '+$(this).val());
        }
    });

    $('#form :input').blur(function () {
        if($(this).val().length > 0){
            ga("send", "event", "form_bottom", "success", $(this).attr('name')+' '+$(this).val());
        }
    });
 });

/* якоря с меню */
var menu_selector = ($(window).innerWidth() <= 640) ? ".menu-mobile" : ".menu";

function onScroll(){

    var scroll_top = $(document).scrollTop();
    $(menu_selector + " a").each(function(){
        var hash = $(this).attr("href");

        if (hash == "#block8-bottom"){
            hash = "#block8";
        }
        if (hash == "#block2"){
            hash = ".block2-wrapper";
        }

        var target = $(hash);

        if (target.position().top <= scroll_top && target.position().top + target.outerHeight() > scroll_top) {
            $(menu_selector + " a.active").removeClass("active");
            $(this).addClass("active");
        } else {
            $(this).removeClass("active");
        }
    });
}

$(document).on("scroll", onScroll);

$(window).scroll(function(){
    $('.header-fixed').toggleClass('scroll', $(this).scrollTop() > 100);
});

$(document).ready(function() {

    $(".block--video .preview").click(function(e) {
        $(this).addClass('active');

        if ($(this).hasClass('video-1')){
            youtubeVideoPlayer1.playVideo();
        }
        if ($(this).hasClass('video-2')){
            youtubeVideoPlayer2.playVideo();
        }
        if ($(this).hasClass('video-3')){
            youtubeVideoPlayer3.playVideo();
        }
        if ($(this).hasClass('video-5')){
            youtubeVideoPlayer5.playVideo();
        }
        if ($(this).hasClass('video-6')){
            youtubeVideoPlayer6.playVideo();
        }
        if ($(this).hasClass('video-7')){
            youtubeVideoPlayer7.playVideo();
        }

        // for mobile version video
        ///////////////////////////////////////////
         if ($(this).hasClass('video-11')){
            youtubeVideoPlayer11.playVideo();
        }
        if ($(this).hasClass('video-22')){
            youtubeVideoPlayer22.playVideo();
        }
        if ($(this).hasClass('video-33')){
            youtubeVideoPlayer33.playVideo();
        }
        if ($(this).hasClass('video-55')){
            youtubeVideoPlayer55.playVideo();
        }
        if ($(this).hasClass('video-66')){
            youtubeVideoPlayer66.playVideo();
        }
        if ($(this).hasClass('video-77')){
            youtubeVideoPlayer77.playVideo();
        }
    });

    $(".sponsor").click(function() {
        if ($(this).hasClass('video-sp-1')) {
            youtubeVideoPlayerSp1.playVideo();
        }
        // if ($(this).hasClass('video-sp-2')) {
        //     youtubeVideoPlayerSp2.playVideo();
        // }
        if ($(this).hasClass('video-sp-3')) {
            youtubeVideoPlayerSp3.playVideo();
        }
        // if ($(this).hasClass('video-sp-4')) {
        //     youtubeVideoPlayerSp4.playVideo();
        // }
    });
});


/* popup */
$(".play-button").on("click", function(){
    $('#modal_form, #overlay').addClass('active');
    $('body').addClass('hidden');
});

$(".play-button").click(function(e) {
    $(".block--video .preview.video-4").addClass('active');

    if ($('.block--video .preview').hasClass('video-4')){
        youtubeVideoPlayer4.playVideo();
    }
});

$(".j-sponsor1").on("click", function(){
    $('#sponsor1, #overlay').addClass('active');
    $('body').addClass('hidden');
});

$(".j-video1").on("click", function(){
    $('#sponsor-video1, #overlay').addClass('active');
    $('body').addClass('hidden');
    youtubeVideoPlayerSp1.playVideo();
});

$(".j-sponsor2").on("click", function(){
    $('#sponsor2, #overlay').addClass('active');
    $('body').addClass('hidden');
});


$(".j-sponsor3").on("click", function(){
    $('#sponsor3, #overlay').addClass('active');
    $('body').addClass('hidden');
    youtubeVideoPlayerSp3.playVideo();
});


$(".j-sponsor4").on("click", function(){
    $('#sponsor4, #overlay').addClass('active');
    $('body').addClass('hidden');
});

$("#overlay, #modal_close").on("click", function(){
    $('#modal_form, #overlay, #sponsor1, #sponsor2, #sponsor3, #sponsor4, #sponsor-video1').removeClass('active');
    $(".b-video").removeClass('is-active');
    youtubeVideoPlayer4.stopVideo();
    youtubeVideoPlayerSp1.stopVideo();
    youtubeVideoPlayerSp1Click.stopVideo();
    youtubeVideoPlayerSp3.stopVideo();
    youtubeVideoPlayerSp3Click.stopVideo();
    $('body').removeClass('hidden');
});

$(".b-program__preview").on("click", function () {
    $(this).toggleClass('is-active');
});

$(".b-programm__description .open").on("click", function () {
    $(this).parent().toggleClass('is-active');
    $(this).toggleClass('hide');
});

$(".b-programm__description .close").on("click", function () {
    $(this).parent().parent().toggleClass('is-active');
    $(this).parent().parent().find('.open').toggleClass('hide');
});

$(".b-video-sp-1").on("click", function () {
    $(this).addClass('is-active');
    youtubeVideoPlayerSp1Click.playVideo();
});

$(".b-video-sp-3").on("click", function () {
    $(this).addClass('is-active');
    youtubeVideoPlayerSp3Click.playVideo();
});