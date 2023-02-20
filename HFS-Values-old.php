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
    <title>Core Values of HFS</title>
	<meta name="description" content="At Hiranandani Financial Services, we are guided by our core values that make our journey full of purpose and perseverance" />
	<meta name="keywords" content="values of hfs, hfs core values, hfs customer experience" >
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

	 <link rel="stylesheet" href="css/values-res.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/responsive.css" media="all">
    <link rel="stylesheet" href="css/social-share.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!--js-->
	
	<!--js-->
	
<style>
    
    
.arrow {
text-align: left;
padding-left: 35px;
/*background: url(betatesting/Website/arrow.png) no-repeat top left;*/
font-size: 24px;
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

    <section id="abotusbanner">
       
            <div class="abt-ban-main head_mrgin">
               
                <!--<img src="images/team-us-top.jpg" alt="" draggable="false" class="desk"/>-->
                <!--<img src="images/team-us-top-mob.jpg" alt="" draggable="false" class="mob"/>-->
                <img src="betatesting/Website/Top Banner.jpg" alt="" title="" draggable="false" class="desk" />
                
                <img src="images/Values_TopBanner_mob.jpg" alt="" title="" draggable="false" class="mob" />
                
                 <div class="mob_overlay">  </div>
                <div class="values_banner_textdiv">
                    
                        <p id ="Values_Banner_Text"><span>To achieve the most of <br> our potential, we are guided<br> by <span style="color:#f7ac17;font-weight:500px">values</span> that make our journey, <br>full of purpose and perseverance. </span></p>
                       
</div>
                
                <div class="abt-ban-txt">
                      <div class="continer1">
                        <p id ="Values_Banner_Text"><span>To achieve the most of <br> our potential, we are guided<br> by <span style="color:#f7ac17;font-weight:500px">values</span> that make our journey, <br>full of purpose and perseverance. </span></p>
                       
                  
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
				<li><a href="HFS-values.php" class="active">Our Values</a></li>
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
 
<section id="about-us">
    <!---Laptop and Desktop Version Code -->    
    <div class="values_page_div">
    <table class ="values_table">
        
    <tr class="values_odd">
        <td class="image_column_odd" > <img src="betatesting/Website/Value 11.jpg"  />  </td>
        <td class="text_column_odd"> <p class="arrow">> Understand the customer's needs.</p>
              <p class="arrow">> Strive for customer delight.</p>
              <p class="arrow">> Build relationships first, business will follow.</P>
        </td>
        
    </tr>        
     
     
    <tr class="values_even">
         
        <td class="text_column_even"> <p class="arrow">> Place team goals before individual goals.</P>
                                      <p class="arrow">> Support teammates to help them grow.</P>
                                      <p class="arrow">> Embrace individual differences<br> and alternate views.</P>
        </td>
        <td class="image_column_even"> <img src="betatesting/Website/Value 22.jpg" alt="corporate loan" />  </td>
        
    </tr>  
     
     
    <tr class="values_odd">
        
        <td class="image_column_odd">  <img src="betatesting/Website/Value 33.jpg" alt="corporate loan" /> </td>
        <td class="text_column_odd">   <p class="arrow ">> Deliver on all our commitments.</P>
                                       <p class="arrow ">> Be transparent in all dealings.</P>
                                       <p class="arrow ">> Communicate responsibly.</P>
        </td>
        
    </tr>  
     
     
    <tr class="values_even">
        <td class="text_column_even"><p class="arrow ">> Perform better than yesterday.</p>
                                <p class="arrow ">> Be well prepared for every action.</p>
                                <p class="arrow ">> Learn from new ideas.</p>  
        </td>
        <td class="image_column_even"> <img src="betatesting/Website/Value 44.jpg" alt="project finance" /> </td>
       
    </tr>  
    
</table>
        
</div>
    
    
    
    <!---Mobile Version Code -->    
    
    <div class ="customer_experience">
        <div class ="ce_image">
        <img src="betatesting/Website/Value 11.jpg" />
        </div>
           
         <div class ="ce_text_area">
         
            
         <p class="arrow">> Understand the customer's needs.</p>
         <p class="arrow">> Strive for customer delight.</p>
         <p class="arrow">> Build relationships first,business will follow.</P>
         
        </div>
        </div>
        
        
        <div class="customer_experience">
            
            <div class ="wt_text_area">
            <p class="arrow ">> Place team goals before individual goals.</P>
            <p class="arrow ">> Support teammates to help them grow.</P>
            <p class="arrow ">> Embrace individual differences and alternate views.</P>
            
        </div>
        
        <div class ="wt_image">
            <img src="betatesting/Website/Value 22.jpg" alt="corporate loan" />
            
        </div>
        </div>
        
                
        
        <div class="customer_experience">
            
               <div class ="bct_image">
             <img src="betatesting/Website/Value 33.jpg" alt="corporate loan" />
        </div>
            
         <div class ="bct_text_area">
             <p class="arrow ">> Deliver all commitments.</P>
             <p class="arrow ">> Be transparent in all dealings.</P>
             <p class="arrow ">> Communicate responsibly.</P>
        </div>
          
      
        
       </div>
       
        <div class="customer_experience">
            
            <div class ="ie_text_area">
             <p class="arrow ">> Perform better than yesterday.</p>
             <p class="arrow ">> Be well prepared for every action.</p>
            <p class="arrow ">> Learn from new ideas.</p>
        </div>
      
         <div class ="ie_image">
             <img src="betatesting/Website/Value 44.jpg" alt="project finance" />
        </div>
    
    
    <!-- <div class ="customer_experience">
        <div class ="ce_image">
        <img src="betatesting/Website/Value 11.jpg" />
        </div>
           
         <div class ="ce_text_area">
        
            
         <p class="odd_row_arrow">Understand the customer's needs.</p>
         <p class="odd_row_arrow">Strive for customer delight.</p>
         <p class="odd_row_arrow">Build relationships first,business will follow.</P>
       
        </div>
        </div>
        
        
        <div class="customer_experience">
            
            <div class ="wt_text_area">
            <p class="even_row_arrow ">Place team goals before individual goals.</P>
            <p class="even_row_arrow ">Support teammates to help them grow.</P>
            <p class="even_row_arrow ">Embrace individual differences and alternate views.</P>
            
        </div>
        
        <div class ="wt_image">
            <img src="betatesting/Website/Value 22.jpg" alt="corporate loan" />
            
        </div>
        </div>
        
                
        
        <div class="customer_experience">
            
               <div class ="bct_image">
             <img src="betatesting/Website/Value 33.jpg" alt="corporate loan" />
        </div>
            
         <div class ="bct_text_area">
             <p class="odd_row_arrow ">Deliver all commitments.</P>
             <p class="odd_row_arrow ">Be transparent in all dealings.</P>
             <p class="odd_row_arrow ">Communicate responsibly.</P>
        </div>
          
      
        
       </div>
       
        <div class="customer_experience">
            
            <div class ="ie_text_area">
             <p class="even_row_arrow ">Perform better than yesterday.</p>
             <p class="even_row_arrow ">Be well prepared for every action.</p>
            <p class="even_row_arrow ">Learn from new ideas.</p>
        </div>
      
         <div class ="ie_image">
             <img src="betatesting/Website/Value 44.jpg" alt="project finance" />
        </div>
        -->
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
<script>$('#team1').addClass('active');</script>
</body>
</html>