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

class dbDriver extends dbConn{
	function __construct() {
        parent::__construct(array());
    }
    
    public function createDriver($fullname,$username,$pass,$number_id,$car_id){
        	
        $sql = "INSERT INTO driver_table 	(driver_fullname,driver_name,driver_password,driver_number_id,driver_car_id) ";
        $sql.= "VALUES 	('$fullname','$username','$pass','$number_id','$car_id')";
       
     
        $this->query($sql);
     }
   
    public function dropDriverById($id) {
    	
//
            $sql = "DELETE FROM driver_table WHERE driver_id=$id";
            $this->query($sql);
    }

    public function getTotalDriversNumber() {
        $sql="SELECT * FROM driver_table";
        $result=$this->query($sql);
        $number=$result->num_rows;
    
        return $number;
    }

	public function getDrivers($times)
	{
        $limit=3*$times;
		$sql="SELECT * FROM driver_table join car_table on driver_table.driver_car_id=car_table.car_id limit $limit offset 0";
        
		$Drivers=$this->fetchAll($sql);
		return $Drivers;
	}

    public function getDriverById($id) {
        $sql = "SELECT * FROM driver_table join car_table on driver_table.driver_car_id=car_table.car_id WHERE driver_id=$id";
        //print_r($sql);exit;
        $Driver = $this->fetchRow($sql);
        return $Driver;
    }
   
     public function getDriverByDrivername($Drivername) {
       $sql = "SELECT * FROM tbl_Driver join tbl_channel on tbl_channel.id=tbl_Driver.Driver_channel_id WHERE Drivername='$Drivername'";
       // print_r($sql);exit;
        $Driver = $this->fetchRow($sql);
       // print_r($Driver['Drivername']);exit;
        return $Driver;
    }
    
     public function saveDriverById($id,$fullname,$username,$pass) {
        $sql = "UPDATE driver_table "	;   
        $sql.= "SET driver_name='$username',driver_fullname='$fullname', driver_password='$pass'";
        $sql.= "WHERE driver_id=$id";
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

$dbDriver = new dbDriver();

?>
