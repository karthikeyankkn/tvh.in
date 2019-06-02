$(function() {


$("#contact_submit").click(function() {
var submit = $("#contact_submit").val();
var email = $("#contactemail").val();
var uname = $("#contactname").val();
var pho = $("#contactphone").val();
var size = $("#contactsize").val();
var file = $("#contactfile").val();
var pattern = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
if(uname =='')
{
			$("#c_quotes").show();
			$("#c_quotes").html("<p class='c_quotes'>*Enter Your Name</p>");

}
else if(email =='')
{
			$("#c_quotes").show();
			$("#c_quotes").html("<p class='c_quotes'>*Enter Your Email-ID</p>"); 
			

}
else if(!pattern.test(email))
{
			$("#c_quotes").show();
			$("#c_quotes").html("<p class='c_quotes'>*Enter Valid Email-ID</p>");
}
else if(pho =='')
{
			$("#c_quotes").show();
			$("#c_quotes").html("<p class='c_quotes'>*Enter Mobile Number</p>"); 
			

}
else if(size =='')
{
			$("#c_quotes").show();
			$("#c_quotes").html("<p class='c_quotes'>*Choose your preferred size</p>"); 
			

}
else if(file =='')
{
			$("#c_quotes").show();
			$("#c_quotes").html("<p class='c_quotes'>*Select looking for</p>"); 
			

}
else
{
$("#c_quotes").hide();
$('#c_ajax-loading-image').show();
$.ajax({
type: 'GET',
dataType: 'json',
url: 'http://quadrant.clearestate.in/mail/enq_contact.php',
data:{ email: email, uname: uname, pho: pho, size: size, file: file, submit: submit },
cache: true,
success: function(data){
if(data == 0)
		{
			
			$("#c_quotes").show();
			$('#c_ajax-loading-image').hide();
			$("#c_quotes").html("<p class='c_quotes'>Message Send  Unsuccessfull.</p>");
			
        }
 else 
		{
			$("#c_quotes").hide();
			$('#c_ajax-loading-image').hide();
			var url = window.location.href;
			window.location = "http://tvh.in/quadrant/thankyou.html";
        }
 
}  
});
}
return false;
});

$("#interest_submit").click(function() {
var submit = $("#interest_submit").val();
var email = $("#youremail").val();
var uname = $("#yourname").val();
var pho = $("#field_phone").val();
var pattern = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
if(uname =='')
{
			$("#quotes").show();
			$("#quotes").html("<p class='quotes'>*Enter Your Name</p>");

}
else if(email =='')
{
			$("#quotes").show();
			$("#quotes").html("<p class='quotes'>*Enter Your Email-ID</p>"); 
			

}
else if(!pattern.test(email))
{
			$("#quotes").show();
			$("#quotes").html("<p class='quotes'>*Enter Valid Email-ID</p>");
}
else if(pho =='')
{
			$("#quotes").show();
			$("#quotes").html("<p class='quotes'>*Enter Mobile Number</p>"); 
			

}
else
{
$("#quotes").hide();
$('#ajax-loading-image').show();
$.ajax({
type: 'GET',
dataType: 'json',
url: 'http://quadrant.clearestate.in/mail/enq_save.php',
data:{ email: email, uname: uname, pho: pho, submit: submit },
cache: true,
success: function(data){
if(data == 0)
		{
			
			$("#quotes").show();
			$('#ajax-loading-image').hide();
			$("#quotes").html("<p class='quotes'>Message Send  Unsuccessfull.</p>");
			
        }
 else 
		{
			$("#quotes").hide();
			$('#ajax-loading-image').hide();
			var url = window.location.href;
			window.location = "http://tvh.in/quadrant/thankyou.html";
        }
 
}  
});
}
return false;
});

});