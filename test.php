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
	<title><?=$p_title?></title>
	<meta name="description" content="Hassle Free Business loans from HFS. Quick Disbursal, Easy Documentation. No Guarantor Required. Low Interest Rate" />
	<meta name="keywords" content="<?=$meta_key; ?>" />
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="googlebot" content="index, follow ">
    <meta name="bingbot" content="index, follow ">
    <meta name="YahooSeeker" content="Index,Follow" />
    <link rel="canonical" href="https://hfs.in/"/>
    <link rel="alternate" href="https://www.hfs.in/" hreflang="en-in"/>
	<meta property="og:image" content="https://hfs.in/images/uploads/logo3.png"/>
	<meta property="og:url" content="https://hfs.in" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Small Business Loans | Hiranandani Financial Services | HFS" />
    <meta property="og:description" content="Hassle Free Business loans from HFS a new age NBFC. Quick Disbursal, Easy Documentation. No Guarantor Required. Low Interest Rate" />
    	
	<link href="images/favicon.ico" rel="icon" type="image/ico" />
	<link href="https://hfs.in/pre1/jpreloader.css" media="screen" rel="stylesheet" type="text/css" />
    <link rel="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.3.17/dist/sweetalert2.min.css">
   <!-- <link rel="stylesheet" href="/css/ticker.css">	-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/testimonialstyle.css">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	<script src="https://use.fontawesome.com/1744f3f671.js"></script>
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
            overlay.style.display =" <?=$sta?>";
            popup.style.display = "<?=$sta?>";
        
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
  "logo" : "https://hfs.in/images/uploads/logo3.png",
  "articleSection" : "HFS is a new age NBFC, focused on supporting the growth of Micro and Small enterprises in India. Our aim is to be a partner in their progress by providing customised financial solutions to this under-served segment in a seamless and transparent manner.",
  "url" : "https://hfs.in/index.php"
}
</script>
</head>
<body>

<?php include 'menu.php';?>
<?php include 'social.php';?>
<!-- POP PUP Start --> 
<div id="overlay"></div>
 <div id="popup">
    <table cellpadding="0" cellspacing="0" border="0" align="center">
  <tr>
    <td align="left" valign="top" width="100%">
    	<table cellpadding="0" cellspacing="0" border="0">
            <tr>
              <td width="100%" align="left" valign="top"><a href="<?=$link?>"> <img src="<?=$banner?>"alt="banner" width="100%"  border="0" style="float:left;" /></a> </td>
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
	    	     <?php if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '<li>
                    			<img src="' .$row['desk_banner'].'" alt="HFCL Home banner" draggable="false" class="desk"/>
                    			<img src="' .$row['mobile_banner'].'" alt="HFCL Home banner" draggable="false" class="mob"/>
                    			<div class="caption">
                    				<div class="slide-txt firstslide">
                    					<h2>' .$row['cap_1'].'<br>' .$row['cap_2'].'<br>' .$row['cap_3'].'</h2>
                    					<!--<h4>STEP FORWARD <span>>></span></h4>"-->
                    					<h4>' .$row['cap_4'].'</h4>
                    					<a href="https://applynow.hfs.in/" target="_blank">Apply Now</a><br>
                    					
                    				</div>
                    			</div>
                    			<div class="caption_mob">
                    				<div class="continer1">
                    					<div class="left_cap">
                    						<!--<h2>NO BUSINESS IS<br>SMALL BUSINESS</h2>-->
                    						<h2>' .$row['cap_1'].'<br>' .$row['cap_2'].'<br>' .$row['cap_3'].'</h2>
                    						<!--<h4>STEP FORWARD <span>>></span></h4>-->
                    						<h4>' .$row['cap_4'].'</h4>
                    					</div>
                    					<div class="right_cap">	
                    						<a href="https://applynow.hfs.in/enterMob" target="_blank">Apply Now</a><br>
                    						
                    					</div>
                    				</div>
                    			</div>
                    		</li>';
                    }
	     } else {
				                    echo "";
				                }
		?>

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
	    <?=$desc?>
	</div>
</div> 
</section>

