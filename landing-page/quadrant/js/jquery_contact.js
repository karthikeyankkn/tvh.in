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
type: "POST",
dataType: 'json',
url: "mail/enq_contact.php",
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
			$("#c_cont").show();
			$("#contactsize").val('');
			$("#contactphone").val('');
			$('#contactemail').val('');  
			$('#contactname').val(''); 
			$("#c_cont").html("<p style='color:#00BB2F'>Message Send Successfully.</p>");
        }
 
}  
});
}
return false;
});

});