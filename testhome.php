<?php
/* ini_set('display_errors', 2);
 ini_set('display_startup_errors', 2);*/
include_once('db_configCMS.php');

$sql = "SELECT * FROM cms_rotational_banner WHERE status='Active'";
$result = $con->query($sql);

$sql1 = "SELECT * FROM cms_sub_rotational WHERE status='Active'";
$result1 = $con->query($sql1);

$sql2 = "SELECT * FROM cms_hfs_ad";
$result2 = $con->query($sql2);

    
    while ($row2 = $result2->fetch_assoc()) {
        $heading        = $row2["heading"];
        $sub_heading    = $row2["sub_heading"];
        $icon1          = $row2["icon1"];
        $icon1_text     = $row2["icon1_text"];
        $icon2          = $row2["icon2"];
        $icon2_text     = $row2["icon2_text"];
        $icon3          = $row2["icon3"];
        $icon3_text     = $row2["icon3_text"];
        $icon4          = $row2["icon4"];
        $icon4_text     = $row2["icon4_text"];
        $icon5          = $row2["icon5"];
        $icon5_text     = $row2["icon5_text"];
    }
    
    $sql3 = "SELECT * FROM cms_home_content";
    $result3 = $con->query($sql3);
    while ($row3 = $result3->fetch_assoc()) {
        $p_title    = $row3["page_title"];
        $meta_key   = $row3["meta_keywords"];
        $meta_desc  = $row3["meta_description"];
        $desc       = $row3["description"];
        $desc2      = $row3["description1"];
        $cap1       = $row3["cap1"];
        $cap2       = $row3["cap2"];
    }
    
     $sql4 = "SELECT * FROM cms_offer_popup limit 1 ";
    $result4 = $con->query($sql4);
    while ($row4 = $result4->fetch_assoc()) {
        $title      = $row4["title"];
        $banner     = $row4["banner"];
        $status     = $row4["status"];
        $link_url   = $row4["link_url"];
    }
    if($status === "Active")
    {$sta="block";}
    else{$sta="none";}
    
    if(empty($link_url)){
        $link ='javascript:void(0);';
    }
    else{
        $link = $link_url;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Small Business Loans | Hiranandani Financial Services | HFS</title>
	<meta name="description" content="Hassle Free Business loans from HFS. Quick Disbursal, Easy Documentation. No Guarantor Required. Low Interest Rate" />
	<meta name="keywords" content="Business Loans, Guarantor Free loans,Working Capital loans, Equipment and machinery loans,loans for buying commercial premises, Collateral Free Loans, HFS Business loans, HFS MSME loans, Small Business Loans from HFS" />
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="googlebot" content="index, follow ">
    <meta name="bingbot" content="index, follow ">
    <meta name="YahooSeeker" content="Index,Follow" />
    <link rel="canonical" href="https://hfs-website-prd.azurewebsites.net/"/>
    <link rel="alternate" href="https://www.hfs.in/" hreflang="en-in"/>
	<meta property="og:image" content="https://hfs-website-prd.azurewebsites.net/images/uploads/logo3.png"/>
	<meta property="og:url" content="https://hfs-website-prd.azurewebsites.net" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Small Business Loans | Hiranandani Financial Services | HFS" />
    <meta property="og:description" content="Hassle Free Business loans from HFS a new age NBFC. Quick Disbursal, Easy Documentation. No Guarantor Required. Low Interest Rate" />
    	
	<link href="images/favicon.ico" rel="icon" type="image/ico" />
	<link href="https://hfs-website-prd.azurewebsites.net/pre1/jpreloader.css" media="screen" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.3.17/dist/sweetalert2.min.css">
   <!-- <link rel="stylesheet" href="/css/ticker.css">	-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144819872-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-144819872-1');
        </script>
    <script>
        window.onload = function() {
            var overlay = document.getElementById("overlay");
            var popup = document.getElementById("popup");
            overlay.style.display =" none";
            popup.style.display = "none";
        
      document.getElementById("CloseBtn").onclick = function(){
            var overlay = document.getElementById("overlay");
            var popup = document.getElementById("popup");
            overlay.style.display = "none";
            popup.style.display = "none";      
      }
    }
    </script>
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
<!-- DO NOT MODIFY -->
<!-- Quora Pixel Code (JS Helper) -->
<script>
!function(q,e,v,n,t,s){if(q.qp) return; n=q.qp=function(){n.qp?n.qp.apply(n,arguments):n.queue.push(arguments);}; n.queue=[];t=document.createElement(e);t.async=!0;t.src=v; s=document.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s);}(window, 'script', 'https://a.quora.com/qevents.js');
qp('init', '04cef90e73704e779a9e42d0a779889f');
qp('track', 'ViewContent');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://q.quora.com/_/ad/04cef90e73704e779a9e42d0a779889f/pixel?tag=ViewContent&noscript=1"/></noscript>
<!-- End of Quora Pixel Code -->
<!-- JSON-LD markup generated by Google Structured Data Markup Helper. -->
<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "Article",
  "name" : "HFS - Business Loan, SME Loan, MSME Loan, Collateral Free Business Loan",
  "logo" : "https://hfs-website-prd.azurewebsites.net/images/uploads/logo3.png",
  "articleSection" : "HFS is a new age NBFC, focused on supporting the growth of Micro and Small enterprises in India. Our aim is to be a partner in their progress by providing customised financial solutions to this under-served segment in a seamless and transparent manner.",
  "url" : "https://hfs-website-prd.azurewebsites.net/index.php"
}
</script>
</head>
<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript" src="https://hfs-website-prd.azurewebsites.net/js/form_validation.js"></script>

