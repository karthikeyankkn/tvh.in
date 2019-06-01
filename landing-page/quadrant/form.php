<!DOCTYPE html>
<html lang="en">
<head>
<title>Most Luxurious 3 & 4 Bed homes, Ready to move at LB road Adyar</title>

<!-- custom-theme -->
<meta charset="utf-8"/> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Expansive super sized luxury homes with the luxury of moving in now. Feast your eyes on spectacular views of Bay of Bengal & Adyar Theosophical society gardens & Chenna's cityscape. Luxuriously designed 3 &4 Bed residences starting from 4.5Cr, Private deals & discounts upto 51Lakh." />

<!-- //custom-theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
</head>
	
<body>
	
<?php if ($_POST['submit']) { 
$name = ucwords($_POST['name']);
$phone = $_POST['phone'];
$customer_email = $_POST['email'];
$srd = "5ae0388f923d4a2d91bcf544";

// sell.do integration
$input = array(
 "sell_do" => array(
         "form" => array(
    			 "lead" => array(
    			 "email" => $customer_email,
    			 "name" => $name,
    			 "phone" => $phone,
    					    	),
				    	),
	     "campaign" => array(
							"id" => "5af18aad923d4a0863e9ed85", 
							"srd" => "5ae0388f923d4a2d91bcf544",
					     ),
	    	),
  	"api_key" => "f21ad5f3f2587aaf1a46efc7eacb2e70"
 );

$url = "http://estate.sell.do/api/leads/create"; 
}
?>

				<form action="http://estate.sell.do/api/leads/create_leads.xml" method="POST">
                
							<div class="styled-input agile-styled-input-top">
								<label>Full Name</label>
								<input type="text" name="name" id="name">
								<span></span>
							</div>
                            
							<div class="styled-input agile-styled-input-top">
								<label>Phone</label>
								<input type="text" name="phone" id="phone"> 
								<span></span>
							</div>
							
							<div class="styled-input">
								<label>Email</label>
								<input type="text" name="email" id="email"> 
								<span></span>
							</div> 
						
						<input type="submit" value="SEND" id="contact_submit">
                        
					</form>
</body>
</html>