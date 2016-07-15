<?php
 /**
 * index.php, home page.
 * @package Example-application
 */

require('./setup.php');


require_once('dbCar.php');
$action="";
$car=null;

$car_name_color="";
$car_class="";
$car_plate_number="";
$car_id="";
$car_number_id="";
$mode="Add";

if(isset($_REQUEST['action']))
{
    $action = $_REQUEST['action'];
}
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	$times=$_REQUEST['times'];
if($action == "car_info") //create new app
{
    //$user_id=$_REQUEST['id'];
	$car_name_color=$_REQUEST['carname'];
	$car_class=$_REQUEST['class'];
    $car_plate_number=$_REQUEST['platenumber'];
	$car_number_id=mt_rand(100000000, 999999999);
	$mode=$_REQUEST['mode'];
    
	 if($mode=='Add'){
		 if($dbCar->checkCarPlateNumber($car_plate_number)){
			echo "<script>alert('Invalid Car Plate Number! ')</script>";
		}else{
				$dbCar->createCar( $car_name_color,$car_class,$car_plate_number,$car_number_id);
                $car_name_color="";
                $car_class="";
                $car_plate_number="";
		}
	}

	if($mode=='Save'){
		$car_id=$_REQUEST['car_id'];
        $car=$dbCar->getCarById($car_id);
		$dbCar->saveCarById($car_id,$car_name_color,$car_class,$car_plate_number);
		$mode="Add";
        $car_name_color="";
        $car_class="";
        $car_plate_number="";
		  
	}
}			
if($action=="mode"){
	$car_id=$_REQUEST['car_id'];
	$car=$dbCar->getCarById($car_id);
    $car_name_color=$car['car_name_color'];
	$car_class=$car['car_type'];
    $car_plate_number=$car['car_plate_number'];
    
    $mode="Save";
}
if($action=="car_delete"){
	$car_id=$_REQUEST['car_id'];
	$dbCar->dropCarByID($car_id);
}
	
	$cars=$dbCar->getCars($times);
	$totalCarsNumber=$dbCar->getTotalCarsNumber();
    $smarty->assign('totalCarsNumber',$totalCarsNumber);
	$smarty->assign('car_id',$car_id);
	$smarty->assign('carname',$car_name_color);
	$smarty->assign('class',$car_class);
	$smarty->assign('platenumber',$car_plate_number);
	$smarty->assign('cars',$cars);
	$smarty->assign('times',$times);
   	$smarty->assign('mode',$mode);
	$smarty->display("{$prefix}car.tpl");
}else{
    $smarty->display("login.tpl");
}
?>