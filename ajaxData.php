<?php
// Include the database config file
// include_once 'db_configCMS.php';
include_once('db_configCMS.php');


if(!empty($_POST["state_id"])){
    
    
    // Fetch city data based on the specific state
	// $query = "SELECT * FROM cities WHERE state_id = ".$_POST['state_id']." AND status = 1";

    $sqlquery = "SELECT * FROM cms_locations WHERE state = '".$_POST['state_id']."' AND status='Active' AND (type!='Registered' AND type!='Corporate') order by name ASC";
    $statecity = $con->query($sqlquery);

    // Generate HTML of city options list

    if($statecity->num_rows > 0){
        echo '<option value="">Select city</option>';
        while($row = $statecity->fetch_assoc()){
            echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
        }
    }else{
        echo '<option value="">City not available</option>';
    }

}

if(!empty($_POST["city_id"])){
    // Fetch city data based on the specific state
    // $query = "SELECT * FROM cities WHERE state_id = ".$_POST['state_id']." AND status = 1"; AND (type!='Corporate' OR type!='Registered')

    $citybranch = "SELECT * FROM cms_locations WHERE name = '".$_POST['city_id']."'  AND status='Active'";
    $citybranch = $con->query($citybranch);

    // Generate HTML of city options list

    if($citybranch->num_rows > 0){
        echo '';
        while($row = $citybranch->fetch_assoc()){
            echo'
                <h3 class="contact-us-add">Address</h3>
                <p>'.$row['address'].'</p>

                <h3 class="contact-us-email">email <span><a href="mailto:'.$row['email'].'">'.$row['email'].'</a></span></h3>
                <h3 class="contact-us-phone">phone <span>'.$row['phone'].' </span> </h3>
                <h3 class="contact-us-map"><a href="'.$row['map'].'" target="_blank">view google map</a></h3>
            ';
        }
    }else{
        echo '<option value="">Branch not available</option>';
    }

}
?>