<?php
// echo "<pre>";
// print_r($_POST);
// die;
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);

$namefrom=$_POST['data']['name']['value'];
$phone=$_POST['data']['mobile']['value'];
$location1=$_POST['data']['location']['value'];
$city=$_POST['data']['city']['value'];
$business=$_POST['data']['business']['value'];
$loan_amt=$_POST['data']['loan_amt']['value'];
$book_visit_date=$_POST['data']['book_visit_date']['value'];

$location = $location1. " { " . $city . " } " ;

// print_r($location);
// die;


include 'db_configCMS.php';

 date_default_timezone_set('Asia/Kolkata');
 $today = date("j F Y, g:i a"); 

          

              $sql="insert into cms_lets_meet(name,mobile,location,business,loan_amt,book_visit_date) values('".$namefrom."','".$phone."','".$location."','".$business."','".$loan_amt."','".$book_visit_date."')";
              
              
             // echo $sql;
            //  die;

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
					$mail->Password   = "Nariman#76";   //nnytmrudpulsevop// ojmskmrxnqxwdtpg//"Hf5lAdM1n@321";//expnmoimixucrtbn
					//$mail->Password   = "owcchyibxakxjicx";            // GMAIL password OLD
					//$mail->Username   = "wecare@hfsl.in";  // GMAIL username
					//$mail->Password   = "owcchyibxakxjicx";            // GMAIL password
					$mail->AddReplyTo('wecare@hfs.in', 'HFS');
					  
					$mailAutoReply = clone $mail;
				
						
						$mailAutoReply->AddAddress('wecare@hfs.in', 'HFS');
        				$mailAutoReply->SetFrom("wecare@hfs.in", "HFS-Enquiry");
						
						$MailHtmlMessageAuto = "<html><body>";
            			$MailHtmlMessageAuto .= "<h2><u>Enquiry</u></h2></br>The details provided by the enquirer are as mentioned below-<br><br>";
            			$MailHtmlMessageAuto .= "<strong>First Name  </strong><strong> : </strong>".$namefrom."<br>";
            	     	$MailHtmlMessageAuto .= "<strong>Phone </strong><strong> : </strong>".$phone."<br>";
                		$MailHtmlMessageAuto .= "<strong>Location </strong><strong> : </strong>".$location."<br>";
                        $MailHtmlMessageAuto .= "<strong>Loan Amount </strong><strong> : </strong>".$loan_amt."<br>";
                		$MailHtmlMessageAuto .= "<strong>Book Visit Date </strong><strong> : </strong>".$book_visit_date."<br>";
            			$MailHtmlMessageAuto .= "</body></html>";
            			
            			$mailAutoReply->Subject  = 'Enquiry';
            			$mailAutoReply->isHTML(true);                                  // Set email format to HTML
            			$mailAutoReply->Body    = $MailHtmlMessageAuto;
				
						$mailAutoReply->IsHTML(true);
						
						if (!$mailAutoReply->send()) {
							echo "2 - Mailer Error: " . $mail->ErrorInfo;
						}else{
					    
		
						echo "<script> var currentURL=window.top.location.href; localStorage.setItem('currentURL',currentURL); window.parent.location.href= 'https://hfs-website-prd.azurewebsites.net/thank-you'; </script>";
						//	echo "sent";
						}
					
		        }else{
		            
		            echo "ERROR".$query."<br>".$con->error;
		        }
	
