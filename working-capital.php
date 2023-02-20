<?php
include_once('db_configCMS.php');

$sql = "SELECT * FROM cms_pf_df_ec WHERE doc_name='PRODUCT FEATURES' AND page_name='Working' ";
$result = $con->query($sql);

$sql1 = "SELECT * FROM cms_pf_df_ec WHERE doc_name='DOCUMENTS REQUIRED' AND page_name='Working' ";
$result1 = $con->query($sql1);

$sql2 = "SELECT * FROM cms_pf_df_ec WHERE doc_name='ELIGIBILITY CRITERIA' AND page_name='Working' ";
$result2 = $con->query($sql2);

$sql3 = "SELECT * FROM cms_working_loan";
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
<link rel="canonical" href="https://www.hfs.in/working-capital.php"/>

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
		<img src="<?php if(empty($desk)){echo'images/loan-for-you/working-capiltal.jpg';}else{echo  $desk;}?>" alt="<?=$alt1?>" class="desk" draggable="false"/>
		<img src="<?php if(empty($mob)){echo'images/loan-for-you/working-capiltal-mob.jpg';}else{echo  $mob;}?>" alt="<?=$alt2?>" class="mob" draggable="false"/>
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
						<!--<li>Collateral free loan</li>
						<li>Longer tenure loan, easy repayment</li>
						<li>No guarantor required</li-->
						<li><?=$scap1?></li>
						<li><?=$scap2?></li>
						<li><?=$scap3?></li>
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
				<li><a href="working-capital.php" class="active">Working Capital Loans</a></li>
			</ul>
		</div>
	</div>
</section>

<section>

<div class="loan_sec_main">
	<div class="loanfor_txt">
		<div class="continer1">
            <h1><span class="light">Working Capital</span> Loans</h1>

<p>&nbsp;</p>

<p>
Every business requires capital. Working capital is essential to ensure the smooth functioning of any business. A working capital loan helps you to manage your day-to-day business operations or make necessary upgrades to sustain your business. Applying for a working capital loan with HFS is very convenient. Based on the eligibility criteria, funds are disbursed quickly. Let's explore their benefits and find out how you can customize it as per your needs.
<br /><br />
A working capital loan gives you the power to invest and stock more raw material. It can also boost your
capabilities to complete all the business orders and seek new ones. You can easily cater to the new orders as a
working capital loan helps you to stock enough inventory at market price and aim for higher revenues. Apart from
that, it helps you maintain enough balance to pay overheads, manage business operations and mitigate
unexpected expenses.
</p>

<p>&nbsp;</p>

<p><strong>Uses of working capital loans: </strong></p>



<div class ="capital_loan_features_row1">
  <div class="capital_features_image" > <img id="loan_img" src="/images/Icons%20for%20Working%20Capital%20Loans%20page/1.png" width="107"></div>
   <div class="capital_features_text"> <p>Increasing your production<br>by investing in <br>more raw materials</p></div>

<div class="capital_features_image" > <img id="loan_img" src="/images/Icons%20for%20Working%20Capital%20Loans%20page/2.png"width="107"></div>
    <div class="capital_features_text"> <p>Fulfilment of new <br>business orders</p></div>

<div class="capital_features_image" > <img id="loan_img" src="/images/Icons%20for%20Working%20Capital%20Loans%20page/3.png"width="107"></div>
    <div class="capital_features_text"> <p>Stock up your<br>inventory</p></div>
</div>

<div class="capital_loan_features_row2">
     <div class="capital_features_image"> <img id="loan_img" src="/images/Icons%20for%20Working%20Capital%20Loans%20page/4.png"width="107"></div>
          <div class="capital_features_text"> <p>Pay for electricity, water,<br>salaries and other<br> overheads</p></div>
          
          <div class="capital_features_image"> <img id="loan_img" src="/images/Icons%20for%20Working%20Capital%20Loans%20page/5.png"width="107"></div>
          <div class="capital_features_text"> <p>Unforeseen<br>expenses</p></div>
</div>



<p><strong>Why the HFS working capital loan is ideal for your business:</strong></p>

<div class ="business_loan_ideal_div">

  <table class="business_loan_ideal_table" align="left" cellspacing="8px">

  <tr align>
      <td colspan="2" alt="Working capital loans"><img src="/images/Icons%20for%20Working%20Capital%20Loans%20page/6.png"width="101"/> </td>
    <td colspan="2"><p id="loan_p2"><span style= "color:#838383;font"><strong> Easy and quick processing </strong></span></p>
     <p id="loan_p3"><span style="color:#838383;" >Applying for a working capital loan at HFS is a 3-step easy process. Simply call us at your doorstep, apply for a loan, get quick loan approval and receive the necessary funds in your account!</p></td>
 </tr>
 
 <tr align>
      <td colspan="2" alt="Working capital loans"><img src="/images/Icons%20for%20Working%20Capital%20Loans%20page/7.png"width="101"/> </td>
    <td colspan="2"><p id="loan_p2"><span style= "color:#838383;font"><strong>Flexible tenure </strong></span></p>
     <p id="loan_p3"><span style="color:#838383;" >The flexible tenure for smart loans or a working capital loans ranges from 12 to 36 months. At HFS, you get the flexibility to choose the type of loan and tenure, depending upon your needs.</p></p></td>
 </tr>
 
 <tr align>
      <td colspan="2" alt="Working capital loans"><img src="/images/Icons%20for%20Working%20Capital%20Loans%20page/8.png"width="101"/> </td>
    <td colspan="2"><p id="loan_p2"><span style= "color:#838383;font"><strong>Collateral/ guarantee free loans </strong></span></p>
     <p id="loan_p3"><span style="color:#838383;" >Yes, it's unbelievable, right! We believe that taking a loan should not hinder your chances of business growth and success. Our smart working capital loans are collateral/guarantor-free!</p></td>
 </tr>
 
 <tr align>
      <td colspan="2" alt="Working capital loans"><img src="/images/Icons%20for%20Working%20Capital%20Loans%20page/9.png"width="101"/> </td>
    <td colspan="2"><p id="loan_p2"><span style= "color:#838383;font"><strong> A simple 3 step procedure:</strong></span></p>
     <p id="loan_p3"><span style="color:#838383;" >With our balance transfer facility, now you can manage your high-cost debts by bidding them  
     <br>goodbye with our secured working capital loans!</p></td>
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
									<a href="book-our-visit.html" class="btn book_our_visit">Let's Meet </a>
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
<h1> <a href="021461019Landing-page-02.html"target="_blank"><img src="https://hfs-website-prd.azurewebsites.net/images/GCP_1.gif"></a></h1>
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
<script>$('#working1').addClass('active');</script>
</body>
</html>