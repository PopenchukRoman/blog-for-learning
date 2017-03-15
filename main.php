<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>EscapeRoomGadgets</title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
    <link href="jquery-paginator-3000-1.2.0/demo/css/styles.css" rel="stylesheet" media="all"/>
    <link rel="stylesheet" type="text/css" href="styles/my_style.css">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet"
          type="text/css"/>
    <link href="jqcloud/jqcloud.css" rel="stylesheet" type="text/css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="scripts/script.js"></script>
    <script type="text/javascript" src="jqcloud/jqcloud-1.0.4.js"></script>
    <script type="text/javascript" src="jquery-paginator-3000-1.2.0/jquery.paginator.3000.js"></script>
 
</head>
<body>
 
  <div id="main">
    <div id="header">EscapeRoomGadgets
   <br>
    <span style = "font-size: 15px;"> 
   Сегодня
   <?php echo date("d m Y"); ?> г.
    </span>     
    </div>
    <div id="blog_page">

              <? if (isset ($text) : ?> 
                      
                     <? foreach($text as $item) : ?>

                         <h2><a href = "index.php?id= "<?=$item['id_news'];?>"></a></h2>

                      <? endforeach; ?>

              <? endif; ?>
                  
                      <? if (isset($text)) : ?> 
                          
                             <?php foreach($text as $value) { ?>

                                <h1 class=""entry_title>

                                   <a href = "index.php?id= "<?php echo $value['id_news'];?>"><?php  echo $value['title']; ?></a>

                                </h1>

                                  <span class="posted_date"><?php echo $value['date'];?>&nbsp;</span>
                                  <span class="posted_time"><?php echo $value['time'];?>&nbsp;</span>
                                  <span class="posterer"><?php echo $value['author'];?></span><br><br>
                                  <span class="category_name"><i>category: </i> <?php echo $value['category_name'];?></span><br />
                                  <span><em>tags: <a href=''></em><?php echo $value[9]?></a></span>
                                  <p class="first_p"><?php echo $value['first_paragraf'] ?></p>
                                  <div class="entry_content"><?php echo $value['main_text'];?></div> 

                             
                          <?php } ?>
                      <? endif; ?>
                      <? endforeach; ?>
              
         <hr />
 
   	 <br><br><br>
        <div class="paginator" id="paginator"></div>
        <br><br><br>
    </div> <!--blog-page  -->
    <div id="tags"></div>
    <div id="footer">Все права защищены
    <h5>Экспериментальная лаборатория Escape_Room_Gadgets<h5>
    
    </div>
</div>  <!-- main -->
</body>
</html>

				 