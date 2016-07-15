<?php
 /**
 * index.php, home page.
 * @package Example-application
 */

require('./setup.php');


require_once('dbDriver.php');
require_once('dbCar.php');
$action="";
$driver=null;

$driver_fullname="";
$driver_username="";
$driver_password="";
$driver_id="";
$driver_number_id="";
$mode="Add";
$car_id="";
$selectedcar_id="";
$selectedcar="";
$selectedcar_name="XXX";
$selectedcar_type="YYY";
$selectedcar_number="00000000";
$cars="";
$car="";

if(isset($_REQUEST['action']))
{
    $action = $_REQUEST['action'];
}
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	$times=$_REQUEST['times'];
if($action == "driver_info") //create new app
{
    //$user_id=$_REQUEST['id'];
	$driver_username=$_REQUEST['username'];
	$driver_fullname=$_REQUEST['fullname'];
	$driver_password=$_REQUEST['password'];
	$driver_number_id=mt_rand(100000000, 999999999);
	$mode=$_REQUEST['mode'];
    $car_id=$_REQUEST['car_in'];
    $car=$dbCar->getCarById($car_id);
    $cars=$dbCar->getCarsAll();
	 if($mode=='Add'){
		 if($dbDriver->checkDrivername($driver_username)){
			echo "<script>alert('Invalid username ')</script>";
		}else{
				$dbDriver->createDriver( $driver_fullname,$driver_username,$driver_password,$driver_number_id,$car_id);
				$driver_fullname="";
				$driver_username="";
				$driver_password="";
                $selectedcar_id="";
                $selectedcar="";
		}
	}

	if($mode=='Save'){
		$driver_id=$_REQUEST['driver_id'];
        $driver=$dbDriver->getDriverById($driver_id);
		$dbDriver->saveDriverById($driver_id,$driver_fullname,$driver_username,$driver_password,$car_id);
		$mode="Add";
		$driver_fullname="";
		$driver_username="";
		$driver_password="";
        $selectedcar_id="";
        $selectedcar="";
		  
	}
}			
if($action=="mode"){
	$driver_id=$_REQUEST['driver_id'];
	$driver=$dbDriver->getDriverById($driver_id);
    $driver_username=$driver['driver_name'];
	$driver_fullname=$driver['driver_fullname'];
	$driver_password=$driver['driver_password'];
    $car_id=$driver['driver_car_id'];
    $car=$dbCar->getCarById($car_id);
    $selectedcar_id=$car_id;
    $selectedcar_name=$car['car_name_color'];
    $selectedcar_type=$car['car_type'];
    $selectedcar_number=$car['car_plate_number'];
    $mode="Save";
}
if($action=="driver_delete"){
	$driver_id=$_REQUEST['driver_id'];
	$dbDriver->dropDriverByID($driver_id);
}
	
	$drivers=$dbDriver->getDrivers($times);
	$totalDriversNumber=$dbDriver->getTotalDriversNumber();
    $cars=$dbCar->getCarsAll();
    $smarty->assign('totalDriversNumber',$totalDriversNumber);
	$smarty->assign('driver_id',$driver_id);
	$smarty->assign('fullname',$driver_fullname);
	$smarty->assign('username',$driver_username);
	$smarty->assign('password',$driver_password);
    $smarty->assign('cars',$cars);
    $smarty->assign('selectedcar_id',$selectedcar_id);
    $smarty->assign('selectedcar_name',$selectedcar_name);
    $smarty->assign('selectedcar_type',$selectedcar_type);
    $smarty->assign('selectedcar_number',$selectedcar_number);
	$smarty->assign('drivers',$drivers);
	$smarty->assign('times',$times);
   	$smarty->assign('mode',$mode);
	$smarty->display("{$prefix}drivers.tpl");
}else{
    $smarty->display("login.tpl");
}
?>