<!-- Preloader Start -->
<div class="main-preloader semi-dark-background" id="main-preloader">
    <div class="main-preloader-inner">
        <h1 class="preloader-percentage"></h1>
        <div style="width: 100%; margin-bottom: 15px;"><img src="images/logo-loader52.gif" alt="pre-loader"/></div> 
        <div class="preloader-bar-outer">
            <div class="preloader-bar"></div>
            <!-- Percentage Precess Bar -->
        </div>
    </div>
</div>
<!-- Preloader Start -->
<div id="wrapper">
<header><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<div class="header_top">
		<div class="continer1">
			<div class="head_topmain">
				<!--<div class="logo"><a href="index.php"><img src="images/logo.png" alt="HFCL LOGO" draggable="false"/></a></div>-->
				<!--<div class="logo1"><a href="index.php"><img src="images/logo-mob.png" alt="HFCL LOGO" draggable="false"/></a></div>-->
				<div class="logo"><a href="index.php"><img src="https://hfs-website-prd.azurewebsites.net/images/uploads/logo3.png" alt="HFS LOGO" draggable="false"/></a></div>
				<div class="logo1"><a href="index.php"><img src="https://hfs-website-prd.azurewebsites.net/images/logo-mob.png" alt="HFS LOGO" draggable="false"/></a></div>
				<div class="head_right">
					<div class="call">
						<p><i class="fa fa-phone" aria-hidden="true"></i><a href="callto:1800-12-1234"></a>1800 121 234</p>
						<div id="google_translate_element"></div>
					</div>
					
					
					<div class="header_bottom">
		 
			<div class="head_bottom_main">
				<nav>
					<ul>
					    <li class='menu-list'><a href='index.php' id='index' ><span class="fa fa-home" aria-hidden="true"></span></a><ul class='maind'></ul></li>
					    <li class='menu-list'><a href='#' id='loan' >LOANS FOR YOU</a><ul class='loan_maind'><li class='menu-list'><a href='business-expansion.php' id='business' >Business Loans</a><ul class=''></ul></li><li class='menu-list'><a href='working-capital.php' id='working' >Working Capital</a><ul class=''></ul></li>
					    <li class='menu-list'><a href='equipment-and-machinery.php' id='equipment' >Equipment & Machinery Loans</a><ul class=''></ul></li><li class='menu-list'><a href='commercial-premises.php' id='commercial' >Loans For Buying Commercial Premises</a><ul class=''></ul></li></ul></li>
					    <li class='menu-list'><a href='#' id='tool' >TOOLS FOR YOU</a><ul class='maind'><li class='menu-list'><a href='calculators.php' id='calculators' >Calculators</a><ul class=''></ul></li><li class='menu-list'><a href='faqs.php' id='faq' >FAQs</a><ul class=''></ul></li><li class='menu-list'><a href='/blog' id='blog' >Blog</a><ul class=''></ul></li></ul></li>
					    <li class='menu-list'><a href='#' id='know' >OUR STORY</a><ul class='maind'><li class='menu-list'><a href='about-group.php' id='about' >About Us</a><ul class=''></ul></li><li class='menu-list'><a href='HFS-Values.php' id='values' >Our Values</a><ul class=''></ul></li><li class='menu-list'><a href='hfs-team.php' id='team' >HFS & TEAM</a><ul class=''></ul></li></ul></li>
					    <li class='menu-list'><a href='careers.php' id='career' >Careers</a><ul class=''></ul></li><li class='menu-list'><a href='locate-us.php' id='contact' >LOCATE US</a><ul class='maind'></ul></li>						<!--<li> <a href="index.php" class="active"><span class="fa fa-home" aria-hidden="true"></span></a></li>-->
						<li class='menu-list'><a href='#' id='apply' >Apply online</a><ul class='maind'><li class='menu-list'><a href='https://uatapplynow.hfs.in'target="_blank" id='business' >Apply Now</a><ul class=''></ul></li><li class='menu-list'><a href='https://uatapplynow.hfs.in/chkAppStatus' id='working'target="_blank">Application Status</a><ul class=''></ul></li>
						</li>
					</ul>
				</nav>
			</div>
		 
	</div>
				</div>
			</div>
		</div>
	</div>
	
</header>
<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "Hiranandani Financial Services",
    "url": "https://hfs-website-prd.azurewebsites.net",
    "address": "9th Floor, Sigma Building, Hiranandani Business Park, Technology Street, Powai, Mumbai-400076.",
    "sameAs": [
      "https://www.facebook.com/hiranandanifs/",
      "https://www.youtube.com/channel/UCSTQBUGn_YYbj34s35K31VQ"
      "https://www.linkedin.com/company/hiranandani-financial-services-limited/"
    ]
  }
