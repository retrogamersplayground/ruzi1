</br>
<form id="my_form" onsubmit="submitForm(); return false;">
  <p><input id="n" placeholder="Full Name" required></p>
  <p><input id="e" placeholder="Email Address" type="email" required></p>
  
  <p><input id="sa" placeholder="Deliverty Address" required></p>
 
  
  <p><input id="m" placeholder="Mobile Number" required></p>
  <p><input id="mc" placeholder="Mobile Carrier" required></p>
  
  <p><input id="r" placeholder="Restaurant" required></p>
  
  <p><input id="mybtn" type="submit" value="Request Delivery"> <span id="status"></span></p>
</form>

    
    </br>

<script>
function _(id){ return document.getElementById(id); }
function submitForm(){
	_("mybtn").disabled = true;
	_("status").innerHTML = 'please wait ...';
	var formdata = new FormData();
	formdata.append( "n", _("n").value );
	formdata.append( "e", _("e").value );

	formdata.append( "da", _("da").value );


	formdata.append( "m", _("m").value );
	formdata.append( "mc", _("mc").value );
	formdata.append( "r", _("r").value );
	
	
	
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "order_parser.php" );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			if(ajax.responseText == "success"){
				_("my_form").innerHTML = '<h2>Thanks '+_("n").value+', your message has been sent.</h2>';
			} else {
				_("status").innerHTML = ajax.responseText;
				_("mybtn").disabled = false;
			}
		}
	}
	ajax.send( formdata );
}
</script>