<?php 
//include 'config.php';
$first_part = basename($_SERVER['PHP_SELF']);
$pageUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//echo $pageUrl;

include_once('db_configCMS.php');
function get_menu_tree($parent_id) 
{
  global $con;
  $menu = "";
  $sqlquery = " SELECT * FROM cms_navigation where status='1' and parent_id='" .$parent_id . "' ";
  $res=mysqli_query($con,$sqlquery);
    while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)) 
  {
     $menu .="<li class='menu-list'><a href='".$row['link']."' id='".$row['active_id']."' >".$row['menu_name']."</a>";
       
       $menu .= "<ul class='".$row['active_class']."'>".get_menu_tree($row['menu_id'])."</ul>"; //call  recursively
       
       $menu .= "</li>";

    }
    
    return $menu;
} 

$sql_set = "SELECT * FROM cms_extranal_settings";
$result_set = $con->query($sql_set);

    while ($set = $result_set->fetch_assoc()) {
        $copy            = $set["copyright"];
        $descr           = $set["description"];
        $logo            = $set["logo"];
        $logo2           = $set["logo2"];
        $favicon         = $set["favicon"];
        $link1           = $set["link1"];
        $link2           = $set["link2"];
        $cin             = $set["cin"];
    }

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript" src="https://hfs-website-prd.azurewebsites.net/js/form_validation.js"></script>

<!-- Preloader Start -->
<div class="main-preloader semi-dark-background" id="main-preloader">
    <div class="main-preloader-inner">
        <h1 class="preloader-percentage"></h1>
        <div style="width: 100%; margin-bottom: 15px;"><img src="images/logo-loader52.gif" alt="pre-loader"/></div> 
        <div class="preloader-bar-outer">
            <div class="preloader-bar"></div>
            <!-- Percentage Precess Bar -->
        </div>
    </div>
</div>
<!-- Preloader Start -->
<div id="wrapper">
<header><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content=" HFS is one stop for all type of msme loans. Being a new age NBFC our focus is on Providing customize financial solutions as per the business needs" />
	<div class="header_top">
		<div class="continer1">
			<div class="head_topmain">
				<!--<div class="logo"><a href="index.php"><img src="images/logo.png" alt="HFCL LOGO" draggable="false"/></a></div>-->
				<!--<div class="logo1"><a href="index.php"><img src="images/logo-mob.png" alt="HFCL LOGO" draggable="false"/></a></div>-->
				<div class="logo"><a href="index.php"><img src="<?=$logo?>" alt="HFS LOGO" draggable="false"/></a></div>
				<div class="logo1"><a href="index.php"><img src="<?=$logo2?>" alt="HFS LOGO" draggable="false"/></a></div>
				<div class="head_right">
					<div class="call">
						<p><i class="fa fa-phone" aria-hidden="true"></i><a href="callto:1800-12-1234"></a>1800 121 234</p>
						<div id="google_translate_element"></div>
					</div>
					
					
					<div class="header_bottom">
		 
			<div class="head_bottom_main">
				<nav>
					<ul>
					    <?php echo get_menu_tree(0);//start from root menus having parent id 0 ?>
						<!--<li> <a href="index.php" class="<?php if ($first_part=="index.php") {echo "active"; } else  {echo "noactive";}?>"><span class="fa fa-home" aria-hidden="true"></span></a></li>-->
						<!--<li class="menu-list"><a class="<?php if ($first_part=="business-expansion.php" || $first_part=="working-capital.php" || $first_part=="equipment-and-machinery.php" || $first_part=="commercial-premises.php") {echo "active"; } else  {echo "noactive";}?>">LOANS FOR YOU </a>-->
						<!--	<ul class="loan_maind">-->
						<!--		<li class="sub-list"> <a href="business-expansion.php">Business Loans</a></li>-->
						<!--		<li class="sub-list"> <a href="working-capital.php">Working Capital Loans</a></li>-->
						<!--		<li class="sub-list"> <a href="equipment-and-machinery.php">Equipment & Machinery Loans</a></li>-->
						<!--		<li class="sub-list"> <a href="commercial-premises.php">Loans For Buying Commercial Premises </a></li>-->
						<!--	</ul>-->
						<!--</li>-->
						<!--<li class="menu-list"> <a class="<?php if ($first_part=="calculators.php" || $first_part=="faqs.php") {echo "active"; } else  {echo "noactive";}?>">TOOLS FOR YOU </a>-->
						<!--	<ul class="maind">-->
						<!--		<li class="sub-list"> <a href="calculators.php">calculators</a></li>-->
						<!--		<li class="sub-list"> <a href="faqs.php">FAQs</a></li>-->
						<!--	</ul>-->
						<!--</li>-->
						<!--<li class="menu-list"> <a class="<?php if ($first_part=="hfs-team.php" || $first_part=="about-group.php") {echo "active"; } else  {echo "noactive";}?>"> KNOW US</a>-->
						<!--	<ul class="maind">-->
						<!--		<li class="sub-list"> <a href="hfs-team.php">HFS & TEAM</a></li>-->
						<!--		<li class="sub-list"> <a href="about-group.php">About group</a></li>-->
						<!--	</ul>-->
						<!--</li>-->
						<!--<li class="menu-list"> <a href="locate-us.php" class="<?php if ($first_part=="locate-us.php") {echo "active"; } else  {echo "noactive";}?>">LOCATE US</a></li>-->
						<li class='menu-list'><a class="activequick" href='#' id='apply' >Apply online</a><ul class='maind'><li class='menu-list'><a href='https://applynow.hfs.in' target="_blank" id='business' >Apply Now</a><ul class=''></ul></li><li class='menu-list'><a href='https://applynow.hfs.in/enterMob' id='working'target="_blank">Resume Application</a><ul class=''></ul></li><li class='menu-list'><a href='https://applynow.hfs.in/chkAppStatus' id='working'target="_blank">Application Status</a><ul class=''></ul></li>
					</ul>
				</nav>
			</div>
		 
	</div>
				</div>
			</div>
		</div>
	</div>
	
</header>
