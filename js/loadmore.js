jQuery(function ($) {

    // определяем в переменные кнопку, текущую страницу и максимальное кол-во страниц
    var bottomOffset = 2000,
        button = $('#loadmore a'),
        paged = button.data('paged'),
        maxPages = button.data('max_pages'),
        cat = button.data('cat'),
        dataSet = button.data();

    $(window).scroll(function () {

        if ( $(document).scrollTop() > ($(document).height() - bottomOffset) && ! $('body').hasClass('loading') ) {

            // alert('single');

            $.ajax({
                type : 'POST',
                url : ix.ajaxurl, // получаем из wp_localize_script()
                data : {
                    paged : paged, // номер текущей страниц
                    action : 'loadmore', // экшен для wp_ajax_ и wp_ajax_nopriv_
                    cat : cat,
                    get_params : dataSet,
                },
                beforeSend : function( xhr ) {
                    //button.text( 'Загружаем...' );
                    button.addClass('load');
                    $('body').addClass('loading');
                },
                success : function( data ){

                    paged++; // инкремент номера страницы
                    // button.attr('data-paged', paged++);
                    button.parent().before( data );
                    //button.text( 'Загрузить ещё' );
                    $('body').removeClass('loading');
                    button.removeClass('load');

                    // если последняя страница, то удаляем кнопку
                    if( paged == maxPages ) {
                        button.remove();
                    }

                }

            });

        };
    })


    button.click( function( event ) {

        event.preventDefault(); // предотвращаем клик по ссылке

        $.ajax({
            type : 'POST',
            url : ix.ajaxurl, // получаем из wp_localize_script()
            data : {
                paged : paged, // номер текущей страниц
                action : 'loadmore', // экшен для wp_ajax_ и wp_ajax_nopriv_
                cat : cat,
                get_params : dataSet,
            },
            beforeSend : function( xhr ) {
                button.text( 'Загружаем...' );
            },
            success : function( data ){

                paged++; // инкремент номера страницы
                // button.attr('data-paged', paged++);
                button.parent().before( data );
                button.text( 'Загрузить ещё' );

                // если последняя страница, то удаляем кнопку
                if( paged == maxPages ) {
                    button.remove();
                }

            }

        });

    } );
});