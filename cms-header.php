<?php 
include 'db_configCMS.php';
$first_part = basename($_SERVER['PHP_SELF']);
$pageUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//echo $pageUrl;
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript" src="js/form_validation.js"></script>
<!-- Preloader Start -->
<div class="main-preloader semi-dark-background" id="main-preloader">
    <div class="main-preloader-inner">
        <h1 class="preloader-percentage"></h1>
        <div style="width: 100%; margin-bottom: 15px;"><img alt="" src="images/logo-loader52.gif" /></div> 
        <div class="preloader-bar-outer">
            <div class="preloader-bar"></div>
            <!-- Percentage Precess Bar -->
        </div>
    </div>
</div>
<!-- Preloader Start -->
<div id="wrapper">
<header>
	<div class="header_top">
		<div class="continer1">
			<div class="head_topmain">
				<div class="logo"><a href="index.php"><img src="images/logo.png" alt="HFCL LOGO" draggable="false"/></a></div>
				<div class="logo1"><a href="index.php"><img src="images/logo-mob.png" alt="HFCL LOGO" draggable="false"/></a></div>
				<div class="head_right">
					<div class="call">
						<p><i class="fa fa-phone" aria-hidden="true"></i><a href="callto:1800-12-1234"></a>1800 121 234</p>
						<div id="google_translate_element"></div>
					</div>
					
					
					<div class="header_bottom">
		 
			<div class="head_bottom_main">
				<nav>
					<ul>
						<li> <a href="index.php" class="<?php if ($first_part=="index.php") {echo "active"; } else  {echo "noactive";}?>"><span class="fa fa-home" aria-hidden="true"></span></a></li>
						<li class="menu-list"><a class="<?php if ($first_part=="business-expansion.php" || $first_part=="working-capital.php" || $first_part=="equipment-and-machinery.php" || $first_part=="commercial-premises.php") {echo "active"; } else  {echo "noactive";}?>">LOANS FOR YOU </a>
							<ul class="loan_maind">
								<li class="sub-list"> <a href="business-expansion.php">Business Loans</a></li>
								<li class="sub-list"> <a href="working-capital.php">Working Capital Loans</a></li>
								<li class="sub-list"> <a href="equipment-and-machinery.php">Equipment & Machinery Loans</a></li>
								<li class="sub-list"> <a href="commercial-premises.php">Loans For Buying Commercial Premises </a></li>
							</ul>
						</li>
						<li class="menu-list"> <a class="<?php if ($first_part=="calculators.php" || $first_part=="faqs.php") {echo "active"; } else  {echo "noactive";}?>">TOOLS FOR YOU </a>
							<ul class="maind">
								<li class="sub-list"> <a href="calculators.php">calculators</a></li>
								<li class="sub-list"> <a href="faqs.php">FAQs</a></li>
							</ul>
						</li>
						<li class="menu-list"> <a class="<?php if ($first_part=="hfs-team.php" || $first_part=="about-group.php") {echo "active"; } else  {echo "noactive";}?>"> KNOW US</a>
							<ul class="maind">
								<li class="sub-list"> <a href="hfs-team.php">HFS & TEAM</a></li>
								<li class="sub-list"> <a href="about-group.php">About group</a></li>
							</ul>
						</li>
						<li class="menu-list"> <a href="locate-us.php" class="<?php if ($first_part=="locate-us.php") {echo "active"; } else  {echo "noactive";}?>">LOCATE US</a></li>
						<li class="desk-nav"> <a class="activequick">Enquire now</a>
							<ul class="dropdownn-form" id="hint">
								<a class="close activequick"><img src="images/close-bt.png" alt="close button" title="close"/></a>
								<li>
									<p>Please fill following details</p>
									<form action="quick_enquiry_submit.php"  method="post" class="get_in_touch_submit_form" >
										<div class="tp_frm">
											<input type="text" name="name" maxlength="40" placeholder="Name *"  autocomplete="off" role="presentation" onkeyup="this.value=this.value.replace(/[^a-zA-Z \n\r.]+/g, '');">
										    <div class="error"><span></span></div>  
										</div>
										<div class="tp_frm">
											<input type="text"  name="mobile" ondrop="blur();return false;" onpaste="return false" placeholder="Mobile Number *" maxlength="12" autocomplete="off" role="presentation" onkeyup="this.value=this.value.replace(/[^0-9]+/g,'');">
									     	<div class="error"><span></span></div>  
										</div>
										<div class="tp_frm">
											<input type="email" name="email" onpaste="return false;" placeholder="Email id *">
									        <div class="error"><span></span></div>  
										</div>
										<div class="tp_frm">
											<select  name="business"  placeholder="business *" >
												<option value="">Select Your Business *</option>
												<option value="Manufacturing">Manufacturing</option>
												<option value="Trading">Trading</option>
												<option value="Services">Services</option>
											</select>
									        <div class="error"><span></span></div>  
										</div>
										<div class="tp_frm">
											<select  name="loan_amt"  placeholder="Loan Amount *">
												<option value="">Select Loan Amount *</option>
												<option value="Upto 5 Lac">Upto 5 Lac</option>
												<option value="Upto 10 Lac">Upto 10 Lac</option>
												<option value="Upto 15 Lac">Upto 15 Lac</option>
												<option value="Upto 20 Lac and More">Upto 20 Lac and More</option>
											</select>
									        <div class="error"><span></span></div>  
										</div>
										<div class="tp_frm">
											<textarea rows="4" cols="50" name="message" placeholder="Message"></textarea>
										    <div class="error"><span></span></div>  
										</div>
										
										<div class="tp_frm">
											<input type="submit" id="get_in_touch_submit" class="submit" name="submit1" value="submit">
										</div>
									</form>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		 
	</div>
				</div>
			</div>
		</div>
	</div>
	
</header>