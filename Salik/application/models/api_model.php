<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Api_model extends CI_Model {

    public function __construct() {

    }

	public function login($params){
		$data = array();
		$result = array();
		$status = 0;
		$msg = 'login failed.';

		$request_fields = array('driver_location_address','driver_location_latitude', 'driver_location_longitude');
		foreach ($request_fields as $request_field) {
			if (isset($params[$request_field])) {
				$data[$request_field] = $params[$request_field];
			}
		}

		$query = $this->db->get_where(config_item('driver_table'), 
		array('driver_name' => $params['driver_name'], 'driver_password' => $params['driver_password']));
		if($query->num_rows() > 0){
			$status = 1;
			$msg = 'login success.';

			if(!empty($data)){
				$this->db->update(config_item('driver_table'), $data, array('driver_name' => $params['driver_name']));				
			} 
			
			$query = $this->db->select(array('driver_id','driver_car_id'))->get_where(config_item('driver_table'),array('driver_name' => $params['driver_name'], 'driver_password' => $params['driver_password']));
			$driver_info = $query->row_array();
			$result['driver_id'] = $driver_info['driver_id'];
			$result['driver_car_id'] = $driver_info['driver_car_id'];
			
			$query = $this->db->select(array('car_type'))->get_where(config_item('car_table'),array('car_id' => $driver_info['driver_car_id']));
			$driver_car_type = $query->row_array();
			$result['driver_car_type'] = $driver_car_type['car_type'];
			
		} else{
			$status = 2;
			$msg = 'you don\'t registered.';
		}

		$result['status'] = $status;
		$result['msg'] = $msg;

		return $result;
	}	

	public function getOrders($params){
		$data = array();
		$orders = array();
		$result = array();
		$temp = array();

		$request_fields = array('driver_location_address','driver_location_latitude', 'driver_location_longitude');
		foreach ($request_fields as $request_field) {
			if (isset($params[$request_field])) {
				$data[$request_field] = $params[$request_field];
			}
		}

		$query = $this->db->get_where(config_item('driver_table'), array('driver_name' => $params['driver_name']));
		
		if($query->num_rows() > 0){

			if(!empty($data)){
				$this->db->update(config_item('driver_table'), $data, array('driver_name' => $params['driver_name']));
				
				$lat1 = $params['driver_location_latitude'];
				$long1 = $params['driver_location_longitude'];
				
				$query = $this->db->get_where(config_item('order_table'), array('order_state' => 1, 'order_car_type'=>$params['driver_car_type']));
				if($query->num_rows() > 0){
					$orders = $query->result_array();
					foreach ($orders as $order) {
						$lat2 = $order['order_location_latitude'];
						$long2 = $order['order_location_longitude'];
						$distance = $this->getDistance($lat1, $long1, $lat2, $long2, "K");
						$order['distance'] = $distance;
						array_push($temp, $order);
					}
					$result['orders'] = $temp;
				}
			}

		}
		
		return $result;
	}
	
	public function sign($params){
		$data = array();
		$drivers = array();
		$temp = array();
		$temp1 = array();
		$result = array();
		$status = 0;
		$msg = 'sign failed.';
		
		$lat1 = $params['order_location_latitude'];
		$long1 = $params['order_location_longitude'];
		
		$this->db->like('driver_location_address', $params['user_city']);
		$query = $this->db->get(config_item('driver_table'));
		
		if ($query->result_array() > 0) {
			$drivers = $query->result_array();
			foreach ($drivers as $driver) {
				$lat2 = $driver['driver_location_latitude'];
				$long2 = $driver['driver_location_longitude'];
				$distance = $this->getDistance($lat1, $long1, $lat2, $long2, "K");
				$driver['distance'] = $distance;
				array_push($temp, $driver);
			}
			$result['drivers'] = $temp;
			$status = 1;
			$msg = 'sign success.';
		}
		
		$result['status'] = $status;
		$result['msg'] = $msg;

		return $result;
	}

	public function order($params){
		$result = array();
		$data = array();
		$status = 0;
		$msg = 'Order Failed';
		
		$request_fields = array('order_phone_number','order_car_type_id','order_car_type', 'order_comment', 'order_location_address',
		 'order_location_latitude', 'order_location_longitude', 'apns_id');
		foreach ($request_fields as $request_field) {
			if (isset($params[$request_field])) {
				$data[$request_field] = $params[$request_field];
			}
		}
				
		$query= $this->db->get_where(config_item('order_table'), array('order_phone_number' => $data['order_phone_number'], 'order_state' => 1));
		if ($query->num_rows() > 0) {
			$status = 2;
			$msg = 'You have already ordered!';
		} else{
			$order_date = date('Y-m-d h:i:s');
			$data['order_date_time'] = $order_date;
			$data['order_state'] = 1;

			
			$this->db->insert(config_item('order_table'), $data);
			$insert_id = $this->db->insert_id();
			
			if (isset($insert_id) && $insert_id>0) {
				$result['order_id'] = $insert_id;
				$status = 1;
				$msg = "Order Success!";
			}
		}
		
		$result['status'] = $status;
		$result['msg'] = $msg;
		return $result;
	}
	
	public function orderStateChange($params){
		$result = array();
		$data = array();
		$status = 1;
		$msg = 'Pending State';
		$driver_info = "";
		$alert = "Your Order is in Pending";
		
		$request_fields = array('driver_id',  'order_state');
		foreach ($request_fields as $request_field) {
			if (isset($params[$request_field])) {
				$data[$request_field] = $params[$request_field];
			}
		}
		
		$order_completed_time = date('Y-m-d h:i:sa');
		$data['order_completed_time'] = $order_completed_time;
		
		$this->db->select('*');
		$this->db->from('driver_table a');
		$this->db->join('car_table b','a.driver_car_id = b.car_id', 'left');
		$this->db->where('a.driver_id', $params['driver_id']);
		$query = $this->db->get();
		if($query->num_rows() != 0){
			$driver_info = $query->first_row();
		}
			
		$query = $this->db->get_where(config_item('order_table'), array('order_id'=>$params['order_id']));
		if($query->num_rows() > 0){
			$this->db->update(config_item('order_table'), $data, array('order_id' => $params['order_id']));	
			if($params['order_state']==2){
				$msg = 'Inprogress State';
				$alert = 'Your order is in Progress';
				$status = 2;
	
			} else if($params['order_state']==3){
				$msg = 'Complete State';
				$alert = 'Your order is completed';
				$status = 3;
	
			} else if($params['order_state']==1){
				$msg = 'Pending State';
				$status = 1;
				$alert = 'Your order is in Pending';
	
			} else if($params['order_state']==4){
				$msg = 'Cancel State';
				$status = 4;
				$alert = 'Your order is canceled';
			}
			
			$order = $query->first_row();
			//$result['order'] = $order;
			$apns_id = $order->apns_id;
			$result['apns_id '] = $apns_id ;			
			$msg_apns[] = array('apns_id'=>$apns_id, 'msg'=> array('msg_type'=>$status, 'msg_content'=> $alert, 'driver_info' => $driver_info));
			$this->send_APNS($msg_apns);
			
		}
		
		$result['status'] = $status;
		$result['msg'] = $msg;
		
		return $result;
		
		
	}
	
	public function getCars($params){
		$result = array();
		$data = array();
		$cars = array();
		$temp = array();
		$status = 0;
		$msg = 'There is no cars listed';
		
		$query = $this->db->get(config_item('car_type_table'));

		if ($query->result_array() > 0) {
				$cars = $query->result_array();
				foreach ($cars as $car) {
					array_push($temp, $car);
				}
				$result['cars'] = $temp;
				$status = 1;
				$msg = 'OK';
			}
	
			$result['status'] = $status;
			$result['msg'] = $msg;
	
			return $result;
	}
	
	public function orderCancel($params){
		$result = array();
		$data = array();
		$status = 0;
		$msg = 'Order Cancel Failed';
		
		$order_completed_time = date('Y-m-d h:i:sa');
		$data['order_completed_time'] = $order_completed_time;
		$data['order_state'] = 4;
					
		$query = $this->db->get_where(config_item('order_table'), array('order_id'=>$params['order_id']));
		if($query->num_rows() > 0){
			$this->db->update(config_item('order_table'), $data, array('order_id' => $params['order_id']));	
			$status = 1;
			$msg = 'Order Cancel Success';
		}
		
		$result['status'] = $status;
		$result['msg'] = $msg;
		
		return $result;
		
		
	}
	
	
	public function getHistory($params){
		$result = array();
		$data = array();
		$status = 0;
		$msg = 'Get History Fail';
		
		$this->db->order_by('order_completed_time', 'desc');
		$query = $this->db->select(array('order_id', 'order_location_address', 'order_phone_number', 'order_completed_time'))->get_where(config_item('order_table'), array('driver_id'=>$params['driver_id'], 'order_state'=>3, 'order_history_state'=>0));
		if($query->num_rows()>0){
			
			$orders = $query->result_array();
			
			$result['order_history'] = $orders;
			$status = 1;
			$msg = 'Get History Success';
						
		} else {
			$status = 2;
			$msg = 'You don\'t have history';
		}
		
		$result['status'] = $status;
		$result['msg'] = $msg;
		
		return $result;
	}
	
	public function clearHistory($params){
		$result = array();
		$data = array();
		$temp = array();
		$status = 0;
		$msg = 'Clear History Fail';
		
		$query = $this->db->select(array('order_id'))->get_where(config_item('order_table'), array('driver_id'=>$params['driver_id'], 'order_state'=>3, 'order_history_state'=>0));
		if($query->num_rows()>0){
			
			$orders = $query->result_array();
			
			foreach ($orders as $order) {
				$data['order_history_state'] = 1;
				$this->db->update(config_item('order_table'), $data, array('order_id' => $order['order_id']));	
			}
			
			$status = 1;
			$msg = 'Clear History Success';
						
		} else {
			$status = 2;
			$msg = 'You don\'t have history';
		}
		
		$result['status'] = $status;
		$result['msg'] = $msg;
		
		return $result;
	}
	


	// Get distance
    	public function getDistance($lat1, $lon1, $lat2, $lon2, $unit = "M") {

	        $theta = $lon1 - $lon2;
	        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
	        $dist = acos($dist);
	        $dist = rad2deg($dist);
	        $miles = $dist * 60 * 1.1515;
	        $unit = strtoupper($unit);
	
	        if ($unit == "K") {
	            return ($miles * 1.609344);
	        } else if ($unit == "N") {
	            return ($miles * 0.8684);
	        } else {
	            return $miles;
	        }
    	}

	//Send GCM 
    	public function send_GCM($gcm_ids, $msg_params) {
	    	$status = false;
	    	require_once('GCM.php');
	    
	    	$api_key = 'AIzaSyCB4nwxbd99-jHkw_C6Nk1q8J73EnugHAs';
	    	$sender = '293896954126';
	    	$receiver = 'com.me.salik';
	    	 
	    	$gcm = new GCM();
	    
	    	$ret = $gcm->send_notification($gcm_ids, $msg_params, $api_key);
	    	if(!$ret) {
	    		$status = false;
	    	} else {
	    		$status = true;
	    	}
	    	return $status;
    	}	
    
    	//Send APNS
    	public function send_APNS($msg_params) {
	    	$status = false;
	
	    	$passphrase = 'salik123';
	
	    	////////////////////////////////////////////////////////////////////////////////
	    
	    	$ctx = stream_context_create();
	    	stream_context_set_option($ctx, 'ssl', 'local_cert', './application/models/ckdev.pem');
	    	stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);
	
	    	// Open a connection to the APNS server
	    	//$fp = stream_socket_client(
	    	//		'ssl://gateway.push.apple.com:2195', $err,
	    	//		$errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);
	    
	    	  $fp = stream_socket_client(
	    	     	'ssl://gateway.sandbox.push.apple.com:2195', $err,
	         			$errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);
	    	
	    	if(!$fp) exit("Failed to connect: $err $errstr" . PHP_EOL);
	    	//echo 'Connected to APNS' . PHP_EOL;
	    	// Create the payload body
	
	    	foreach($msg_params as $param) {
	    		
	    		$message_info = array('message' => $param['msg']['msg_content'], 'driver_info' => $param['msg']['driver_info'], 'order_state' => $param['msg']['msg_type']);
	    		
	    		// Create the payload body
	    		$body['aps'] = array(
	    				'alert' => $param['msg']['msg_content'],
	    				'sound' => 'default',
	    				'badgecount' => 1,
	    				'info'=> $message_info,
	    				'notify' => 'notification',
	    		);
	    		// Encode the payload as JSON
	    		$payload = json_encode($body);
	    		// Build the binary notification
	    		$msg1 = chr(0) . pack('n', 32) . pack('H*', $param['apns_id']) . pack('n', strlen($payload)) . $payload;
	    		// Send it to the server
	    		$result_apns = fwrite($fp, $msg1, strlen($msg1));
	    		if (!$result_apns) {
	    			$status = false;
	    		} else {
	    			$status = true;
	    		}
	    	}
	    	// Close the connection to the server
	    	fclose($fp);
    
	    	return $status;
	    }

}
