function submitAJAXForm(sub)
		{
			//alert('yes');
					if(document.getElementById('d_name').value=='' || document.getElementById('d_name').value=='Name*')
						{
					
						//alert('name');
						document.getElementById('error_name').innerHTML='* Please enter your Name';
						myForm.d_name.focus();
						return false;
						}
						else
						{
						document.getElementById('error_name').innerHTML="";
						}
						
						if(document.getElementById('d_email').value=='' || document.getElementById('d_email').value=='Email*')
						{					
						//alert('Please enter your Email');
						document.getElementById('error_email').innerHTML='* Please enter your Email';
						myForm.d_email.focus();
						return false;
						}
						else
						{
						document.getElementById('error_email').innerHTML="";
						}
					
						 
						 if(document.getElementById('d_email').value!='')
						
						{
								 var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
								  if(reg.test(document.getElementById('d_email').value) == false) 
									{
										//alert('Invalid Email Address');
										document.getElementById('error_email').innerHTML= "* Invalid Email Address";
										myForm.d_email.focus();
										return false;
									}
											   
									 else 
										{
										document.getElementById('error_email').innerHTML="";
										}
						}						
						
						if(document.getElementById('d_mobile').value=='' || document.getElementById('d_mobile').value=='Mobile*')
						{
					
						//alert('phoneNumber');
						document.getElementById('error_phone').innerHTML='* Please enter your Phone No';
						myForm.d_mobile.focus();
						return false;
						}
						
						if(document.getElementById('d_mobile').value!='')
						{
										var reg = /^([0-9]{10})$/
										if(reg.test(document.getElementById('d_mobile').value) == false) 
										 {
										 // alert ("Please enter 10 digit Phone Number");
										   document.getElementById('error_phone').innerHTML= "* Please enter 10 digit Phone Number";
											myForm.d_mobile.focus();
											return false;
										}
										else
										{
										document.getElementById('error_phone').innerHTML="";
										}
						 }
			document.getElementById('d_submit').disabled = 'disabled';
	
	return true;
		}
function submitExitForm(sub)
		{
			//alert('yes');
					if(document.getElementById('e_name').value=='' || document.getElementById('e_name').value=='Name*')
						{
					
						//alert('name');
						document.getElementById('e_error_name').innerHTML='* Please enter your Name';
						exitForm.e_name.focus();
						return false;
						}
						else
						{
						document.getElementById('e_error_name').innerHTML="";
						}
						
						if(document.getElementById('e_email').value=='' || document.getElementById('e_email').value=='Email*')
						{
					
						//alert('Please enter your Email');
						document.getElementById('e_error_email').innerHTML='* Please enter your Email';
						exitForm.e_email.focus();
						return false;
						}
						else
						{
						document.getElementById('e_error_email').innerHTML="";
						}
					
						 
						 if(document.getElementById('e_email').value!='')
						
						{
								 var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
								  if(reg.test(document.getElementById('e_email').value) == false) 
									{
										//alert('Invalid Email Address');
										document.getElementById('e_error_email').innerHTML= "* Invalid Email Address";
										exitForm.e_email.focus();
										return false;
									}
											   
									 else 
										{
										document.getElementById('e_error_email').innerHTML="";
										}
						}						
						
						if(document.getElementById('e_mobile').value=='' || document.getElementById('e_mobile').value=='Mobile*')
						{
					
						//alert('phoneNumber');
						document.getElementById('e_error_phone').innerHTML='* Please enter your Phone No';
						exitForm.e_mobile.focus();
						return false;
						}
						
						if(document.getElementById('e_mobile').value!='')
						{
										var reg = /^([0-9]{10})$/
										if(reg.test(document.getElementById('e_mobile').value) == false) 
										 {
										 // alert ("Please enter 10 digit Phone Number");
										   document.getElementById('e_error_phone').innerHTML= "* Please enter 10 digit Phone Number";
											exitForm.e_mobile.focus();
											return false;
										}
										else
										{
										document.getElementById('e_error_phone').innerHTML="";
										}
						 }
			return true;
	
	document.getElementById('ext_submit').disabled = 'disabled';
		}

		
		
function hide_text(val)
{
	if(val.value == val.defaultValue) val.value = ""; 
}
function show_text(val)
{
	
	 if(val.value == "") val.value = val.defaultValue;
}
