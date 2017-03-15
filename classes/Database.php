<?php

class Database {

	public $db;

	public function __construct($host, $user, $pass, $db) {

				//с помощью этой функции мы подключаемся к базе данных
	
				$this -> db = mysql_connect($host, $user, $pass); 

				//выполняем проверку соединиения
				if(!$this -> db) {

					exit('No connection with Database'); // Сообщение о том, что соединения нет
				}
		
				if (!mysql_select_db($db, $this -> db)) {

					exit ('No table'); // сообщение о том, что нет такой таблицы в базе
					
					return $this -> db;
				};
					mysql_query("set names utf8");
					mysql_set_charset("utf8");

	}
		
		// метод вытягивает все статьи из базы данных
	public function get_all_db() {
			
					


  				$sql="SELECT news.id_news, news.title, news.date, news.time, news.author, news.first_paragraf, news.main_text, news_tags.id_tags AS tags, category.category_name, GROUP_CONCAT(tags.tag_name SEPARATOR ', ')
   				  FROM news
   				  INNER JOIN news_tags ON news.id_news = news_tags.id_news 
  				  LEFT JOIN tags ON news_tags.id_tags = tags.id_tags
  				  LEFT JOIN category ON news.id_category = category.id_category
  				 GROUP BY id_news";
  				 
				$res = mysql_query($sql);//посылаем запрос базе данных и вносим его в переменную $res
				if(!$res) {
					return FALSE;
				}

				for($i = 0; $i < mysql_num_rows($res); $i++) {
					$row[] = mysql_fetch_array($res, MYSQL_ASSOC); //читаем ряды из таблицы базы данных

				}
		return $row;
	}

 	public function get_one_db() { //этот метод вытягивает одну статью из базы данных

		
	}

}


?>