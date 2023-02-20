<?php
include_once('db_configCMS.php');

$sql = "SELECT * FROM cms_locations ORDER BY id ASC LIMIT 2";
$result = $con->query($sql);
 // while($row = $result->fetch_assoc()) {
 // 	$type 	= $row['type'];
 // 	$addr 	= $row['address'];
 // 	$email 	= $row['email'];
 // 	$phone 	= $row['phone'];
 // 	$map 	= $row['map'];
 // }
$sql2 = "SELECT * FROM cms_locations WHERE type='' AND status='Active' ";
$result2 = $con->query($sql2);

$sql3 = "SELECT * FROM cms_all_banners WHERE page_name='Locate us' ";
$result3 = $con->query($sql3);

    
    while ($row3 = $result3->fetch_assoc()) {
        $desk           = $row3["desk_banner"];
        $mob            = $row3["mobile_banner"];
        $cap1           = $row3["cap_1"];
        $cap2           = $row3["cap_2"];
        $cap3           = $row3["cap_3"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Branch locator, contact us|Hiranandani Financial Services Pvt. Ltd.</title>
	<meta name="description" content="Contact details and address of HFSL branches, corporate office and registered office." />
	<meta name="keywords" content="HFSL branches, contact number of HFSL, branch in Mumbai, Mehsana, surat, and Ahmedabad." >
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
</head>
<body>

<?php include 'menu.php';?>
<div class="abt-ban-main head_mrgin">
	<img src="<?=$desk?>" alt="" draggable="false" class="desk"/>
	<img src="<?=$mob?>" alt="" draggable="false" class="mob"/>
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
							<select id="size_select" onchange="fetch_select(this.value);">
								<option  >Select Branch  </option>
								<?php while($row2 = $result2->fetch_assoc()) {
								echo '<option >'.$row2['name'].'  </option>';
						}
							?>
						</select>
						<div id="new_select">
						
						</div>
							<!-- <div id="Mehsana-Branch" class="size_chart">
								<h3 class="contact-us-add">Address</h3>
								<p>309, 3<sup>rd</sup> Floor, Rajkamal City Mall, Rajkamal Compound, Ahmedabad Palanpur Highway, Mehsana 384002, Gujarat </p>
	
								<h3 class="contact-us-email">email <span><a href="mailto:wecare@hfsl.in">wecare@hfsl.in</a></span></h3>
								<h3 class="contact-us-phone">phone <span>+91 22 2576 3623 </span> </h3>
								<h3 class="contact-us-map"><a href="https://goo.gl/maps/4JHnY6C3e3y" target="_blank">view google map</a></h3>
							</div>
							
							<div id="Surat-Branch" class="size_chart">
								<h3 class="contact-us-add">Address</h3>
								<p>Shop No. 104, Valentino, TP – 6, FP- 336, Moje-Khatodra, Surat-395002, Gujarat</p>
	
								<h3 class="contact-us-email">email <span><a href="mailto:wecare@hfsl.in">wecare@hfsl.in</a></span></h3>
								<h3 class="contact-us-phone">phone <span>+91 22 2576 3623  </span> </h3>
								<h3 class="contact-us-map"><a href="https://goo.gl/maps/4JHnY6C3e3y" target="_blank">view google map</a></h3>
							</div>
							
							<div id="Ahmedabad-Branch" class="size_chart">
								<h3 class="contact-us-add">Address</h3>
								<p>3rd Floor, Chandan House, Opposite Abhijeet-3, Near Mithakhali Circle, Ellis Bridge, Ahmedabad-380006, Gujarat </p>
	
								<h3 class="contact-us-email">email <span><a href="mailto:wecare@hfsl.in">wecare@hfsl.in</a></span></h3>
								<h3 class="contact-us-phone">phone <span>+91 22 2576 3623  </span> </h3>
								<h3 class="contact-us-map"><a href="https://goo.gl/maps/4JHnY6C3e3y" target="_blank">view google map</a></h3>
							</div> -->
						</div>
					</div>
				</div>
				
				<div class="contact-us_main_left head_txt">
					<div class="txt">
						<?php while($row = $result->fetch_assoc()) {
					 	$type 	= $row['type'];
					 	$addr 	= $row['address'];
					 	$email 	= $row['email'];
					 	$phone 	= $row['phone'];
					 	$map 	= $row['map'];
					 	if (empty($phone)) {
					 		$mob ="";
					 	}
					 	else{
					 		$mob = '<h3 class="contact-us-phone">phone <span>'.$phone.'  </span> </h3>';
					 	}
					 	if (empty($email)) {
					 		$eid ="";
					 	}
					 	else{
					 		$eid = '<h3 class="contact-us-email">Email <span>'.$email.'  </span> </h3>';
					 	}
						echo '<div class="contact-us_main_left m_bottom">
							<h2>'.$type.' Office</h2>
							<h3 class="contact-us-add">Address</h3>
							<p>'.$addr.'</p>
							'.$eid.'
							'.$mob.'
							<!--<h3 class="contact-us-email">email <span><a href="mailto:'.$email.'">'.$email.'</a></span></h3>
							<h3 class="contact-us-phone">phone <span>'.$mob.'  </span> </h3>-->
							<h3 class="contact-us-map"><a href="'.$map.'" target="_blank">view google map</a></h3>
						</div>';
						} ?>

						<!-- 
							<div class="contact-us_main_left m_bottom">
							<h2>Registered Office</h2>
							<h3 class="contact-us-add">Address</h3>
							<p>Hiranandani Financial Services Pvt. Ltd. 514, Dalamal Towers, 211, FPJ Marg, Nariman Point Mumbai -400021.</p>

							<!--<h3 class="contact-us-email">email <span><a href="mailto:wecare@hfsl.in">wecare@hfsl.in</a></span></h3>
							<h3 class="contact-us-phone">phone <span>+91 22 2576 3600 / 6868  </span> </h3>-->
							<!--<h3 class="contact-us-map"><a href="https://goo.gl/maps/UggYRTyLHt42" target="_blank">view google map</a></h3>
						</div>-->
						<!--<div class="contact-us_main_left m_bottom">
							<h2>Corporate Office</h2>
							<h3 class="contact-us-add">Address</h3>
							<p>Olympia, Central Avenue, Hiranandani Gardens, Powai, Mumbai-400076.</p>
	
							<h3 class="contact-us-email">email <span><a href="mailto:wecare@hfsl.in">wecare@hfsl.in</a></span></h3>
							<h3 class="contact-us-phone">phone <span>+91 22 2576 3623 </span> </h3>
							<h3 class="contact-us-map"><a href="https://goo.gl/maps/4JHnY6C3e3y" target="_blank">view google map</a></h3>
						</div> -->
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
$(document).ready(function(){

  //hides dropdown content
  // $(".size_chart").hide();
  
  // //unhides first option content
  // $("#Mehsana").hide();
  
  // //listen to dropdown for change
  // $("#size_select").change(function(){
  //   //rehide content on change
  //   $('.size_chart').hide();
  //   //unhides current item
  //   $('#'+$(this).val()).show();
  // });
  // function fetch_select(val)
		// {
		//  $.ajax({
		//  type: 'Post',
		//  url: 'fetch_locations.php',
		//  data: {
		//   get_option:val
		//  },
		//  success: function (response) {
		//   document.getElementById("new_select").innerHTML=response; 
		//  }
		//  });
		// }

  
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
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>$('#contact1').addClass('active');</script>

</body>
</html>