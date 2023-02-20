
<?php
include_once('db_configCMS.php');

$sql = "SELECT * FROM cms_regulatory WHERE status='Active' order by sort_no ";
$result = $con->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//       	$title =$row['heading'];
//       	$dis =$row['description'];
//         }
//     } else {
//         echo "";
//     }

$sql3 = "SELECT * FROM cms_all_banners WHERE page_name ='Regulatory'";
$result3 = $con->query($sql3);

    
    while ($row3 = $result3->fetch_assoc()) {
        $page_title     = $row3["page_title"];
        $meta_keys      = $row3["meta_keywords"];
        $meta_desc      = $row3["meta_description"];
        $desk           = $row3["desk_banner"];
        $mob            = $row3["mobile_banner"];
        $cap1           = $row3["cap_1"];
        $cap2           = $row3["cap_2"];
        $cap3           = $row3["cap_3"];
    }
           
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$page_title?></title>
	<meta name="keywords" content="<?=$meta_keys?>" />
	<meta name="description" content="<?=$meta_desc?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link href="images/favicon.ico" rel="icon" type="image/ico" />
	<!--css-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="css/reboot.css">
	<link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="pre1/jpreloader.css" media="screen" rel="stylesheet" type="text/css" />
 	<link rel="stylesheet" href="css/animated.min.css"/>
	<link rel="stylesheet" href="menu/meanmenu.css" media="all" />
	<link href="css/according.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/style.css">
 	<link rel="stylesheet" href="css/responsive.css" media="all">
 	<link rel="canonical" href="https://www.hfs.in/regulatory.php"/>

 	<style>.reg_table table {
	display: contents
}

.reg_table td {
	font-size: 11px;
	font-family: Poppins, sans-serif
}
</style>
 	<!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144819872-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-144819872-1');
        </script>
    <!--End Global site tag (gtag.js) - Google Analytics -->
	<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '323785788815447');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=323785788815447&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
	<!--js-->
</head>
<body>
<?php include 'menu.php';?>
<?php include 'social.php';?>
<div class="abt-ban-main head_mrgin">
	<!--<img src="images/regulatry.jpg"   class="desk" alt="" draggable="false">-->
	<!--<img src="images/regulatry-mob.jpg" alt="" class="mob" draggable="false"/>-->
	<img src="<?=$desk?>" alt="" draggable="false" class="desk"/>
	<img src="<?=$mob?>" alt="" draggable="false" class="mob"/>
	<div class="abt-ban-txt">
		<div class="continer1">
			<!--<h2><span>What you<br> need to know?</span></h2>-->
			 <h2 ><?=$cap1?><br><?=$cap2?><br><?=$cap3?></h2> 
	<!--<div class="abt-ban-txt">-->
	<!--	<div class="continer1">-->
	<!--		<h2><span>What you<br> need to know?</span></h2>-->
	
			 
		</div>
	</div>
</div>

<section id="bredcrum" class="faqbg">
	<div class="continer1">
		<div class="bredcrum_main">
			<ul>
				<li><a href="index.php">Home</a> ></li>
				<li><a href="regulatory.php" class="active">Regulatory</a></li>
			</ul>
		</div>
	</div>
</section>

