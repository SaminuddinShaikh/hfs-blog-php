<?php
/* ini_set('display_errors', 2);
 ini_set('display_startup_errors', 2);*/
include_once('db_configCMS.php');

$sql1 = "SELECT * FROM cms_excellence WHERE status='Active'";
$result1 = $con->query($sql1);

$sql2 = "SELECT * FROM cms_about_us";
$result2 = $con->query($sql2);

    
    while ($row2 = $result2->fetch_assoc()) {
        $page_title     = $row2["page_title"];
        $meta_keys      = $row2["meta_keywords"];
        $meta_desc      = $row2["meta_description"];
        $heading        = $row2["about_heading"];
        $img            = $row2["about_img"];
        $disc           = $row2["about_description"];
    }
    
$sql3 = "SELECT * FROM cms_all_banners WHERE page_name ='About Group'";
$result3 = $con->query($sql3);

    
    while ($row3 = $result3->fetch_assoc()) {
        $desk           = $row3["desk_banner"];
        $mob            = $row3["mobile_banner"];
        $desk_alt       = $row3["alt_tag"];
        $mob_alt         = $row3["alt_tag_mob"];
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
	<link rel="stylesheet" href="css/style.css">
 	<link rel="stylesheet" href="css/responsive.css" media="all">
	<link rel="stylesheet" href="css/social-share.css">
	    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144819872-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-144819872-1');
        </script>
    <!--End Global site tag (gtag.js) - Google Analytics -->
	<!--js-->
</head>
<body>
<?php include 'menu.php';?>

<section id="abotus_banner">
	<div class="abt-ban-main head_mrgin">
		<img src="<?=$desk?>" alt="<?=$desk_alt?>" title="<?=$desk_alt?>" draggable="false" class="desk"/>
		<img src="<?=$mob?>" alt="<?=$mob_alt?>" title="<?=$mob_alt?>" draggable="false" class="mob"/>
			<div class="abt-ban-txt">
				<div class="continer1">
					<!--<h2>A legacy trusted<br> since decades</h2> -->
					<h2 ><?=$cap1?><br><?=$cap2?><br><?=$cap3?></h2> 
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
				<li>Know Us ></li>
				<li><a href="about-group.php" class="active">About Group</a></li>
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
</section>


<section id="about-us">
	<div class="continer1">
		<div class="about-us-main">
			<div class="abt_group_txt">
				<div class="txt" id="Abot-hfsl">
					<!--<h1><span class="light">FROM THE </span>HOUSE OF HIRANANDANI</h1>-->
					<h1><?=$heading?></h1>
					  
				</div>
				<div class="about_us_group">
					<div class="abt_sec_group1" id="Abot-Vision">
						<div class="left">
							 <p><img src="<?=$img?>"></p>
						</div>
						<div class="right bor-none">
							<!--<p>HFS is backed by a leading conglomerate – House of Hiranandani whose core pillars stand as the guiding principles of HFS. Since inception, the group has upturned the way living spaces are designed and have transformed the ethos and aesthetics of real estate in India. HOH has created a niche for itself and is synonymous with innovation, quality construction, superior design and customer satisfaction. The aim has always been to integrate every family into a bigger, more inclusive community. 
							</p>-->
							<?=$disc?>
							<div class="abt_group_bt"><p><a href="https://www.houseofhiranandani.com/" target="_blank">Visit corporate website</a></p></div>
					</div>
					</div>
			 
				</div>
			</div>
			 
		</div>
	</div>
</section>
<section id="journey">
<div class="continer1">
<div class="journey-main">
	<div class="head_txt">
		<h1> JOURNEY OF EXCELLENCE <span class="light">SO FAR</span>  </h1>
		<ul class="wow fadeIn abt_ico_slid">
		<?php
		while($row = $result1->fetch_assoc()) {
			echo'<li>
				<img src="'.$row['image'].'" draggable="false" />
				<h6>'.$row['cap1'].'<br>'.$row['cap2'].'</h6>
			</li>';
			}
			
			?>
			
		</ul>
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
<script>$('#know').addClass('active');</script>
<script>$('#know1').addClass('active');</script>
<script>$('#about1').addClass('active');</script>
</body>
</html>