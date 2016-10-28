$(document).ready(function () {
   //подключаем пагинатор
   var page = /page=([^#&]*)/.exec(window.location.href);
            page = page ? page[1] : 400;

            $('#paginator').paginator({
                pagesTotal: 20,
                pagesSpan: 5,
                pageCurrent: page,
                baseUrl: 'index.php?page=%number%',
                lang: {
                    next: "Следующая",
                    last: "Последняя",
                    prior: "Предыдущая",
                    first: "Первая",
                    arrowRight: String.fromCharCode(8594),
                    arrowLeft: String.fromCharCode(8592)
                }
            }); 
  
    // создание массива тегов
    var word_list = [
        {text: "криптексы", weight: 13, link: {href: "https://www.olx.ua/obyavlenie/kripteks-golovolomka-kvest-kvestkomnata-miniseyf-IDgKQ1K.html"}},
        {text: "шкатулки с секретом", weight: 10.5, link: {href: "https://www.instagram.com/escaperoom_gadgets/"}},
        {text: "механика", weight: 9.4},
        {text: "arduino", weight: 8},
        {text: "лабиринты", weight: 6.2, link: {href: "https://www.olx.ua/obyavlenie/labirint-dlya-kvestkomnaty-IDnIXoV.html"}},
        {text: "трости", weight: 5},
        {text: "часы с секретом", weight: 5},
        {text: "магические свечи", weight: 5},
        {text: "сейф", weight: 5}
    ];

    $("#tags").jQCloud(word_list);

    $(".entry_content").hide();
    $('<span class="readmore_collapse">Read more..</span>').insertAfter(".first_p");

    $(".readmore_collapse").hover(function () {
            $(this).addClass('readHover')
        },
        function () {
            $(this).removeClass('readHover');
        });
        
     $('#tags').height($('#blog_page').height());
         
    $('.readmore_collapse').click(function () {
        $(this).next().toggle();
        if ($(this).next().is(':visible')) {
            $(this).text('Collapse')
        } else {
            $(this).text('Read more..')
        }
        $('#tags').height($('#blog_page').height());
        
    });
       
});
