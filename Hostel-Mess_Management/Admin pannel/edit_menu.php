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
        <h4><u>Edit Menu</u></h4><br>
        <form action="edit_menu_page.php" method="post">
          <div class="form-group">
            <select class="form-control" name="day">
              <option>-Select-</option>
              <option>Monday</option>
              <option>Tuesday</option>
              <option>Wednesday</option>
              <option>Thursday</option>
              <option>Friday</option>
              <option>Saturday</option>
              <option>Sunday</option>
            </select>
          </div>
          <input type="submit" class="btn btn-primary" name="search" value="Search">
        </form>
      </div>
    </div>
  </body>
</html>
<?php }
else{
  header('location:../index.php');
}