</script><!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiranandani Financial Services Pvt. Ltd.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="format-detection" content="telephone=no">
	<link href="images/favicon.ico" rel="icon" type="image/ico" />
	<link rel="stylesheet" href="css/social-share.css">
	<!--css-->
<!--	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <style>
 .sticky-container{
    padding:0px;
    margin:0px;
    position:fixed;
    right:-130px;
    top:200px;
    width:170px;
    z-index: 1100;
}
.sticky li{
    list-style-type:none;
    background-color:#ffffff00;
    color:#efefef;
    height:43px;
    padding:0px;
    margin:0px 0px 1px 0px;
    -webkit-transition:all 0.25s ease-in-out;
    -moz-transition:all 0.25s ease-in-out;
    -o-transition:all 0.25s ease-in-out;
    transition:all 0.25s ease-in-out;
    cursor:pointer;
}
.sticky li:hover{
    margin-left:-115px;
}
.sticky li img{
    float:left;
    margin:5px 4px;
    margin-right:5px;
}
.sticky li p{
    padding-top:5px;
    margin:0px;
    line-height:16px;
    font-size:11px;
}
.sticky li p a{
    text-decoration:none;
    color:#B1B1B1;
}
.sticky li p a:hover{
    text-decoration:underline;
}
    </style>	 -->

</head>
<!--<body>
    <div class="sticky-container">
    <ul class="sticky">
        <li>
            <img src="images/facebook-circle.png" width="32" height="32">
            <p><a href="https://www.facebook.com/hiranandanifs/" target="_blank">Like Us on<br>Facebook</a></p>
        </li>
      <!--  <li>
            <img src="images/twitter-circle.png" width="32" height="32">
            <p><a href="https://twitter.com/hiranandanifs" target="_blank">Follow Us on<br>Twitter</a></p>
        </li>
        <li>
            <img src="images/pin-circle.png" width="32" height="32">
            <p><a href="https://www.pinterest.com/hiranandanifs" target="_blank">Follow Us on<br>Pinterest</a></p>
        </li>
        <li>
            <img src="images/gplus-circle.png" width="32" height="32">
            <p><a href="https://plus.google.com/hiranandanifs" target="_blank">Follow Us on<br>Google+</a></p>
        </li> 
        <li>
            <img src="images/linkedin-circle.png" width="32" height="32">
            <p><a href="https://www.linkedin.com/company/hiranandani-financial-services-limited/" target="_blank">Follow Us on<br>LinkedIn</a></p>
        </li>
        <li>
            <img src="images/youtube-circle.png" width="32" height="32">
            <p><a href="https://www.youtube.com/channel/UCSTQBUGn_YYbj34s35K31VQ" target="_blank">Subscribe on<br>YouTube</a></p>
        </li>
        
    </ul>
</div> -->

<section>
<ul class="ct-socials">
  <li>
    <a href="https://www.facebook.com/hiranandanifs/" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
  </li>
  <li>
    <a href="https://www.linkedin.com/company/hiranandani-financial-services-limited/" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a>
  </li>
  <li>
    <a href="https://www.youtube.com/channel/UCSTQBUGn_YYbj34s35K31VQ" target="_blank"><i class="fa fa-youtube fa-lg"></i></a>
  </li>
 </section><!-- POP PUP Start --> 
<div id="overlay"></div>
 <div id="popup">
    <table cellpadding="0" cellspacing="0" border="0" align="center">
  <tr>
    <td align="left" valign="top" width="100%">
    	<table cellpadding="0" cellspacing="0" border="0">
            <tr>
              <td width="100%" align="left" valign="top"><a href="#"> <img src="https://hfs-website-prd.azurewebsites.net/images/uploads/offers/HFS_popup.jpg"alt="banner" width="100%"  border="0" style="float:left;" /></a> </td>
        	</tr>
        </table>
	</td>
  </tr>
</table>
<button id="CloseBtn"><img src="images/close.png" alt="Close"></button>
</div>
        <!-- POP PUP Start -->

