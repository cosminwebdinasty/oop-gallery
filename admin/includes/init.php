<?php 

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('DS') ? null : define('SITE_ROOT', 'C:'.DS.'xampp'.DS.'hdocs'.DS.'gallery' .DS.'admin' .DS.'includes'.DS.'images');

require_once("functions.php");
require_once("new_config.php");
require_once("database.php");
require_once("db_object.php");
require_once("user.php");
require_once("photo.php");
require_once("comment.php");
require_once("session.php");
require_once("paginate.php");
?>