<section id="faqs_page">
	<div class="continer1">
		<div class="faqs_main">
			<div class="head_txt">
				<div class="txt">
					<h1>REGULATORY</h1>
				</div>
			</div>
		</div>
		<div class="faqs_sub">
			<div class="faqs_main_left regulatary_main_left">
				<?php
			    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="accordion" id="section1">&bull; ' .$row['heading'].'<span></span></div>
								<div class="containers">
									<div class="content jobcare">
										<div class="regulatary_txt">
											'.$row['description'].'
										</div>
									</div>
								</div>';
				                    }
				                } else {
				                    echo "";
				                }
            ?>
				<!-- <div class="accordion" id="section1">&bull; Fair Practices Code<span></span></div>
				<div class="containers">
					<div class="content jobcare">
						<div class="regulatary_txt">
							<h4>1. Preface</h4>
							<p>Hiranandani Financial Services Private Limited (the Company/ HFSL), in pursuance of the Directions issued by Reserve Bank of India for Non-Banking Financial Companies (NBFCs), has adopted the following Code for fair practices while dealing with customers. The Fair Practice Code (FPC) is intended to cover the following areas:</p>
							<ul>
								<li>Applications for loans and their processing</li>
								<li>Loan appraisal and terms/conditions</li>
								<li>Disbursement of loans, including changes in terms and conditions</li>
								<li>General provisions</li>
								<li>Grievance redressal mechanism, and</li>
								<li>Interest Charges</li>
							</ul>
						</div>
						<div class="regulatary_txt">
							<h4>2. Objective</h4>
							<ul>
								<li>Promote good, fair and trustworthy practices by setting minimum standards in dealing with customers</li>
								<li>Increase transparency to enable the customers to have a better understanding of what they can reasonably expect of the services.</li>
								<li>Promote a fair and cordial relationship between the customers and the Company.</li>
							</ul>
						</div>
						<div class="regulatary_txt">
							<h4>3. Applications for loans and their processing</h4>
							<ol type="a">
								<li>All relevant information pertaining to the loan/loan facility will be made available in the relevant loan application form(s) or through other modes (term sheet, sanction letter etc.). The loan application form will also indicate/contain the documents required to be submitted together with the duly completed application form and the timelines within which the application will be disposed of, subject to receipt of necessary documents. </li>
								<li>The Client will have the option to receive all the correspondences, loan documents, recall notices etc. relating to loan in vernacular language or a language understood by the Client. For this purpose the Client need to indicate his/her/its preference in the loan application form by selecting the appropriate option.</li>
								<li>Receipt of completed application forms will be duly acknowledged within appropriate timeframe.</li>
							</ol>
						</div>
						<div class="regulatary_txt">
							<h4>4. Loan appraisal and terms/conditions</h4>
							<ol type="a">
								<li>Loan applications shall be assessed in accordance with the Company’s credit appraisal process and policies. The client shall be advised of the outcome of the credit appraisal (approval/rejection) within the period for appraising the loan application indicated in the acknowledgment to loan application, in the vernacular language or a language understood by the Client.</li>
								<li>Upon approval of the loan, the Company shall convey the amount of loan sanctioned, annualized interest rate and other important terms and conditions to the Client by way of sanction letter or otherwise in the language selected by the Client in the application form for correspondence, etc. The penal interest, if any, to be charged by the Company for late repayment, etc. shall be mentioned in bold in the loan agreement. etc. An acceptance of such terms and conditions shall be retained by the Company.</li>
								<li>The Company shall enter into an agreement indicating the amount of loan sanctioned, annualised rate of interest applicable, along with the terms and conditions with the client. A copy of the said agreement along with schedule(s) and annexure(s) to the agreement will be provided to the client in the language opted by the client.he agreement will be provided to the client in the language opted by the client.</li>
							</ol>
						</div>
						<div class="regulatary_txt">
							<h4>5. Disbursement of loans, including changes in terms and conditions</h4>
							<ol type="a">
								<li>Any changes to the terms and conditions, interest rates, , shall be informed individually to the borrowers in case of account specific changes, and in case of others, the same shall be available at the Registered office / Corporate office of the Company or on website Changes in the interest rates and charges shall be effected prospectively. A suitable condition to this effect will be inserted in the loan agreement.</li>
								<li>Decision to recall / accelerate payment or performance under the agreement shall be in accordance with the terms and conditions of the loan documents executed by the borrower with the Company.</li>
								<li>All securities pertaining to the loan would be released on receipt of full and final payment of the loans, subject to any legitimate or contractual right or lien or right to setoff which the Company or any other person may have under the loan documents against the borrowers. If such right of set-off is to be exercised, the borrower shall be given notice about the same, with full particulars about the remaining claims and the conditions under which the right to retain or setoff the securities/sale proceeds from the securities or right to transfer the securities or sale proceeds is exercised by the Company . In the event of full and final payment of the loans along with other dues, if any, “No outstanding dues” certificate shall be issued by the Company within 1 month from the date of receipt of request from the borrower / customer.</li>
								<li>All notices, correspondence in respect of the loan will be made in the vernacular language or language understood by the borrower.</li>
							</ol>
						</div>
						<div class="regulatary_txt">
							<h4>6. Applicant with Disablity</h4>
							<p>The Company shall not discriminate in extending products and facilities including loan facilities to the physically / visually challenged applicants on the grounds of disability. They shall be treated at par with the other applicants and their application shall be dealt on merit as per the credit process and policy of the Company. All possible assistance will be provided to the applicants with the disability (ies) to enable them to understand, select and avail appropriate product or loan facility.</p>
						</div>
						<div class="regulatary_txt">
							<h4>7. General Provisions</h4>
							<ol type="a">
								<li>The Company shall refrain from interference in the affairs of the borrower, except for the purposes and as provided in the terms and conditions of the loan documents or unless new information, not earlier disclosed by the borrower, has come to the notice of the Company.</li>
								<li>In case of receipt of request from the borrower for transfer of borrowal account, the consent or otherwise, i.e. objection of the Company, if any, shall be conveyed within 21 days from the date of receipt of request.</li>
								<li>In the matter of recovery of loans, the Company shall not resort to undue harassment viz persistently bothering the borrower at odd hours, use of muscle power for recovery of loans and would operate within the legal framework.</li>
								<li>The Company shall not charge preclosure charges/ pre-payment penalties on all floating rate term loans sanctioned to individual borrowers.</li>
							</ol>
						</div>
						<div class="regulatary_txt">
							<h4>8. Grievance Redressal</h4>
								<p>The implementation of the Fair Practice Code shall be the responsibility of the Company. The Company shall make every effort to ensure that its dealing with borrowers / customers is smooth and hassle free. Any complaint brought to the notice of the Company by a borrower / customer will be handled expeditiously.</p>
								<p>The Board of Directors of the Company has laid down the appropriate grievance redressal mechanism within the organization to resolve complaints and grievances. All disputes / complaints arising out of the decisions of the Company’s functionaries would be heard and disposed of at least at the next higher level after it is brought to their notice.</p>
								<p>A consolidated report of periodical review with compliance with the Fair Practices Code and functioning of the grievances redressal mechanism at various levels of Management would be submitted to the Board of Directors (or a committee thereof) at regular intervals.</p>
								<p>The contact details of the Grievance Redressal Officer (“GRO”) and the local office of RBI (which can be approached, if the complaint / dispute is not resolved within a period of one month) will be displayed at all the branches / places where the Company conducts its business.</p>
								<p>Detailed process of grievance redressal and escalation matrix forms part of Grievance Redressal Mechanism which is placed on the website of the Company and shall also be available at the branches and will also be displayed at notice Board.</p>
						</div>
						<div class="regulatary_txt">
							<h4>9. Interest Charges</h4>
							<ul>
								<li>The rate of interest is arrived after considering factors like cost of funds, margin and risk premium, etc. To ensure that the customers are not charged excessive interest rate and charges the Company has adopted the “Policy for Determining interest rates” and same will be available on the website of the Company.</li>
								<li>The information published in the website or otherwise published will be updated, whenever there is a change in the rates of interest.</li>
								<li>The rate of interest would be annualized rates so that the borrower is aware of the exact rates that would be charged to the account.</li>
							</ul>
						</div>
						<div class="regulatary_txt">
							<h4>10. Review of Code</h4>
								<p>The Code will be reviewed at yearly intervals or as and when felt necessary by the Board.</p>
						</div>	

						
					</div>
				</div>
				
				<div class="accordion" id="section1">&bull; Grievance Redressal Mechanism<span></span></div>
				<div class="containers">
					<div class="content jobcare">
						 <div class="regulatary_txt">
							<h4>GRIEVANCE REDRESSAL MECHANISM:</h4>
								<p>In case of any grievance, customers can intimate and record their complaints / grievances for a resolution in the manner detailed below:</p>
									<p class="reg_mleft1">I. Registration of Complaints:</p>
										<ol type="a" class="reg_mleft">
											<li>Branch - Customers can visit the branch office for registration of their grievances in form of a written complaint;</li>
											<li>Email :Customers can send their grievance through email at : <a href="mailto:wecare@hfsl.in">wecare@hfsl.in</a></li>
											<li>Letters: Customer can write to: Customer Service, Hiranandani Financial Services Private Limited, 9th Floor, Sigma Bldg., Technology Street, Hiranandani Business Park, Powai, Mumbai- 400076.</li>
										</ol>
									<ul>
										<li>Customers shall ensure that they quote their application number or loan account number in every correspondence with the Company regarding their complaint.</li>
										<li>Anonymous complaints will not be addressed in terms of this Customer Grievance Redressal Mechanism.</li>
									</ul>
									<p class="reg_mleft1">II. Resolution Process :</p>
									<ul class="reg_mleft">
										<li>On receipt of complaint, the Company shall, within reasonable time, send an acknowledgement of the same to the complainant. All the complaints received shall be recorded and subsequently the nature and mode of its resolution also will be tracked and updated.</li>
										<li>The officer shall ensure that closure of complaints in records is updated post resolution of complaint.</li>
										<li>The Grievance Redressal Officer shall conduct effective monitoring of the complaint status to ensure that the complaints are resolved within 30 days of receipt of complaint.</li>
										<li>If any case Company needs additional time, the Company will inform the customer the reasons of delay in resolution within the timelines specified above and provide expected time lines for resolution of the complaint.</li>
									</ul>
									<p class="reg_mleft1">III. Escalation Matrix</p>
									<div class="regult_bordr">
										<p>If a customer is not satisfied with the resolution provided by the Company in the specified period above, the customer can escalate the issue to:</p>
										<p class="reg_mleft">Grievance Redressal Officer<br> Mr Dheeraj Mittal<br> Hiranandani Financial Services Private Limited<br> 9th Floor, Sigma Bldg., Technology Street,<br> Hiranandani Business Park,<br> Powai, Mumbai- 400076.<br> Telephone No.: <a href="callto:022 25763789">022 25763789<br> Email – <a href="mailto:dheeraj.mittal@houseofhirnanandani.com">dheeraj.mittal@houseofhirnanandani.com</a>
										</p>
										<p>In case a grievance / complaint is not resolved within a period of 30 Days, the customer may further appeal to:
										</p>
										<p class="reg_mleft">Department of Non-Banking Supervision,<br> The Reserve Bank of India, Mumbai Regional Office,<br> 3rd Floor, RBI Building, Opposite Mumbai Central Railway Station,<br> Byculla, Mumbai – 400 008<br> Telephone No.: 022 2308 4121<br> Fax No.: <a href="callto:022 2302 2011">022 2302 2011</a><br> Email: <a href="mailto:dnbsmro@rbi.org.in">dnbsmro@rbi.org.in</a> 									</p>
									</div>
						</div>
					</div>
				</div>
				
				<div class="accordion" id="section1">&bull;  Interest Rate Policy<span></span></div>
				<div class="containers">
					<div class="content jobcare">
						<div class="regulatary_txt">
							<h4>1. Preface:</h4>
								<p>The Reserve Bank of India (RBI) vide its Notification No. DNBS. 204 / CGM (ASR)-2009 dated 2 January 2009 and vide its Guidelines on Fair Practices Code for NBFCs, as amended from time to time (RBI Regulations), has directed all NBFCs to make available the rates of interest and the approach for gradation of risk on web-site of the companies.</p>
								<p>In compliance with the requirements of the RBI Regulations mentioned above and the Fair Practices Code adopted by the Company, the Hiranandani Financial Services Private Limited “formerly known as Dobra Finance Private Limited” “Company” has adopted this Interest Rate Policy broadly outlining the Interest Rate Model and the Company’s approach to gradation of risks in its lending business.</p>
							
						</div>
						<div class="regulatary_txt">
							<h4>2. Interest Rate Model:</h4>
								<p>The interest rate applicable to each loan account is assessed on a case specific basis, based on evaluation of various factors detailed below:</p>
								<ol type="i">
									<li>Tenor of the Loan & Payment Terms - term of the loan; terms of payment of interest (viz monthly, quarterly, yearly repayment); terms of repayment of principal; moratorium period etc.</li>
									<li>Internal and External Costs of Funds - the rate at which the funds necessary to provide loan facilities to customers are sourced, normally referred to as our external cost of funds. Internal cost of funds being the expected return on equity.</li>
									<li>Internal cost loading – the costs of doing business. Factors such as the complexity of the transaction, capital risk weightage, the size of the transaction, location of the borrower and other factors that affect the costs associated with a particular transaction would be taken into account before arriving at the final interest rate quoted to a customer.</li>
									<li>Security – Any offering of security by the borrower would be considered while assigning the risk premium for the particular loan account.</li>
									<li>Credit Risk - as a matter of prudence, credit loss (risk) cost would be factored into all transactions. The amount of credit risk cost applicable to a particular transaction depends on the internal assessment of the credit strength of the customer.</li>
									<li>Structuring Premium: A premium may be applied to a loan in case the loan has any significant structuring elements with respect to collateral, or other aspects of transaction structure.</li>
									<li>Margin: A markup to reflect other costs / overheads to be charged to the loan and our designed margin.</li>
									<li>ALCO View & Market Dynamics: Views of the Asset Liability Management Committee (ALCO) on product pricing with respect to prevailing interest rates for similar products / services, market conditions and interest rate outlook shall be taken into consideration.</li>
									<li>Other Factors – Matching tenor cost, market liquidity, RBI Policies on credit flow, offerings by competition, stability in earnings and employment, subvention and subsidies available, deviations permitted, further business opportunities, external ratings, industry trends, switchover options will also be relevant factors in determining interest rate to be charged.</li>
								</ol>
						</div>
						<div class="regulatary_txt">
							<h4>3. Approach for Gradation of Risk</h4>
							<p>The risk premium attached with a customer shall be assessed inter-alia based on the following factors:</p>
							<ol class="abracket">
								<li>profile and market reputation of the borrower,</li>
								<li>inherent nature of the product, type / nature of facility, refinance avenues, loan to value of asset financed,</li>
								<li>tenure of relationship with the borrower group, past repayment track record and historical performance of our similar clients,</li>
								<li>group strength, overall customer yield, future potential, repayment capacity based on cash flows and other financial commitments of the borrower, mode of payment</li>
								<li>nature and value of primary and secondary collateral / security,</li>
								<li>type of asset being financed, end use of the loan represented by the underlying asset,</li>
								<li>interest, default risk in related business segment,</li>
								<li>regulatory stipulations, if applicable,</li>
								<li>and any other factors that may be relevant in a particular case.</li>
							</ol>
						</div>
						<div class="regulatary_txt">
							<h4>4. Rate of Interest:</h4>
							<ol class="abracket">
								<li>Interest rates offered could be on fixed rate basis or floating rate basis.</li>
								<li>In case of floating / variable interest rate, the interest rate will be linked to DFPL Benchmark rate “HFSRR”.</li>
								<li>The Benchmark rate will be a rate approved by the Asset Liability Committee (ALCO) of the Company, from time to time. The Benchmark rates will be reviewed periodically by the ALCO. The methodology for calculating the HFSRR may be changed at any time with the approval of the ALCO.</li>
								<li>The rate of interest for the same product and tenor availed during same period by different customers need not be standardized. The final lending rate applicable to each customer will be assessed based on various factors.</li>
								<li>Presently, the Company is offering its products at the interest rates not exceeding forty nine percent.</li>
								<li>In exceptional circumstances, the Company reserves the right to charge interest rate outside the above indicated range, depending on risk perception and market conditions.</li>
								<li>Loan amount, Annualised Rate of Interest and tenure of loan will be communicated to the borrower in the sanction letter and the apportionment of instalments towards interest and principal dues shall be made available to the borrower.</li>
								
								<li>Besides normal Interest, the Company may levy additional interest for adhoc facilities, penal interest / default interest for any delay or default by the borrower in servicing of the amounts due under the loan. The details of Penal Interest charges for late repayment will be mentioned in bold in the loan agreement and will form part of schedule of charges.</li>
								
								<li>Besides interest, other financial charges like processing charges, cheque bouncing charges, pre-payment / foreclosure charges, part disbursement charges, cheque swaps, cash handling charges, charges on various other services like issuing NO DUE certificates, NOC, letters ceding charge on assets/ security, security swap & exchange charges etc. would be levied by the company wherever considered necessary. In addition, the Goods and Services Tax and other taxes, levies or cess would be collected at applicable rates from time to time.</li>
								
								<li>The rate of interest applicable to each customer is subject to change as the situation warrants and is subject to the management’s perceived risk on a case to case basis.</li>

								<li> The interest rates can change at any periodicity, depending upon change in market benchmark rates, company’s cost of funds and other market conditions.</li>
								
								<li> Intimation of change of interest or other charges would be communicated to customers in a manner deemed fit, as per terms of the loan documents. Any revision in interest or other charges would be with prospective effect.</li>
								
								<li> The interest re-set period for floating rate lending would be decided by the Company from time to time, applying the same decision criteria as considered for fixing of interest rates.</li>
								
								<li>In case of staggered disbursements, the rates of interest would be subjected to review and the same may vary according to the prevailing rate at the time of successive disbursements or as may be decided by the Company.</li>
							</ol>
						</div>
						<div class="regulatary_txt">
							<h4>5. Content on the website</h4>
							<p>Appropriate disclosure regarding this Interest Rate Policy shall be made on the Company website.</p>
						</div>
						
						<div class="regulatary_txt">
							<h4>6. Review</h4>
							<p>The Policy shall be reviewed on an annual basis or as mandated by the regulatory requirement.</p>
						</div>
					</div>
				</div>
				
				<div class="accordion" id="section1">&bull; BENCHMARK RATE<span></span></div>
				<div class="containers">
					<div class="content jobcare">
						   <p>Present Benchmark Rate "HFSRR" is at 19%</p>  
					</div>
				</div>
				
				<div class="accordion" id="section1">&bull; Schedule of Charges<span></span></div>
				<div class="containers">
					<div class="content jobcare">
						<div class="regul_table">
							<table border="1">
								<tr>
									<td colspan="2" style="text-align:center;">Schedule of fees & Charges</td>
								</tr>
								<tr>
									<td>Description</td>
									<td>Charges</td>
								</tr>
								<tr>
									<td>Processing Fees (non- refundable)</td>
									<td>Upto 4% of the loan amount</td>
								</tr>
								<tr>
									<td>Overdue  Installment interest</td>
									<td>24 % per annum </td>
								</tr>
								<tr>
									<td>Instalment  bounce charge</td>
									<td>Up to Rs.1000/-  per bounce</td>
								</tr>
								<tr>
									<td>Instalment swap charge</td>
									<td>Rs. 500/-  per instance  </td>
								</tr>
								<tr>
									<td>Instalment due date change  fees</td>
									<td>Rs.1000/-  per instance </td>
								</tr>
								<tr>
									<td>Document retrieval charges</td>
									<td>Nil post loan closure, otherwise Rs.1000/- per retrieval</td>
								</tr>
								<tr>
									<td>Annual account statement/No dues certificate/Provisional tax certificate</td>
									<td>NIL</td>
								</tr>
								<tr>
									<td>Adhoc statement issuance charges</td>
									<td>Rs.500/- per document</td>
								</tr>
								<tr>
									<td>Preclosure /part prepayment charges</td>
									<td><span class="bold">Fixed rate loans (Individual & *Non Individual customer):</span><br><br> 4% of the Principal amount outstanding/amount prepaid<br> <span class="bold">Floating rate loans:</span><br><br> For Individual Customer: NIL<br><br> For Non Individual customer: 4% of the Principal amount outstanding/amount prepaid</td>
								</tr>
								<tr>
									<td>Loan cancellation charges</td>
									<td>NIL (However Interest would be charged for the interim period between date of loan disbursement and date of loan cancellation and processing fees would be retained)</td>
								</tr>
								<tr>
									<td>CERSAI Registry/Modification charges</td>
									<td>Rs.100/- plus  taxes as applicable </td>
								</tr>
								<tr>
									<td>Stamp duty and other statutory charges</td>
									<td>As per applicable Laws</td>
								</tr>
								<tr>
									<td colspan="2">
										<ul>
											<li>*Non individual borrower means customers other than individual and includes Sole proprietorship, HUF, Partnership Firm, Company, LLP, etc. on the loan structure.</li>
											<li>The statement of charges is as on the date of disbursement and is subject to charges/revision from time to time and will be updated on the website.</li>
											<li>All the above charges are exclusive of tax, tax will be levied on charges as per applicable tax laws.</li>
										</ul>
									</td>
								</tr>
							</table>         
						</div>
					</div>
				</div> -->
				
				<!--<div class="accordion" id="section1">&bull; KYC & AML Policy<span></span></div>
				<div class="containers">
					<div class="content jobcare">
						         
					</div>
				</div>-->
				
			</div>
			<div class="faqs_main_right">
				<div class="txt">
					<h3>FAQs Video</h3>
				</div>
				<div class="faq_video">
		
						<iframe width="100%" height="100%" src="https://www.youtube.com/embed/J59jSXbDd-8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include 'footer_menu.php';?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="bxslider/jquery.bxslider.js"></script>
