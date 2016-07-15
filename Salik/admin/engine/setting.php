<?php

// Database Setting Parameters
define("DB_HOST", "localhost");
define("DB_NAME", "salik_db");
define("DB_USER", "salik_admin");
define("DB_PASSWORD", "alkhenji1234@");

// Language settings
$smarty->assign('sitelang', $sitelang);

// Site prefix
$prefix = "";
$smarty->assign('prefix', $prefix);

	
// Mail settings
//define("SMTP_HOST", 			"smtp.live.com");
//define("SMTP_USERNAME", 		"incrediboy1012@hotmail.com");
//define("SMTP_PASSWORD", 		"xxxxxxxx");
//define("DEFAULT_MAIL_ADDRESS", 	"incrediboy1012@hotmail.com");
//define("SMTP_AUTH", 			true);

?>
