$(document).ready(function(){
    // GALLERY PRODUCT
    $('.gallery .gallery_item').click(function(){
        var image = $(this).css('background-image');

        $('#main').css('background-image', image);
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

    //Popup
    $('.table_btn').on('click', function(){
        $('.background_form_table').fadeIn(100);
    });

    //Close popup
    $(document).mouseup(function (e){ // событие клика по веб-документу
    var popupBody =  $('.table_btn'); // тут указываем ID элемента
    var formBody =  $('.form_table');
    if (!popupBody.is(e.target) // если клик был не по нашему блоку
        && popupBody.has(e.target).length === 0 &&  !formBody.is(e.target) && formBody.has(e.target).length === 0) { // и не по его дочерним элементам
        $('.background_form_table').fadeOut(400);
    }
    });

    $('.close_table').on('click', function(){
        $('.background_form_table').fadeOut(400);
    });


    //LANG & tables begin
    if($('html').attr('lang') === 'ru'){
        console.log($('html').attr('lang'));
        $('.lang_money-lang_list li[data-lang="ru"]').addClass('active_lang');
        $('.lang_money-lang_list li[data-lang="en"]').removeClass('active_lang');
        $('.sizes').attr('src','http://edu.bionic-university.com:2331/wp-content/themes/html5blank-stable/img/ru-sizes.jpg');
    }
    if($('html').attr('lang') === 'en'){
        console.log($('html').attr('lang'));
        $('.lang_money-lang_list li[data-lang="en"]').addClass('active_lang');
        $('.lang_money-lang_list li[data-lang="ru"]').removeClass('active_lang');
        $('.sizes').attr('src','http://edu.bionic-university.com:2331/wp-content/themes/html5blank-stable/img/en-sizes.jpg');
    }

 //Lang Menu & tables end





});


   

    //Cont Slider





//Cont Slider


    