<section>
<div class="home-banner head_mrgin">
	<ul class="slider">
	    	     <li>
                    			<img src="https://hfs-website-prd.azurewebsites.net/images/uploads/home/sliders/Website_Home_Page_Banner.jpg" alt="HFCL Home banner" draggable="false" class="desk"/>
                    			<img src="https://hfs-website-prd.azurewebsites.net/images/uploads/home/sliders/Website_Home_Page_Banner_Change_-_Mobile_1.jpg" alt="HFCL Home banner" draggable="false" class="mob"/>
                    			<div class="caption">
                    				<div class="slide-txt firstslide">
                    					<h2>NO BUSINESS IS<br>SMALL BUSINESS<br></h2>
                    					<!--<h4>STEP FORWARD <span>>></span></h4>"-->
                    					<h4>STEP FORWARD >></h4>
                    					<a href="book-our-visit" class="book_our_visit">Let’s meet</a><br>
                    					<p>Your Time, Your Place</p>
                    				</div>
                    			</div>
                    			<div class="caption_mob">
                    				<div class="continer1">
                    					<div class="left_cap">
                    						<!--<h2>NO BUSINESS IS<br>SMALL BUSINESS</h2>-->
                    						<h2>NO BUSINESS IS<br>SMALL BUSINESS<br></h2>
                    						<!--<h4>STEP FORWARD <span>>></span></h4>-->
                    						<h4>STEP FORWARD >></h4>
                    					</div>
                    					<div class="right_cap">	
                    						<a href="book-our-visit" class="book_our_visit">Let’s meet</a><br>
                    						<p>Your Time, Your Place</p>
                    					</div>
                    				</div>
                    			</div>
                    		</li><li>
                    			<img src="https://hfs-website-prd.azurewebsites.net/images/uploads/home/sliders/Digital_Banner_32.jpg" alt="HFCL Home banner" draggable="false" class="desk"/>
                    			<img src="https://hfs-website-prd.azurewebsites.net/images/uploads/home/sliders/Website_Home_Page_Banner_Change_-_Mobile_2.jpg" alt="HFCL Home banner" draggable="false" class="mob"/>
                    			<div class="caption">
                    				<div class="slide-txt firstslide">
                    					<h2>PASSION TO<br>POTENTIAL<br>IS JUST ONE STEP</h2>
                    					<!--<h4>STEP FORWARD <span>>></span></h4>"-->
                    					<h4>STEP FORWARD >></h4>
                    					<a href="book-our-visit" class="book_our_visit">Let’s meet</a><br>
                    					<p>Your Time, Your Place</p>
                    				</div>
                    			</div>
                    			<div class="caption_mob">
                    				<div class="continer1">
                    					<div class="left_cap">
                    						<!--<h2>NO BUSINESS IS<br>SMALL BUSINESS</h2>-->
                    						<h2>PASSION TO<br>POTENTIAL<br>IS JUST ONE STEP</h2>
                    						<!--<h4>STEP FORWARD <span>>></span></h4>-->
                    						<h4>STEP FORWARD >></h4>
                    					</div>
                    					<div class="right_cap">	
                    						<a href="book-our-visit" class="book_our_visit">Let’s meet</a><br>
                    						<p>Your Time, Your Place</p>
                    					</div>
                    				</div>
                    			</div>
                    		</li><li>
                    			<img src="https://hfs-website-prd.azurewebsites.net/images/uploads/home/sliders/Andhra_Launch_Banner_-_TOP.jpg" alt="HFCL Home banner" draggable="false" class="desk"/>
                    			<img src="https://hfs-website-prd.azurewebsites.net/images/uploads/home/sliders/Andhra_Launch_Banner_-_Mobile2.jpg" alt="HFCL Home banner" draggable="false" class="mob"/>
                    			<div class="caption">
                    				<div class="slide-txt firstslide">
                    					<h2>WE ARE HERE<br>COME TAKE A<br></h2>
                    					<!--<h4>STEP FORWARD <span>>></span></h4>"-->
                    					<h4>STEP FORWARD >></h4>
                    					<a href="book-our-visit" class="book_our_visit">Let’s meet</a><br>
                    					<p>Your Time, Your Place</p>
                    				</div>
                    			</div>
                    			<div class="caption_mob">
                    				<div class="continer1">
                    					<div class="left_cap">
                    						<!--<h2>NO BUSINESS IS<br>SMALL BUSINESS</h2>-->
                    						<h2>WE ARE HERE<br>COME TAKE A<br></h2>
                    						<!--<h4>STEP FORWARD <span>>></span></h4>-->
                    						<h4>STEP FORWARD >></h4>
                    					</div>
                    					<div class="right_cap">	
                    						<a href="book-our-visit" class="book_our_visit">Let’s meet</a><br>
                    						<p>Your Time, Your Place</p>
                    					</div>
                    				</div>
                    			</div>
                    		</li>
		<!--<li>-->
		<!--	<img src="images/home-banner1.jpg" alt="HFCL Home banner" draggable="false" class="desk"/>-->
		<!--	<img src="images/home-banner1-mob.jpg" alt="HFCL Home banner" draggable="false" class="mob"/>-->
		<!--	<div class="caption">-->
		<!--		<div class="slide-txt firstslide">-->
		<!--			<h2>NO BUSINESS IS<br>SMALL BUSINESS</h2>-->
		<!--			<h4>STEP FORWARD <span>>></span></h4>-->
		<!--			<a href="book-our-visit.html" class="book_our_visit">Let’s meet</a><br>-->
		<!--			<p>Your Time, Your Place</p>-->
		<!--		</div>-->
		<!--	</div>-->
		<!--	<div class="caption_mob">-->
		<!--		<div class="continer1">-->
		<!--			<div class="left_cap">-->
		<!--				<h2>NO BUSINESS IS<br>SMALL BUSINESS</h2>-->
		<!--				<h4>STEP FORWARD <span>>></span></h4>-->
		<!--			</div>-->
		<!--			<div class="right_cap">	-->
		<!--				<a href="book-our-visit.html" class="book_our_visit">Let’s meet</a><br>-->
		<!--				<p>Your Time, Your Place</p>-->
		<!--			</div>-->
		<!--		</div>-->
		<!--	</div>-->
		<!--</li>-->
		
		<!--<li>-->
		<!--	<img src="images/home-banner2.jpg" alt="HFCL Home banner" draggable="false" class="desk"/>-->
		<!--	<img src="images/home-banner2-mob.jpg" alt="HFCL Home banner" draggable="false" class="mob"/>-->
		<!--	<div class="caption">-->
		<!--		<div class="slide-txt firstslide">-->
		<!--			<h2>Passion to<br>potential<br>is just one step </h2>-->
		<!--			<h4>STEP FORWARD <span>>></span></h4>-->
		<!--			<a href="book-our-visit.html" class="book_our_visit">Let’s meet</a><br>-->
		<!--			<p>Your Time, Your Place</p>-->
		<!--		</div>-->
		<!--	</div>-->
		<!--	<div class="caption_mob">-->
		<!--		<div class="continer1">-->
		<!--			<div class="left_cap">-->
		<!--				<h2>Passion to potential<br>is just one step </h2>-->
		<!--				<h4>STEP FORWARD <span>>></span></h4>-->
		<!--			</div>-->
		<!--			<div class="right_cap">	-->
		<!--				<a href="book-our-visit.html" class="book_our_visit">Let’s meet</a><br>-->
		<!--				<p>Your Time, Your Place</p>-->
		<!--			</div>-->
		<!--		</div>-->
		<!--	</div>-->
		<!--</li>-->
		<!--<li>-->
		<!--	<img src="images/home-banner3.jpg" alt="HFCL Home banner" draggable="false" class="desk"/>-->
		<!--	<img src="images/home-banner3-mob.jpg" alt="HFCL Home banner" draggable="false" class="mob"/>-->
		<!--	<div class="caption">-->
		<!--		<div class="slide-txt firstslide">-->
		<!--			<h2>Dreams to reality<br> is just one step</h2>-->
		<!--			<h4>STEP FORWARD <span>>></span></h4>-->
		<!--			<a href="book-our-visit.html" class="book_our_visit">Let’s meet</a><br>-->
		<!--			<p>Your Time, Your Place</p>-->
		<!--		</div>-->
		<!--	</div>-->
		<!--	<div class="caption_mob">-->
		<!--		<div class="continer1">-->
		<!--			<div class="left_cap">-->
		<!--				<h2>Dreams to reality<br>is just one step</h2>-->
		<!--				<h4>STEP FORWARD <span>>></span></h4>-->
		<!--			</div>-->
		<!--			<div class="right_cap">	-->
		<!--				<a href="book-our-visit.html" class="book_our_visit">Let’s meet</a><br>-->
		<!--				<p>Your Time, Your Place</p>-->
		<!--			</div>-->
		<!--		</div>-->
		<!--	</div>-->
		<!--</li>-->
	</ul>
