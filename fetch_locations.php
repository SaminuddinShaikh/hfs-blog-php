<?php
include_once('db_configCMS.php');
if(isset($_POST['get_option']))
{

 $location = $_POST['get_option'];
 $find = "SELECT * FROM cms_locations WHERE name='$location'";
 $result = $con->query($find);
 while($row=$result->fetch_assoc())
 {
  echo '<h3 class="contact-us-add">'.$row['name'].'</h3>
		<p>'.$row['address'].'</p>

		<h3 class="contact-us-email">email <span><a href="mailto:'.$row['email'].'">'.$row['email'].'</a></span></h3>
		<h3 class="contact-us-phone">phone <span>'.$row['phone'].' </span> </h3>
		<h3 class="contact-us-map"><a href="'.$row['map'].'" target="_blank">view google map</a></h3>';
 }
 exit;
}
?>