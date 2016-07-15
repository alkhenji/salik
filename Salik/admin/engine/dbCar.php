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

class dbCar extends dbConn{
	function __construct() {
        parent::__construct(array());
    }
    
    public function createCar($car_name_color,$car_class,$car_plate_number,$car_number_id){
        	
        $sql = "INSERT INTO car_table 	(car_name_color,car_type,car_plate_number,car_number_id) ";
        $sql.= "VALUES 	('$car_name_color','$car_class','$car_plate_number','$car_number_id')";
     
        $this->query($sql);
     }
   
    public function dropCarById($id) {
    	
//
            $sql = "DELETE FROM car_table WHERE car_id=$id";
            $this->query($sql);
    }

    public function getTotalCarsNumber() {
        $sql="SELECT * FROM car_table";
        $result=$this->query($sql);
        $number=$result->num_rows;
    
        return $number;
    }

	public function getCars($times)
	{
        $limit=3*$times;
		$sql="SELECT * FROM car_table  limit $limit offset 0";
        
		$cars=$this->fetchAll($sql);
		return $cars;
	}
    
    public function getCarsAll()
	{
       
		$sql="SELECT * FROM car_table ";
        //print_r($sql);exit;
		$cars=$this->fetchAll($sql);
		return $cars;
	}
    public function getCarById($id) {
        $sql = "SELECT * FROM car_table  WHERE car_id=$id";
        //print_r($sql);exit;
        $car = $this->fetchRow($sql);
        return $car;
    }
   
     public function getDriverByDrivername($Drivername) {
       $sql = "SELECT * FROM tbl_Driver join tbl_channel on tbl_channel.id=tbl_Driver.Driver_channel_id WHERE Drivername='$Drivername'";
       // print_r($sql);exit;
        $Driver = $this->fetchRow($sql);
       // print_r($Driver['Drivername']);exit;
        return $Driver;
    }
    
     public function saveCarById($car_id,$car_name_color,$car_class,$car_plate_number) {
        $sql = "UPDATE car_table "	;   
        $sql.= "SET car_name_color='$car_name_color',car_type='$car_class', car_plate_number='$car_plate_number'";
        $sql.= "WHERE car_id=$car_id";
        $this->query($sql);
    }
    
    public function checkCarPlateNumber($car_plate_number)
    {
    	$sql = "select * from car_table where car_plate_number='$car_plate_number'";
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

$dbCar = new dbCar();

?>
