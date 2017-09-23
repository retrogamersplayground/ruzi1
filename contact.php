<html lang="eng">
<head>
  
    <meta charset="uft-8">
  
  

  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="/stylesheet.css">                                                                                                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>                                                                                                  
  
 
  
  
<style>


    a:link {color: #212121; text-decoration: none; }
    a:visited {color: #212121; text-decoration: none; }
    a:hover {color: #5dfc0a; text-decoration: none; }

    
   </style>
 </head>
  

    
 <?php include_once("template_navigation.php");?>
  



 <div class="container-fluid background-color text-center">
<div class="container-fluid divider-color text-primary-color">
  


      
        

    
    
    
       
    </div>  
    
 <body> 

  <div class="container-fluid inline-block primary-color text-primary-color"> 
   <header>
     </br>  
     
     <h1>  Ruzi</h1>
   <img class="largest-image thick-gray-border" src=" https://s5.postimg.org/4fmpazifb/IMG_0674.jpg  "></br></img>
    <h2>Taking the Distance Out of Delivery</h2></br>
   </header>
   </div>


</br>
<form id="my_form" onsubmit="submitForm(); return false;">
  <p><input id="n" placeholder="Name" required></p>
  <p><input id="e" placeholder="Email Address" type="email" required></p>
  <textarea id="m" placeholder="write your message here" rows="10" required></textarea>
  <p><input id="mybtn" type="submit" value="Submit Form"> <span id="status"></span></p>
</form>

    
    </br>   
   <script>
function _(id){ return document.getElementById(id); }
function submitForm(){
	_("mybtn").disabled = true;
	_("status").innerHTML = 'please wait ...';
	var formdata = new FormData();
	formdata.append ( "n", _("n").value );
	formdata.append ( "e", _("e").value );
	formdata.append ( "m", _("m").value );
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "example_parser.php" );
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
    
</div>
</br>
<?php include_once("template_footer.php");?>
   </div>
    </body>
  </div>
</html>