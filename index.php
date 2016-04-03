<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Blog-for-learning</title>
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
  <?php

  $connection = mysql_connect("localhost", "root", "root");
  $db = mysql_select_db("bfl_blog");
  mysql_set_charset("utf8");	
	if(!$connection || !$db){
	
	exit(mysql_error());
	}
  $result = mysql_query("SELECT * FROM news JOIN category, news_tags WHERE flag ='public' ORDER BY news_id DESC");

  mysql_close();


  ?>

  <div id="main">
    <div id="header"><br/>БЛОГ ХИРОМАНТА</div>
    <div id="blog_page">
    <?php
  while($row = mysql_fetch_array($result))
	{?>
	
       <h1 class="entry_title"><?php echo $row['title']; ?></h1>
       <span class="posted_date"><?php echo $row['date'];?>&nbsp;</span>
       <span class="posted_time"><?php echo $row['time'];?>&nbsp;</span>
       <span class="posterer"><?php echo $row['author'];?></span><br><br>
       <span class="category_name"><i>category:</i> <?php echo $row['category_name'];?></span><br />
      <span><em>tags:</em><?php echo $row['tag_name']?></span>
       <p class="first_p"><?php echo $row['first_paragraf'] ?></p>
       <div class="entry_content"><?php echo $row['text'];?></div> 
             <hr />
  <?php } ?>
   	 <br><br><br>
        <div class="paginator" id="paginator"></div>
        <br><br><br>
    </div><!--div id="blog-page"  -->
    <div id="tags"></div>
    <div id="footer">Footer</div>
</div>  <!-- main -->
</body>
</html>