</div>
</section>

<section>
<div class="home_txt">
	<div class="continer1">
		<!--<h4><span class="bold">HFS</span> is a new age NBFC, focused on supporting the growth of Micro and Small enterprises in India. Our aim is to be a partner in their progress by providing customised financial solutions to this under-served segment in a seamless and transparent manner. </h4>-->
	    <h4><strong>HFS&nbsp;</strong>is a new age NBFC, focused on supporting the growth of Micro and Small enterprises in India. Our aim is to be a partner in their progress by providing customised financial solutions to this under-served segment in a seamless and transparent manner.</h4>	</div>
</div> 
</section>

<section>
<div class="home_sec_slide">
	<div class="continer1">
		<div class="home_sec_slid_sub">
			<div class="home_sec_left">
				<ul class="slider2">
				      <li>
						<img src="https://hfs-website-prd.azurewebsites.net/images/uploads/msem-loan//slider1.jpg" alt="banner" draggable="false"/>
						<div class="caption_sec">
							<div class="caption_sec_left">
								<h3>Loans for<br> Business Expansion<br> <span class="bold">WE ARE RIGHT THERE</span> </h3>
							</div>
							<div class="caption_sec_right">
								<ul>
									<li>Collateral free loan</li>
									<li>Longer tenure loan, easy repayment</li>
									<li>No guarantor required</li>
								</ul>
							</div>
						</div>
					</li><li>
						<img src="https://hfs-website-prd.azurewebsites.net/images/uploads/msem-loan//slider2.jpg" alt="banner" draggable="false"/>
						<div class="caption_sec">
							<div class="caption_sec_left">
								<h3>Loans for<br> Working Capital<br> <span class="bold">WE ARE RIGHT THERE</span> </h3>
							</div>
							<div class="caption_sec_right">
								<ul>
									<li>Collateral free loan</li>
									<li>Longer tenure loan, easy repayment</li>
									<li>No guarantor required</li>
								</ul>
							</div>
						</div>
					</li><li>
						<img src="https://hfs-website-prd.azurewebsites.net/images/uploads/msem-loan//slider32.jpg" alt="banner" draggable="false"/>
						<div class="caption_sec">
							<div class="caption_sec_left">
								<h3>Loans for<br> EQUIPMENT & MACHINERY<br> <span class="bold">WE ARE RIGHT THERE</span> </h3>
							</div>
							<div class="caption_sec_right">
								<ul>
									<li>Longer tenure loan, easy repayment</li>
									<li>No guarantor required</li>
									
								</ul>
							</div>
						</div>
					</li><li>
						<img src="https://hfs-website-prd.azurewebsites.net/images/uploads/msem-loan//slider4.jpg" alt="banner" draggable="false"/>
						<div class="caption_sec">
							<div class="caption_sec_left">
								<h3>Loans for<br> COMMERCIAL PREMISES<br> <span class="bold">WE ARE RIGHT THERE</span> </h3>
							</div>
							<div class="caption_sec_right">
								<ul>
									<li>Longer tenure loan, easy repayment</li>
									<li>No guarantor required</li>
									
								</ul>
							</div>
						</div>
					</li>					<!--<li>-->
					<!--	<img src="images/msem-loan/slider2.jpg" alt="" draggable="false"/>-->
					<!--	<div class="caption_sec">-->
					<!--		<div class="caption_sec_left">-->
					<!--			<h3>Loans for<br>Working Capital<br> <span class="bold">WE ARE RIGHT THERE</span></h3>-->
					<!--		</div>-->
					<!--		<div class="caption_sec_right">-->
					<!--			<ul>-->
					<!--				<li>Collateral free loan</li>-->
					<!--				<li>Longer tenure loan, easy repayment</li>-->
					<!--				<li>No guarantor required</li>-->
					<!--			</ul>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--</li>-->
					<!--<li>-->
					<!--	<img src="images/msem-loan/slider3.jpg" alt="" draggable="false"/>-->
					<!--	<div class="caption_sec">-->
					<!--		<div class="caption_sec_left">-->
					<!--			<h3>Loans for<br>Equipment & Machinery<br> <span class="bold">WE ARE RIGHT THERE </span></h3>-->
					<!--		</div>-->
					<!--		<div class="caption_sec_right m_topcap">-->
					<!--			<ul>-->
					<!--				<li>Longer tenure loan, easy repayment</li>-->
					<!--				<li>No guarantor required</li>-->
					<!--			</ul>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--</li>-->
					<!--<li>-->
					<!--	<img src="images/msem-loan/slider4.jpg" alt="" draggable="false"/>-->
					<!--	<div class="caption_sec">-->
					<!--		<div class="caption_sec_left">-->
					<!--			<h3>Loans for buying<br>Commercial Premises<br> <span class="bold">WE ARE RIGHT THERE</span></h3>-->
					<!--		</div>-->
					<!--		<div class="caption_sec_right m_topcap">-->
					<!--			<ul>-->
					<!--				<li>Longer tenure loan, easy repayment</li>-->
					<!--				<li>No guarantor required</li>-->
					<!--			</ul>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--</li>-->
				</ul>
			</div>
			<div class="home_sec_right">
				<div class="home_sec_right_txt wow fadeIn">
					<!--<p class="size48">One Stop <span>for all MSME Loans</span> </p>-->
					<p class="size48">ONE STOP <span> FOR ALL MSME LOANS</span> </p>
					<p>Every business is unique and has a specific need. We understand this and provide a unique solution.</p>
					<!--<p>Every business is unique and has a specific need. We understand this and provide a unique solution.</p>-->
					<p style="text-align: center;"><a href="business-expansion.php">Find your loan</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

