<?php
include_once('db_configCMS.php');
$sql = "SELECT DISTINCT state FROM cms_locations WHERE type='' AND status='Active' ";
$states = $con->query($sql);
?>
<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Book our visit - HFS</title>
<meta name="description" content="Book our visit, Hassle Free Business loans from HFS a new age NBFC. Quick Disbursal, Easy Documentation. No Guarantor Required. Low Interest Rate" />
<meta name="keywords" content="Business Loans, Guarantor Free loans,Working Capital loans, Equipment and machinery loans,loans for buying commercial premises, Collateral Free Loans, HFS Business loans, HFS MSME loans, Small Business Loans from HFS" />
<link href="images/favicon.ico" rel="icon" type="image/ico" />
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
<link rel="stylesheet" href="css/enquiry.css" type="text/css" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript" src="https://hfs-website-prd.azurewebsites.net/js/form_validation.js"></script>

</head>

<body><div class="loderwrap"></div>
<div class="book-wrapper">
<div class="book-cont">
<div class="book-head">
<h1>Let’s Meet</h1>
</div>

<div class="book-content">
	
	<form action="enquiry_submit"  method="post" class="get_in_touch_submit_form" >
		<ul>
			<li>
				<input  type="text" name="name" onpaste="return false;"  placeholder="Name *"  autocomplete="off" role="presentation" maxlength="50" onkeyup="this.value=this.value.replace(/[^a-zA-Z \n\r.]+/g, '');" />
				<div class="error"><span></span></div>  
			</li>
			<li>
				<input type="text" name="mobile" onpaste="return false;"  placeholder="Mobile Number *" maxlength="12"  autocomplete="off" role="presentation" onkeyup="this.value=this.value.replace(/[^0-9]+/g,'');" />
				<div class="error"><span></span></div>  
			</li>
			<li>
				
				<select id="state" name="location" placeholder="location *">
				    <option value="" placeholder="location *">Select Location</option>
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
				<div class="error"><span></span></div>  
			</li>
			<li>
			    <select id="city" name="city"  placeholder="city *">
			        <option value="" placeholder="city *">Select city</option>
			    </select>
			    <div class="error"><span></span></div>  
			</li>
			<li>
				<select  name="business"  placeholder="business *" >
					<option value="">Select Your Business *</option>
					<option value="Manufacturing">Manufacturing</option>
					<option value="Trading">Trading</option>
					<option value="Services">Services</option>
				</select>
				<div class="error"><span></span></div>  
			</li>
			<li>
				<select  name="loan_amt"  placeholder="Loan Amount *">
					<option value="">Select Loan Amount *</option>
					<option value="Upto 5 Lac">Upto 5 Lac</option>
					<option value="Upto 10 Lac">Upto 10 Lac</option>
					<option value="Upto 15 Lac">Upto 15 Lac</option>
					<option value="Upto 20 Lac and More">Upto 20 Lac and More</option>
				</select>
				<div class="error"><span></span></div>  
			</li>
			
			<li>
				<input type="date" name="book_visit_date" id="today" placeholder="book_visit_date *" data-placeholder="Select Date" required aria-required="true" >
				<div class="error"><span></span></div>  
			</li>
	
			<li><input class="submit" name="submit"  id="get_in_touch_submit" type="submit" value="Submit" /></li>
		</ul>
	</form>
</div>
</div>
</div>
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
                url:'ajaxData',
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

// 	$('#city').on('change', function(){
//         var cityID = $(this).val();
//         if(cityID){
//             $.ajax({
//                 type:'POST',
//                 url:'ajaxData',
//                 data:'city_id='+cityID,
//                 success:function(html){
//                     $('#response').html(html);
//                 }
//             });
//         }else{
//             $('#city').html('<option value="">Select City first</option>');
//             $('#response').html('');
//         }
//     });
</script>
</body>
</html>
