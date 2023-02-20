<?php
include_once('db_configCMS.php');

$sql = "SELECT * FROM cms_pf_df_ec WHERE doc_name='PRODUCT FEATURES' AND page_name='Equipment' ";
$result = $con->query($sql);

$sql1 = "SELECT * FROM cms_pf_df_ec WHERE doc_name='DOCUMENTS REQUIRED' AND page_name='Equipment' ";
$result1 = $con->query($sql1);

$sql2 = "SELECT * FROM cms_pf_df_ec WHERE doc_name='ELIGIBILITY CRITERIA' AND page_name='Equipment' ";
$result2 = $con->query($sql2);

$sql3 = "SELECT * FROM cms_equipment_loan";
$result3 = $con->query($sql3);

    
    while ($row3 = $result3->fetch_assoc()) {
        $page_title     = $row3["page_title"];
        $meta_keys      = $row3["meta_keywords"];
        $meta_desc      = $row3["meta_description"];
        
        $desk_alt       = $row3["alt_tag"];
        $mob_alt        = $row3["alt_tag_mob"];
        
        $desk            = $row3["desk_banner"];
        $mob             = $row3["mobile_banner"];
        $cap1            = $row3["cap_1"];
        $cap2            = $row3["cap_2"];
        $cap3            = $row3["cap_3"];
        $scap1           = $row3["sub_cap_1"];
        $scap2           = $row3["sub_cap_2"];
        $scap3           = $row3["sub_cap_3"];
        
        $description     = $row3["description"];
        $heading         = $row3["heading"];
        $heading1        = $row3["heading1"];
        $step_1          = $row3["step_1"];
        $icon_1          = $row3["icon_1"];
        $icon1_cap_1     = $row3["icon1_cap_1"];
        $icon1_cap_2     = $row3["icon1_cap_2"];
        
        $step_2          = $row3["step_2"];
        $icon_2          = $row3["icon_2"];
        $icon2_cap_1     = $row3["icon2_cap_1"];
        $icon2_cap_2     = $row3["icon2_cap_2"];
        
        $step_3          = $row3["step_3"];
        $icon_3          = $row3["icon_3"];
        $icon3_cap_1     = $row3["icon3_cap_1"];
        $icon3_cap_2     = $row3["icon3_cap_2"];
        
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$page_title?></title>
	<meta name="description" content="<?=$meta_desc?>" />
	<meta name="keywords" content="<?=$meta_keys?>" >

	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link href="images/favicon.ico" rel="icon" type="image/ico" />
	<!--css-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="css/reboot.css">
	<link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="pre1/jpreloader.css" media="screen" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/animated.min.css"/>
	<link rel="stylesheet" href="bxslider/jquery.bxslider.css">
	<link rel="stylesheet" href="menu/meanmenu.css" media="all" />
	<link href="css/rangeslider.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/style.css">
 	<link rel="stylesheet" href="css/responsive.css" media="all"> 	
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.3.17/dist/sweetalert2.min.css">
		<!-------------------------------------------------->
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<!-------------------------------------------------->
	<!--js-->
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="js/check_eligibility.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.3.17/dist/sweetalert2.all.min.js"></script>
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
<link rel="canonical" href="https://www.hfs.in/equipment-and-machinery.php"/>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144819872-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-144819872-1');
        </script>
</head>
<body>

<?php include 'menu.php';?>
<?php include 'social.php';?>
<section>
<div class="loan_top_banner head_mrgin">
	<div class="img">
		<img src="<?php if(empty($desk)){echo'images/loan-for-you/equipment-and-machinery.jpg';}else{echo  $desk;}?>" alt="<?=$alt1?>" class="desk" draggable="false"/>
		<img src="<?php if(empty($mob)){echo'images/loan-for-you/equipment-and-machinery-mob.jpg';}else{echo  $mob;}?>" alt="<?=$alt2?>" class="mob" draggable="false"/>
		
	</div>
	<div class="lon_banner_text">
		<div class="continer1">
			<div class="lon_banner_text_sub">
				<div class="loan_bantext_left">
					<h4><?=$cap1?><br> <?=$cap2?><br><span><?=$cap3?></span></h4>
					<a href="https://applynow.hfs.in" class="topban_bt wow fadeIn" target="_blank">Apply Now</a>
				</div>
				<div class="loan_bantext_right">
					<ul>
					   <? if(!empty($scap1)){?>
						<li><?=$scap1?></li>
					    <?}?>
						 <? if(!empty($scap2)){?>
						<li><?=$scap2?></li>
					    <?}?>
					     <? if(!empty($scap3)){?>
						<li><?=$scap3?></li>
					    <?}?>
					
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

<section id="bredcrum">
	<div class="continer1">
		<div class="bredcrum_main">
			<ul>
				<li><a href="index.php">Home</a> ></li>
				<li>Loan For You ></li>
				<li><a href="equipment-and-machinery.php" class="active">Equipment & Machinery Loan</a></li>
			</ul>
		</div>
	</div>
</section>

<section>
<div class="loan_sec_main">
	<div class="loanfor_txt">
		<div class="continer1">
		<h1><span class="light">Equipment and Machinery</span> Loans</h1>
<p>&nbsp;</p>
<p>An equipment and machinery loan provides a business owner with the funds needed to purchase the equipment and machinery needed to run their operations. This type of financial assistance for machinery purchases aids business owners in increasing production by utilising freshly purchased machinery and equipment. Increased output or production, as we all know, leads to a rise in revenues through distribution and sale. Because the purchased machinery or equipment is hypothecated to the lender, these loans are mostly secured. This permits the borrower to pay back the loan over time while continuing to use the assets.
<br /><br />
You can use this machinery loan to buy new equipment. To run a profitable business, you need the most up-to-date machinery and equipment loan. Obtaining the latest technical tools is a critical business operation. You can also upgrade existing machinery. It’s important to maintain business continuity, you need to ensure that the existing machinery is in good working order. They are important for the company’s long-term asset building goals. Maintenance of equipment can also be done using this loan amount. All the equipment that is in possession of the business owner also needs timely maintenance for smooth operation and output. Sometimes, the maintenance cost of these equipment is nearly as high as its cost price. This is when machinery finance comes to aid.
</p>
<p>&nbsp;</p>
<p><strong>Uses of equipment and machinery loans:</strong></p>

<div class ="equipmentandmachinery_loan_features_row1">
  <div class="equipmentandmachinery_features_image" > <img id="loan_img" src="/images/Icons%20for%20Machinery%20Loans%20page/1.png" width="107" alt="Equipment Loan"></div>
   <div class="equipmentandmachinery_features_text"> <p>Purchase new equipment<br> and machinery</p></div>

<div class="equipmentandmachinery_features_image" > <img id="loan_img" src="/images/Icons%20for%20Machinery%20Loans%20page/2.png"width="107"alt="Equipment Loan"></div>
    <div class="equipmentandmachinery_features_text"> <p>Upgrade existing<br>machinery</p></div>

<div class="equipmentandmachinery_features_image" > <img id="loan_img" src="/images/Icons%20for%20Machinery%20Loans%20page/3.png"width="107"alt="Equipment Loan"></div>
    <div class="equipmentandmachinery_features_text"> <p>Carry out maintenance of<br> equipment & machinery</p></div>
</div>

<p><strong>Why the HFS working capital loan is ideal for your business:</strong></p>

<div class ="business_loan_ideal_div">

  <table class="business_loan_ideal_table" align="left" cellspacing="8px">

  <tr align>
      <td colspan="2" alt="Working capital loans"><img src="/images/Icons%20for%20Machinery%20Loans%20page/4.png"width="101"alt="Equipment Loan"/> </td>
    <td colspan="2"><p id="loan_p2"><span style= "color:#838383;font"><strong>Fast and easy process:</strong></span></p>
     <p id="loan_p3"><span style="color:#838383;" >When it comes to machinery, you want things to move quickly to avoid an impact on your company's productivity. So, at HFS, business loans for machinery finance are disbursed to you far faster than most other loans. You can expect your funds to be transferred immediately to your bank account in as little as 24 hours. This ensures that you don't waste any time scaling operations with capital.</p></td>
 </tr>
 
 <tr align>
      <td colspan="2" alt="Working capital loans"><img src="/images/Icons%20for%20Machinery%20Loans%20page/5.png"width="101"alt="Equipment Loan"/> </td>
    <td colspan="2"><p id="loan_p2"><span style= "color:#838383;font"><strong> Doorstep Service:</strong></span></p>
     <p id="loan_p3"><span style="color:#838383;" >You can book an appointment with us online, and a representative of HFS will be at your doorstep with answers to your queries related to machinery finance.</p></p></td>
 </tr>
 
 <tr align>
      <td colspan="2" alt="Working capital loans"><img src="/images/Icons%20for%20Machinery%20Loans%20page/6.png"width="101"alt="Equipment Loan"/> </td>
    <td colspan="2"><p id="loan_p2"><span style= "color:#838383;font"><strong>Flexible Repayment tenure</strong></span></p>
     <p id="loan_p3"><span style="color:#838383;" >The tenure for our smart loan goes up to 5 years; while that for a secured business loan goes for as long as your business needs.</p></td>
 </tr>
 
 <tr align>
      <td colspan="2" alt="Working capital loans"><img src="/images/Icons%20for%20Machinery%20Loans%20page/7.png"width="101"alt="Equipment Loan"/> </td>
    <td colspan="2"><p id="loan_p2"><span style= "color:#838383;font"><strong>Easy eligibility criteria</strong></span></p>
     <p id="loan_p3"><span style="color:#838383;" >As long as your annual income is above 1,00,000/- p.a in metro cities and 75,000/- p.a. in non-metro cities, you are eligible to apply for our equipment and machinery loans.</p></td>
 </tr>
</div>


 </table>


		</div>
	</div>
	<div class="loan_easy_step_main">
		<div class="loan_easy_step_sub  wow fadeIn">
			<!--<h1><span class="light">Loan in</span> 3 easy steps</h1>-->
			<h1><span class="light"><?=$heading?></span> <?=$heading1?></h1>
			<div class="easy_step_ico">
				<div class="one_ico">
					<span class="step18"><?=$step_1?></span>
					<span class="step_ico1"><img src="<?=$icon_1?>" alt="<?=$step_1?>" draggable="false" /></span>
					<span class="step28"><?=$icon1_cap_1?><br><?=$icon1_cap_2?></span>
				</div>
				
				<div class="arrow"></div>
				
				<div class="two_ico">
					<span class="step18"><?=$step_2?></span>
					<span class="step_ico2"><img src="<?=$icon_2?>" alt="<?=$step_2?>" draggable="false" /></span>
					<span class="step28"><?=$icon2_cap_1?><br><?=$icon2_cap_2?></span>
				</div>
				<div class="arrow"></div>
				
				<div class="three_ico">
					<span class="step18"><?=$step_3?></span>
					<span class="step_ico2"><img src="<?=$icon_3?>" alt="<?=$step_3?>" draggable="false" /></span>
					<span class="step28"><?=$icon3_cap_1?><br><?=$icon3_cap_2?></span>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

<!-- <section>
<div class="check_eligi_homem lfy_sec">
	<div class="continer1">
		<div class="check_eligi_hsub">
			<div class="eligihsub_head_txt">
				<h1><span class="light">Check</span> Eligibility </h1>
			</div>
			<div class="home_calcul_sec">
				<form action="calculators.php" method="post" class="get_in_touch_submit_form">
					<ul class="wow fadeIn">
								<li> -->
							<!--  Loan Amount Slider-->
							<!-- <div class="frm_top">
								<div class="fisr_slide">
									<h4>GROSS INCOME (MONTHLY)</h4>
								</div>
								<div class="sec_slide">
									<span class="fs fa fa-inr" aria-hidden="true"></span>
									<input type="text" name="chance" id="chance" class="text amout" min="10000" max="500000" >
								</div>
							</div>
							<div class="frm_bottom">
								<input type="range" id="chanceSlider"  min="10000" max="500000">
								
								<div style="float: left" class="text">
									<h6><span class="fa fa-inr" aria-hidden="true"></span> 10 K</h6>
								</div>
								<div style="float: right" class="text">
									<h6><span class="fa fa-inr" aria-hidden="true"></span> 5 Lacs</h6>
								</div>
							</div>
						</li>
						<li> -->
							<!--  Loan Tenure Slider-->
							
							<!-- <div class="frm_top">
								<div class="fisr_slide">
									<h4>TENURE (YEARS)</h4>
								</div>
								<div class="sec_slide tenure_year">
									<input type="text" name="chance1" id="chance1" class="text amout" min="1" max="15" >
								</div>
							</div>
							<div class="frm_bottom">
								<input type="range" id="chanceSlider1" min="1" max="15">
								
								<div style="float: left" class="text">
									<h6>1 Year</h6>
								</div>
								<div style="float: right" class="text">
									<h6>15 Years</h6>
								</div>
							</div>
						</li>
						
						<li> -->
							<!--  Loan Amount Slider-->
							<!-- <div class="frm_top">
								<div class="fisr_slide">
									<h4>OTHER EMIS (MONTHLY)</h4>
								</div>
								<div class="sec_slide">
									<span class="fs fa fa-inr" aria-hidden="true"></span>
									<input type="text" name="chance2" id="chance2" class="text amout"  min="0" max="100000" >
								</div>
							</div>
							<div class="frm_bottom">
								<input type="range" id="chanceSlider2"  min="0" max="100000">
								
								<div style="float: left" class="text">
									<h6><span class="fa fa-inr" aria-hidden="true"></span> 0</h6>
								</div>
								<div style="float: right" class="text">
									<h6><span class="fa fa-inr" aria-hidden="true"></span> 1 Lac</h6>
								</div>
							</div>
						</li>
						<li>
							<div class="result_main">
								<h4>YOUR LOAN ELIGIBILITY</h4>
								<div class="clrr">
									<span class="fr fa fa-inr" aria-hidden="true"></span>
									<input id="loan_eligibility" class="result" type="text" name="loan_eligibility" value="" readonly="">
								</div>
							</div>
							<div class="calc_btsec">
								<div class="center-side">
									<a href="book-our-visit" class="btn book_our_visit">Let's Meet </a>
								</div>
							</div>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>
</div>
</section> -->
<!--<section id="loan_document" style="float:left;width:100%;">
<div class="tab_fuct_main tab_fuct_heig">
	<div class="lfy_prod_container wow fadeIn">
		<div class="tab_fuct_sub">
			<div class="tabs">
				<div class="tab-sub">
					<ul id="tab-button">
						<li><a href="#product_feature">Product Features</a></li>
						<li class="mar_lr"><a href="#documents_required">DOCUMENTS REQUIRED</a></li>
						<li><a href="#eligibility_criteria">ELIGIBILITY CRITERIA</a></li>
					</ul>
				</div>
				<div class="tab-contain row list-group" id="products">
					<div class="tab-conat1 tab-contents lfy_sec" id="product_feature">
						<ul>
							<li class="head_li">Smart Business Loan</li>
							<li>Loans up to ₹ 25 Lakhs</li>
							<li>Tenure ranging from 12 to 60 months</li>
							<li>No guarantor/security required</li>
							<li>Convenience of doorstep service</li>
							<li>Attractive Rate of Interest</li>
							<li>Minimum & Hassle-free Documentation</li>
						</ul>
						<ul>
							<li class="head_li">Secured Business Loan</li>
							<li>Loan up to 2 Crore</li>
							<li>Loan up to 70% of the market value of the property</li>
							<li>Longer tenure as per business needs</li>
							<li>Attractive interest rates</li>
							<li>Simple and speedy processing</li>
							<li>Balance transfer facility - Lets you retire your high cost debt</li>

						</ul>
					</div>
					
					<div class="tab-conat2 tab-contents" id="documents_required">
						<div class="accordion_lfy">
							
							<div class="acco_tab">
							<h3>Self-employed (Individuals)</span></h3>
									 
								<div class="acco_tab_sub">
									<div class="lfy_tab1">
										<p><span class="tick"></span>Self-Employed (Individuals) include self-employed - Sole proprietors, Partners & Directors in firms in the Business of Manufacturing, Trading or Services.</p>
										<p><span class="bold">Documents required:</span></p>
										 <ul>
												<li> • Proof of Identity: Passport / Voters ID / Driving License / PAN Card / Aadhar Card / Photo Ration Card</li>
												<li> • Address Proof: Ration card / Driving License / Voter ID / Utility Bill (Latest 2 months) / Registered Rental Agreement / Passport</li>
												<li> • Bank Statements: Latest 6 Months bank statements / 6 months’ bank passbook</li>
												<li> • Latest ITR along with computation of income, B/S & P&L a/c for the last 2 years certified by a CA</li>
												<li> • Business Continuity Proof: Shops and Establishment License / GST Registration Certificate / VAT Returns / Sales Tax Returns</li>
												<li> • Other Documents: Certified copy of Partnership Deed, Certified copy of MOA / AOA.</li>
										</ul>
										<p><span class="bold">Additional Document Required:</span></p>
										<ul>
											<li> • Only for secured Business loan - Copy of all property documents</li>
										</ul>
									</div>
								</div>
							</div> 
							
							<div class="acco_tab">
								<h3>Private Limited Cos and Partnership Firms </h3>
								<div class="acco_tab_sub">
									<div class="lfy_tab1"> 
									<p><span class="tick"></span>PPrivate Limited Cos and Partnership Firms engaged in the Business of Manufacturing, Trading or Services</p>
									<p><span class="bold">Documents required:</span></p>
											<ul>
												<li> • ID / Business Continuity Proof: PAN Card / S&E License / Tax Returns / Utility Bill</li>
												<li> • Address Proof: Utility Bill (Latest 2 months) / Registered Rental Agreement </li>
												<li> • Bank Statements: Latest 6 Months bank statements / 6 months’ bank passbook</li>
												<li> • Latest ITR along with computation of income, B/S & P&L a/c for the last 2 years certified by a CA</li>
												<li> • Other Documents: Certified copy of Partnership Deed, Certified true copy of Memorandum & Articles of Association</li>
											</ul>
									<p><span class="bold">Additional Document Required:</span></p>
											<ul>
												<li> • Only for secured Business loan - Copy of all property documents </li>
											</ul>
										 
									</div>
								</div>
							</div>
							
							<div class="acco_tab">
								<h3>Self-employed (Professionals)</h3>
								<div class="acco_tab_sub">
									<div class="lfy_tab1">
										<p><span class="tick"></span>Self-Employed (Professionals) include self - employed Doctors, Chartered Accountants & Architects.</p>
										<p><span class="bold">Documents required:</span></p>
											<ul>
												<li> • ID Proof: Passport / Voters ID / Driving License / PAN Card / Aadhar Card / Photo Ration Card</li>
												<li> • Address Proof: Ration card / Driving License / Voter ID / Utility Bill (Latest 2 months) / Registered Rental Agreement / Passport</li>
												<li> • Bank Statements: Latest 12 Months bank statements / 12 months’ bank passbook</li>
												<li> • Latest ITR along with computation of income, B/S & P&L A/c for the last 2 years certified by a CA</li>
											</ul>
										<p><span class="bold">Additional Document Required:</span></p>
											<ul>
												<li> • Only for secured Business loan - Copy of all property documents </li>
											</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="tab-conat3 tab-contents" id="eligibility_criteria">
						<div class="accordion_lfy">

							<div class="acco_tab">
								<h3>Self-employed (Individuals)</h3>
								<div class="acco_tab_sub">
									<div class="lfy_tab1">
										<p><span class="tick"></span>Self-Employed (Individuals) include self-employed - Sole proprietors, Partners & Directors of firms in the Business of Manufacturing, Trading or Services.</p>
										<ul>
											<li> • Minimum age of Applicant: 21 years</li>
											<li> • Years in business: Minimum 3 years </li>
											<li> • Minimum Annual Income: ₹ 1, 00,000/- p.a. for Metro locations & ₹ 75,000 p.a. for Non-Metro locations.</li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="acco_tab ">
								<h3>Private Limited Cos and Partnership Firms </h3>
								<div class="acco_tab_sub">
									<div class="lfy_tab1">
										<p><span class="tick"></span>Private Limited Cos and Partnership Firms engaged in the Business of Manufacturing, Trading or Services</p>
										<ul>
											<li> • Years in business: Minimum 3 years </li>
											<li> • Minimum Annual Income: ₹ 100000/- p.a. for Metro Locations & ₹ 75,000/- p.a. for non-metro locations.</li>
											<li> • Business must be profit making for the last 2 years</li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="acco_tab ">
								<h3>Self-employed (Professionals)</h3>
								<div class="acco_tab_sub">
									<div class="lfy_tab1">
										<p><span class="tick"></span>Self-Employed (Professionals) include self - employed Doctors, Chartered Accountants & Architects.</p>
										<ul>
											<li> • Minimum age of applicant: 21 years</li>
											<li> • Years in business: Minimum 3 years</li>
											<li> • Minimum Annual Income: ₹ 1, 00,000 p.a. for Metro locations & ₹ 75,000 p.a. for other locations.</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>-->

<section id="loan_document" style="float:left;width:100%;">
<div class="tab_fuct_main tab_fuct_heig">
	<div class="lfy_prod_container wow fadeIn">
		<div class="tab_fuct_sub">
			<div class="tabs">
				<div class="tab-sub">
					<ul id="tab-button">
						<li><a href="#product_feature">Product Features</a></li>
						<li class="mar_lr"><a href="#documents_required">DOCUMENTS REQUIRED</a></li>
						<li><a href="#eligibility_criteria">ELIGIBILITY CRITERIA</a></li>
					</ul>
				</div>
				<div class="tab-contain row list-group" id="products">
					<div class="tab-conat1 tab-contents lfy_sec" id="product_feature">
						<!--<ul>-->
						<!--	<li class="head_li">Smart Business Loan</li>-->
						<!--	<li>Loans up to ₹ 25 Lakhs</li>-->
						<!--	<li>Tenure ranging from 12 to 60 months</li>-->
						<!--	<li>No guarantor/security required</li>-->
						<!--	<li>Convenience of doorstep service</li>-->
						<!--	<li>Attractive Rate of Interest</li>-->
						<!--	<li>Minimum & Hassle-free Documentation</li>-->
						<!--</ul>-->
						<!--<ul>-->
						<!--	<li class="head_li">Secured Business Loan</li>-->
						<!--	<li>Loan up to 2 Crore</li>-->
						<!--	<li>Loan up to 70% of the market value of the property</li>-->
						<!--	<li>Longer tenure as per business needs</li>-->
						<!--	<li>Attractive interest rates</li>-->
						<!--	<li>Simple and speedy processing</li>-->
						<!--	<li>Balance transfer facility - Lets you retire your high cost debt</li>-->
						<!--</ul>-->
							<!--<?php 
								// 	 if ($result->num_rows > 0) {
        //                                 // output data of each row
        //                                 while($row = $result->fetch_assoc()) {
        // 									echo $row['description'];
        //                                 }
    				//                 } else {
    				//                      echo'<div class="acco_tab">
        //     							<h3>Opps</h3>
            									 
        //     								<div class="acco_tab_sub">
        //     									<div class="lfy_tab1">
        //     										 <p>Sorry Data Not Found !!!<p>
        //     									</div>
        //     								</div>
        //     							</div> ';
    				//                 }
                                ?>-->
                                <?php 
									 if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
        								// 	echo $row['description'];
        								?>
        								<div class="lfyleft">
            							    <div class="head_li"><?=$row['heading']; ?></div>
            							    <?=$row['description']; ?>
            						    </div>
        								<?php
                                        }
    				                } else {
    				                    echo "";
    				                }
                                ?>
					</div>
					
					<div class="tab-conat2 tab-contents" id="documents_required">
						<div class="accordion_lfy">
					<?php 
						 if ($result1->num_rows > 0) {
                            // output data of each row
                            while($row1 = $result1->fetch_assoc()) {
							echo'	<div class="acco_tab">
        							<h3>'.$row1['heading'].'</h3>
        									 
        								<div class="acco_tab_sub">
        									<div class="lfy_tab1">
        										'.$row1['description'].'
        									</div>
        								</div>
        							</div> ';
                            }
		                } else {
		                     echo'<div class="acco_tab">
            							<h3>Opps</h3>
            									 
            								<div class="acco_tab_sub">
            									<div class="lfy_tab1">
            										 <p>Sorry Data Not Found !!!<p>
            									</div>
            								</div>
            							</div> ';
		                }
                        ?>
						</div>
					</div>
					
					<div class="tab-conat3 tab-contents" id="eligibility_criteria">
						<div class="accordion_lfy">
                        
                        <?php 
							 if ($result2->num_rows > 0) {
                                // output data of each row
                                while($row2 = $result2->fetch_assoc()) {
								echo'	<div class="acco_tab">
            							<h3>'.$row2['heading'].'</h3>
            									 
            								<div class="acco_tab_sub">
            									<div class="lfy_tab1">
            										'.$row2['description'].'
            									</div>
            								</div>
            							</div> ';
                                }
			                } else {
			                    
			                    echo'<div class="acco_tab">
            							<h3>Opps</h3>
            									 
            								<div class="acco_tab_sub">
            									<div class="lfy_tab1">
            										 <p>Sorry Data Not Found !!!<p>
            									</div>
            								</div>
            							</div> ';
			                }
                        ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<h1> <a href="021461019Landing-page-02.html"target="_blank"><img src="https://hfs-website-prd.azurewebsites.net/images/GHS_2.gif"></a></h1>
							<br><br>
</section>

<?php include 'footer_menu.php';?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/rangeslider.min.js"></script>
<script src="bxslider/jquery.bxslider.min.js"></script>
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
<script src="js/loan-for-you.js"></script>
<script src="pre1/sPreloader.js"></script>
<script type="text/javascript">
    $('body').jpreLoader({
        preMainSection: '#main-preloader',
        prePerText: '.preloader-percentage-text',
        preBar: '.preloader-bar',
    });
</script>
<script>$('#loan').addClass('active');</script>
<script>$('#loan1').addClass('active');</script>
<script>$('#equipment1').addClass('active');</script>
</body>
</html>