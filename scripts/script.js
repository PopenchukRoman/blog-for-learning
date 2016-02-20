$(document).ready(function(){
	$(function(){
	alert('Подключена последняя версия jQuery через Google хостинг');
	});
 // создание массива тегов
            var word_list = [
                {text:"Lorem", weight:13, link:"https://github.com/DukeLeNoir/jQCloud"},
                {text:"Ipsum", weight:10.5, html:{title:"My Title", "class":"custom-class"}, link:{href:"http://jquery.com/", target:"_blank"}},
                {text:"Dolor", weight:9.4},
                {text:"Sit", weight:8},
                {text:"Amet", weight:6.2},
                {text:"Consectetur", weight:5},
                {text:"Adipiscing", weight:5},
                {text:"Elit", weight:5},
                {text:"Nam et", weight:5}
            ];
            $(function () {
                $("#tags").jQCloud(word_list);
            });

});
