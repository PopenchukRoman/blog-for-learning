<?php
 $result = mysql_query   ("SELECT news.id_news, news.title, news.date, news.time, news.author, news.first_paragraf, news.text, news_tags.id_tags AS tags, category.category_name, GROUP_CONCAT(tags.tag_name SEPARATOR ', ')
   				  FROM news
   				  INNER JOIN news_tags ON news.id_news = news_tags.id_news 
  				  LEFT JOIN tags ON news_tags.id_tags = tags.id_tags
  				  LEFT JOIN category ON news.id_category = category.id_category
  				 GROUP BY id_news");
  				 


  mysql_close();
  while($row = mysql_fetch_array($result)){
?>
