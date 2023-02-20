<?php
//print_r($_POST);
//die;
foreach($_POST as $key => $val){
			
				
				if($key == 'chance'){
				
					$errors['other'][$key] = $val['value'];
					$pmt=$val['value'];
			     }
				 if($key == 'chance1'){
				
					$errors['other'][$key] = $val['value'];
					$txtyear=$val['value'];
				
				}  if($key == 'chance2'){
				
					$errors['other'][$key] = $val['value'];
					$txtother_emi=$val['value'];
				
			     }
			
     }
	
    $nper=$txtyear*12;
	$rate=0.14/12;	
	$fv = 0;
	$type = 0;
	
	
	$total_saving=$pmt-$txtother_emi;
	
	
	$pv = ($total_saving * (1 + $rate * $type) * ((pow(1 + $rate, $nper) - 1) / $rate)-$fv) / pow(1 + $rate, $nper);
	
	setlocale(LC_MONETARY, 'en_IN');
	$fmt = new NumberFormatter( 'en_IN', NumberFormatter::CURRENCY ); //edited by akash
    $errors['other']['pv']=$fmt->formatCurrency($final_pv, "INR")."\n"; //edited by akash
	if($txtother_emi<$pmt){
	      
	      
	      // $errors['other']['txtother_emi'] = $txtother_emi;	
			$otheremi_per=$txtother_emi/100;
			//$errors['other']['otheremi_per']=$otheremi_per;
			$otherEMIloanamount = ($pv * $otheremi_per) / 100;
			
			
				//$final_pv=$pv-$otherEMIloanamount;
			    //$errors['other']['pv']=money_format('%!i',$final_pv);
	  
	      if($otherEMIloanamount<$pv)
			{
			 //   $final_pv=$pv-$otherEMIloanamount; // Main value 
				$final_pv1=$pv-$otherEMIloanamount;  // ajay changes
			    $final_pv =	round( $final_pv1 / 500 ) * 500; // changes for round value near by 500
			    $errors['other']['loan_eligibility']=$fmt->formatCurrency($final_pv, "INR")."\n";//edited by akash
				
		}else{
		        $pv1 =	round( $pv / 500 ) * 500; // changes for round value near by 500
				
		    	$errors['other']['loan_eligibility']=$fmt->formatCurrency($pv1, "INR")."\n";//edited by akash
				
			}
			
	    
	}else{
	    
	       $errors['other']['loan_eligibility']=0;
	}
	
	 
echo json_encode($errors);

?>