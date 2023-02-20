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
	<link rel="stylesheet" href="css/social-share.css">
		<!-------------------------------------------------->
<link rel="canonical" href="https://www.hfs.in/equipment-and-machinery.php"/>

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
    
</head>
<body>

<?php include 'menu.php';?>

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
					<a href="book-our-visit" class="topban_bt book_our_visit wow fadeIn"> Let’s meet</a>
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
<ul class="ct-socials">
  <li>
    <a href="https://www.facebook.com/hiranandanifs/" target="_blank"><i class="fa fa-facebook"></i></a>
  </li>
  <li>
    <a href="https://www.linkedin.com/company/hiranandani-financial-services-limited/" target="_blank"><i class="fa fa-linkedin"></i></a>
  </li>
  <li>
</section>

<section>
<div class="loan_sec_main">
	<div class="loanfor_txt">
		<div class="continer1">
		<!--<h1> One Stop <span class="light">for all MSME Loans</span></h1>
			<h4>HFS is here to address the growing needs of the MSME sector through its diversified & customized products. We understand that every business need is unique and so should be our loans.</h4>-->
			<?=$description?>
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

<section>
<div class="check_eligi_homem lfy_sec">
	<div class="continer1">
		<div class="check_eligi_hsub">
			<div class="eligihsub_head_txt">
				<h1><span class="light">Check</span> Eligibility </h1>
			</div>
			<div class="home_calcul_sec">
				<form action="calculators.php" method="post" class="get_in_touch_submit_form">
					<ul class="wow fadeIn">
								<li>
							<!--  Loan Amount Slider-->
							<div class="frm_top">
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
						<li>
							<!--  Loan Tenure Slider-->
							
							<div class="frm_top">
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
						
						<li>
							<!--  Loan Amount Slider-->
							<div class="frm_top">
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
</section>
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