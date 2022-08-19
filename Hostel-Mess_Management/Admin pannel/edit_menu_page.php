<?php
include('header.php');
if(isset($_SESSION['email'])){
include('../includes/connection.php');
if(isset($_POST['search'])){
  $query = "select * from menu where day='$_POST[day]'";
  $query_run = mysqli_query($connection,$query);
  while($row = mysqli_fetch_assoc($query_run)){
    $_SESSION['day'] = $row['day'];
  ?> <br>
    <div class="row"><br>
      <div class="col-md-4 m-auto">
        <center><h4>Edit Menu</h4></center>
        <form action="" method="post">
          <div class="form-group">
            <label>Meal1:</label>
            <textarea name="meal1" rows="3" cols="80"><?php echo $row['meal1']; ?></textarea>
          </div>
          <div class="form-group">
            <label>Meal2:</label>
            <textarea name="meal2" rows="3" cols="80"><?php echo $row['meal2']; ?></textarea>
          </div>
          <div class="form-group">
            <label>Meal3:</label>
            <textarea name="meal3" rows="3" cols="80"><?php echo $row['meal3']; ?></textarea>
          </div>
          <div class="form-group">
            <label>Meal4:</label>
            <textarea name="meal4" rows="3" cols="80"><?php echo $row['meal4']; ?></textarea>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" name="update" value="Update">
          </div>
        </form>
      </div>
    </div>
<?php }}

if(isset($_POST['update'])){
  $query = "update menu set meal1 = '$_POST[meal1]',meal2 = '$_POST[meal2]',meal3 = '$_POST[meal3]',meal4 = '$_POST[meal4]' where day = '$_SESSION[day]'";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script type='text/javascript'>
      alert('Menu updated successfully...');
      window.location.href = 'admin_dashboard.php';
    </script>";
  }
  else{
    echo "<script type='text/javascript'>
      alert('Failed...Plz try again.');
      window.location.href = 'admin_dashboard.php';
    </script>";
  }
}
?>
<?php }
else{
  header('location:../index.php');
}
