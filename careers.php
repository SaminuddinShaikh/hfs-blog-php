<?php
include_once('db_configCMS.php');

$sql = "SELECT *  FROM cms_career";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $page_title     = $row["page_title"];
        $meta_keys      = $row["meta_keywords"];
        $meta_desc      = $row["meta_description"];
      	$title =$row['title'];
      	$dis =$row['description'];
        }
    } else {
        echo "";
    }
    
$sql3 = "SELECT * FROM cms_all_banners WHERE page_name ='Careers'";
$result3 = $con->query($sql3);

    
    while ($row3 = $result3->fetch_assoc()) {
        // $page_title     = $row3["page_title"];
        // $meta_keys      = $row3["meta_keywords"];
        // $meta_desc      = $row3["meta_description"];
        
        $desk_alt       = $row3["alt_tag"];
        $mob_alt         = $row3["alt_tag_mob"];
        $desk           = $row3["desk_banner"];
        $mob            = $row3["mobile_banner"];
        $cap1           = $row3["cap_1"];
        $cap2           = $row3["cap_2"];
        $cap3           = $row3["cap_3"];
    }
    
$sql1 = "SELECT * FROM cms_jobs WHERE status='Active'";
$result1 = $con->query($sql1);
           
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
	<link rel="stylesheet" href="menu/meanmenu.css" media="all" />
	<link rel="stylesheet" href="css/style.css">
 	<link rel="stylesheet" href="css/responsive.css" media="all">
 	<link href="css/according.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script type="text/javascript" src="js/form_validation.js"></script>
<link rel="canonical" href="https://www.hfs.in/careers.php"/>

	<!--js-->
<script type="text/javascript">
function send(num) {
var num = num;
	//window.open(num);
	window.open("https://api.whatsapp.com/send?phone="+num);
	}
</script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144819872-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-144819872-1');
        </script>
    <!--End Global site tag (gtag.js) - Google Analytics -->
    
    <style>
        .car_txt h1 {
    font-weight: 500;
    text-align: center;
    position: relative;
    color: #004083;
    }
    .car_txt p {
    color: #838383;
    text-align: center;
    position: relative;
    }
    
    .abt-ban-txt h2 {
    font-weight:100;
    text-transform:none;
    line-height: 40px;
    vertical-align: middle;
    }
    
    @media only screen  and (min-width:1000px) {
        .car_txt p {
    font-size:18px;
    padding:0 150px 0 150px;
    }
    .abt-ban-txt h2 {
    font-size: 46px;
    }
    .car_txt h1 {
    font-size:36px;
    }
    }

    @media only screen and (max-width: 800px) and (min-width: 0px) {
    .car_txt p {
    font-size:14px;
    padding:0 10px 0 10px;
    }
    .car_txt h1 {
    font-size: 22px;
    padding:0 10px 0 10px;
    }
    }
    </style>
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
<div class="abt-ban-main head_mrgin">
	<!--<img src="images/carrer-top-ban.jpg" alt="" draggable="false" class="desk"/>-->
	<!--<img src="images/carrer-top-ban-mob.jpg" alt="" draggable="false" class="mob"/>-->
	<img src="images/cargptw.jpg" alt="<?=$desk_alt?>" title="<?=$desk_alt?>" draggable="false" class="desk"/>
	<img src="images/cargptwmob.jpg" alt="<?=$mob_alt?>" title="<?=$mob_alt?>" draggable="false" class="mob"/>
	<div class="abt-ban-txt">
		<!--<div class="continer1">
			<!--<h2 class="cont-top">Let's BUILD<br>dreams together </h2>--
			<h2>We are the sum of the<br>stories of our people<br></h2>-->
		</div>
		<div class="caption_mob">
				<div class="continer1">
						<h2>We are the sum of the<br>stories of our people</h2>
					</div>
					</div>
	</div>
</div>

<section id="bredcrum">
	<div class="continer1">
		<div class="bredcrum_main">
			<ul>
				<li><a href="index.php">Home</a> ></li>
				<li><a href="careers.php" class="active">Careers</a></li>
			</ul>
		</div>
	</div>
</section>

<section id="about-us">
	
		<div class="about-us-main"style="margin: 0% 0;">
			<div class="car_txt">
				<div class="txt" id="careers">
				    <br><br>
<h1><span class="light">You are truly defined </span>by the work you do.</h1><br>
<p>To create an impact is something that we all strive for, in life. If you feel you have the zeal in you, to support 
the growing businesses in a country as dynamic as India, join us.</p>
<br><br><hr style="width:50%"><br><br>
<h1><span class="light">Grow together to </span>win together.</h1><br>
<p>With a team of growing minds and individuals, we are still looking for more people who can help us grow together as a team; better and faster.</p>
</div>
<br><br>
<div class="txt"style="background-color: #D9DADA">
		<br><br><strong>	<h1>STEP FORWARD >></strong></h1><br>
<p>Step forward today, for a better tomorrow; for you and for us!<br>Take a look at our current job openings: <a href="https://hoh.darwinbox.in/ms/candidate/careers"target="_blank">Click here</a></p>
<br><br>

</div>	</div>		</div>		
</section>

<?php include 'footer_menu.php';?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="bxslider/jquery.bxslider.min.js"></script>
<script src="menu/jquery.meanmenu.js"></script>
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
<script src="pre1/sPreloader.js"></script>
<script type="text/javascript">
    $('body').jpreLoader({
        preMainSection: '#main-preloader',
        prePerText: '.preloader-percentage-text',
        preBar: '.preloader-bar',
    });
</script>

</script>
<script>$('#career').addClass('active');</script>
<script>$('#career1').addClass('active');</script>

</body>
</html>