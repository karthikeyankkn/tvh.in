<?php session_start(); 
if ($_GET['utm_source']!='') { $_SESSION['temp']=$_GET['utm_source'].'/'.$_GET['utm_campaign']; }
else if ($_GET['gclid']!='') { $_SESSION['temp']='Google'; }
else { $_SESSION['temp']='Others'; } 
?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TVH Crossway</title>

<!-- favicon -->
<link rel="shortcut icon" href="http://www.tvh.in/wp-content/themes/easyliving/favicon.ico" />

<link rel='stylesheet'   href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' type='text/css' media='all' />
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
<script type='text/javascript' src='http://www.tvh.in/wp-content/plugins/simplest-gallery/lib/jquery-1.10.2.min.js?ver=1.10.2'></script>
<script type='text/javascript' src='http://www.tvh.in/wp-includes/js/comment-reply.min.js?ver=3.8.21'></script>
<script type='text/javascript' src='http://www.tvh.in/wp-content/plugins/simplest-gallery/lib/jquery-migrate-1.2.1.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='http://www.tvh.in/wp-content/plugins/simplest-gallery/lib/jquery.mousewheel-3.0.6.pack.js?ver=3.0.6'></script>
<script type='text/javascript' src='http://www.tvh.in/wp-content/plugins/simplest-gallery/fancybox/jquery.fancybox-1.3.4.js?ver=1.3.4'></script>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '682544628832082');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=682544628832082&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<style>
.navbar-toggle{margin:0px;}
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
	.tvh_logo{position:absolute;left:80px;top:23px;}
