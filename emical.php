<?php
// print_r($_POST);
//die;

foreach($_POST as $key => $val){
			
				
				if($key == 'chance4'){
				
					$errors['other'][$key] = $val['value'];
					$loan_amount=$val['value'];
			     }
				 if($key == 'chance5'){
				
					$errors['other'][$key] = $val['value'];
					$loan_period=$val['value'];
				
				}  
			
     }

    	setlocale(LC_MONETARY, 'en_IN');
	
        $interest_rate=14/(12*100);
		/*one month peried*/
		$loan_period=$loan_period*12;
// 		$emi=($loan_amount*$interest_rate*pow(1+$interest_rate,$loan_period))/(pow(1+$interest_rate,$loan_period)-1); // Main code
        $emi1=($loan_amount*$interest_rate*pow(1+$interest_rate,$loan_period))/(pow(1+$interest_rate,$loan_period)-1); //ajay edit
		$emi =round( $emi1 / 500 ) * 500; // changes for round value near by 500
		
		$fmt = new NumberFormatter( 'en_IN', NumberFormatter::CURRENCY ); //edited by akash
		
		$errors['other']['emi']=$fmt->formatCurrency($emi, "INR")."\n"; //edited by akash

		  
echo json_encode($errors);
?>