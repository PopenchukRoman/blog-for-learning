$(document).ready(function(){
	$(function(){
	alert('Подключена последняя версия jQuery через Google хостинг');
	});
 // создание массива тегов
            var word_list = [
                {text:"Родинки", weight:13, link:"https://github.com/DukeLeNoir/jQCloud"},
                {text:"Родинки", weight:10.5, html:{title:"My Title", "class":"custom-class"}, link:{href:"http://jquery.com/", target:"_blank"}},
                {text:"Родинки", weight:9.4},
                {text:"Родинки", weight:8},
                {text:"Родинки", weight:6.2},
                {text:"Родинки", weight:5},
                {text:"Родинки", weight:5},
                {text:"Родинки", weight:5},
                {text:"Родинки", weight:5}
            ];
            $(function () {
                $("#tags").jQCloud(word_list);
            });
			
	$(".entry_content").children().hide();
	$('div p .first_p').fadeIn();
	  $('<span class="read">Читать далее -></span>').insertAfter("#first_p");
	  $(".read").hover(function(){
	     $(this).addClass('readHover')},
	     function(){
		$(this).removeClass('readHover');  
	  });
	  $(".read").click(function(){
	    $(this).fadeOut();
	    $(this).parent().children().show();
		$('<span class="spoiler">Cвернуть</span>').insertAfter("div .entry_content");
	  });
	  $('.spoiler').hover(function(){
	     $(this).addClass('spoilerHover')},
	     function(){
		$(this).removeClass('spoilerHover');  
	  });
	// $('.spoiler').click(function(){
	//	$(this).parent().children().hide().not('#first_p');
	 // });
		
});
