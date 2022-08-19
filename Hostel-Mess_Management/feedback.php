<?php
  include('includes/header.php');
  include('includes/connection.php');
  if(isset($_SESSION['email'])){
  if(isset($_POST['submit'])){
    $query = "insert into feedback (uid,rating,feedback)values($_SESSION[uid],'$_POST[rating]','$_POST[message]')";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
      echo "<script type='text/javascript'>
        alert('Feedback submitted successfully...');
        window.location.href = 'user_dashboard.php';
      </script>";
    }
    else{
      echo "<script type='text/javascript'>
        alert('Submission failed...Plz try again.');
        window.location.href = 'user_dashboard.php';
      </script>";
    }
    echo $query;
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Feedback</title>
  </head>
  <body><br>
    <div class="row">
      <div class="col-md-4 m-auto">
        <center><h5><u>Submit Feedback</u></h5></center>
        <form action="" method="post">
          <div class="form-group">
            <label>Rating:</label>
            <select class="form-control" name="rating">
              <option>-Select rating-</option>
              <option>Poor</option>
              <option>Good</option>
              <option>Excellent</option>
            </select>
          </div>
          <div class="form-group">
            <label>Message:</label>
            <textarea name="message" rows="5" cols="65" placeholder="Type Here..."></textarea>
          </div>
          <button class="btn btn-primary" type="submit" name="submit">Submit</button><br>
        </form>
      </div>
    </div>
  </body>
</html>
<?php }
else{
  header('location:index.php');
}