@media screen and (max-width: 1200px) and (min-width: 768px){
.navbar-collapse.collapse{display: block !important ;}
.navbar-toggle{display:none;}

}
@media all and (max-width:767px)
{
.navbar-collapse.collapse{display: none !important ;}
.navbar-toggle{display:block;margin-top:0px;}
  .sb_fixed{position:static;top:auto;width:100%;max-width:300px;margin:0px auto;}
.lp_wrap{margin-top:120px;}
.nav.navbar-nav{position:relative;z-index:88;    background: #fff;
    margin: 0px;}
	.navbar-default .navbar-collapse, .navbar-default .navbar-form{clear:both;}
    .sliderControls{margin-top:40%;}
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

<!-- Facebook Pixel Code -->
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
<script src='//trkr.scdn1.secure.raxcdn.com/t/5587b48e3bb2f81d770004c8.js'></script>
</head>


<body class="single single-properties postid-64">



<!-- Start Header -->

<header class="navbar yamm navbar-default navbar-fixed-top">

<div class="container">
	
   	<div class="navbar-header" style="position:relative;    width: 100%;">
	<ul class="topbar">
			<li><a href="tel:+91-44-7122-7122"><i class="fa fa-phone" aria-hidden="true"></i> +91-44 7122 7122</a></li>
			<li><a onclick="document.getElementById('d_name').focus(); return false;" class="broucher btn">Brochure</a></li>
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

<div id="bio_ep_bg"></div>
<div id="bio_ep" style="display:none;width:600px;max-width:600px;width:auto;padding: 20px;height:auto;background-color: #fff;">
           <h3 class="tab_title"><span class="top_line"></span>
					Looking to know more? Leave your details to get in touch!
					<span class="bottom_line"></span></h3>
    <div id="bio_ep_close" style="top:0px;height:auto;padding: 8px 14px;font-size: 14px;width:auto;">X</div>
   <!-- <form  id="exitForm" name="exitForm" method="post" action="thankyou.php" onSubmit="submitExitForm(this);">
							<div id="exit_success_screen"></div>
								<div>
									<input type="text" name="e_name" id="e_name" placeholder="Name*" onfocus="hide_text(this)" onblur="show_text(this)" required />
									<span id="e_error_name" class="err"></span>
								</div>
								<div>
								
									<input type="text" name="e_email" id="e_email" placeholder="Email*" onfocus="hide_text(this)" onblur="show_text(this)" required /> 
									<span id="e_error_email" class="err"></span>
								</div>
								<div>
									<input type="text" name="e_mobile" id="e_mobile" placeholder="Mobile*" onfocus="hide_text(this)" onblur="show_text(this)" required  /> 
									<span id="e_error_phone" class="err"></span>
								</div>
								<div>
									<textarea placeholder="Comments" rows="4" cols="50" data-validator="string" name="e_comments" class="form-control" value="Comments" onfocus="hide_text(this)" onblur="show_text(this)" ></textarea>
								</div>
								<div>
									<select data-validator="string" class="form-control" name="e_time"><option value="">Select convenient time to call</option><option value="8am to 9am">8am To 9am</option><option value="9am to 10am">9am To 10am</option><option value="10am to 11am">10am To 11am</option><option value="11am to 12pm">11am To 12pm</option><option value="12pm to 1pm">12pm To 1pm</option><option value="1pm to 2pm">1pm To 2pm</option><option value="2pm to 3pm">2pm To 3pm</option><option value="3pm to 4pm">3pm To 4pm</option><option value="4pm to 5pm">4pm To 5pm</option><option value="5pm to 6pm">5pm To 6pm</option><option value="6pm to 7pm">6pm To 7pm</option><option value="7pm to 8pm">7pm To 8pm</option></select>
									<br/>
								</div>
								<div>
								<input type="hidden" name="e_source" id="e_source" value="<?php echo $_SESSION['temp']; ?>" />
								<input type="hidden" name="e_form_name" id="e_form_name" value="popup form" />
									<input type="submit" id="ext_submit" name="ext_submit" class="btn " value="GET DETAILS" onClick="return submitExitForm(this); return false;" />
								</div>
								<p class="safe_txt"><i class="fa fa-lock" aria-hidden="true"></i> &nbsp;Your information is safe with us<p>
							</form>-->
							<script src='//trkr.scdn1.secure.raxcdn.com/t/forms/5587b48e3bb2f81d770004c8/5ad6df3c923d4a606d116eb8.js' data-form-id='5ad6df3c923d4a606d116eb8'></script>
</div>


<div class="container">
	<div class="row lp_wrap" >		
		<div class="col-xs-12 col-sm-4 col-md-3 pull-right" >
		<div class="sb_fixed" > 
		
	  <div data-form-id="5634986e9ddc787cd80001c5"><div class="sell_do_form_container">
	 <!-- <form  id="myForm" name="myForm" method="post" action="thankyou.php" onSubmit="submitAJAXForm(this);">
							<div id="exit_success_screen"></div>
							 <h3 class="title text-center" style="display:block;">ENQUIRE NOW FOR DETAILS</h3>
								<div>
								<label>Name</label>
									<input type="text" name="d_name" id="d_name" placeholder="Name*" onfocus="hide_text(this)" onblur="show_text(this)" required />
									<span id="error_name" class="err"></span>
								</div>
								<div>
								<label>Email</label>
									<input type="text" name="d_email" id="d_email" placeholder="Email*" onfocus="hide_text(this)" onblur="show_text(this)" required /> 
									<span id="error_email" class="err"></span>
								</div>
								<div>
								<label>Phone</label>
									<input type="text" name="d_mobile" id="d_mobile" placeholder="Mobile*" onfocus="hide_text(this)" onblur="show_text(this)" required  /> 
									<span id="error_phone" class="err"></span>
								</div>
								<div>
								<label>Comments</label>
									<textarea placeholder="Comments" rows="4" cols="50" data-validator="string" name="d_comments" class="form-control" value="Comments" onfocus="hide_text(this)" onblur="show_text(this)" ></textarea>
								</div>
								<div>
								<label>Convenient Time To Call You</label>
									<select data-validator="string" class="form-control" name="d_time_to"><option value="">Select convenient time to call</option><option value="8am to 9am">8am To 9am</option><option value="9am to 10am">9am To 10am</option><option value="10am to 11am">10am To 11am</option><option value="11am to 12pm">11am To 12pm</option><option value="12pm to 1pm">12pm To 1pm</option><option value="1pm to 2pm">1pm To 2pm</option><option value="2pm to 3pm">2pm To 3pm</option><option value="3pm to 4pm">3pm To 4pm</option><option value="4pm to 5pm">4pm To 5pm</option><option value="5pm to 6pm">5pm To 6pm</option><option value="6pm to 7pm">6pm To 7pm</option><option value="7pm to 8pm">7pm To 8pm</option></select>
									<br/>
								</div>
								<div>
								<input type="hidden" name="d_source" id="d_source" value="<?php echo $_SESSION['temp']; ?>" />
								<input type="hidden" name="d_form_name" id="d_form_name" value="default form" />
									<input type="submit" id="d_submit" name="d_submit" class="btn " value="Submit" onClick="return submitAJAXForm(this); return false;" />
								</div>
								<p class="safe_txt"><i class="fa fa-lock" aria-hidden="true"></i> &nbsp;Your information is safe with us</p>
							</form>-->
							<script src='//trkr.scdn1.secure.raxcdn.com/t/forms/5587b48e3bb2f81d770004c8/5ad6df3c923d4a606d116eb8.js' data-form-id='5ad6df3c923d4a606d116eb8'></script>
	  </div></div>
	</div>

		</div>
		<div class="col-sm-8 col-md-9 pull-left col-xs-12 "> <div class="gallery" style="background-color:white;margin:90px 0px 30px 0px;">
                            <ul class="bxslider3">
								<li><img src="banner/tvh-crossway-plots-location.png" alt="" /></li>
								<li><img src="banner/crossway-approval.png" alt="" /></li>
							</ul>
                            <div class="sliderControls">
                                <span class="slider-prev2"></span>
                                <span class="slider-next2"></span>
                            </div>
                        </div>
                       


                        <div class="row" id="overview" style="padding-top:20px;">
                            <div class="col-lg-4">
                                <div class="overview">
                                <h4>OVERVIEW</h4>
                                <ul class="overviewList">
                                    <li>Property Type <span>Residential Plots</span></li>
                                    <li>Land Area <span>3.82 Acres</span></li>
                                    <li>Construction Area<span>0.16 M Sqft</span></li>
                                    <li>No of Floors <span>n/a</span></li>
                                    <li>Min Unit Size <span>650 Sqft</span></li>
                                    <li>Max Unit Size <span>2400 Sqft</span></li>
                                    <li>Possession <span>March 2016</span></li>
                                    <li>Location <span>Sholinganallur</span></li>
                                </ul>
                                </div>

                                <!-- START MAP -->
                                    
                                                                <!-- END MAP -->
                            </div><!-- end col -->
							
                            <div class="col-lg-8 topspace">
                                                                
                                
                                <div class="propertySingleContent " ><h4>Sholinganallur</h4><h3>Project Overview</h3><div class="divider"></div><p><strong>Double Sandosham </strong>– Plots + True Value Package</p><p>Project development size – 3.82 acres</p><h3>The Plots</h3><div class="divider"></div><p>Plots: 650 to 2400 Sq.ft<br /> Commercial Developments : 3000 Sq.ft onwards</p><h3>True Value Package</h3><div class="divider"></div><p>Planning and building Approvals<br /> Architecture and Interior Design Solutions<br /> Construction Solutions<br /> Landscaping<br /> Services and Supply Solutions</p><h3>Configuration</h3><div class="divider"></div><p>Approval No: LA/WDCN 15/00002/2016<br /> Infrastructure works have started<br /> Most of the peripheral work is completed</p><h3>Strategic Location</h3><div class="divider"></div><p>IT corridor of Chennai<br /> Great social infrastructure<br /> Reputed schools, colleges, hospitals and malls.</p><h3>Site Advantage</h3><div class="divider"></div><p>– Located just opposite to Paypal &amp; Ebay<br /> – Before Sholinganallur junction on OMR<br /> – Easy connectivity<br /> – 30 feet &amp; 24 feet internal roads</p><h3>Close Proximity</h3><div class="divider"></div><p>– Sholinganallur, Thoraipakkam, ECR Link Road, etc. which are equidistant from OMR and are priced 50-100% higher</p><p>– It is one of the important stops on OMR</p><p>– Karapakkam is home to a number of BPO, IT/ITES companies and other IT/ITES companies</p><p>– Companies such as Mahindra Satyam, Pantheon, Scope International, Tata Consultancy Services, Accenture India, Cognizant Technology Solutions, Photon Infotech and Infosys are situated in the vicinity</p><p>– McDonald’s, Pizza Hut, Hot Chips, Dhaaba, Andhra Mess, Locaccia, Baskin Robbins, Pizza Corner, Cakes and Bakes, Fortune Hotel, and Nallas Restaurant are located along this stretch of road.</p>
<h3 id="amenities" class="topspace">General amenities</h3>
<div class="divider"></div>
<p><img class="icon" alt="" src="http://www.tvh.in/wp-content/uploads/2015/07/garden.png"> LUSH GREENERY</p>
<p><img class="icon" alt="" src="http://www.tvh.in/wp-content/uploads/2015/07/garden.png"> LANDSCAPE GARDEN</p>

<h3 id="plan" class="topspace">Floor plan</h3>
<div class="divider"></div>

	<style type="text/css">
					#gallery-0 {
						margin: auto;
					}
					#gallery-0 .gallery-item {
						float: left;
						margin-top: 10px;
						text-align: center;
						width: 32%;
					}
					#gallery-0 img {
						border: 2px solid #cfcfcf;
					}
					#gallery-0 .gallery-caption {
						margin-left: 0;
					}
	</style>
