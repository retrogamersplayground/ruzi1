<?php require('includes/config.php'); 

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); } 

//define page title
$title = 'Members Page';

//include header template
require('layout/header.php'); 
?>

<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			
				<h2>Welcome to Ruzi <?php echo $_SESSION['username']; ?></h2>
				<p><a href='logout.php'>Logout</a></p>
				<hr>

		</div>
	</div>


</div>
<html lang="eng">
<head>
  
    <meta charset="uft-8">
  
  

  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="/stylesheet.css">                                                                                                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>                                                                                                  
  
  
  
  
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
   <h2>Taking the Distance Out of Dining</h2>
   </header>
   </div>
<div class="fluid-container" id="about"></br>
<h3>About Ruzi</h3><hr>
  <p class="second-text-color"><h4>Ruzi means sustenance.</h4><hr>


 

Ruzi is Azerbaijani for sustenance and sustenance is a quintessential for growth and development.  We at Ruzi believe that sustenance is more than just an individual experience, we believe in connecting people with food, regardless of where you live.  From small, rural towns to major metropolises, we want to bring your sustenance to your doorstep.  Above all, our goal is to take the distance out of dining and to get people and families back to spending their time how they want, without having to trade limited cuisine choices.
<hr>
<section class="accent-color">
<h1>How it works</h1>
<hr>
<ul>
<li></li><h3>Select from our partners by clicking the partner's button or by clicking restuarant partners on the navigation bar.</h3></li></br><hr>
<li></li><h3>Visit the partner's webpage to see their menu.</h3></li></br><hr>
<li></li><h3>Call and place your order. Pay over the phone.</h3></li></br><hr>
<li></li><h3>Complete the delivery request form to request delivery. Enter the name on the order, the address you want your order delivered to, your email, and your mobile phone information.</h3></li><ber></br><hr>
<li></li><h3>Click the paypal payment button to complete payment for delivery.</h3></li></br><hr>
<li></li><h3>Once payment is confirmed you are finished. Our driver will message you with an estimate arrival time once he picks up your order!</h3></li></br><hr>
</ul>
</section>
  <div class="container-fluid divider-color"></br>
   <h1 class="text-primary-color"> Restaurant Partners</h1></br><hr>
   <h1 class="text-primary-color">Click the image to visit our restaurant partners listing.</h1> </br>
  <a href="/partners2.php"><img src="https://s5.postimg.org/lubix04xz/IMG_0682.jpg" class="thick-gray-border smaller-image"></img></a>
   
 

<hr>
<h1 class="text-primary-color">If you have all ready called to place your order click the button to request delivery and pay the delivery fee.</h1> </br>
<center>
<a href="/order_now.php"><img src="https://s5.postimg.org/8ow0qwb2f/IMG_0681.jpg" class="thick-gray-border smaller-image"> </img></a></br></br></br>
</center>
</div>
</br>
<?php include_once("template_footer.php");?>
   </div>
    </body>
  </div>
</html>