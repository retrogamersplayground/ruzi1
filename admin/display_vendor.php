
    
<?php include_once("mysqli_connection.php");?>

<div class="container">
<?php
$res=mysqli_query($link, "SELECT * FROM vendor");
while($row=mysqli_fetch_array($res))

{
?>
 



  <div class="box">


<a href="<?php echo $row["link"]; ?>" target="_blank"><img src="<?php echo $row["picture"]; ?>" alt="" /></a>
vID:<?php echo $row["vID"];?></br>
Link:<?php echo $row["link"];?></br>
Name:<?php echo $row["name"];?></br>
Street:<?php echo $row["street"];?></br>
City:<?php echo $row["city"];?></br>
State:<?php echo $row["state"];?></br>
Zip:<?php echo $row["zip"];?></br>
Phone:<?php echo $row["phone"];?></br>
Phone Order:<?php echo $row["porder"];?></br>
Online Order:<?php echo $row["oorder"];?></br>



  </div> <!--box-->       

<?php
}

?>

</div>
    