<?php
include_once('db_configCMS.php');

$sql3 = "SELECT * FROM cms_disclaimer";
$result3 = $con->query($sql3);

    
    while ($row3 = $result3->fetch_assoc()) {
        $page_title     = $row3["page_title"];
        $meta_keys      = $row3["meta_keywords"];
        $meta_desc      = $row3["meta_description"];
        
        $desk_alt       = $row3["alt_tag"];
        $mob_alt        = $row3["alt_tag_mob"];
        
        $desk            = $row3["desk_banner"];
        $mob             = $row3["mobile_banner"];
        
        $description     = $row3["description"];
        
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$page_title?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<meta name="keywords" content="<?=$meta_desc?>" />
	<meta name="description" content="<?=$meta_keys?>" />
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
	<link rel="canonical" href="https://www.hfs.in/desclaimer.php"/>

	<!--js-->
	<!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144819872-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-144819872-1');
        </script>
    <!--End Global site tag (gtag.js) - Google Analytics -->
</head>
<body>
<?php include 'menu.php';?>
<?php include 'social.php';?>
<div class="abt-ban-main head_mrgin">
	<img src="<?=$desk?>" alt="" draggable="false" class="desk"/>
	<img src="<?=$mob?>" alt="" draggable="false" class="mob"/>
	<!--<div class="abt-ban-txt">
		<div class="continer1">
			<h2><span>What you<br> need to know?</span></h2>
			 
		</div>
	</div>-->
</div>

<section id="bredcrum">
	<div class="continer1">
		<div class="bredcrum_main">
			<ul>
				<li><a href="index.php">Home</a> ></li>
				<li><a href="desclaimer.php" class="active">Disclaimer</a></li>
			</ul>
		</div>
	</div>
</section>

<section id="descailmer">
	<div class="continer1">
		<div class="descailmer_main">
			<div class="head_txt">
				<div class="txt">
					<!--<h1>Disclaimer</h1>-->
				</div>
			</div>
			<div class="descailmer_sub_txt">
				<?=$description?>
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
<script src="pre1/sPreloader.js"></script>
<script type="text/javascript">
    $('body').jpreLoader({
        preMainSection: '#main-preloader',
        prePerText: '.preloader-percentage-text',
        preBar: '.preloader-bar',
    });
</script>
<script>$('#disclaimer').addClass('active');</script>
</body>
</html>