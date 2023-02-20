<?php
$pid=$_REQUEST['page'];
if(empty($pid)){
$pgid='';
}else {$pgid=$pid;}
ini_set('display_errors', 2);
 ini_set('display_startup_errors', 2);
include_once('db_configCMS.php');

// $sql1 = "SELECT * FROM cms_excellence WHERE status='Active'";
// $result1 = $con->query($sql1);

$sql2 = "SELECT * FROM cms_toolus_page WHERE toolp_id=$pid";
$result2 = $con->query($sql2);


    while ($row2 = $result2->fetch_assoc()) {
        $page_title       = $row2["page_title"];
        $page_name        = $row2["page_name"];
        $meta_keywords        = $row2["meta_keywords"];
        $meta_description       = $row2["meta_description"];
        $desk_banner        = $row2["desk_banner"];
        $mobile_banner        = $row2["mobile_banner"];
        $alt1        = $row2["alt_tag"];
        $alt2        = $row2["alt_tag_mob"];
        $cap1        = $row2["cap_1"];
        $cap2        = $row2["cap_2"];
        $heading        = $row2["know_heading"];
        $img            = $row2["know_img"];
        $disc           = $row2["know_description"];
    }


?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$page_title?></title>
	<meta name="description" content="<?=$meta_description?>" />
	<meta name="keywords" content="<?=$meta_keywords?>" >
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
	<link rel="stylesheet" href="css/style.css">
 	<link rel="stylesheet" href="css/responsive.css" media="all">

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

<section id="bredcrum">
	<div class="continer1">
		<div class="bredcrum_main">
			<ul>
				<li><a href="index.php">Home</a> ></li>
				<li>Tools For You ></li>
				<li><a href="javascript:void(0);" class="active"><?=$page_name?></a></li>
			</ul>
		</div>
	</div>
</section>

<section id="about-us">
	<div class="continer1">
		<div class="about_us_group">
					<div class="abt_sec_group1" id="Abot-Vision">
						<div class="left">
							 <p><img src="<?=$img?>"></p>
						</div>
						<div class="right bor-none">
							<!--<p>HFS is backed by a leading conglomerate – House of Hiranandani whose core pillars stand as the guiding principles of HFS. Since inception, the group has upturned the way living spaces are designed and have transformed the ethos and aesthetics of real estate in India. HOH has created a niche for itself and is synonymous with innovation, quality construction, superior design and customer satisfaction. The aim has always been to integrate every family into a bigger, more inclusive community.
							</p>-->
							<?=$disc?>
							<!-- <div class="abt_group_bt"><p><a href="https://www.houseofhiranandani.com/" target="_blank">Visit corporate website</a></p></div> -->
					</div>
					</div>

				</div>
			</div>

		</div>
	</div>
</section>


<?php include 'footer_menu.php';?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
<script>$('#page_toolus_ft<?=$pid?>').addClass('active');</script>
</body>
</html>