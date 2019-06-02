$(function() {


$("#form-contact-submit").click(function() {
var submit = $("#form-contact-submit").val();
var email = $("#form-contact-email").val();
var uname = $("#form-contact-name").val();
var file = $("#form-contact-message").val();
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
else if(file =='')
{
			$("#c_quotes").show();
			$("#c_quotes").html("<p class='c_quotes'>*Enter your message</p>"); 
			

}
else
{
$("#c_quotes").hide();
$('#c_ajax-loading-image').show();
$.ajax({
type: "POST",
dataType: 'json',
url: "../ouranya-bay/mail/enq_contact.php",
data:{ email: email, uname: uname, file: file, submit: submit },
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
			window.top.location.href = "http://obay.clearestate.in/thankyou.html";
        }
 
}  
});
}
return false;
});

$("#interest_submit").click(function() {
var submit = $("#interest_submit").val();
var email = $("#form-hero-email").val();
var uname = $("#form-hero-name").val();
var pho = $("#form-hero-contact").val();
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
type: "POST",
dataType: 'json',
url: "ouranya-bay/mail/enq_save.php",
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
			window.top.location.href = "http://obay.clearestate.in/thankyou.html";
        }
 
}  
});
}
return false;
});

});