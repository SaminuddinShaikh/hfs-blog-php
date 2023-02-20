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
    <title>Our Values at Hiranandani Financial Services</title>
	<meta name="description" content="Read here to know about the Values we stand by at Hiranandani Financial Services which make us one of the most trusted companies to offer business loans online." />
	<meta name="keywords" content="business loans online," >
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link href="images/favicon.ico" rel="icon" type="image/ico" />
	<!--css-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
    
	<link rel="stylesheet" href="css/reboot.css">
	<link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="pre1/jpreloader.css" media="screen" rel="stylesheet" type="text/css" />
 	<link rel="stylesheet" href="css/animated.min.css"/>
	<link rel="stylesheet" href="menu/meanmenu.css" media="all" />
	<link rel="stylesheet" href="css/style.css">
	<!--<link rel="stylesheet" href="css/values.css"> -->
 	<link rel="stylesheet" href="css/responsive.css" media="all">
 	    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="css/reboot.css">
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="https://hfs-website-prd.azurewebsites.net/pre1/jpreloader.css" media="screen" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/animated.min.css" />
    <link rel="stylesheet" href="css/enquiry.css" type="text/css" media="all">
    <link rel="stylesheet" href="menu/meanmenu.css" media="all" />
<link rel="canonical" href="https://www.hfs.in/HFS-Values.php"/>

	 <link rel="stylesheet" href="css/options.css">
    <link rel="stylesheet" href="css/responsive.css" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!--js-->
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
	<!--js-->
	
<style>
    
    
.arrow {
text-align: left;
padding-left: 35px;
/*background: url(betatesting/Website/arrow.png) no-repeat top left;*/
font-size: 22px;
background-size: 26px;
background-position: 0 5px;
}

@media only screen  and (min-width:2000px) {

.arrow {
text-align: left;
padding-left: 55px;
/*background: url(betatesting/Website/arrow.png) no-repeat top left;*/
font-size: 34px!important;
background-size: 32px!important;
background-position: 0 5px;
}

    
}
</style>
</head>
<body>

<?php include 'menu.php';?>
<?php include 'social.php';?>
    <section id="abotusbanner">
       
            <div class="abt-ban-main head_mrgin">
               
                <!--<img src="images/team-us-top.jpg" alt="" draggable="false" class="desk"/>-->
                <!--<img src="images/team-us-top-mob.jpg" alt="" draggable="false" class="mob"/>-->
                <img src="/images/values/Values_Top_Banner.jpg" alt="values-banner" title="" draggable="false" class="desk" />
                
                <img src="/images/values/ValuesTopBanner-Mobile.jpg" alt="values-banner-mob" title="" draggable="false" class="mob" />
                
             <!--    <div class="mob_overlay">  </div>
                <div class="values_banner_textdiv">
                    
                        <p id ="Values_Banner_Text"><span>To achieve the most of <br> our potential, we are guided<br> by <span style="color:#f7ac17;font-weight:500px">values</span> that make our journey, <br>full of purpose and perseverance. </span></p>
                       
</div> -->
                
            <!--    <div class="abt-ban-txt">
                      <div class="continer1">
                        <p id ="Values_Banner_Text"><span>To achieve the most of <br> our potential, we are guided<br> by <span style="color:#f7ac17;font-weight:500px">values</span> that make our journey, <br>full of purpose and perseverance. </span></p>
                       
                  
               </div> 
            </div> -->
        </div>
                    
    </div>
                     
                    
                    
    </section>

<section id="bredcrum">
	<div class="continer1">
		<div class="bredcrum_main">
			<ul>
				<li><a href="index.php">Home</a> ></li>
				<li>Our Story ></li>
				<li><a href="HFS-Values.php" class="active">Our Values</a></li>
			</ul>
		</div>
	</div>
</section>

<section id="about-us">
    <!---Laptop and Desktop Version Code -->    
<table class ="values_table">

<tr class="values_odd">
		<td class="image_column_odd"> <img src="/images/values/1new.jpg"  />  </td>
<td class="text_column_odd1"><p>
Our intent is to keep people at the centre of everything. 
Win them over by delightful and unique customer experiences, 
through every interaction across various touch points.</p></td>
	</tr>
<tr style="border-bottom:1px solid #d9dada">
    <td colspan="100%"></td>
  </tr>
<tr class="values_odd">
		<td class="image_column_odd"> <img src="/images/values/2new.jpg"  />  </td>
<td class="text_column_odd1"><p>Fostering collaborative effort helps every team member conceive unique and innovative solutions. 
Working together ensures a win for both; the customer and for us, every single time.</p></td>
</tr>
<tr style="border-bottom:1px solid #d9dada">
    <td colspan="100%"></td>
   <tr class="values_odd">
		<td class="image_column_odd"><img src="/images/values/3new.jpg"  />  </td>
			<td class="text_column_odd1"><p>
Trust is the cornerstone in any relationship. 
We endeavour to build this through every interaction we have with our stakeholders, 
every single time, building and sustaining our brand’s credibility.</p></td>
</tr>
<tr style="border-bottom:1px solid #d9dada">
    <td colspan="100%"></td>
   <tr class="values_odd">
		<td class="image_column_odd"> <img src="/images/values/4new.jpg"  />  </td>
   <td class="text_column_odd1"><p>
Each day presents us with opportunities to learn, evolve and improvise ourselves as an organisation. 
This enables us to uniquely engage and offer solutions to every new customer at their point of need.</p></td>
		</tr>
<tr class="values_odd">
    <td colspan="100%"></td>
    </tr>
</table>
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
<script>$('#values1').addClass('active');</script>
</body>
</html>