<section>
<div class="hfsl_advance_main">
	<div class="advance_cont">
		<div class="hfsl_advance_sub">
			<div class="adv_head_txt">
			    <h1><h1><span class="light">The</span> HFS Advantage</h1></h1>
				<!--<h1><span class="light">The</span> HFS Advantage</h1>-->
				<p>Loans with HFS are faster, easier, trustworthy and unique to your specific need.</p>
			</div>
			<div class="advc_ico_sec wow fadeIn">
				<ul>
					<li>
						<div class="div-conte">
							<div class="hfsl_advance_ico1">
								<img src="https://hfs-website-prd.azurewebsites.net/images/uploads/home/icons/trusted-name1.png" alt="trusted name" draggable="false"/>
							</div>
							<!--<p>TRUSTED<br>NAME</p>-->
							<p>TRUSTED<br>
NAME</p>
						</div>
					</li>
					<li>
						<div class="div-conte">
							<div class="hfsl_advance_ico2">
								<img src="https://hfs-website-prd.azurewebsites.net/images/uploads/home/icons/at_ur-doorstep.png" alt="Loan at your doorstep" draggable="false"/>
							</div>
							<!--<p>AT YOUR<br>-->
							<!--	DOORSTEP</p>-->
							<p>AT YOUR<br>
DOORSTEP</p>
						</div>
					</li>
					<li>
						<div class="div-conte">
							<div class="hfsl_advance_ico3">
								<img src="https://hfs-website-prd.azurewebsites.net/images/uploads/home/icons/document_support.png" alt="Easy Documentation" draggable="false"/>
							</div>
							<!--<p>EASY<br>DOCUMENTATION</p>-->
							<p><p>EASY<br>