<script type="text/javascript">
$(document).ready(function() {
	/*
	 *  Simple image gallery. Uses default settings
	 */
 var slider2 = $('.bxslider3').bxSlider({
      pagerCustom: '#bx-pager',
      preloadImages: 'all',
      infiniteLoop: false,
      hideControlOnEnd: true,
      nextSelector: '.slider-next2',
      prevSelector: '.slider-prev2',
      nextText: '<img src="http://www.tvh.in/wp-content/themes/easyliving/images/slider-next2.png" alt="Next" />',
      prevText: '<img src="http://www.tvh.in/wp-content/themes/easyliving/images/slider-prev2.png" alt="Previous" />',
      onSliderLoad: function(){
            $(".bxslider3").animate({opacity: 1.0});
            $(".gallery #bx-pager").fadeIn();
            $(".gallery .sliderControls").fadeIn();
        }
    });
	$(".fancybox").fancybox({
		"transitionIn"		: "none",
		"transitionOut"		: "none",
		"titlePosition" 	: "over"
		
	});	

var elementPosition = $('.enquiry').offset();

$(window).scroll(function(){
//alert(elementPosition.top);
        if($(window).scrollTop() > elementPosition.top){
              $('.enquiry').addClass('sb_fixed');
        } else {
            $('.enquiry').removeClass('sb_fixed');
        }
});

});
</script>

	<div id="gallery-0" class="gallery galleryid-0 gallery-size-thumbnail"><dl class="gallery-item"><dt class="gallery-icon">
						<a class="fancybox" href="http://www.tvh.in/wp-content/uploads/2016/09/crossway-approval.png" rel="gallery-0"><img width="150" height="150" class="attachment-thumbnail" src="http://www.tvh.in/wp-content/uploads/2016/09/crossway-approval-150x150.png" /></a></dt></dl>

