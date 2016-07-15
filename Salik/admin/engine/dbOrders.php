<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Driver DB management class
 *
 * @package hanapub
 */

require_once 'dbConn.php';

class dbOrder extends dbConn{
	function __construct() {
        parent::__construct(array());
    }
    
    public function createDriver($fullname,$username,$pass,$number_id){
        	
        $sql = "INSERT INTO driver_table 	(driver_fullname,driver_name,driver_password,driver_number_id,driver_car_id) ";
        $sql.= "VALUES 	('$fullname','$username','$pass','$number_id',1)";
     
        $this->query($sql);
     }
   
    public function dropDriverById($id) {
    	
//
            $sql = "DELETE FROM driver_table WHERE driver_id=$id";
            $this->query($sql);
    }

    public function getTotalOrderNumber() {
        $sql="SELECT * FROM order_table";
        $result=$this->query($sql);
        $number=$result->num_rows;
    
        return $number;
    }
    public function getTotalPendingNumber() {
        $sql="SELECT * FROM order_table WHERE order_state=1";
        $result=$this->query($sql);
        $number=$result->num_rows;
    
        return $number;
    }
    public function getTotalInprogressNumber() {
        $sql="SELECT * FROM order_table WHERE order_state=2";
        $result=$this->query($sql);
        $number=$result->num_rows;
    
        return $number;
    }
    public function getTotalCancelledNumber() {
        $sql="SELECT * FROM order_table WHERE order_state=4";
        $result=$this->query($sql);
        $number=$result->num_rows;
    
        return $number;
    }
    public function getTotalCompletedNumber() {
        $sql="SELECT * FROM order_table WHERE order_state=3";
        $result=$this->query($sql);
        $number=$result->num_rows;
    
        return $number;
    }
	public function getOrders($times)
	{
        $limit=3*$times;
		$sql="SELECT * FROM order_table   order by order_id ASC limit $limit offset 0 ";
              // print_r($sql);exit;
		$orders=$this->fetchAll($sql);
		return $orders;
	}

    public function getOrderById($id) {
        $sql = "SELECT * FROM Order_table join car_table on order_table.order_car_id=car_table.car_id WHERE order_id=$id";
        //print_r($sql);exit;
        $order = $this->fetchRow($sql);
        return $order;
    }
   
     public function getDriverByDrivername($Drivername) {
       $sql = "SELECT * FROM tbl_Driver join tbl_channel on tbl_channel.id=tbl_Driver.Driver_channel_id WHERE Drivername='$Drivername'";
       // print_r($sql);exit;
        $Driver = $this->fetchRow($sql);
       // print_r($Driver['Drivername']);exit;
        return $Driver;
    }
    
     public function saveOrderById($id,$state) {
        $sql = "UPDATE order_table "	;   
        $sql.= "SET order_state='$state'";
        $sql.= "WHERE order_id=$id";
        //print_r($sql);exit;
        $this->query($sql);
    }
    
    public function checkDrivername($drivername)
    {
    	$sql = "select * from driver_table where driver_name='$drivername'";
    	$res = $this->fetchRow($sql);
    	return $res;
    }
    
    public function getDriverWithPassword($Drivername)
    {
    	$sql = "select * from tbl_Driver where Drivername='$Drivername'";
    
    	$res = $this->fetchRow($sql);
       
    	if($res) {
           // if($res['password']==$password)
    		   		
				return $res;
        }else
        {
             return null;
        }
       
          
    	    	
    }
    
    
    public function DriverNameExist($Drivername)
    {
		$sql = "select Driver_id from tbl_Driver where Drivername='" . $Drivername . "'";
		$res = $this->fetchAll($sql);
	    	if(count($res) > 0)
	    	{
	    		return true;
	    	}
	    	return false;
    }
    
	public function checkEmail($email)
	{
		$sql="select Driver_id from tbl_Driver where email='".$email."'";
		$res=$this->fetchAll($sql);
		if(count($res)>0)
			return true;
		return false;
	}

}

$dbOrder = new dbOrder();

?>
