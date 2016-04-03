$(document).ready(function () {
   //подключаем пагинатор
   var page = /page=([^#&]*)/.exec(window.location.href);
            page = page ? page[1] : 400;

            $('#paginator').paginator({
                pagesTotal: 20,
                pagesSpan: 10,
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
        {text: "родинки", weight: 13, link: {href: "#post1"}},
        {text: "узоры", weight: 10.5, link: {href: "#post2"}},
        {text: "линия сердца", weight: 9.4},
        {text: "линии", weight: 8},
        {text: "левая рука", weight: 6.2},
        {text: "правая рука", weight: 5},
        {text: "линия жизни", weight: 5},
        {text: "линия здоровья", weight: 5},
        {text: "линия ума", weight: 5}
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
