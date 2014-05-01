<?php
      header('HTTP/1.0 301 Moved Permanently'); 
      header('Location: http://ws.assoc-amazon.com/widgets/q?_encoding=UTF8&Format=_SL_&ASIN='.$_GET["img"].'&MarketPlace=US&ID=AsinImage&WS=1&ServiceVersion=20070822');
	  exit();
?>