DOCUMENTATION</p>
						</div>
					</li>
					<li>
						<div class="div-conte">
							<div class="hfsl_advance_ico4">
								<img src="https://hfs-website-prd.azurewebsites.net/images/uploads/home/icons/faster-process.png" alt="hfs advance"  draggable="false"/>
							</div>
							<!--<p>FASTER<br>PROCESSING</p>-->
							<p>FASTER<br>
PROCESSING </p>
						</div>
					</li>
					<li>
						<div class="div-conte">
							<div class="hfsl_advance_ico5">
								<img src="https://hfs-website-prd.azurewebsites.net/images/uploads/home/icons/hassle_free.png" alt="hassle free loans" draggable="false"/>
							</div>
							<!--<p>HASSLE-FREE<br>LOANS</p>-->
							<p>HASSLE-FREE<br>
LOANS</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="bottom_bt">
				<p><a href="hfs-team.php">Know Us Better</a></p>
			</div>
		</div>
	</div>
</div>
</section>

<section>

</section>
<section>
 

				<ul class="slider2">
				      <li>
						<h3>JANSEVA DOODH DAIRY – AURANGABAD<br />DEVANAND MOTIRAM</h3><br />
<p>When I felt it was the right time to invest in my business. I decided to take a business expansion loan and approached HFS. My experience with them right from the time of my enquiry, to filling in the paperwork all the way up to disbursement was handled with expertise. Today, because of this business investment. I have been able to expand my customer base and have already started reaping the benefits.</p>
					<br /></li><li>
<h3>SUNRISE ELECTRONICS & FURNISHINGS - AHMEDABAD<br />SANJEEV JOSHI</h3>
<p>Business expansion is a sign of progress. I have been dealing with electronics and furnishings for the past 17 years. I owned one showroom and as part of growth, I wanted to own another. That’s when I decided to reach out to HFS. My experience with them through their RM was pleasant. Right from the most basic process of filling out the form, till the disbursement, they made my journey across every touch-point helpful and seamless. Today, I am a proud owner of two showrooms.</p>
					<br /></li><li>
<h3>SONAL BAG HOUSE - MEHSANA<br />BHARATBHAI BANSILAL CHOUHAN</h3>
<p>When one is running a business, it is often essential to have working capital to run it sustainably. I applied for a working capital loan with HFS for the same reason. Their services were hassle-free, time-bound and customer-friendly. Thanks to all their help and support, my business is growing really well today.</p>
					<br /></li><li>
<h3>SIRAJ KIRANA STORE – AHMEDABAD<br />MOHD YUNUS SHAIKH 
</h3>
<p>Being closely associated with the grocery business for many years, has made me well acquainted with it. Hence, ever since I joined 12 years ago, I knew I had to carry the legacy forward. When I needed a loan for my business, I approached HFS. The process was entirely seamless, right from the loan application till the disbursement of the loan amount. It was hassle-free!<br>
With their support I could grow my business and didn't have to face any hurdles in terms of financial support.</p>
				<br />	</li>					
				</ul>

</section>
<footer>
	<div class="footer_top wow fadeIn">
		<div class="continer1">
				<ul> <li class='head-txt' id='career1'> <a href='careers.php' id='career1' >Careers</a><a></a></li></ul><ul> <li class='head-txt' id='tool1'> <a href='#' id='tool1' >TOOLS FOR YOU</a><a><li id='calculators1'><span>-</span> <a href='calculators.php' id='calculators1' >  Calculators</a><ul ></ul></li><li id='faq1'><span>-</span> <a href='faqs.php' id='faq1' >  FAQs</a><ul ></ul></li><li id='blog1'><span>-</span> <a href='/blog' id='blog1' >  Blog</a><ul ></ul></li></a></li></ul><ul> <li class='head-txt' id='regulatory1'> <a href='regulatory.php' id='regulatory1' >Regulatory</a><a></a></li></ul><ul> <li class='head-txt' id='know1'> <a href='#' id='know1' >OUR STORY</a><a><li id='about1'><span>-</span> <a href='about-group.php' id='about1' >  About Us</a><ul ></ul></li><li id='values1'><span>-</span> <a href='HFS-Values.php' id='values1' >  Our Values</a><ul ></ul></li><li id='team1'><span>-</span> <a href='hfs-team.php' id='team1' >  HFS & TEAM</a><ul ></ul></li></a></li></ul><ul> <li class='head-txt' id='loan1'> <a href='#' id='loan1' >LOANS FOR YOU</a><a><li id='business1'><span>-</span> <a href='business-expansion.php' id='business1' >  Business Loans</a><ul ></ul></li><li id='working1'><span>-</span> <a href='working-capital.php' id='working1' >  Working Capital</a><ul ></ul></li><li id='equipment1'><span>-</span> <a href='equipment-and-machinery.php' id='equipment1' >  Equipment & Machinery Loans</a><ul ></ul></li><li id='commercial1'><span>-</span> <a href='commercial-premises.php' id='commercial1' >  Loans For Buying Commercial Premises</a><ul ></ul></li></a></li></ul><ul> <li class='head-txt' id='contact1'> <a href='locate-us.php' id='contact1' >LOCATE US</a><a></a></li></ul>


			
		</div>
	</div>
	
	<div class="footer_bottom">
		<div class="continer1">
			<ul>
				<!--<li>©2019  HFSL. All rights reserved | <a href="disclaimer.php" class="noactive">Disclaimer</a> &amp; <a href="privacy-policy.php" class="noactive">Privacy Policy</a> </li>-->
				<!--<li>Formerly known as Dobra Finance Private Limited </li>-->
				<!--<li class="botto_ft">Group websites&nbsp;:&nbsp;<a href="https://www.houseofhiranandani.com/" target="_blank">www.houseofhiranandani.com</a><span class="ft_hide">&nbsp;&nbsp;|&nbsp;&nbsp;</span><a href="http://www.hiranandani.com/" target="_blank">www.hiranandani.com </a><span class="ft_hide"></li>-->
				<li>&copy;2019&nbsp;HFS | All rights reserved |&nbsp;<a href="https://hfs-website-prd.azurewebsites.net/desclaimer.php" id="disclaimer">Disclaimer</a>&nbsp;&amp;&nbsp;<a href="https://hfs-website-prd.azurewebsites.net/privacy-policy">Privacy Policy</a></li>
				<li>Formerly known as Dobra Finance Private Limited</li>
								<li>Group websites &nbsp;:&nbsp;<a href="https://www.houseofhiranandani.com" target="_blank"> www.houseofhiranandani.com </a>  | <a href="https://www.hiranandani.com" target="_blank">www.hiranandani.com</a></li>
				<li>CIN :U65999MH2017PTC291060</li>
				</ul>
		</div>
	</div>
