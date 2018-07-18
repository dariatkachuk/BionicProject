$(document).ready(function(){
    // GALLERY PRODUCT
    $('.gallery .gallery_item').click(function(){
        var image = $(this).attr('data-link');

        $('#main').attr('src', image);
    })

    //Mobile Menu
    $('.mobile_menu').on('click', function(){
        $(this).toggleClass('active');
        $('.menu').toggleClass('open_menu');
    });

    //Popup
    $('.btn').on('click', function(){
        $('.background_form').fadeIn(100);
    });

    //Close popup
    $(document).mouseup(function (e){ // событие клика по веб-документу
    var popupBody =  $('.btn'); // тут указываем ID элемента
    var formBody =  $('.form');
    if (!popupBody.is(e.target) // если клик был не по нашему блоку
        && popupBody.has(e.target).length === 0 &&  !formBody.is(e.target) && formBody.has(e.target).length === 0) { // и не по его дочерним элементам
        $('.background_form').fadeOut(400);
    }
    });
});
