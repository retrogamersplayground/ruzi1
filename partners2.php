<?php include_once("admin/mysqli_connection.php");?>



<html lang="eng">
<head>
  
    <meta charset="uft-8">
  
  

  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="/stylesheet.css">                                                                                                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
   <h2>Taking the Distance Out of Dining</h2>
   </header>
   </div>





  
   <h1 class="text-primary-color"> Restaurant Partners</h1>
  <hr> 
   

<h2>Partners in Liberty Kentucky</h2>

<h3>Click on the image to navigate to Partner's Webpage</h3>

<?php include_once("sweetBeansLibertyKy.php");?>
  <hr>



<div class="container">
<?php
$res=mysqli_query($link, "SELECT * FROM vendor WHERE city = 'Liberty'");
while($row=mysqli_fetch_array($res))

{
?>
 



  <div class="box">


<a href="<?php echo $row["link"]; ?>" target="_blank"><img src="<?php echo $row["picture"]; ?>" alt="" /></a></br>

Link:<?php echo $row["link"];?></br>

Street:<?php echo $row["street"];?></br>
City:<?php echo $row["city"];?></br>
Phone:<?php echo $row["phone"];?></br>
Phone Order:<?php echo $row["porder"];?></br>
Online Order:<?php echo $row["oorder"];?></br>



  </div> <!--box-->       

<?php
}

?>

</div>



  </br>
  <hr>
 <h2>Partners in Stanford Kentucky</h2>
<?php include_once("bluebirdStanfordKy.php");?>
 </br>
 <hr>
 <?php include_once("kentuckyDepotStanfordKy.php");?>
 </br>
 </hr>
 <?php include_once("chinaBuffetStanfordKy.php");?>
 </br>
 </hr>
 
 
 
<div class="container">
<?php
$res=mysqli_query($link, "SELECT * FROM vendor WHERE city = 'Stanford'");
while($row=mysqli_fetch_array($res))

{
?>
 



  <div class="box">


<a href="<?php echo $row["link"]; ?>" target="_blank"><img src="<?php echo $row["picture"]; ?>" alt="" /></a></br>

Link:<?php echo $row["link"];?></br>

Street:<?php echo $row["street"];?></br>
City:<?php echo $row["city"];?></br>
Phone:<?php echo $row["phone"];?></br>
Phone Order:<?php echo $row["porder"];?></br>
Online Order:<?php echo $row["oorder"];?></br>



  </div> <!--box-->       

<?php
}

?>

</div>
 
 
 
 
 
<h2>Partners in Danville Kentucky</h2>
</br>
</br>








<div class="container">
<?php
$res=mysqli_query($link, "SELECT * FROM vendor WHERE city = 'Danville'");
while($row=mysqli_fetch_array($res))

{
?>
 



  <div class="box">


<a href="<?php echo $row["link"]; ?>" target="_blank"><img src="<?php echo $row["picture"]; ?>" alt="" /></a></br>

Link:<?php echo $row["link"];?></br>

Street:<?php echo $row["street"];?></br>
City:<?php echo $row["city"];?></br>
Phone:<?php echo $row["phone"];?></br>
Phone Order:<?php echo $row["porder"];?></br>
Online Order:<?php echo $row["oorder"];?></br>



  </div> <!--box-->       

<?php
}

?>

</div>
</br>
<h2>Partners in Richmond</h2>


<div class="container">
<?php
$res=mysqli_query($link, "SELECT * FROM vendor WHERE city = 'Richmond'");
while($row=mysqli_fetch_array($res))

{
?>
 



  <div class="box">


<a href="<?php echo $row["link"]; ?>" target="_blank"><img src="<?php echo $row["picture"]; ?>" alt="" /></a></br>

Link:<?php echo $row["link"];?></br>

Street:<?php echo $row["street"];?></br>
City:<?php echo $row["city"];?></br>
Phone:<?php echo $row["phone"];?></br>
Phone Order:<?php echo $row["porder"];?></br>
Online Order:<?php echo $row["oorder"];?></br>



  </div> <!--box-->       

<?php
}

?>

</div>



<hr>
</br>
After calling to order your food please complete this form to request delivery!
</br>
<hr>
<?php include_once("order2.php");?>
</div>
</br>

</hr>
<form align="center" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="DK2NKM5HLZJYE">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</hr>
<br>
<br>
<?php include_once("template_footer.php");?>
    </body>
  </div>
</html>