<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiranandani Financial Services Pvt. Ltd.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="format-detection" content="telephone=no">
	<link href="images/favicon.ico" rel="icon" type="image/ico" />
	<!--css-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="css/reboot.css">
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/style.css">
 	<link rel="stylesheet" href="css/responsive.css" media="all">
	<!--js-->
	
	
	 <script>
/*  $(function() {
		var thankyoumsg = localStorage.getItem("thankyoumsg");
		//alert(thankyoumsg);
		$('.thank_you_sub').html(thankyoumsg);
		
	}); */
    function Redirect() 
    {
		var url  = localStorage.getItem("currentURL");
		//alert(url);
				if (url==null){
		    var reurl = 'https://hfs-website-prd.azurewebsites.net';
		}else{
		    var reurl = url;
		}
		//alert(reurl);
		window.location=reurl; 
    } 
    setTimeout('Redirect()', 10000);   
 
 </script>
</head>
<body>

   
<div id="wrapper">
<section>
<div class="thank_you_top">
	<div class="thank_logo_main">
		<div class="logo_thank">
			<img src="images/thank-logo.png" alt="" />
		</div>
	</div>
	<div class="thanl_txt">
		<h3>THANK YOU!</h3>
		<p>Your enquiry is being processed.<br> Our representative will get in touch with you shortly.</p>
	</div>
</div> 
</section>

</div>

</body>
</html>