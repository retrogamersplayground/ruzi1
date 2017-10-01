<style>
 .img {
  width: 100px;
  height: 75px;
  
 }
</style>


<?php
//action.php
include('database_connection.php');
if(isset($_POST["action"]))
{
 if($_POST["action"] == "update_time")
 {
  $query = "
  UPDATE login_details 
  SET last_activity = :last_activity 
  WHERE login_details_id = :login_details_id
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    'last_activity'  => date("Y-m-d H:i:s", STRTOTIME(date('h:i:sa'))),
    'login_details_id' => $_SESSION['admin']["login_id"]
   )
  );
 }
 if($_POST["action"] == "fetch_data")
 {
  $output = '';
  $query = "
  SELECT login_details.user_id, user_details.user_email, user_details.user_name, user_details.user_image FROM login_details 
  INNER JOIN user_details 
  ON user_details.user_id = login_details.user_id 
  WHERE last_activity > DATE_SUB(NOW(), INTERVAL 5 SECOND) 
  AND user_details.user_type = 'user'
  ";
  $statement = $connect->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();
  $count = $statement->rowCount();
  $output .= '
  <div class="table-responsive">
   <div align="right">
    '.$count.' Drivers Online
   </div>
   <table class="table table-bordered table-striped">
    <tr>
     <th>No.</th>
     <th>Email ID</th>
     <th>Driver Name</th>
     <th>Image</th>
    </tr>
  ';

  $i = 0;
  foreach($result as $row)
  {
   $i = $i + 1;
   $output .= '
   <tr> 
    <td>'.$i.'</td>
    <td>'.$row["user_email"].'</td>
    <td>'.$row["user_name"].'</td>
    <td><img src="'.$row["user_image"].'" class="img" /></td>
   </tr>
   ';
  }
  $output .= '</table></div>';
  echo $output;
 }
}



?>
