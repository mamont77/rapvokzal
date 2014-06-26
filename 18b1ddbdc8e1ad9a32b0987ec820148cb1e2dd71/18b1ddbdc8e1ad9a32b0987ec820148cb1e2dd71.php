<?php
  define('LINKFEED_USER', '18b1ddbdc8e1ad9a32b0987ec820148cb1e2dd71');
  require_once($_SERVER['DOCUMENT_ROOT'].'/'.LINKFEED_USER.'/linkfeed_articles.php');      
  $linkfeed = new LinkfeedArticlesClient();
  echo $linkfeed->return_article();
?>