<dl class="gallery-item"><dt class="gallery-icon">
						<a class="fancybox" href="http://www.tvh.in/wp-content/uploads/2016/02/tvh-crossway-plots-location.png" rel="gallery-0"><img width="150" height="150" class="attachment-thumbnail" src="http://www.tvh.in/wp-content/uploads/2016/02/tvh-crossway-plots-location-150x150.png" /></a></dt></dl>



</div><br clear="all" />
<h3 id="gallery" class="topspace">Property gallery</h3>

	<style type="text/css">
					#gallery-1 {
						margin: auto;
					}
					#gallery-1 .gallery-item {
						float: left;
						margin-top: 10px;
						text-align: center;
						width: 32%;
					}
					#gallery-1 img {
						border: 2px solid #cfcfcf;
					}
					#gallery-1 .gallery-caption {
						margin-left: 0;
					}
	</style>
<script type="text/javascript">
$(document).ready(function() {
	/*
	 *  Simple image gallery. Uses default settings
	 */
	

 $('.lp_menu ul  li a').bind('click', function(event) {
 $('.lp_menu ul  li a').removeClass('active');
 $(this).addClass('active');
    var $anchor = $(this);
    var navHeight = $('.lp_menu').height();
    $('html, body').stop().animate({
      scrollTop: $($anchor.attr('href')).offset().top - navHeight
    }, 800);
    event.preventDefault();
  });

	$(".fancybox").fancybox({
		"transitionIn"		: "none",
		"transitionOut"		: "none",
		"titlePosition" 	: "over"
		
	});	
});
</script>

	<div id="gallery-1" class="gallery galleryid-1 gallery-size-thumbnail"><dl class="gallery-item"><dt class="gallery-icon">
						<a class="fancybox" href="http://www.tvh.in/wp-content/uploads/2016/11/TVH-Crossway-karappakam-5.jpg" rel="gallery-1"><img width="150" height="150" class="attachment-thumbnail" src="http://www.tvh.in/wp-content/uploads/2016/11/TVH-Crossway-karappakam-5-150x150.jpg" /></a></dt></dl>

