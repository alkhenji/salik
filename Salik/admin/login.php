<?php
 /**
 * Home page

 * @package Example-application
 */

require('./setup.php');
require_once('common.php');
require_once('dbAdmin.php');



$action="";
if(isset($_REQUEST['action']))
{
    $action = $_REQUEST['action'];
}

if($action=="login"){
$username=$_REQUEST['adminname'];
$password=$_REQUEST['adminpassword'];

$result_admin=$dbAdmin->checkUserWithPassword($username, $password);

if($result_admin){
	
		
		$_SESSION['loggedin'] = true;
		$_SESSION['username'] = $username;
		
		$smarty->display("homepage.tpl");
        exit;
}else {
    echo"<script>alert('Invalid User!');</script>"; 
	$smarty->display("{$prefix}login.tpl");
}
}

?>