<section>
<div class="home_sec_slide">
	<div class="continer1">
		<div class="home_sec_slid_sub">
			<div class="home_sec_left">
				<ul class="slider2">
				      <?php if ($result1->num_rows > 0) {
                    // output data of each row
                    while($row1 = $result1->fetch_assoc()) {
                        if(empty($row1['sub_cap_3'])){
                            $sub_cap3='';
                        }
                        else{
                            $sub_cap3 ='<li>'.$row1['sub_cap_3'].'</li>';
                        }
					echo '<li>
						<img src="'.$row1['banner'].'" alt="banner" draggable="false"/>
						<div class="caption_sec">
							<div class="caption_sec_left">
								<h3>'.$row1['cap_1'].'<br> '.$row1['cap_2'].'<br> <span class="bold">'.$row1['cap_3'].'</span> </h3>
							</div>
							<div class="caption_sec_right">
								<ul>
									<li>'.$row1['sub_cap_1'].'</li>
									<li>'.$row1['sub_cap_2'].'</li>
									'.$sub_cap3.'
								</ul>
							</div>
						</div>
					</li>';
                    }
				      }else{
				          echo"";
				      }
				      ?>
					<!--<li>-->
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
					<p class="size48"><?=$cap1?> <span> <?=$cap2?></span> </p>
					<p><?=$desc2?></p>
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
			    <h1><?=$heading?></h1>
				<!--<h1><span class="light">The</span> HFS Advantage</h1>-->
				<p><?=$sub_heading?></p>
			</div>
			<div class="advc_ico_sec wow fadeIn">
				<ul>
					<li>
						<div class="div-conte">
							<div class="hfsl_advance_ico1">
								<img src="<?=$icon1?>" alt="trusted name" draggable="false"/>
							</div>
							<!--<p>TRUSTED<br>NAME</p>-->
							<p><?=wordwrap($icon1_text, 5,"<br>\n")?></p>
						</div>
					</li>
					<li>
						<div class="div-conte">
							<div class="hfsl_advance_ico2">
								<img src="<?=$icon2?>" alt="Loan at your doorstep" draggable="false"/>
							</div>
							<!--<p>AT YOUR<br>-->
							<!--	DOORSTEP</p>-->
							<p><?=wordwrap($icon2_text, 7,"<br>\n")?></p>
						</div>
					</li>
					<li>
						<div class="div-conte">
							<div class="hfsl_advance_ico3">
								<img src="<?=$icon3?>" alt="Easy Documentation" draggable="false"/>
							</div>
							<!--<p>EASY<br>DOCUMENTATION</p>-->
							<p><p><?=wordwrap($icon3_text, 5,"<br>\n")?></p>
						</div>
					</li>
					<li>
						<div class="div-conte">
							<div class="hfsl_advance_ico4">
								<img src="<?=$icon4?>" alt="hfs advance"  draggable="false"/>
							</div>
							<!--<p>FASTER<br>PROCESSING</p>-->
							<p><?=wordwrap($icon4_text, 5,"<br>\n")?> </p>
						</div>
					</li>
					<li>
						<div class="div-conte">
							<div class="hfsl_advance_ico5">
								<img src="<?=$icon5?>" alt="hassle free loans" draggable="false"/>
							</div>
							<!--<p>HASSLE-FREE<br>LOANS</p>-->
							<p><?=wordwrap($icon5_text, 5,"<br>\n")?></p>
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

 
<section id="testim" class="testim">
<!--         <div class="testim-cover"> -->
            <div class="wrap">

                <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                <ul id="testim-dots" class="dots">
                    <li class="dot active"></li><!--
                    --><li class="dot"></li><!--
                    --><li class="dot"></li><!--
                    --><li class="dot"></li><!--
                    --><li class="dot"></li>
                </ul>
                <div id="testim-content" class="cont">
                    
                    <div class="active">
                        <div class="img"><img src="/images/testimonials/Janseva.png" alt=""></div>
                        <h2>JANSEVA DOODH DAIRY – AURANGABAD<br>DEVANAND MOTIRAM</h2>
                        <p>When I felt it was the right time to invest in my business. I decided to take a business expansion loan and approached HFS. My experience with them right from the time of my enquiry, to filling in the paperwork all the way up to disbursement was handled with expertise. Today, because of this business investment. I have been able to expand my customer base and have already started reaping the benefits.</p>                    
                    </div>

                    <div>
                        <div class="img"><img src="/images/testimonials/Sunrise.png" alt=""></div>
                        <h2>SUNRISE ELECTRONICS & FURNISHINGS - AHMEDABAD<br>SANJEEV JOSHI</h2>
                        <p>Business expansion is a sign of progress. I have been dealing with electronics and furnishings for the past 17 years. I owned one showroom and as part of growth, I wanted to own another. That’s when I decided to reach out to HFS. My experience with them through their RM was pleasant. Right from the most basic process of filling out the form, till the disbursement, they made my journey across every touch-point helpful and seamless. Today, I am a proud owner of two showrooms.</p>                    
                    </div>

                    <div>
                        <div class="img"><img src="/images/testimonials/SonalBagHouse.png" alt=""></div>
                        <h2>SONAL BAG HOUSE - MEHSANA<br>BHARATBHAI BANSILAL CHOUHAN</h2>
                        <p>When one is running a business, it is often essential to have working capital to run it sustainably. I applied for a working capital loan with HFS for the same reason. Their services were hassle-free, time-bound and customer-friendly. Thanks to all their help and support, my business is growing really well today.</p>                    
                    </div>

                    <div>
                        <div class="img"><img src="/images/testimonials/SairajKiranaStores.png" alt=""></div>
                        <h2>SIRAJ KIRANA STORE – AHMEDABAD<br>MOHD YUNUS SHAIKH</h2>
                        <p>Being closely associated with the grocery business for many years, has made me well acquainted with it. Hence, ever since I joined 12 years ago, I knew I had to carry the legacy forward. When I needed a loan for my business, I approached HFS. The process was entirely seamless, right from the loan application till the disbursement of the loan amount. It was hassle-free!<br>
						ith their support I could grow my business and didn't have to face any hurdles in terms of financial support.</p>                    
                    </div>

                    <div>
                        <div class="img"><img src="/images/testimonials/ASPlastics.png" alt=""></div>
                        <h2>AS PLASTICS – NASIK <br>MOHAMMAD AZHARUDDIN SHAIKH</h2>
                        <p>I have been working in the business of tool room and moulding for the past 5-6 years. When one is in such a business, the procurement of raw materials becomes very frequent. Hence, when I needed a loan urgently to purchase raw material, I approached HFS, Nasik. The Relationship Manager was very co-operative and after a seamless and time-friendly process, the loan was sanctioned and disbursed within 8-10 days. As a result, I could grow my business much before expected! I am very thankful to Hiranandani Financial Services and I see our association remaining strong for many years.</p>                    
                    </div>

					<div>
                        <div class="img"><img src="/images/testimonials/LuckyAuto.png" alt=""></div>
                        <h2>LUCKY AUTO – MEHSANA <br>B. PRAJAPATI</h2>
                        <p>Each business-owner dreams of constantly growing his or her business. This was the case with me too. Hence, to purchase more stock, I applied for a loan at Hiranandani Financial Services. My experience with them was hassle-free and caused me no trouble at all. I’m very happy to be a part of the HFS customer base.</p>                    
                    </div>
                </div>

            </div>