<dl class="gallery-item"><dt class="gallery-icon">
						<a class="fancybox" href="http://www.tvh.in/wp-content/uploads/2016/11/TVH-Crossway-karappakam-1.jpg" rel="gallery-1"><img width="150" height="150" class="attachment-thumbnail" src="http://www.tvh.in/wp-content/uploads/2016/11/TVH-Crossway-karappakam-1-150x150.jpg" /></a></dt></dl>

<dl class="gallery-item"><dt class="gallery-icon">
						<a class="fancybox" href="http://www.tvh.in/wp-content/uploads/2016/11/TVH-Crossway-karappakam-3.jpg" rel="gallery-1"><img width="150" height="150" class="attachment-thumbnail" src="http://www.tvh.in/wp-content/uploads/2016/11/TVH-Crossway-karappakam-3-150x150.jpg" /></a></dt></dl>

<dl class="gallery-item"><dt class="gallery-icon">
						<a class="fancybox" href="http://www.tvh.in/wp-content/uploads/2016/11/TVH-Crossway-karappakam-4.jpg" rel="gallery-1"><img width="150" height="150" class="attachment-thumbnail" src="http://www.tvh.in/wp-content/uploads/2016/11/TVH-Crossway-karappakam-4-150x150.jpg" /></a></dt></dl>

<dl class="gallery-item"><dt class="gallery-icon">
						<a class="fancybox" href="http://www.tvh.in/wp-content/uploads/2016/11/TVH-Crossway-karappakam-2.jpg" rel="gallery-1"><img width="150" height="150" class="attachment-thumbnail" src="http://www.tvh.in/wp-content/uploads/2016/11/TVH-Crossway-karappakam-2-150x150.jpg" /></a></dt></dl>

<dl class="gallery-item"><dt class="gallery-icon">
						<a class="fancybox" href="http://www.tvh.in/wp-content/uploads/2016/11/TVH-Crossway-karappakam-9.jpg" rel="gallery-1"><img width="150" height="150" class="attachment-thumbnail" src="http://www.tvh.in/wp-content/uploads/2016/11/TVH-Crossway-karappakam-9-150x150.jpg" /></a></dt></dl>