</footer>

<div class="footer-nav">
	<ul>
	<!--<li> 
			<a>  
				<i><img src="images/call.png"></i> 
				Call us
			</a> 
		</li> 
		<li> 
			<a href="https://api.whatsapp.com/send?phone=0000000000&amp;text=Welcome%20to%20Hiranandani%20Financial%20Services%20Pvt.%20Ltd." target="_blank">  
				<i><img src="images/what.png"></i> 
				WhatsApp
			</a> 
		</li>-->
		<li> 
			<a href="book-our-visit.html" class="book_our_visit"> 
				<i><img src="images/lets-meet-ico.png" alt="Lets meet"></i> 
				Let’s meet
			</a> 
		</li>
		<li>
			<a href="enquire-now.html" class="enquiry">
				<i><img src="images/enq.png" alt="enquiry"></i>
				Enquire now
			</a>
		</li>	
	</ul>
 </div>

<!--<div class="whats-app"><a href="https://api.whatsapp.com/send?phone=0000000000&text=Welcome%20to%20Hiranandani%20Financial%20Services%20Pvt.%20Ltd." target="_blank"><img src="images/icon/whats-app.png" alt="" draggable="false"/><span>+91 00000 00000</span></a></div>
<!-- <div class="enquiry-desk"><a href="enquiry.php" class="enquiry"><img src="images/icon/enquir_now.jpg" alt="enquiry" title="enquiry" draggable="false"></a></div> -->
 <a href="#" id="scroll" style="display: none;"><span></span></a>
</div>
<!--css-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://hfs-website-prd.azurewebsites.net/css/reboot.css">
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://hfs-website-prd.azurewebsites.net/css/animated.min.css"/>
	<link rel="stylesheet" href="https://hfs-website-prd.azurewebsites.net/bxslider/jquery.bxslider.css">
	<link rel="stylesheet" href="https://hfs-website-prd.azurewebsites.net/menu/meanmenu.css" media="all" />
	<link href="https://hfs-website-prd.azurewebsites.net/css/rangeslider.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://hfs-website-prd.azurewebsites.net/css/style.css">
 	<link rel="stylesheet" href="https://hfs-website-prd.azurewebsites.net/css/responsive.css" media="all">
<!--css-->
<!--js-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!--<script src="https://hfs-website-prd.azurewebsites.net/js/check_eligibility.js"></script>-->
	<!--<script src="https://hfs-website-prd.azurewebsites.net/js/index/pagecalscript.js"></script>-->
	<script src="https://hfs-website-prd.azurewebsites.net/bxslider/jquery.bxslider.min.js"></script>
	<script src="https://hfs-website-prd.azurewebsites.net/js/include.js"></script>
	<script src="https://hfs-website-prd.azurewebsites.net/js/wow.js"></script>
		<!--js-->
    <script src="js/check_eligibility.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.3.17/dist/sweetalert2.all.min.js"></script>
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
<script src="pre1/sPreloader.js"></script>
<script type="text/javascript">
    $('body').jpreLoader({
        preMainSection: '#main-preloader',
        prePerText: '.preloader-percentage-text',
        preBar: '.preloader-bar',
    });
</script>
<script>$('#index').addClass('active');</script>
<!--<div class="ticker-wrap">
<div class="ticker">
<div class="ticker__item"> <a href="https://hfs-website-prd.azurewebsites.net/pdf/EMI_Moratorium_Facility.pdf"rel="noopener noreferrer" target="_blank" style="text-decoration:none; color:#fff;">Details of EMI Moratorium Facility. Click here. </a>  </div>
</div>
</div> -->
</body>
</html>