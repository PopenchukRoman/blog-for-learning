<?php

	require_once __DIR__.'/../vendor/autoload.php';
	require __DIR__.'/../app/Application.php';

	$app = new Silex\Application();
	//Включим дебаг режим
	$app ['debug'] =true;

$blogPosts = array(
    1 => array(
        'date'      => '2011-03-29',
        'author'    => 'igorw',
        'title'     => 'Using Silex',
        'body'      => '...',
    ),
);

	//Регистрируем провайдер шаблонизатора Twig
	$app->register(new \Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/app/Resources/views'
));
    //Регистрируем провайдер баз данных Doctrine
    $app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver'   => 'pdo_sqlite',
        'path'     => __DIR__.'/app.db',
    ),
));
 

	
	$app->get('/blog', function() use($blogPosts) {
    $output = '';
    foreach ($blogPosts as $post) {
    	$output .= $post['title'];
    	$output .= '<br />';
    	$output .= $post['author'];
    	$output .= '<br />';
    	$output .= $post['date'];
    	$output .= '<br />';
    	$output .= $post['body'];
    	$output .= '<br />';

    }
   
    return $output;
});

	$app -> run();
?>
