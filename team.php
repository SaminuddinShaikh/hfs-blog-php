<?php
/* ini_set('display_errors', 2);
 ini_set('display_startup_errors', 2);*/
include_once('db_configCMS.php');


$sql1 = "SELECT * FROM cms_hfsl_team WHERE status='Active'";
$result1 = $con->query($sql1);

$sql2 = "SELECT * FROM cms_hfs_about_team";
$result2 = $con->query($sql2);

    
    while ($row2 = $result2->fetch_assoc()) {
        $page_title     = $row2["page_title"];
        $meta_keys      = $row2["meta_keywords"];
        $meta_desc      = $row2["meta_description"];
        
        $desc            = $row2["description"];
        $heading    = $row2["heading"];
        
        $icon1          = $row2["icon1"];
        $name1          = $row2["name1"];
        $desc1          = $row2["description1"];
        
        $icon2          = $row2["icon2"];
        $name2          = $row2["name2"];
        $desc2          = $row2["description2"];
        
        $icon3          = $row2["icon3"];
        $name3          = $row2["name3"];
        $desc3          = $row2["description3"];
    }
    
$sql3 = "SELECT * FROM cms_all_banners WHERE page_name ='HFS Team'";
$result3 = $con->query($sql3);

    
    while ($row3 = $result3->fetch_assoc()) {
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

<section id="abotusbanner">
	<div class="abt-ban-main head_mrgin">
		<!--<img src="images/team-us-top.jpg" alt="" draggable="false" class="desk"/>-->
		<!--<img src="images/team-us-top-mob.jpg" alt="" draggable="false" class="mob"/>-->
		<img src="<?=$desk?>"  alt="<?=$desk_alt?>" title="<?=$desk_alt?>"draggable="false" class="desk"/>
		<img src="<?=$mob?>" alt="<?=$mob_alt?>" title="<?=$mob_alt?>" draggable="false" class="mob"/>
			<div class="abt-ban-txt">
				<div class="continer1">
					<!--<h2><span>Financial services<br> personalized</span></h2>-->
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
				<li><a href="team.php" class="active">Team</a></li>
			</ul>
		</div>
	</div>
</section>

<section id="about-us">
	<div class="continer1">
	
<div class="abt-sec3 wow fadeIn" id="Abot-hoh">
						<div class="left">
							<ul>
							<h2>A dedicated team  on a mission to empower MSME</h2>
							</ul>
						</div>
						<div class="right">
						<p> </p>     
						</div>
						<div class="right">
						    <p><?=$desc3?></p>
							<!--<p>HFS brings together a team of professionals and industry experts who have immense knowledge about the sector.  We want to combine diverse experiences with individual expertise to help you with the right solutions. We work towards a common goal - to make credit accessible to all segments of the society.</p>-->
							<div class="manegment_person">
								<ul class="wow fadeIn">
									<?php 
									 if ($result1->num_rows > 0) {
                                        // output data of each row
                                        while($row1 = $result1->fetch_assoc()) {
        									echo '<li class="br-right">
        										<div class="img">	
        											
        											<img src="'.$row1['image'].'" alt="'.$row1['name'].'" title="'.$row1['name'].'" draggable="false"/>
        										</div>
        										<div class="img-txt">
        											<h5>'.$row1['name'].'<br><span class="smallft">('.$row1['position'].')</span></h5>
        											'.$row1['description'].'
        											
        										</div>
        									</li>';
                                        }
    				                } else {
    				                    echo "";
    				                }
                                ?>
								</ul>
							</div>
						</div>
					</div>
					

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
<script>$('#team1').addClass('active');</script>
</body>
</html>