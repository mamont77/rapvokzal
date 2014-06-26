<?php 
     define('_SAPE_USER', '6d1f49c2cae6ab548d3991f3940527a7');
     require_once($_SERVER['DOCUMENT_ROOT'].'/'._SAPE_USER.'/sape.php'); 
     $sape_articles = new SAPE_articles();
     echo $sape_articles->process_request();
?>
