<?php
 session_start(); 
if ($_GET['utm_source']!='') { $_SESSION['temp']=$_GET['utm_source'].'/'.$_GET['utm_campaign']; }
else if ($_GET['gclid']!='') { $_SESSION['temp']='Google'; }
else { $_SESSION['temp']='Others'; } 
include 'db.php';
//print_r($_POST); exit;
if(isset($_POST['e_name'])){
	
	date_default_timezone_set("Asia/Calcutta");	
		
	$e_name=strip_tags(addslashes(trim($_POST['e_name'])));
	$e_email=strip_tags(addslashes(trim($_POST['e_email'])));
	$e_mobile=strip_tags(addslashes(trim($_POST['e_mobile'])));
	$e_comments=strip_tags(addslashes(trim($_POST['e_comments'])));
	$e_time=strip_tags(addslashes(trim($_POST['e_time'])));
	$e_source=strip_tags(addslashes(trim($_POST['e_source'])));	
	$e_form_name=strip_tags(addslashes(trim($_POST['e_form_name'])));
	$creat=date("Y/m/d G:i:s");
	

		 $sql = "INSERT INTO lp_crossway (name, email, phone, comments,time_to_call, s_source, form_name, created_date) VALUES ('$e_name', '$e_email', '$e_mobile','$e_comments', '$e_time', '$e_source','$e_form_name', '$creat') ";
		$res = mysql_query($sql);			
			
$strFrom=$email;

$post = array(
    'name' => $e_name,
    'email' => $e_email,
    'phone'   => $e_mobile,
	'source'   => $e_source,
	'created'   => $creat,
	'message'   => $e_comments,
	'subject'   => 'TVH CrossWay - Landing Page Enquiry',
	'body'   => 'TVH CrossWay - Landing Page Enquiry'
	);
	
	if($e_name!='Name*'){
	$ch = curl_init();
	
	curl_setopt($ch, CURLOPT_URL,"http://www.bytsocial.in/smtp/tvh-mail/mail.php");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	
	$server_output = curl_exec ($ch);
	
	curl_close ($ch);
	}
			/*$strTo="jaishankar@bytindia.com";
			
			$strSubject= "Ouranya Bay Landing Page Enquiry";			
			$strMailbody="<h2>Ouranya Bay Landing Page Enquiry:</h2><table style=border:1px solid;><tr><td>Name: </td><td>".$e_name."</td></tr><tr><td>Email: </td><td>".$e_email."</td></tr><tr><td>Phone: </td><td>".$e_mobile."</td></tr><tr><td>Source: </td><td>".$e_source."</td></tr><tr><td>Form: </td><td>".$e_form_name."</td></tr><tr><td>Created: </td><td>".$creat."</td></tr></table>";
			
		mail($strTo, $strSubject, $strMailbody, "From:$strFrom\r\nReply-to: $strFrom\r\nContent-type: text/html; charset=us-ascii");		
			$strTo1=$email;
			$strFrom1="info@tvh.in";			
			$strSubject1="Thank you for your interest in Ouranya Bay Project";		
			$strMailbody1="<p>Hello ".$name.", <br>
Thank you for your interest in Ouranya Bay Project.<br>
One of us will get in touch with you soon.<br><br>
Alternatively, you could call us at (+91) 44 7122 7122
 (7am - 10pm IST) <br>Have a great day!<br><br>
Sincerely,<br><b>Team TVH</b>
</p>";
$strSubject1="Thank you for your interest in Ouranya Bay Project ";
			
			$strMailbody1="<p>Hello ".$name.", <br>
			Greetings from Ouranya Bay<br><br>
Thank you for your interest Ouranya Bay <br>
For further assistance, please call our experts: (+91) 044 7122 7122 (7am - 10pm IST) <br><br>
One of our colleagues will get in touch with you to understand your requirements. Have a great day!<br><br>
Sincerely,<br>
<b>Team TVH</b>
</p>";
mail($strTo1, $strSubject1, $strMailbody1, "From:$strFrom1\r\nReply-to: $strFrom1\r\nContent-type: text/html; charset=us-ascii");
echo "1"; */
		//echo "<p>&nbsp;</p><p>&nbsp;</p><p style='color:#48cb83;'>Download Here!</p><p>&nbsp;</p><p>&nbsp;</p>";	
}
if(isset($_POST['d_name']) ){
	date_default_timezone_set("Asia/Calcutta");	
	
	$d_name=strip_tags(addslashes(trim($_POST['d_name'])));
	$d_email=strip_tags(addslashes(trim($_POST['d_email'])));
	$d_mobile=strip_tags(addslashes(trim($_POST['d_mobile'])));
	$d_comments=strip_tags(addslashes(trim($_POST['d_comments'])));
	$d_time_to=strip_tags(addslashes(trim($_POST['d_time_to'])));
	$d_source=strip_tags(addslashes(trim($_POST['d_source'])));	
	$d_form_name=strip_tags(addslashes(trim($_POST['d_form_name'])));
	$creat=date("Y/m/d G:i:s");
	

		 $sql = "INSERT INTO lp_crossway (name, email, phone,comments,time_to_call, s_source, form_name, created_date) VALUES ('$d_name', '$d_email', '$d_mobile','$d_comments', '$d_time_to', '$d_source','$d_form_name', '$creat') ";
		$res = mysql_query($sql);			
		$strFrom=$email;

$post = array(
    'name' => $d_name,
    'email' => $d_email,
    'phone'   => $d_mobile,
	'source'   => $d_source,
	'created'   => $creat,
	'message'   => $d_comments,
	'subject'   => 'TVH CrossWay - Landing Page Enquiry',
	'body'   => 'TVH CrossWay - Landing Page Enquiry'
	);
	
	if($d_name!='Name*'){
	$ch = curl_init();
	
	curl_setopt($ch, CURLOPT_URL,"http://www.bytsocial.in/smtp/tvh-mail/mail.php");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	
	$server_output = curl_exec ($ch);
	
	curl_close ($ch);
	}
		//echo "<p>&nbsp;</p><p>&nbsp;</p><p style='color:#48cb83;'>Download Here!</p><p>&nbsp;</p><p>&nbsp;</p>";	
}
	
	?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TVH Crossway</title>