<!--         </div> -->
    </section>



   
<!--<section>
<div class="check_eligi_homem">
	<div class="continer1">
		<div class="check_eligi_hsub">
			<div class="eligihsub_head_txt">
				<h1><span class="light">Check</span> Eligibility </h1>
			</div>
			<div class="home_calcul_sec">
				<form action="calculators.php" method="post" class="get_in_touch_submit_form">
					<ul class="wow fadeIn">
								<li>
							<!--  Loan Amount Slider--
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
							<!--  Loan Tenure Slider--
							
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
							<!--  Loan Amount Slider--
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
</section> -->

<?php include 'footer_menu.php';?>

<!--css-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://hfs.in/css/reboot.css">
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://hfs.in/css/animated.min.css"/>
	<link rel="stylesheet" href="https://hfs.in/bxslider/jquery.bxslider.css">
	<link rel="stylesheet" href="https://hfs.in/menu/meanmenu.css" media="all" />
	<link href="https://hfs.in/css/rangeslider.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://hfs.in/css/style.css">
 	<link rel="stylesheet" href="https://hfs.in/css/responsive.css" media="all">
<!--css-->
<!--js-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!--<script src="https://hfs.in/js/check_eligibility.js"></script>-->
	<!--<script src="https://hfs.in/js/index/pagecalscript.js"></script>-->
	<script src="https://hfs.in/bxslider/jquery.bxslider.min.js"></script>
	<script src="https://hfs.in/js/include.js"></script>
	<script src="https://hfs.in/js/wow.js"></script>
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
<div class="ticker__item"> <a href="http://hfs.in/pdf/EMI_Moratorium_Facility.pdf"rel="noopener noreferrer" target="_blank" style="text-decoration:none; color:#fff;">Details of EMI Moratorium Facility. Click here. </a>  </div>
</div>
</div> -->
</body>
</html>