

<?php

$server = "localhost";
$user = "neilfloyd";
$pass = "";
$dbname = "id38639_testing";

$conn = new mysqli($server, $user, $pass, $dbname);

if($conn->connection_error) {
    die("Connection failed" . $conn->connection_error);
}


$picture = mysqli_real_escape_string($conn, $_POST['picture']);
$link = mysqli_real_escape_string($conn, $_POST['link']);
$name = mysqli_real_escape_string($conn, $_POST['name']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$street = mysqli_real_escape_string($conn, $_POST['street']);
$city = mysqli_real_escape_string($conn, $_POST['city']);
$state = mysqli_real_escape_string($conn, $_POST['state']);
$zip = mysqli_real_escape_string($conn, $_POST['zip']);
$porder = mysqli_real_escape_string($conn, $_POST['porder']);
$oorder = mysqli_real_escape_string($conn, $_POST['oorder']);



 
$sql = "INSERT INTO vendor (picture, link, name, phone, street, city, state, zip, porder, oorder) VALUES ('$picture', '$link', '$name', '$phone', '$street', '$city', '$state', '$zip', '$porder', '$oorder')";

if($conn->query($sql) === TRUE) {

echo "Record added successfully";

}

else {

echo "error adding record" . $sql . "</br>" . $conn->error;
}

header ("Location: memberpage.php");
$conn->close();

?>