<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Api extends CI_Controller {

    var $data;
    public function __construct() {
    	
    	parent::__construct();

    	$valid = !(
    			empty($_SERVER['CONTENT_TYPE']) ||
    			$_SERVER['CONTENT_TYPE'] != 'application/json; charset=UTF-8' ||
    			!(isset($_SERVER['HTTP_API_KEY']) && $_SERVER['HTTP_API_KEY'] == config_item('api_key')));

    	if($valid) {
    		$this->data = json_decode(file_get_contents('php://input'), TRUE);
    		$valid = !!count($this->data);
    	}
    	if(!$valid) {
    		echo "Invalid Request";
    		exit;
    	}
    }

	public function login(){
		$request_fields = array('driver_name');
	    	$request_form_success = true;
	    	foreach ($request_fields as $request_field) {
	    		if (!isset($this->data[$request_field])) {
	    			$request_form_success = false;
	    			break;
	    		}
	    	}
	    	if (!$request_form_success) {
	    		$response['status'] = 0;
	    		$response['msg'] = config_item('msg_fill_form');
	    	} else {
	    		$response = $this->api_model->login($this->data);
	    	}
	    	echo json_encode($response);
	}
	
	public function getOrders(){
		$request_fields = array('driver_name');
	    	$request_form_success = true;
	    	foreach ($request_fields as $request_field) {
	    		if (!isset($this->data[$request_field])) {
	    			$request_form_success = false;
	    			break;
	    		}
	    	}
	    	if (!$request_form_success) {
	    		$response['status'] = 0;
	    		$response['msg'] = config_item('msg_fill_form');
	    	} else {
	    		$response = $this->api_model->getOrders($this->data);
	    	}
	    	echo json_encode($response);
	}

	public function sign(){
		$request_fields = array('user_city');
	    	$request_form_success = true;
	    	foreach ($request_fields as $request_field) {
	    		if (!isset($this->data[$request_field])) {
	    			$request_form_success = false;
	    			break;
	    		}
	    	}
	    	if (!$request_form_success) {
	    		$response['status'] = 0;
	    		$response['msg'] = config_item('msg_fill_form');
	    	} else {
	    		$response = $this->api_model->sign($this->data);
	    	}
	    	echo json_encode($response);
	}

	public function order() {	
	    	$request_fields = array('order_phone_number');
	    	$request_form_success = true;
	    	foreach ($request_fields as $request_field) {
	    		if (!isset($this->data[$request_field])) {
	    			$request_form_success = false;
	    			break;
	    		}
	    	}
	    	if (!$request_form_success) {
	    		$response['status'] = 0;
	    		$response['msg'] = config_item('msg_fill_form');
	    	} else {
	    		$response = $this->api_model->order($this->data);
	    	}
	    	echo json_encode($response);
    }   
    
    	public function orderStateChange() {	
	    	$request_fields = array('driver_id', 'order_id');
	    	$request_form_success = true;
	    	foreach ($request_fields as $request_field) {
	    		if (!isset($this->data[$request_field])) {
	    			$request_form_success = false;
	    			break;
	    		}
	    	}
	    	if (!$request_form_success) {
	    		$response['status'] = 0;
	    		$response['msg'] = config_item('msg_fill_form');
	    	} else {
	    		$response = $this->api_model->orderStateChange($this->data);
	    	}
	    	echo json_encode($response);
    }
           
       	public function getCars() {	
	    	$request_fields = array('apns_id');
	    	$request_form_success = true;
	    	foreach ($request_fields as $request_field) {
	    		if (!isset($this->data[$request_field])) {
	    			$request_form_success = false;
	    			break;
	    		}
	    	}
	    	if (!$request_form_success) {
	    		$response['status'] = 0;
	    		$response['msg'] = config_item('msg_fill_form');
	    	} else {
	    		$response = $this->api_model->getCars($this->data);
	    	}
	    	echo json_encode($response);
    }
        public function getHistory() {	
	    	$request_fields = array('driver_id');
	    	$request_form_success = true;
	    	foreach ($request_fields as $request_field) {
	    		if (!isset($this->data[$request_field])) {
	    			$request_form_success = false;
	    			break;
	    		}
	    	}
	    	if (!$request_form_success) {
	    		$response['status'] = 0;
	    		$response['msg'] = config_item('msg_fill_form');
	    	} else {
	    		$response = $this->api_model->getHistory($this->data);
	    	}
	    	echo json_encode($response);
    }
    
        public function clearHistory() {	
	    	$request_fields = array('driver_id');
	    	$request_form_success = true;
	    	foreach ($request_fields as $request_field) {
	    		if (!isset($this->data[$request_field])) {
	    			$request_form_success = false;
	    			break;
	    		}
	    	}
	    	if (!$request_form_success) {
	    		$response['status'] = 0;
	    		$response['msg'] = config_item('msg_fill_form');
	    	} else {
	    		$response = $this->api_model->clearHistory($this->data);
	    	}
	    	echo json_encode($response);
    }
    
        public function orderCancel() {	
	    	$request_fields = array('order_id');
	    	$request_form_success = true;
	    	foreach ($request_fields as $request_field) {
	    		if (!isset($this->data[$request_field])) {
	    			$request_form_success = false;
	    			break;
	    		}
	    	}
	    	if (!$request_form_success) {
	    		$response['status'] = 0;
	    		$response['msg'] = config_item('msg_fill_form');
	    	} else {
	    		$response = $this->api_model->orderCancel($this->data);
	    	}
	    	echo json_encode($response);
    }
}
