<?php
session_start();
$con=mysqli_connect("localhost","root","","ecomm");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/php/ecommerce/');
define('SITE_PATH','http://127.0.0.1/php/ecommerce/');

define('INSTAMOJO_REDIRECT',SITE_PATH.'payment_complete.php');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');

define('PRODUCT_MULTIPLE_IMAGE_SERVER_PATH',SERVER_PATH.'media/product_images/');
define('PRODUCT_MULTIPLE_IMAGE_SITE_PATH',SITE_PATH.'media/product_images/');

define('BANNER_SERVER_PATH',SERVER_PATH.'media/banner/');
define('BANNER_SITE_PATH',SITE_PATH.'media/banner/');

define('INSTAMOJO_KEY','5d1f9bd89ab39d75b324f4d975a046b7');
define('INSTAMOJO_TOKEN','ad85920729d42b7ce52737cc5bd6a951');
//https://www.youtube.com/watch?v=zWLKQ_loJqI&list=PLWCLxMult9xfYlDRir2OGRZFK397f3Yeb&index=24


define('SMTP_EMAIL','20bmiit076@gmail.com');
define('SMTP_PASSWORD','123456789');
//https://www.youtube.com/watch?v=aBbmo1pi5B0&list=PLWCLxMult9xfY_dsYicKGcCLhlZ6YXFMh&index=1


define('SMS_KEY','sms_key');
//https://www.youtube.com/watch?v=_XaaIJlkNV4&list=PLWCLxMult9xfYlDRir2OGRZFK397f3Yeb&index=27
?>