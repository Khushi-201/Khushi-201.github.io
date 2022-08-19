<?php
  session_start();
  if(isset($_SESSION['email'])){
  include('../includes/connection.php');
  $query = "select * from feedback";
  $query_run = mysqli_query($connection,$query);
  $sn = 0;
  echo "<table class='table'>
    <tr>
      <th>S.No</th>
      <th>User ID</th>
      <th>Date</th>
      <th>Rating</th>
      <th>Feedback</th>
    </tr>";
  while($row = mysqli_fetch_assoc($query_run)){
    $sn = $sn + 1;
    echo "
      <tr>
        <td>$sn</td>
        <td>$row[uid]</td>
        <td>$row[date]</td>
        <td>$row[rating]</td>
        <td>$row[feedback]</td>
      </tr>
    ";
  }
  echo "</table>";
?><?php }
else{
  header('location:../index.php');
}
