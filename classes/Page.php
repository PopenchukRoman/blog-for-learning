<?php

class Page {

	//kod klassa

	public $text; //свойство класса Page
	
		//метод для получения всех статей
	public function get_all() {

		$db = new Database(HOST, USER, PASS, DB); 
		$result = $db -> get_all_db();	
		$this->dbb = $result;
	return $result;
	}

	//метод для получения одной статьи
	public function get_one($id_news) {

	}

	//метод для вывода на экран
	public function get_body($text, $file) {
		
		ob_start();		//функция, которая помещает вывод в буфер обмена, а не на экран все что идет после этой функции
		echo $row['title'];		
		include $file.'.php';
		
		return ob_get_clean();	//эта функция "вытягивает" данные из буфера обмена и сразу его очищает
	}
}

?>