<?php
include_once('db_configCMS.php');

$sql = "SELECT * FROM cms_locations WHERE type='Corporate'";
$corp = $con->query($sql);
  while($row = $corp->fetch_assoc()) {
  	$corp_type 	= $row['type'];
  	$corp_addr 	= $row['address'];
  	$corp_email 	= $row['email'];
  	$corp_phone 	= $row['phone'];
  	$corp_map 	= $row['map'];
  }
  
 $sql1 = "SELECT * FROM cms_locations WHERE type='Registered'";
$reg = $con->query($sql1);
  while($row = $reg->fetch_assoc()) {
  	$reg_type 	= $row['type'];
  	$reg_addr 	= $row['address'];
  	$reg_email 	= $row['email'];
  	$reg_phone 	= $row['phone'];
  	$reg_map 	= $row['map'];
  }
  
$sql2 = "SELECT * FROM cms_locations WHERE type='' AND status='Active' order by city ASC";
$result2 = $con->query($sql2);

$sql = "SELECT DISTINCT state FROM cms_locations WHERE type='' OR type='branch' AND status='Active' order by state ASC";
$states = $con->query($sql);

$sql3 = "SELECT * FROM cms_all_banners WHERE page_name='Locate us' ";
$result3 = $con->query($sql3);


    while ($row3 = $result3->fetch_assoc()) {
        $page_title     = $row3["page_title"];
        $meta_keys      = $row3["meta_keywords"];
        $Meta_desc      = $row3["meta_description"];
        $desk_alt       = $row3["alt_tag"];
        $mob_alt        = $row3["alt_tag_mob"];
        $desk           = $row3["desk_banner"];
        $mob            = $row3["mobile_banner"];
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
	<meta name="description" content="Locate us, Branch locator, Hassle Free Business loans from HFS a new age NBFC. Quick Disbursal, Easy Documentation. No Guarantor Required. Low Interest Rate" />
	<meta name="keywords" content="Business Loans, Guarantor Free loans,Working Capital loans, Equipment and machinery loans,loans for buying commercial premises, Collateral Free Loans, HFS Business loans, HFS MSME loans, Small Business Loans from HFS" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link href="images/favicon.ico" rel="icon" type="image/ico" />
	<!--css-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="css/reboot.css">
	<link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="pre1/jpreloader.css" media="screen" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="menu/meanmenu.css" media="all" />
	<link rel="stylesheet" href="css/style.css">
 	<link rel="stylesheet" href="css/responsive.css" media="all">
	<!--js-->
	<script type="text/javascript">
		  function fetch_select(val)
		{
		 $.ajax({
		 type: 'Post',
		 url: 'fetch_locations.php',
		 data: {
		  get_option:val
		 },
		 success: function (response) {
		  document.getElementById("new_select").innerHTML=response;
		 }
		 });
		}
	</script>
	<link rel="canonical" href="https://www.hfs.in/locate-us.php"/>

		<!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144819872-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-144819872-1');
        </script>
    <!--End Global site tag (gtag.js) - Google Analytics -->
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
<?php include 'social.php';?>
<div class="abt-ban-main head_mrgin">
	<img src="<?=$desk?>" alt="<?=$desk_alt?>" title="<?=$desk_alt?>" draggable="false"  class="desk"/>
	<img src="<?=$mob?>" alt="<?=$mob_alt?>" title="<?=$mob_alt?>" draggable="false" class="mob"/>
	<div class="abt-ban-txt">
		<div class="continer1">
			<h2 class="cont-top"><?=$cap1?><br><?=$cap2?><br><?=$cap3?></h2>
		</div>
	</div>
</div>

<section id="bredcrum">
	<div class="continer1">
		<div class="bredcrum_main">
			<ul>
				<li><a href="index.php">Home</a> ></li>

				<li><a href="locate-us.php" class="active">Locate us</a></li>
			</ul>
		</div>
	</div>
</section>

<section id="contact-us-page">
	<div class="continer1">
		<div class="contact-us_main">
			<div class="head_txt">
				<div class="txt">
					<h1>locate us</h1>
				</div>
			</div>
			<div class="contact-us_sub">
				<div class="contact-us_main_right">
					<div class="txt">

						<div class="contact-us_main_left m_bottom">
							<!-- <form action="" method="post"> -->
							    <!-- Country dropdown -->

							    <!-- State dropdown -->

							     <select id="state" name="state">
								    <option value="">Select state</option>
								    <?php
								    if($states->num_rows > 0){
								        while($row = $states->fetch_assoc()){
								            echo '<option value="'.$row['state'].'">'.$row['state'].'</option>';
								        }
								    }else{
								        echo '<option value="">State not available</option>';
								    }
								    ?>
								</select>

							    <!-- City dropdown -->
							    <div id="citydisplay">
							    </div>
							    <select id="city" name="city" style='display:none;'>
							        <option value="">Select city</option>
							    </select>

							 <div  class="" id="response">
								
							</div>

							

						</div>
					</div>
				</div>

				<div class="contact-us_main_left head_txt">
					<div class="txt">
						<div class="contact-us_main_left m_bottom">
							<h2>Registered Office</h2>
							<h3 class="contact-us-add">Address</h3>
							<p><?=$reg_addr?></p>
                            <?php
                            if(empty($reg_email)){
                                
                            }else{
                                echo '<h3 class="contact-us-email">email <span><a href="mailto:'.$reg_email.'">'.$reg_email.'</a></span></h3>';
                            }
                            ?>
                            
                                                        <?php
                            if(empty($reg_email)){
                                
                            }else{
                                echo 'h3 class="contact-us-phone">phone  <a href="tel:'.$reg_phone.'"> '.$reg_phone.' </a></span> </h3>';
                            }
                            ?>
							<!--<h3 class="contact-us-email">email <span><a href="mailto:wecare@hfsl.in">wecare@hfsl.in</a></span></h3>-->
							<!--<h3 class="contact-us-phone">phone <span>+91 22 2576 3600 / 6868  </span> </h3>-->
							<h3 class="contact-us-map"><a href="<?=$reg_map?>" target="_blank">view google map</a></h3>
						</div>

						<div class="contact-us_main_left m_bottom">
							<h2>Corporate Office</h2>
							<h3 class="contact-us-add">Address</h3>
							<p><?=$corp_addr?></p>
                            <h3 class="contact-us-email">email <span><a href="mailto:<?=$corp_email?>"><?=$corp_email?></a></span></h3>
							<h3 class="contact-us-phone">phone <span> <a href="tel:<?=$corp_phone?>onclick="gtag('event', 'click', {event_category: 'phone call tracking', event_action: 'Click to Call',event_label:'+91-22-2576-3690'})"> +91 22 2576 3690 </a></span> </h3>
							<h3 class="contact-us-map"><a href="<?=$corp_map?>" target="_blank">view google map</a></h3>
							<!--<h3 class="contact-us-email">email <span><a href="mailto:wecare@hfsl.in"onclick="gtag('event', 'click', {event_category: 'email click tracking', event_action: 'Click',event_label:'wecare-hfs'})">wecare@hfsl.in</a></span></h3>-->
							<!--<h3 class="contact-us-phone">phone <span>+91 22 2576 3623 </span> </h3>-->
							<!--<h3 class="contact-us-map"><a href="https://goo.gl/maps/bAuVcCKQoXF41xba9" target="_blank">view google map</a></h3>-->
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
<script>
    $('#state').on('change', function () {
    $("#city").css('display', (this.value !=='' ) ? 'block' : 'none');
});
</script>
<script>
	 $('#state').on('change', function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                    // $('#citydisplay').html('<select id="city" name="city"><option value="">Select city</option></select>');
                    $('#response').html('<span style="display:none;"></span>');
                }
            });
        }else{
            $('#city').html('<option value="">Select state first</option>');
            $('#response').html('<span style="display:none;"></span>');
        }
    });

	$('#city').on('change', function(){
        var cityID = $(this).val();
        if(cityID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'city_id='+cityID,
                success:function(html){
                    $('#response').html(html);
                }
            });
        }else{
            $('#city').html('<option value="">Select City first</option>');
            $('#response').html('');
        }
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
<script>$('#contact').addClass('active');</script>
<script>$('#contact1').addClass('active');</script>
</body>
</html>