<dl class="gallery-item"><dt class="gallery-icon">
						<a class="fancybox" href="http://www.tvh.in/wp-content/uploads/2016/11/TVH-Crossway-karappakam-8.jpg" rel="gallery-1"><img width="150" height="150" class="attachment-thumbnail" src="http://www.tvh.in/wp-content/uploads/2016/11/TVH-Crossway-karappakam-8-150x150.jpg" /></a></dt></dl>

<dl class="gallery-item"><dt class="gallery-icon">
						<a class="fancybox" href="http://www.tvh.in/wp-content/uploads/2016/11/TVH-Crossway-karappakam-7.jpg" rel="gallery-1"><img width="150" height="150" class="attachment-thumbnail" src="http://www.tvh.in/wp-content/uploads/2016/11/TVH-Crossway-karappakam-7-150x150.jpg" /></a></dt></dl>

<dl class="gallery-item"><dt class="gallery-icon">
						<a class="fancybox" href="http://www.tvh.in/wp-content/uploads/2016/11/TVH-Crossway-karappakam-6.jpg" rel="gallery-1"><img width="150" height="150" class="attachment-thumbnail" src="http://www.tvh.in/wp-content/uploads/2016/11/TVH-Crossway-karappakam-6-150x150.jpg" /></a></dt></dl>

</div>
<div class="divider"></div>

<h3>Location in map</h3>
<div class="divider"></div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.985281694682!2d80.22775961489147!3d12.908667390897168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525c7d231541a9%3A0xfa94e0b550afc2b9!2sTVH+Crossway+Layout!5e0!3m2!1sen!2sin!4v1556966450439!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


</div>

                                <!-- Start Amentities -->
                                                                <!-- End Amentities -->

                            </div><!-- end col -->
                        </div><!-- end row -->

                                                
	</div>
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


<script type="text/javascript">
    var slider_speed = "8000";
    var currency_symbol = "₹";
    var currency_symbol_position = "before";
    var filter_price_range_min = 0;
    var filter_price_range_max = 800000;
    var filter_price_range_start_min = 150000;
    var filter_price_range_start_max = 550000;
</script>
<script  src="form-validation.js"></script>
<script  src="bioep.js"></script>
<script>
var d = new Date();
    var n = d.getFullYear();
    document.getElementById("c_year").innerHTML = n;

		bioEp.init({
				width: 600,
				height: 600,
				cookieExp: 0
			});
</script>
<script type='text/javascript' src='http://www.tvh.in/wp-content/themes/easyliving/js/bootstrap.min.js?ver=3.8.21'></script>
<script type='text/javascript' src='http://www.tvh.in/wp-content/themes/easyliving/js/respond.js?ver=3.8.21'></script>
<script type='text/javascript' src='http://www.tvh.in/wp-content/themes/easyliving/js/jquery.bxslider.min.js?ver=4.1.1'></script>
<script type='text/javascript' src='http://www.tvh.in/wp-content/themes/easyliving/js/tabs.js?ver=3.8.21'></script>
<script type='text/javascript' src='http://www.tvh.in/wp-content/themes/easyliving/js/jquery.nouislider.all.min.js?ver=3.8.21'></script>
<script type='text/javascript' src='http://www.tvh.in/wp-content/themes/easyliving/js/jquery.isotope.min.js?ver=3.8.21'></script>
<script type='text/javascript' src='http://www.tvh.in/wp-content/themes/easyliving/js/custom.js?ver=3.8.21'></script>
<script src='http://dns.livserv.in?did=16321&pid=1'></script>
<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 832890602;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/832890602/?guid=ON&amp;script=0"/>
</div>
</noscript>

<script type="text/javascript">
  var _selldo = [];
  window.sell_do_form_rendered = function(){
    //you can do anything after form is rendered. For eg if you want to change the text of the submit button
    //simply add `$(".sell_do_form_container input[type=submit]").val("Submit");`
  }
  window.sell_do_form_successfully_submitted = function(data, event){

  window.location.href="thankyou.php";
  
  }
</script>

</body>
</html>
