<?php

$namefrom=$_POST['data']['name']['value'];
$phone=$_POST['data']['mobile']['value'];
$email=$_POST['data']['email']['value'];
$city=$_POST['data']['city']['value'];
$message=$_POST['data']['message']['value1'];
$business=$_POST['data']['business']['value'];
$loan_amt=$_POST['data']['loan_amt']['value'];

if(empty($namefrom) && empty($phone)  && empty($email) && empty($city) && empty($business) && empty($loan_amt))
{
    echo "All fields are required";
}else{

include 'db_configCMS.php';

 date_default_timezone_set('Asia/Kolkata');
 $today = date("j F Y, g:i a"); 

                ini_set('display_startup_errors',1);
	            ini_set('display_errors',1);
             	error_reporting(-1); 

              $sql="insert into cms_quick_enquiry (name,mobile,email,city,message,business,loan_amt) values ('".$namefrom."','".$phone."','".$email."','".$city."','".$message."','".$business."','".$loan_amt."')";

 // echo $sql;
  //die;
    
		      if($con->query($sql)===true)
		        { 
                	require_once('PHPMailer-master/PHPMailerAutoload.php');
				//	require_once('class.phpmailer.php');
			
					$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
					
                	$mail->IsSMTP(); // telling the class to use SMTP
			
					$mail->Host       = "smtp.gmail.com"; // SMTP server
					$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
					$mail->SMTPAuth   = true;                  // enable SMTP authentication
					$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
					$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
					$mail->Username   = "wecare@hfs.in";  // GMAIL username
					$mail->Password   = "Nariman#76"; //nnytmrudpulsevop//ojmskmrxnqxwdtpg//Hf5lAdM1n@321 expnmoimixucrtbn
					//$mail->Password   = "owcchyibxakxjicx";            // GMAIL password OLD
					//$mail->Username   = "wecare@hfsl.in";  // GMAIL username
					//$mail->Password   = "owcchyibxakxjicx";            // GMAIL password
					$mail->AddReplyTo('wecare@hfs.in', 'HFS');
					  
					$mailAutoReply = clone $mail;
					
					$mail->AddAddress($email,$namefrom);
					$mail->SetFrom('wecare@hfs.in', 'HFS');
					
					$MailHtmlMessage = "<html><body>";
            		$MailHtmlMessage .= "Dear ".$namefrom.",<br><br>";
            		$MailHtmlMessage .= "Thank you for contacting us. This is to confirm that your message has been received by us on Date ".$today.".<br><br>The details provided by you are as follows-<br><br>";
            		$MailHtmlMessage .= "<strong>First Name  </strong><strong> : </strong>".$namefrom."<br>";
            		$MailHtmlMessage .= "<strong>Email ID</strong><strong> : </strong>".$email."<br>";
            		$MailHtmlMessage .= "<strong>Phone </strong><strong> : </strong>".$phone."<br>";
            		$MailHtmlMessage .= "<strong>City </strong><strong> : </strong>".$city."<br>";
            		$MailHtmlMessage .= "<strong>Business </strong><strong> : </strong>".$business."<br>";
            		$MailHtmlMessage .= "<strong>Loan Amount </strong><strong> : </strong>".$loan_amt."<br>";
            		  if($message){
            		$MailHtmlMessage .= "<strong>Message </strong><strong> : </strong>".$message."<br><br>";
            		  }
            		$MailHtmlMessage .= "We are looking forward to connect with you soon.<br><br>";
            		$MailHtmlMessage .= "Thanks & Regards,<br>Team HFS.<br><br>";
            		$MailHtmlMessage .= "PLEASE DO NOT REPLY TO THIS MAIL. THIS IS AN AUTO GENERATED MAIL AND REPLIES TO THIS EMAIL ID ARE NOT ATTENDED.";
            		$MailHtmlMessage .= "</body></html>";
        			
        			//Content
        			$mail->isHTML(true);                                  // Set email format to HTML
        			
        			$mail->Subject = 'Autoreply from HFS regarding your enquiry';
        			
    		    	$mail->Body    = $MailHtmlMessage;
					
					$mail->IsHTML(true);
					
					if (!$mail->send()) {
						echo "1 - Mailer Error: " . $mail->ErrorInfo;	
					}else{
						
						$mailAutoReply->AddAddress('wecare@hfs.in', 'HFS');
        				$mailAutoReply->SetFrom("wecare@hfs.in", "HFS-Enquiry");
						
						$MailHtmlMessageAuto = "<html><body>";
            			$MailHtmlMessageAuto .= "<h2><u>Enquiry</u></h2></br>The details provided by the enquirer are as mentioned below-<br><br>";
            			$MailHtmlMessageAuto .= "<strong>First Name  </strong><strong> : </strong>".$namefrom."<br>";
            			$MailHtmlMessageAuto .= "<strong>Email ID</strong><strong> : </strong>".$email."<br>";
            			$MailHtmlMessageAuto .= "<strong>Phone </strong><strong> : </strong>".$phone."<br>";
            			$MailHtmlMessage .= "<strong>City </strong><strong> : </strong>".$city."<br>";
            			$MailHtmlMessageAuto .= "<strong>Business </strong><strong> : </strong>".$business."<br>";
            	    	$MailHtmlMessageAuto .= "<strong>Loan Amount </strong><strong> : </strong>".$loan_amt."<br>";
            		  	if($message){
            			$MailHtmlMessageAuto .= "<strong>Message </strong><strong> : </strong>".$message."<br>";
            		  	}
            			$MailHtmlMessageAuto .= "</body></html>";
            			
            			$mailAutoReply->Subject  = 'Enquiry';
            			$mailAutoReply->isHTML(true);                                  // Set email format to HTML
            			$mailAutoReply->Body    = $MailHtmlMessageAuto;
				
					
						$mailAutoReply->IsHTML(true);
						
						if (!$mailAutoReply->send()) {
							echo "2 - Mailer Error: " . $mail->ErrorInfo;
						}else{
						    
							$currentURL =$_SERVER['HTTP_REFERER'];
						echo "<script> var currentURL=window.top.location.href; localStorage.setItem('currentURL',currentURL); window.parent.location.href= 'https://hfs-website-prd.azurewebsites.net/thank-you'; </script>";
						//	echo "sent";
						}
					}
		        }else{
		            
		            echo "ERROR".$query."<br>".$con->error;
		        }
	
}
	        

?>