<!-- favicon -->
<link rel="shortcut icon" href="http://www.tvh.in/wp-content/themes/easyliving/favicon.ico" />


<!-- / Yoast SEO plugin. -->


<link rel='stylesheet' id='bootstrap-css'  href='http://www.tvh.in/wp-content/themes/easyliving/css/bootstrap.min.css?ver=3.0' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='http://www.tvh.in/wp-content/themes/easyliving/style.css?ver=3.8.21' type='text/css' media='all' />
<link rel='stylesheet' id='bxslider-css-css'  href='http://www.tvh.in/wp-content/themes/easyliving/css/jquery.bxslider.css?ver=4.0' type='text/css' media='all' />
<link rel='stylesheet' id='responsive-css-css'  href='http://www.tvh.in/wp-content/themes/easyliving/css/responsive.css?ver=3.8.21' type='text/css' media='all' />
<link rel='stylesheet' id='yamm-css-css'  href='http://www.tvh.in/wp-content/themes/easyliving/css/yamm.css?ver=3.8.21' type='text/css' media='all' />
<link rel='stylesheet' id='nouislider-css-css'  href='http://www.tvh.in/wp-content/themes/easyliving/css/jquery.nouislider.min.css?ver=3.8.21' type='text/css' media='all' />
<link rel='stylesheet' id='open-sans-css'  href='http://fonts.googleapis.com/css?family=Open+Sans%3A700&#038;ver=3.8.21' type='text/css' media='all' />
<link rel='stylesheet' id='easy_table_style-css'  href='http://www.tvh.in/wp-content/plugins/easy-table/themes/default/style.css?ver=1.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='fancybox-css'  href='http://www.tvh.in/wp-content/plugins/simplest-gallery/fancybox/jquery.fancybox-1.3.4.css?ver=3.8.21' type='text/css' media='all' />
<link rel='stylesheet' id='fancybox-override-css'  href='http://www.tvh.in/wp-content/plugins/simplest-gallery/fbg-override.css?ver=3.8.21' type='text/css' media='all' />
<script type='text/javascript' src='http://www.tvh.in/wp-content/themes/easyliving/js/html5shiv.js?ver=3.8.21'></script>