<script src="js/include.js"></script>
<script src="js/wow.js"></script>
 <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
  </script>
<script type="text/javascript" src="js/highlight.pack.js"></script> 
<script type="text/javascript" src="js/jquery.accordion.js"></script> 
<script type="text/javascript">
   $(document).ready(function() {

        //syntax highlighter
        hljs.tabReplace = '    ';
        hljs.initHighlightingOnLoad();

        $.fn.slideFadeToggle = function(speed, easing, callback) {
            return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
        };

        //accordion
        $('.accordion').accordion({
            defaultOpen: 'section1',
            cookieName: 'accordion_nav',
            speed: 'slow',
            animateOpen: function (elem, opts) { //replace the standard slideUp with custom function
                elem.next().stop(true, true).slideFadeToggle(opts.speed);
            },
            animateClose: function (elem, opts) { //replace the standard slideDown with custom function
                elem.next().stop(true, true).slideFadeToggle(opts.speed);
            }
        });

    });
</script>
<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>
<script src="pre1/sPreloader.js"></script>
<script type="text/javascript">
    $('body').jpreLoader({
        preMainSection: '#main-preloader',
        prePerText: '.preloader-percentage-text',
        preBar: '.preloader-bar',
    });
</script>
<script>$('#regulatory1').addClass('active');</script>
</body>
</html>