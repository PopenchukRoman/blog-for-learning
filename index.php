<?php

include "config.php";
include "classes/Page.php";
include "classes/Database.php";

$page = new Page(); //создаем объект класса Page

if (isset($_GET['id_news'])) {   //если в глобальном массиве $_GET существует параметр id_news

}else{

$text = $page -> get_all();
echo $page -> get_body($text, 'main');

}


?>
