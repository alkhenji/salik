<?php
 /**
 * index.php, home page.
 * @package Example-application
 */

require('./setup.php');
require_once('dbOrders.php');
$action="";
$order=null;
$totalOrderNumber="";
$totalPendingNumber="";
$totalInprogressNumber="";
$totalCancelledNumber="";
$totalCompletedNumber="";

$order_id="";

$mode="Add";

if(isset($_REQUEST['action']))
{
    $action = $_REQUEST['action'];
}
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	$times=$_REQUEST['times'];
if($action == "edit") 
{
		$order_id=$_REQUEST['order_id'];
		$order_state=$_REQUEST['order_state'];
		//print_r($order_state);exit;
       
		$dbOrder->saveOrderById($order_id,$order_state);
		
	
}			

if($action=="driver_delete"){
	$driver_id=$_REQUEST['driver_id'];
	$dbDriver->dropDriverByID($driver_id);
}
	
	$orders=$dbOrder->getOrders($times);
        //print_r($orders);exit;
	$totalOrderNumber=$dbOrder->getTotalOrderNumber();
	$totalPendingNumber=$dbOrder->getTotalPendingNumber();
	$totalInprogressNumber=$dbOrder->getTotalInprogressNumber();
	$totalCancelledNumber=$dbOrder->getTotalCancelledNumber();
	$totalCompletedNumber=$dbOrder->getTotalCompletedNumber();
	$smarty->assign('totalOrderNumber',$totalOrderNumber);
	$smarty->assign('totalPendingNumber',$totalPendingNumber);
	$smarty->assign('totalInprogressNumber',$totalInprogressNumber);
	$smarty->assign('totalCancelledNumber',$totalCancelledNumber);
	$smarty->assign('totalCompletedNumber',$totalCompletedNumber);
	$smarty->assign('order_id',$order_id);
	
	$smarty->assign('orders',$orders);
	$smarty->assign('times',$times);
   	$smarty->assign('mode',$mode);
	$smarty->display("{$prefix}orders.tpl");
}else{
    $smarty->display("login.tpl");
}
?>