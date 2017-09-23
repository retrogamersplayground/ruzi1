


<head>
	<style>
	

	#submit{
    background: royalblue;
    color: white;
    font-size: 16px;
    
}


.container{
    width:65%;
	background: limegreen;
    margin:auto;
    overflow:hidden;
}

input{
    width:60%;
    margin:5px;
    height: 50px;
    border-radius: 8px;
    text-align:center;
    font-size:16px;
}
	</style>
</head>




<!--form to add vendor to the vendor database-->

<div class= "container">

<center>
	<h2>Add Vendors to the Database</h2>
	</br>
<form method="post" action="insert.php">
	
	<input type="text" id="picture" name="picture" placeholder="Picture" required /> <br />
	<input type="text" id="link" name="link" placeholder="Site URL" required /> <br /> </br>
	<input type="text" id="name" name="name" placeholder="Name" required /> <br />
	<input type="text" id="phone" name="phone" placeholder="Phone Number" required /> <br />
	<input type="text" id="street" name="street" placeholder="Street Address" required /> <br />
	<input type="text" id="city" name="city" placeholder="City" required /> <br />
	<input type="text" id="state" name="state" placeholder="State" required /> <br />
	<input type="text" id="zip" name="zip" placeholder="Zip Code" required /> <br />
	<input type="text" id="porders" name="porders" placeholder="Phone Orders" required /> <br />
	<input type="text" id="oorders" name="oorders" placeholder="Online Orders" required /> <br />
	
	
	
	
	
	<input type= "submit" id= "submit" value ="Add Vendor" />
	
</form>

</center>
</div>

</br>
</br>

<center>

</br>
</br>
