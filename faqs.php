<?php
include_once('db_configCMS.php');

$sql = "SELECT faq_id, question, answer FROM faqs WHERE status='Active'";
$result = $con->query($sql);

$sql3 = "SELECT * FROM cms_all_banners WHERE page_name ='FAQ'";
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
    <title><?=$page_title?></title>
	<meta name="description" content="<?=$meta_desc?>" />
	<meta name="keywords" content="<?=$meta_keys?>" >
	<meta name="keywords" content="Frequently asked questions for msmes,Check eligibility for msme loan, interest rate on msme loans." >
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
	<link href="css/according.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/style.css">
 	<link rel="stylesheet" href="css/responsive.css" media="all">
<link rel="canonical" href="https://www.hfs.in/faqs.php"/>

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
</head>
<body>
<?php include 'menu.php';?>
<?php include 'social.php';?>
<div id="menu"></div>
<div class="abt-ban-main head_mrgin">
	<!--<img src="images/faqs-top-ban.jpg"   class="desk" alt="" draggable="false">-->
	<!--<img src="images/faqs-top-ban-mob.jpg" alt="" class="mob" draggable="false"/>-->
	<img src="<?=$desk?>" alt="<?=$desk_alt?>" title="<?=$desk_alt?>" draggable="false" class="desk"/>
	<img src="<?=$mob?>" alt="<?=$mob_alt?>" title="<?=$mob_alt?>" draggable="false" class="mob"/>
	<div class="abt-ban-txt">
		<div class="continer1">
			 <h2 ><span><?=$cap1?><br><?=$cap2?><br><?=$cap3?></span></h2> 
		</div>
	</div>
</div>

<section id="bredcrum" class="faqbg">
	<div class="continer1">
		<div class="bredcrum_main">
			<ul>
				<li><a href="index.php">Home</a> ></li>
				<li>Tools For You ></li>
				<li><a href="faqs.php" class="active">FAQs</a></li>
			</ul>
		</div>
	</div>
</section>

<section id="faqs_page">
	<div class="continer1">
		<div class="faqs_main">
			<div class="head_txt">
				<div class="txt">
					<h1>FAQ<span style="text-transform:lowercase;">S</span></h1>
				</div>
			</div>
		</div>
		<!--<div id="menu123"></div>-->
		<div class="faqs_sub">
			<div class="faqs_main_left">
			<?php
			    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="accordion" id="section1">&bull; ' .$row['question'].'<span></span></div>
								<div class="containers">
									<div class="content jobcare">
										<p>'.$row['answer'].'</p>
									</div>
								</div>';
				                    }
				                } else {
				                    echo "";
				                }
            ?>
				
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
<script type="text/javascript" src="js/highlight.pack.js"></script> 
<script type="text/javascript" src="js/jquery.accordion.js"></script> 
<script type="text/javascript">
   $(document).ready(function() {

        //syntax highlighter
        hljs.tabReplace = '    ';
        hljs.initHighlightingOnLoad();

        $.fn.slideFadeToggle = function(speed, easing, callback) {
            return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
        };

        //accordion
        $('.accordion').accordion({
            defaultOpen: 'section1',
            cookieName: 'accordion_nav',
            speed: 'slow',
            animateOpen: function (elem, opts) { //replace the standard slideUp with custom function
                elem.next().stop(true, true).slideFadeToggle(opts.speed);
            },
            animateClose: function (elem, opts) { //replace the standard slideDown with custom function
                elem.next().stop(true, true).slideFadeToggle(opts.speed);
            }
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
<script>$('#faq1').addClass('active');</script>
</body>
</html>