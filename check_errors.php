<?php
//print_r($_POST);
//die;
	if(!empty($_POST)){
		 
		$errors = array();
	
		foreach($_POST as $key => $val){
				
			foreach($val as $k => $v){
				
				if($k == 'value' && ($v == 'null' || empty($v))){
					
					$errors['required'][$key] = $val['type'];
				}
			}
			if($key == 'name'){
				if (!preg_match("/^[a-zA-Z ]*$/",$val['value'])) {
					$errors['other'][$key] = "Name";
				}
			}
			if($key == 'lastname'){
				if (!preg_match("/^[a-zA-Z ]*$/",$val['value'])) {
					$errors['other'][$key] = "Last Name";
				}
			}
		    if($key == 'mobile'){
				if(!is_numeric($val['value']) || strlen($val['value'])<10 || strlen($val['value'])>12){
					$errors['other'][$key] = "Mobile";
				}
			}
			if($key == 'email'){
				if (!filter_var($val['value'], FILTER_VALIDATE_EMAIL)) {
					$errors['other'][$key] = "Email";
				}
			}
			
			if($key == 'date'){
				if (empty($val['value'])) {
					$errors['required'][$key] = $val['type'];
				}
			}
		
		}
	
	

	}
	echo json_encode($errors);
?>