<script type='text/javascript' src='http://www.tvh.in/wp-content/plugins/simplest-gallery/lib/jquery-migrate-1.2.1.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='http://www.tvh.in/wp-content/plugins/simplest-gallery/lib/jquery.mousewheel-3.0.6.pack.js?ver=3.0.6'></script>
<script type='text/javascript' src='http://www.tvh.in/wp-content/plugins/simplest-gallery/fancybox/jquery.fancybox-1.3.4.js?ver=1.3.4'></script>
<link rel='stylesheet'   href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' type='text/css' media='all' />
<style>
    a { color:#970e76; }
    a:hover { color:#ab228a; }
	input,textarea {margin-bottom:5px;}
	.form-group{margin-bottom:5px;}
    .buttonColor, input[type="submit"] {
        background-color:#970e76;
        background: -webkit-linear-gradient(#970e76, #970e76); /* For Safari 5.1 to 6.0 */
        background: -o-linear-gradient(#970e76, #970e76); /* For Opera 11.1 to 12.0 */
        background: -moz-linear-gradient(#970e76, #970e76); /* For Firefox 3.6 to 15 */
        background: linear-gradient(#970e76, #970e76); /* Standard syntax */
    }

    .buttonColor:hover, input[type="submit"]:hover {
        background: -webkit-linear-gradient(#ab228a, #ab228a); /* For Safari 5.1 to 6.0 */
        background: -o-linear-gradient(#ab228a, #ab228a); /* For Opera 11.1 to 12.0 */
        background: -moz-linear-gradient(#ab228a, #ab228a); /* For Firefox 3.6 to 15 */
        background: linear-gradient(#ab228a, #ab228a); /* Standard syntax */
    }
.lp_menu ul  li a.active,.lp_menu ul  li a.active:focus{color:#970e76;}
    .buttonColor, input[type="submit"] { border:1px solid #790058; }
    .icon-button-user { border-right:1px solid #790058; }

    .nav.navbar-nav .current-menu-item a { box-shadow: inset 0 -4px 0px #970e76; }
    .nav.navbar-nav li a:hover { color:#970e76; }

    .noUi-connect { background-color:#970e76 !important; }

    .tabSmall li a.current { 
        border:1px solid #790058;
        background-color:#970e76;
        background: -webkit-linear-gradient(#970e76, #970e76); /* For Safari 5.1 to 6.0 */
        background: -o-linear-gradient(#970e76, #970e76); /* For Opera 11.1 to 12.0 */
        background: -moz-linear-gradient(#970e76, #970e76); /* For Firefox 3.6 to 15 */
        background: linear-gradient(#970e76, #970e76); /* Standard syntax */
    }

.topspace{padding-top:60px;}
    h3 {
        color:#970e76;
        border-bottom:7px solid #970e76;
    }

    .filterHeader { background-color:#970e76; }
    .filterNav .current { background-color:#880067; }
    .filterNav .current:after { border-color:#880067 transparent; }
    .filterHeadButton { background-color:#880067; }

    .propertyCat_list li .current { background-color:#970e76; }
    .propertyCat_list li .current:after { border-color:#970e76 transparent; }
    .propertyCat_list li a:hover { color:#970e76; }
    .propertyContent a:hover { color:#970e76; }
    .propertyType { background-color:#970e76; }
    .price { color:#970e76; }
    .rowText .price span { color:#970e76 !important; }
    .forSale:hover { background:#970e76; }
    .page-numbers.current { background-color:#970e76; }
    .page-numbers:hover { background-color:#970e76; }

    .blogPost span a { color:#970e76; }
    .share-content { border-top:3px solid #970e76; }
    .quote { border-left:4px solid #970e76; }
    .commentText { border-left:4px solid #970e76; }
    .arrow-left { border-right:8px solid #970e76; }
    .commentText h1 { color:#970e76; }

    .topAgents.about h4 { color:#970e76; }

    .pricingTable h1 { color:#970e76; }
    .priceAmount { background-color:#970e76; }
    
    .nav.navbar-nav .sub-menu { background-color:#ffffff; }
    .nav.navbar-nav .sub-menu li a:hover { background-color:#f0f0f0; border-bottom-color:#e6e6e6; }
    footer { background-color:#ebebeb; }
    footer h4, footer label { color:#464646; }
    footer { color:#464646; }
    .bottomBar { background-color:#970e76; }
    .bottomBar { color:#ffffff; }
	
	.gallery .sliderControls span{margin:0px;margin-top: -70%;}
	.sb_fixed{position:fixed;top:80px;width:24%;background-color:#eee;
	padding:20px 10px;}
	.gallery .sliderControls .slider-next2{    margin-right: 60px;}
	.gallery .sliderControls .slider-prev2{margin-left: 30px;}
	
	.topbar{float:right;    margin-top: 5px;
    margin-bottom: 5px;}
	.broucher{background-color: #970e76;
    background: -webkit-linear-gradient(#970e76, #970e76);
    background: -o-linear-gradient(#970e76, #970e76);
    background: -moz-linear-gradient(#970e76, #970e76);
    background: linear-gradient(#970e76, #970e76);color:#fff;text-transform:capitalize;}
	.broucher:hover{color:#ddd;}
	.err{color:red;font-size:13px;}
	.topbar li{display:inline-block;margin:0px 15px;}
	.nav.navbar-nav li a{padding-top: 10px;text-transform:capitalize;
    padding-bottom: 10px;}
	.safe_txt{text-align:center;font-size:13px;}
	.lp_logo{position:absolute;left:15px;z-index: 1;top: 0px;}
	.tvh_logo{position:absolute;left:80px;top:8px;}
@media screen and (max-width: 1200px) and (min-width: 768px){
.navbar-collapse.collapse{display: block !important ;}
.navbar-toggle{display:none;}

}
@media all and (max-width:767px)
{
.navbar-collapse.collapse{display: none !important ;}
.navbar-toggle{display:block;margin-top:0px;}
  .sb_fixed{position:static;top:auto;width:100%;max-width:300px;margin:0px auto;}
.lp_wrap{margin-top:80px;}
.nav.navbar-nav{position:relative;z-index:88;    background: #fff;
    margin: 0px;}
	.navbar-default .navbar-collapse, .navbar-default .navbar-form{clear:both;}
    
}
@media all and (max-width:430px)
{
	.topbar{margin-bottom: 35px;
width: 100%;
text-align: center;}
body{min-width:320px;}
	.tvh_logo{top:30px;}
	.lp_logo{top:32px;}
}
</style>


<!-- Facebook Conversion Tracking Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1649638231774058');
  fbq('track', 'PageView');
  fbq('track', 'Lead');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1649638231774058&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-37195774-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-37195774-1');
</script>

</head>

<body class="single ">

		<div id="wrap" class="home_bg">
	<!-- Start Header -->

<header class="navbar yamm navbar-default navbar-fixed-top">

<div class="container">
	
   	<div class="navbar-header" style="position:relative;    width: 100%;">
	<ul class="topbar">
			<li><a href="tel:+91-44-7122-7122"><i class="fa fa-phone" aria-hidden="true"></i> +91-44 7122 7122</a></li>
			
		</ul>
		<div style="clear:both;"><div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
         <a  href="index.php" class="lp_logo">
           <img src="logo.png"/>
        </a>
		 <img src="tvh.png" class="tvh_logo"/>
    </div>
    <div class="navbar-collapse collapse lp_menu">

        <table class="menuTable" >
		
        <tr>
        <td>

        <!--  start login/register -->
                <!-- end login/register -->
		
        <!-- start main menu -->
        <ul  class="nav navbar-nav">
		<li ><a href="#overview">overview</a></li>
		<li ><a href="#specifications">Specifications</a></li>
		<li ><a href="#amenities">amenities</a></li>
		<li ><a href="#plan">plan</a></li>
		<li ><a href="#gallery">gallery</a></li>
</ul>        <!-- end main menu -->

        </td>
        </tr>
        </table>

    </div><!--/.navbar-collapse -->

</div><!-- end header container -->

</header><!-- End Header -->
		
				<div class="container" style="margin-top:130px;padding:20px;min-height:230px;" >
					<h2 style="color:#004b29;text-align:center;">Thank you. Will contact you soon.</h2>
				</div>
			
			
		</div>
		<div style="background:#c1bbbb;padding:10px;">
	<div class="container text-center">
		<h4 class="text-center" style="color:#fff;font-size:22px;">About <b>TVH</b></h4>
		<p>20 years | 7.1 Million Sq.Ft. Completed | 3000 + Happy Families | <img src="credai.png" /></p>
	</div>
</div>
<div class="bottomBar">
    <div class="container text-center">
       &#xA9; <span id="c_year"></span> - True Value Homes. All rights reserved. 
                    <br/>Design &amp; Development: <a href="http://www.bytindia.com/" rel="noindex,nofollow" target="_blank" style="color:black;">BYT</a>      
        </ul>
    </div>
</div><!-- end bottom bar -->
	<!--[if lt IE 9]>
        <script src="js/jquery-1.11.0.min.js"></script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
	<script src="jquery-2.1.0.min.js"></script>    

	

	 <script  src="bioep.js"></script>

	 <script>
		
			
			//$('.o_close').click(function(){$(".offer").fadeOut(300);});
			//window.onload = function() {   $(".offer").delay( 3000 ).fadeIn(300); }

	var d = new Date();
    var n = d.getFullYear();
    document.getElementById("c_year").innerHTML = n;
	

		
	 </script>

<!-- Google Code for LP Leads Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 832890602;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "2LKFCKv0y3UQ6s2TjQM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/832890602/?label=2LKFCKv0y3UQ6s2TjQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>



	</body>
</html>
