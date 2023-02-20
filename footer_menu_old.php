<?php 
// include_once('db_configCMS.php');
$first_part = basename($_SERVER['PHP_SELF']);
$pageUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

//echo $pageUrl;
function get_menu_tree1($parent_id) 
{
  global $con;
  $menu = "";
  $sqlquery = " SELECT * FROM cms_navigation where status='1' and parent_id='" .$parent_id . "' ";
  $res=mysqli_query($con,$sqlquery);
    while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)) 
  {
       $menu .="<li id='".$row['footer_active_id']."'><span>-</span> <a href='".$row['link']."' id='".$row['footer_active_id']."' >  ".$row['menu_name']."</a>";
       
       $menu .= "<ul >".get_menu_tree1($row['menu_id'])."</ul>"; //call  recursively
       
       $menu .= "</li>";

    }
    
    return $menu;
} 

function get_menu_treefooter($footer_id) 
{
  global $con;
  $menu1 = "";
  $sqlquery1 = " SELECT * FROM cms_navigation where status='1' and footer_id='" .$footer_id . "' ORDER BY sort_id ASC";
  $res1=mysqli_query($con,$sqlquery1);
    while($row1=mysqli_fetch_array($res1,MYSQLI_ASSOC)) 
  {
       //  $menu1 .="<ul ><li class='head-txt'><a>".$row['menu_name']."</a></li>";
       
       // $menu1 .= "<li class=''>-".get_menu_treefooter($row['menu_id'])."</li>"; //call  recursively
       
       // $menu1 .= "</ul>";

  	   $menu1 .= "<ul> ";
  	   $menu1 .= "<li class='head-txt' id='".$row1['footer_active_id']."'> <a href='".$row1['link']."' id='".$row1['footer_active_id']."' >".$row1['menu_name']."</a>";
       $menu1 .= "<a>".get_menu_tree1($row1['menu_id'])."</a>"; //call  recursively
       $menu1 .= "</li>";
       $menu1 .= "</ul>";


    }
    
    return $menu1;
} 
?>
<footer>
	<div class="footer_top wow fadeIn">
		<div class="continer1">
				<?php echo get_menu_treefooter(1);//start from root menus having parent id 0 ?>



			
		</div>
	</div>
	
	<div class="footer_bottom">
		<div class="continer1">
			<ul>
				<!--<li>©2019  HFSL. All rights reserved | <a href="disclaimer.php" class="<?php if ($first_part=="disclaimer.php") {echo "active"; } else  {echo "noactive";}?>">Disclaimer</a> &amp; <a href="privacy-policy.php" class="<?php if ($first_part=="privacy-policy.php") {echo "active"; } else  {echo "noactive";}?>">Privacy Policy</a> </li>-->
				<!--<li>Formerly known as Dobra Finance Private Limited </li>-->
				<!--<li class="botto_ft">Group websites&nbsp;:&nbsp;<a href="https://www.houseofhiranandani.com/" target="_blank">www.houseofhiranandani.com</a><span class="ft_hide">&nbsp;&nbsp;|&nbsp;&nbsp;</span><a href="http://www.hiranandani.com/" target="_blank">www.hiranandani.com </a><span class="ft_hide"></li>-->
				<li><?=  strip_tags($copy, '<a>')?></li>
				<li><?=$descr?></li>
				<?php if(empty($link1)){
				    $lk1 = '';
				}
				else
				$lk1 ='<a href="https://'.$link1.'" target="_blank"> '.$link1.' </a>';
				
				if(empty($link2)){
				    $lk2 = '';
				}else
				$lk2 =' | <a href="https://'.$link2.'" target="_blank">'.$link2.'</a>';
				?>
				<li>Group websites &nbsp;:&nbsp;<?=$lk1?> <?=$lk2?></li>
				<li>CIN :<?=$cin?></li>
				</ul>
		</div>
	</div>
</footer>

<div class="footer-nav">
	<ul>
	<!--<li> 
			<a>  
				<i><img src="images/call.png"></i> 
				Call us
			</a> 
		</li> 
		<li> 
			<a href="https://api.whatsapp.com/send?phone=0000000000&amp;text=Welcome%20to%20Hiranandani%20Financial%20Services%20Pvt.%20Ltd." target="_blank">  
				<i><img src="images/what.png"></i> 
				WhatsApp
			</a> 
		</li>-->
		<li> 
			<a href="book-our-visit.php" class="book_our_visit"> 
				<i><img src="images/lets-meet-ico.png" alt="Lets meet"></i> 
				Let’s meet
			</a> 
		</li>
		<li>
			<a href="quick_enquiry_submit.php" class="enquiry">
				<i><img src="images/enq.png" alt="enquiry"></i>
				Enquire now
			</a>
		</li>	
	</ul>
 </div>

<!--<div class="whats-app"><a href="https://api.whatsapp.com/send?phone=0000000000&text=Welcome%20to%20Hiranandani%20Financial%20Services%20Pvt.%20Ltd." target="_blank"><img src="images/icon/whats-app.png" alt="" draggable="false"/><span>+91 00000 00000</span></a></div>
<!-- <div class="enquiry-desk"><a href="enquiry.php" class="enquiry"><img src="images/icon/enquir_now.jpg" alt="enquiry" title="enquiry" draggable="false"></a></div> -->
 <a href="#" id="scroll" style="display: none;"><span></span></a>
</div>