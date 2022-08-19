<?php
  session_start();
  if(isset($_SESSION['email'])){
  include('../includes/connection.php');
  echo "<link href='../includes/fontawesome/css/all.css' rel='stylesheet'>";
  $query = "select * from users";
  $query_run = mysqli_query($connection,$query);
  $sn = 0;
  echo "<table class='table'>
    <tr>
      <th>S.No</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Mobile</th>
      <th>Address</th>
      <th>Fee Status</th>
    </tr>";
  while($row = mysqli_fetch_assoc($query_run)){
    $sn = $sn + 1;
    $id = $row['sno'];
    echo "
      <tr>
        <td>$sn</td>
        <td>$row[fname]</td>
        <td>$row[lname]</td>
        <td>$row[email]</td>
        <td>$row[mobile]</td>
        <td>$row[address]</td>
        <td>";
        if($row['fee_status'] == 1){echo 'Fee Paid';}else{echo 'Not Paid';} echo "</td>
      </tr>
    ";
  }
  echo "</table>";
?>
<?php }
else{
  header('location:../index.php');
}
