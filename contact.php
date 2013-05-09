<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
<title>S-Creative | Contact Us</title>
<link rel="shortcut icon" type="images/x-icon" href="images/favicon.ico">

<link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/normalize.css" />
<!-- If you are using CSS version, add this -->
<link rel="stylesheet" href="css/foundation.css" />
<link rel="stylesheet" href="css/foundation.min.css" />
<link rel="stylesheet" href="css/app.css" />
<link rel="stylesheet" href="css/style.css" />
<script src="js/vendor/custom.modernizr.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body>

	<!-- body content here -->
	<!-- header -->

	<?php include "header.php" ?>


	<div class="row contact">
		<div class="row background_image" style="min-height:500px">


			<div class="large-12 columns heading">



				<ul>
					<li class="who  large-3 small-offset-1 "><h3>Who and where</h3></li>

					<li class="the large-3 small-offset-1"><h3>The contact form</h3></li>

					<li class="useful large-3 small-offset-1"><h3>Useful contacts</h3></li>
				</ul>

			</div>



			<div id="whoandwhere" class="con">

				<div
					class="large-3 columns large-offset-1 small-offset-1 row small-10 ww">
					<div class="first row">
						<img class="lastimg " src="conimages/111.png">
						<h2 class="large-12 small-12">First time here?</h2>
						<p class="large-12 small-12 timee">See how easy it is to contact us and
							how soon can you get here!</p>
					</div>
					<div class="first1 row">
						<ul>
							<li class="large-12 columns small-12"><img
								class="conicon large-2 addr " src="conimages/1.png"> <span
								class="large-10 ">13/2D,Brookebond layout, Krishnaswamy
									Mudhaliar Road Coimbatore-641002</span></li>

							<li class="large-12 columns small-12"><img
								class="conicon large-2 " src="conimages/2.png"> <span
								class="large-10 ">+91(422)-4385847</span>
							</li>

							<li class="down large-12 columns small-12"><img
								class="conicon large-2 " src="conimages/3.png"> <span
								class="large-10 ">mi@s-creative.me</span></li>
						</ul>
					</div>

				</div>


			</div>



			<div id="contactform" class="ccf">

				<div
					class="large-3 columns large-offset-5 small-offset-1 row small-10 cf">
					<div class="first row">
						<img class="lastimg" src="conimages/111.png">
						<h2 class="large-12 small-12">Send us a message
						
						<p class="large-12 small-12 timee">
						 using a contact
							form-reply as soon as possible.</p></h2>
                          
					</div>
					<div class="first1 row borderr">


						<form name="contactus" id="contactus_form"
						onSubmit="return validateForm();">
							<ul>
								<li class="large-12 columns small-12 "><span class="large-10 ">Name
								</span> <input type="text" name="fname">
								</li>

								<li class="large-12 columns small-12"><span class="large-10 ">Mobile</span>
									<input type="text" name="mobile">
								</li>

								<li class="large-12 columns small-12"><span class="large-10 ">Email</span>
									<input type="text" name="email"></li>

								<li class="large-12 columns small-12 space"><span class="large-10 ">Post
										Enquiry</span> <input type="post" cols="25" rows="10" name="enquiry"> </input>
										
								</li>
 </ul>
 
                                       <input class="btn" type="submit" value="Submit"><span id="response" style="color: black"></span>
 
							
						</form>
					</div>

				</div>


			</div>


			<div id="usefulcontacts" class="ucc">

				<div
					class="large-3 columns large-offset-9 small-offset-1 row small-10 uc">
					<div class="first row">
						<img class="lastimg " src="conimages/111.png">
						<h2 class="large-12 small-12">Do you have bussiness to attend to?</h2>
						<p class="large-12 small-12 timee">Contact with someone who will be able
							to immediately talk about the facts!</p>
					</div>
					<div class="first1 row">
						<ul>
							<li class="large-12 columns small-12 heigh"><span class="large-6 small-offset-4">
									Mohamed Ibrahim.A Director +919894500189 </span></li>

						</ul>
					</div>

				</div>


			</div>




		</div>
	</div>

	<?php include('footer.php'); ?>
	<script>

$('#whoandwhere').slideDown();

$('.the').click(function(){
	
	$('.ccf').slideDown();
	$('.con').hide();
		$('.ucc').hide();
		

});

$('.who').click(function(){
	$('.con').slideDown();
	$('.ucc').hide();
	$('.ccf').hide();
});


$('.useful').click(function(){
	$('.ucc').slideDown();
	$('.con').hide();
	$('.ccf').hide();
	
});







</script>
	
<script type="text/javascript">
function validateForm()
{

var contactname=document.forms["contactus"]["fname"].value;

var contactmobile=document.forms["contactus"]["mobile"].value;

var contactemail=document.forms["contactus"]["email"].value;
var atpos=contactemail.indexOf("@");
var dotpos=contactemail.lastIndexOf(".");

if (contactname==null || contactname=="")
  {
  alert(" Name must be filled out");
  return false;
  }
else if (contactmobile==null || contactmobile=="")
{
	 alert("MobileNo must be filled out");
	 return false;
}       

else if(isNaN(contactmobile)|| contactmobile.indexOf(" ")!=-1)
{
        			alert("Enter numeric value");
		return false;
          }
else if (contactmobile.length > 10 || contactmobile.length < 10 )
		{
          			alert("enter 10 characters"); 
			return false;
    			 }
  


else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=contactemail.length)
{
	  alert("Not a valid e-mail address");
	  return false;
	  }

  


	  
  
$.ajax({
	type : "post",
	url : "mail.php",
	cache : false,
	data : $('#contactus_form').serialize(),
	success : function(json) {
			$('#response').html(json);
		

	
	},
	
});

return false;
}
</script>

	
	
	
	
	
	
	<script>
		document.write('<script src='
				+ ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery')
				+ '.js><\/script>')
	</script>
	<script src="js/foundation/foundation.js"></script>
	<script src="js/foundation/foundation.alerts.js"></script>
	<script src="js/foundation/foundation.clearing.js"></script>
	<script src="js/foundation/foundation.cookie.js"></script>
	<script src="js/foundation/foundation.dropdown.js"></script>
	<script src="js/foundation/foundation.forms.js"></script>
	<script src="js/foundation/foundation.joyride.js"></script>
	<script src="js/foundation/foundation.magellan.js"></script>
	<script src="js/foundation/foundation.orbit.js"></script>
	<script src="js/foundation/foundation.placeholder.js"></script>
	<script src="js/foundation/foundation.reveal.js"></script>
	<script src="js/foundation/foundation.section.js"></script>
	<script src="js/foundation/foundation.tooltips.js"></script>
	<script src="js/foundation/foundation.topbar.js"></script>
	<script>
		$(document).foundation();
	</script>

</body>
</html>
