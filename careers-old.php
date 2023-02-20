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
	<link rel="stylesheet" href="css/social-share.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script type="text/javascript" src="js/form_validation.js"></script>
	
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
</head>
<body>
<?php include 'menu.php';?>

<div class="abt-ban-main head_mrgin">
	<!--<img src="images/carrer-top-ban.jpg" alt="" draggable="false" class="desk"/>-->
	<!--<img src="images/carrer-top-ban-mob.jpg" alt="" draggable="false" class="mob"/>-->
	<img src="<?=$desk?>" alt="<?=$desk_alt?>" title="<?=$desk_alt?>" draggable="false" class="desk"/>
	<img src="<?=$mob?>" alt="<?=$mob_alt?>" title="<?=$mob_alt?>" draggable="false" class="mob"/>
	<div class="abt-ban-txt">
		<div class="continer1">
			<!--<h2 class="cont-top">Let's BUILD<br>dreams together </h2>-->
			<h2 class="cont-top"><?=$cap1?><br><?=$cap2?><br><?=$cap3?></h2>
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

<section>
<ul class="ct-socials">
  <li>
    <a href="https://www.facebook.com/hiranandanifs/" target="_blank"><i class="fa fa-facebook"></i></a>
  </li>
  <li>
    <a href="https://www.linkedin.com/company/hiranandani-financial-services-limited/" target="_blank"><i class="fa fa-linkedin"></i></a>
  </li>
</section>


<section id="carrer-page">
	<div class="continer1">
		<div class="carrer_main">
			<div class="head_txt">
				<div class="txt">
					<h1><?=$title?></h1>
				</div>
			</div>
			<div class="carrer_sub">
				<div class="head_txt">
					<div class="txt">
						<?=$dis?>
					</div>
				</div>
			</div>
		</div>
	</div>
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