<?php
  session_start();
  if(isset($_SESSION['email'])){
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body><br>
    <div class="row">
      <div class="col-md-3 m-auto">
        <h4><u>Pay Fee Form</u></h4><br>
        <form action="" method="post">
          <div class="form-group">
            <input type="text" name="id" class="form-control" placeholder="Enter ID">
          </div>
          <input type="submit" class="btn btn-primary" name="pay_fee" value="Pay Now">
        </form>
      </div>
    </div>
  </body>
</html>
<?php }
else{
  header('location:../index.php');
}
