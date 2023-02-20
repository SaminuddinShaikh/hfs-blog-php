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
	<link rel="stylesheet" href="css/leadersip.css" media="all">
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
</head>
<body>

<?php include 'menu.php';?>
<?php include 'social.php';?>
<section id="abotusbanner">
	<div class="abt-ban-main head_mrgin">
		<img src="images/People.jpg" alt="" draggable="false" class="desk">
		<img src="images/People-mob.jpg" alt="" draggable="false" class="mob">
			<div class="abt-ban-txt">
				<div class="continer1">
					<h2>Management Team</h2>
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
				<li>Our Story ></li>
				<li><a href="hfs-team.php" class="active">HFS & Team</a></li>
			</ul>
		</div>
	</div>
</section>
<section class="text-center"id="about-us">							
				<div class="continer1">
					<div class="about-us-main">
													
<h2 style="font-size:32px;">Meet Our Senior Management</h2><br />
<p>HFS brings together a team of professionals and industry experts who have immense knowledge about the sector. We want to combine diverse experiences with individual expertise to help you with the right solutions. We work towards a common goal - to make credit accessible to all segments of the society.  </p>
<br />

<div class="row">
							<div class="col-sm-4">
							</div>
							<div class="col-sm-4">
							<a onclick="document.getElementById('id01').style.display='block'">	
							<img style="cursor: pointer;" class="leadership" src="images/CXO_-_Uday.png" />
								
							<h5 style="font-size:15px; cursor: pointer;">UDAY SUVARNA</h5></a>							    	
							<h6 style="font-size:12px;">CHIEF EXECUTIVE OFFICER</h6>
								<br />
													
							<div id="id01" class="w3-modal" style="display: none;">
								<div class="w3-modal-content">
									<div class="w3-container">
											
									<span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">X</span>
									<img class="float-left" style="float: left!important;width: 35%;margin-right: 4%;" src="images/CXO_-_Uday.png"/>
								<p>
								   Mr. Uday Suvarna is the Chief Executive Officer at Hiranandani Financial Services.<br>
								   <br>
								   A seasoned professional with a proven track record in building scalable and 
								   profitable businesses,he will be responsible for laying down the vision along with 
								   creating both short and long-term strategic framework and ensure its execution
								   towards achievement of organisation goals.<br>
								   <br>
								   Uday has over two decades of experience in the retail and MSME lending domain. He
								   has been associated with leading retail finance lenders like IndusInd Bank, HDFC
								   Bank and GE Money. Prior to joining HFS he served as the Executive Vice President of 
								   IndusInd Bank.<br>
								   <br>
                                   Uday holds a Masters in Management Studies and Bachelor in Science from
								   Mumbai University.
									</p>
									</div>
									</div>
									</div>
									</div>
							<div class="col-sm-4">
							</div>													
							</div>												
								<div class="row">						
									<div class="col-md-4">
										<a  onclick="document.getElementById('id02').style.display='block'">
									    	<img style="cursor: pointer;" class="leadership"src="images/CXO_-_Kartik.png"/>
								
											<h5 style="font-size:15px; cursor: pointer;">KARTIK NAGDA</h5></a>
											<h6 style="font-size:12px;">CHIEF BUSINESS OFFICER</h6>
											<br>
											<div id="id02" class="w3-modal" style="display: none;">
								<div class="w3-modal-content">
									<div class="w3-container">
									<span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-display-topright">X</span>
									<img class="float-left" style="float: left!important;width: 35%;margin-right: 4%;" src="images/CXO_-_Kartik.png"/>
								<p>
								   Mr. Kartik Nagda is the Chief Business Officer at Hiranandani Financial Services.
								   He has 20 years of rich experience in the Retail Lending business.<br>
								   <br>
								   As the Chief Business Officer, he is responsible for driving the overall business
								   growth of the company and leads the Retail Sales, Product Development &amp;
								   Marketing functions.<br>
								   <br>
								   Kartik was earlier associated with organizations like HDFC Bank where he served in
								   capacities of Head of their Mortgage Business as well as the Emerging Enterprise
								   Group. Prior to that he was associated with GE Money &amp; Navneet Publications.<br>
								   <br>
                                   Kartik holds a Post graduate Degree from Symbiosis Institute of International 
                                   Business, Pune.
								</p>
																		
						</div>
						</div>
						</div>
						</div>
																									
						<div class="col-md-4">
						<a  onclick="document.getElementById('id03').style.display='block'">
						<img style="cursor: pointer;"class="leadership" src="images/CXO_-_Vivek.png"/>
						
						<h5 style="font-size:15px; cursor: pointer;">VIVEKANAND RAMACHANDRAN</h5></a>
						<h6 style="font-size:12px;">CHIEF FINANCIAL OFFICER</h6><br>
							<div id="id03" class="w3-modal">
																		<div class="w3-modal-content">
																		<div class="w3-container">
									<span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-display-topright">X</span>
									<img class="float-left" style="float: left!important;width: 35%;margin-right: 4%;" src="images/CXO_-_Vivek.png"/>
								<p>
								   Mr. Vivekanand Ramachandran is the Chief Financial Officer at Hiranandani
								   Financial Services. He has two decades of experience in field of Finance, Accounts
								   and Treasury Services.<br />
								   <br />
								   Vivekanand is Chartered Accountant, Company Secretary &amp; Cost Accountant by
								   qualification and leads the Finance &amp; Accounts, Financial Planning &amp; Analysis and
								   Treasury functions.<br />
								   <br />
								   Prior to joining HFS, Vivekanand worked with NeoGrowth Credit Ltd, and was also
								   associated with notable brands like L&amp;T Financial Services, L&amp;T Power, DSP Merrill
								   Lynch, HPCL &amp; NSE.
								   
								</p>
																		
														</div>
														</div>					
														</div>		
						</div>		
																
														
															
						
							<div class="col-md-4">
								<a  onclick="document.getElementById('id04').style.display='block'">
								<img style="cursor: pointer;" class="leadership" src="images/CXO_-_Dhiraj.png"/>
								<h5 style="font-size:15px; cursor: pointer;">DHEERAJ MITTAL</h5></a>
								<h6 style="font-size:12px;"> CHIEF OPERATING OFFICER</h6><br>
								<div id="id04" class="w3-modal">
									<div class="w3-modal-content">
										<div class="w3-container">
									<span onclick="document.getElementById('id04').style.display='none'" class="w3-button w3-display-topright">X</span>
									<img class="float-left" style="float: left!important;width: 35%;margin-right: 4%;" src="images/CXO_-_Dhiraj.png"/>
								<p>
								   Mr. Dheeraj Mittal is the Chief Operating Officer at Hiranandani Financial
								   Services.  He has over 20 years of experience in diverse areas of Credit Risk, Retail
								   Banking &amp; Operations, and Technology &amp; Process Management.<br>
								   <br>
								   As COO at HFS, Dheeraj is responsible for managing the Central &amp; Branch
								   Operations, Information Technology and Administration functions.<br>
								   <br>
								   Prior to HFS he has been associated with organisations like Reliance Money, IDFC
								   First Bank, HDFC Bank &amp; GE money in varying capacities.<br>
								   <br>
								   Dheeraj has his Masters in Finance Administration as well as Masters in Commerce
								   from DAVV Indore.
								 </p>
								 </div>
								 </div>
								 </div>
							 </div>
													
								<div class="col-md-4">
								<a  onclick="document.getElementById('id05').style.display='block'">
								<img style="cursor: pointer;" class="leadership" src="images/CXO_-_Mahesh.png"/>
								<h5 style="font-size:15px; cursor: pointer;">MANISH ODEKA</h5></a>
								<h6 style="font-size:12px;">CHIEF RISK OFFICER</h6><br>
								<div id="id05" class="w3-modal">
									<div class="w3-modal-content">	
										<div class="w3-container">
									<span onclick="document.getElementById('id05').style.display='none'" class="w3-button w3-display-topright">X</span>
									<img class="float-left" style="float: left!important;width: 35%;margin-right: 4%;" src="images/CXO_-_Mahesh.png"/>
								<p>
								   Mr. Manish Odeka is the Chief Risk Officer at Hiranandani Financial Service, he comes
								   along with 17 years of retail banking experience across multiple disciplines of Risk,
								   Credit, Collections, Operations, Product &amp; Strategy and Financial Planning.<br>
								   <br />
								   As CRO, Manish will drive the Enterprise Risk Management and will be responsible for
								   laying down and executing the entire risk policy framework, credit underwriting &amp;
								   policy, operational risk, fraud control, collateral management, information security
								   and debt service management.<br>
								   <br>
								   Prior to joining HFS, Manish has served in leadership roles with various large NBFCs
								   such as Reliance Money &amp; Fullerton India Credit along with an initial stint at ICICI
								   Bank.<br>
								   <br>
								   Manish is a Chartered Accountant and holds an Executive MBA from the Emeritus
								   Institute, Singapore. 
								   
							</p>
								</div>
								</div>
								</div>
								</div>
						</div>
					</div>
				</div>
						</section>
<br /><br />
<?php include 'footer_menu.php';?>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

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