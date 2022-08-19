<?php
  
  include('../includes/connection.php');
  $query = "DELETE FROM users WHERE sno = $_GET[id]";
  $query_run = mysqli_query($connection,$query);
  ?>
    <script type="text/javascript">
      
      window.location= 'admin_dashboard.php';
    </script>
 
