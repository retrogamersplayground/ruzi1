

<?php include_once("mysqli_connection.php");?>

<style>

    .container{
        text-align:center;
    }

    .box{
    display:inline-block; /* so the children on the same line */
    height: auto;
    width: 24%;
    margin-bottom:25px;
        }

    .box img{
        width:80%;
    }
    
    @media(max-width: 768px){
        .container{
        text-align:center;
    }

    .box{
    display:inline-block; /* so the children on the same line */
    height: auto;
    width: 48%;
    margin-bottom:25px;
        }

    .box img{
        width:60%;
    }
    
    
    
    }
    
    @media(max-width: 500px){
        .container{
        text-align:center;
    }

    .box{
    display:inline-block; /* so the children on the same line */
    height: auto;
    width: 97%;
    margin-bottom:25px;
        }

    .box img{
        width:60%;
    }
    
    
    
    }
    
</style> 
<div class="container">
<?php
$res=mysqli_query($link, "SELECT * FROM vendor");
while($row=mysqli_fetch_array($res))
{
?>
 

  

  <div class="box">


<a href="<?php echo $row["link"]; ?>" target="_blank"><img src="<?php echo $row["picture"]; ?>" alt="" /></a></br>
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

<a href="memberpage.php?vID=<?php echo $row["vID"]; ?>">DELETE THIS VENDOR</a>
  </div> <!--box-->       


<?php
}

// Attempt delete query execution
//change the id of what ever you want to delete down here manually
//if you want it to be dynamically, then you have to pass it from somewhere
if(isset($_GET['vID'])){
$vID = $_GET['vID'];

    $sql = "DELETE FROM vendor WHERE vID = $vID";
    if(mysqli_query($link, $sql)){
        $message = "Records were deleted successfully.";
    } else{
        $message = "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    
    header('location: https://ide.c9.io/neilfloyd/login_admin-cloned/memberpage.php?message=' . $message);
}

if(isset($_GET['message'])){
    echo $_GET['message'];
}
?>

</div>
            