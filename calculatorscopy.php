<?php
include_once('db_configCMS.php');
$sql3 = "SELECT * FROM cms_all_banners WHERE page_name ='Calculators'";
$result3 = $con->query($sql3);

    
    while ($row3 = $result3->fetch_assoc()) {
        $page_title     = $row3["page_title"];
        $meta_keys      = $row3["meta_keywords"];
        $meta_desc      = $row3["meta_description"];
        $desk           = $row3["desk_banner"];
        $mob            = $row3["mobile_banner"];
        $desk_alt       = $row3["alt_tag"];
        $mob_alt        = $row3["alt_tag_mob"];
        $cap1           = $row3["cap_1"];
        $cap2           = $row3["cap_2"];
        $cap3           = $row3["cap_3"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php 
    if(empty($page_title)){echo "emi calculator and eligibility check for business loan, working capital,equipment and machinery finance, commercial property, msme loans"; }else { echo $page_title; }?></title>
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
	<!--js-->
	<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="js/check_eligibility_main.js"></script>
    <script src="js/emi.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.3.17/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.3.17/dist/sweetalert2.all.min.js"></script>
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
</head>
<body>

<?php include 'menu.php';?>
<?php include 'social.php';?>

<section>
<div class="loan_top_banner head_mrgin">
	<div class="img">
		<img src="<?=$desk?>" alt="<?=$desk_alt?>" title="<?=$desk_alt?>" draggable="false" class="desk"/>
	<img src="<?=$mob?>" alt="<?=$mob_alt?>" title="<?=$mob_alt?>" draggable="false" class="mob"/>
	<div class="abt-ban-txt">
		<div class="continer1">
			 <h2 ><span><?=$cap1?><br><?=$cap2?><br><?=$cap3?></span></h2> 
		</div>
	</div>
</section>

<section id="bredcrum">
	<div class="continer1">
		<div class="bredcrum_main">
			<ul>
				<li><a href="index.php">Home</a> ></li>
				<li>Tools For You ></li>
				<li><a href="calculators.php" class="active">Calculators</a></li>
			</ul>
		</div>
	</div>
</section>

<section>
<div class="calcul_page_main">
	<div class="continer1">
		<div class="tab_fuct_sub">
			<div class="tabs">
				<div class="tab-sub">
					<ul id="tab-button">
						<li class="ft50"><a href="#eligibility">Eligibility Calculator <!--<span>How much loan could you borrow</span>--></a></li>
						<li class="ft50 mar_lr"><a href="#emi-calculator">Emi Calculator <!--<span>Know your monthly repayment</span>--></a></li>
					</ul>
				</div>
				<div class="tab-contain row list-group" id="products">
					<div class="tab-conat1 tab-contents lfy_sec" id="eligibility">
						 <div class="check_eligi_hsub">
			<div class="eligihsub_head_txt">
				<h1> Loan  Eligibility<span class="light"> Calculator </span> </h1>
			</div>
			<div class="calculator_Page">
				<form action="calculators.php" method="post" class="get_in_touch_submit_form">
					<ul>
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
									<h6><span class="fa fa-inr" aria-hidden="true"></span> 5 Lac</h6>
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
									<input type="text" name="chance1" id="chance1" class="text amout" min="1" max="15">
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
									<input type="text" name="chance2" id="chance2" class="text amout" min="0" max="100000" >
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
									<span class="" aria-hidden="true"></span>
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
					
					<div class="tab-conat2 tab-contents lfy_sec" id="emi-calculator">
			<div class="check_eligi_hsub">
			<div class="eligihsub_head_txt">
				<h1>EMI <span class="light">Calculator</span> </h1>
			</div>
			<div class="calculator_Page">
				<form action="calculators.php" method="post" class="get_in_touch_submit_form">
					<ul>
						<li>
							<!--  Loan Amount Slider-->
							<div class="frm_top wow fadeIn">
								<div class="fisr_slide">
									<h4>LOAN AMOUNT</h4>
								</div>
								<div class="sec_slide">
									<span class="fs fa fa-inr" aria-hidden="true"></span>
									<input type="text" name="chance4" id="chance4" class="text amout" min="100000" max="20000000">
								</div>
							</div>
							<div class="frm_bottom wow fadeIn">
								<input type="range" id="chanceSlider4"  min="100000" max="20000000">
								
								<div style="float: left" class="text">
									<h6><span class="fa fa-inr" aria-hidden="true"></span> 1 Lac</h6>
								</div>
								<div style="float: right" class="text">
									<h6><span class="fa fa-inr" aria-hidden="true"></span> 2 Cr</h6>
								</div>
							</div>
						</li>
						<li>
							<!--  Loan Tenure Slider-->
							
							<div class="frm_top wow fadeIn">
								<div class="fisr_slide">
									<h4>TENURE (YEARS)</h4>
								</div>
								<div class="sec_slide tenure_year">
									<input type="text" name="chance5" id="chance5" class="text amout" min="1" max="15">
								</div>
							</div>
							<div class="frm_bottom wow fadeIn">
								<input type="range" id="chanceSlider5" min="1" max="15">
								
								<div style="float: left" class="text">
									<h6>1 Year</h6>
								</div>
								<div style="float: right" class="text">
									<h6>15 Years</h6>
								</div>
							</div>
						</li>
				
						<li>
							<div class="result_main wow fadeIn">
								<h4>MONTHLY PAYMENT (EMI)</h4>
								<div class="clrr">
									<span class="" aria-hidden="true"></span>
									<input id="loan_emi" class="result" type="text" name="loan_emi" value="" readonly="">
								</div>
							</div>
							<div class="calc_btsec wow fadeIn">
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
<script>
$(function() {
  var $tabButtonItem = $('#tab-button li'),
      $tabSelect = $('#tab-select'),
      $tabContents = $('.tab-contents'),
      activeClass = 'is-active';

  $tabButtonItem.first().addClass(activeClass);
  $tabContents.not(':first').hide();

  $tabButtonItem.find('a').on('click', function(e) {
    var target = $(this).attr('href');

    $tabButtonItem.removeClass(activeClass);
    $(this).parent().addClass(activeClass);
    $tabSelect.val(target);
    $tabContents.hide();
    $(target).show();
    e.preventDefault();
  });

  $tabSelect.on('change', function() {
    var target = $(this).val(),
        targetSelectNum = $(this).prop('selectedIndex');

    $tabButtonItem.removeClass(activeClass);
    $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
    $tabContents.hide();
    $(target).show();
  });
});
</script>
<script src="pre1/sPreloader.js"></script>
<script type="text/javascript">
    $('body').jpreLoader({
        preMainSection: '#main-preloader',
        prePerText: '.preloader-percentage-text',
        preBar: '.preloader-bar',
    });
</script>
<script>$('#tool').addClass('active');</script>
<script>$('#tool1').addClass('active');</script>
<script>$('#calculators1').addClass('active');</script>
</body>
</html>