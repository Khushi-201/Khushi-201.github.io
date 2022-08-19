<?php
  include('includes/header.php');
  if(isset($_SESSION['email'])){
    include('includes/connection.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Dashboard</title>
  </head>
  <body style="background:gray;">
    <div class="row">
      <div class="col-md-3">
        <div class="card">
          <div class="card-header">
            <b>Mess Timings</b>
          </div>
          <div class="card-body">
            <b>Breakfast:</b> 8:00 AM to 9:00 AM <br>
            <b>Lunch:</b> 12:00 PM to 2:00 PM <br>
            <b>Snacks:</b> 5:00 PM to 6:00 PM <br>
            <b>Dinner:</b> 8:00 PM to 9:30 PM
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-header">
            <b>Today's Menu</b>
          </div>
          <div class="card-body">
            <?php
              $today = date("l");
              $query = "select * from menu where day='$today'";
              $query_run = mysqli_query($connection,$query);
              while($row = mysqli_fetch_assoc($query_run)){
            ?>
              <b>Breakfast: </b> <?php echo $row['meal1']; ?> <br>
              <b>Lunch: </b> <?php echo $row['meal2']; ?> <br>
              <b>Snacks: </b> <?php echo $row['meal3']; ?> <br>
              <b>Dinner: </b> <?php echo $row['meal4']; ?>
            <?php } ?>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#meal_modal">View Full Week's Menu</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-header">
            <b>Tomorrow's Menu</b>
          </div>
          <div class="card-body">
            <?php
              $today = date("l",strtotime('+1 day'));
              $query = "select * from menu where day='$today'";
              $query_run = mysqli_query($connection,$query);
              while($row = mysqli_fetch_assoc($query_run)){
            ?>
              <b>Breakfast: </b> <?php echo $row['meal1']; ?> <br>
              <b>Lunch: </b> <?php echo $row['meal2']; ?> <br>
              <b>Snacks: </b> <?php echo $row['meal3']; ?> <br>
              <b>Dinner: </b> <?php echo $row['meal4']; ?>
            <?php } ?>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#meal_modal">View Full Week's Menu</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-header">
            <b>Important Notice</b>
          </div>
          <div class="card-body">
            <ul>
              <marquee direction="up" scrollamount="2"><li><a>1. Please always wear mask and sanitize your hands timely.</a></li>
              <li><a>2. Always maintain social distance.</a></li>
              <li><a>3. Give your valuable feebback to improve us.</a></li></marquee>
            </ul>
          </div>
        </div>
      </div>
    </div> <br>

    <!-- Buttons -->
    <div class="row">
      <div class="col-md-2 m-auto">
        <a href="edit_profile.php" type="button" class="btn btn-block btn-warning">Edit Profile</a>
        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#fee_status_modal">View Fee Status</button>
        <a href="feedback.php" type="button" class="btn btn-block btn-danger">Submit feedback</a>
      </div>
    </div>

    <!-- Fee Status MODAL -->
    <div class="modal fade" id="fee_status_modal">
      <div class="modal-dialog">
        <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Your Fee Status</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <?php
        $query = "select fee_status from users where sno = $_SESSION[uid]";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
      ?>
      <div class="modal-body">
      <?php if($row['fee_status'] == 1){echo "<p>Your fee is paid successfully.</p>";}else{echo "<p>Your fee is still Due.</p>";}
      } ?>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>

    <!-- Week Meal MODAL -->
    <div class="modal fade" id="meal_modal">
      <div class="modal-dialog">
        <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Full Week Menu</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <?php
        $query = "select * from menu";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
      ?>
      <div class="modal-body">
        <h4><?php echo $row['day']; ?></h4>
        <p>
          <b>Breakfast: </b> <?php echo $row['meal1']; ?> <br>
          <b>Lunch:</b> <?php echo $row['meal2']; ?> <br>
          <b>Snacks:</b> <?php echo $row['meal3']; ?> <br>
          <b>Dinner:</b> <?php echo $row['meal4']; ?>
        </p>
      <?php } ?>

      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>

</body>
</html>
<?php }
else{
  header('location:index.php');
}
