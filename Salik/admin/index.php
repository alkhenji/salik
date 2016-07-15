<?php
 /**
 * index.php, home page.
 * @package Example-application
 */
error_reporting(0);
ini_set("error_reporting", false);

require('./setup.php');

$smarty->display("{$prefix}login.tpl");

?>