<?php
  session_start();
  if(isset($_SESSION['email'])){
  include('../includes/connection.php');
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
    </tr>";
  while($row = mysqli_fetch_assoc($query_run)){
    $sn = $sn + 1;
    echo "
      <tr>
        <td>$sn</td>
        <td>$row[fname]</td>
        <td>$row[lname]</td>
        <td>$row[email]</td>
        <td>$row[mobile]</td>
        <td>$row[address]</td>
      </tr>
    ";
  }
  echo "</table>";
?><?php }
else{
  header('location:../index.php');
}
