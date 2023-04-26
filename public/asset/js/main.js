$(function () {
    $('.reviews_slider').slick({
        arrows: false,
        dots: true,
        dotsClass: 'slider_dots',
    });


    var rellax = new Rellax('.rellax', {
    });
    AOS.init({
        disable: 'mobile',
        offset: 100,
        delay: 0.8,
        duration: 800,
    });
    $('.menu_burger,.menu_list-item').click(function (event) {
        $('.menu_burger,.menu').toggleClass('active');
    });

    $('.laung').click(function (event) {
        $('.laung_eu').toggleClass('open');
    });


    // $(".services_btn,.services_item ").click(function (e) {
    //     e.preventDefault();
    //     $(".services_btn,.services_item ").removeClass('_active');
    //     $(this).addClass('_active');
    // })


    $('.services_btn', '.services_item').click(function (e) {
        e.preventDefault();

        $('.item_dev-btns').removeClass('_active')
        $('.services_btn').removeClass('_active')

        $(this).addClass('_active')
        $($(this).attr('href')).addClass('_active')
    })
});

$( document ).ready(function() {
    $("#form-footer").click(
        function(){

            sendAjaxForm('result_form', 'ajax_form', '/ru/send');
            return false;
        }
    );
    $("#form-footer_project").click(
        function(){

            sendAjaxForm('result_form_project', 'ajax_form_project', '/ru/sendproject');
            return false;
        }
    );
});

function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url,
        type:     "GET",
        data: $("#"+ajax_form).serialize(),
        success: function(response) {

            $('#'+result_form+'_success').show();
        },
        error: function(response) { // Данные не отправлены
            $('#'+result_form+'_error').show();
        }
    });
}

$(function() {

    let pathname_url = window.location.pathname;
    let href_url = window.location.href;

    $(".menu_list .menu_list-item").each(function () {

        var link = $(this).find("a").attr("href");

        if(pathname_url == link || href_url == link) {

            $(this).addClass("active_page");

        }

    });

});
