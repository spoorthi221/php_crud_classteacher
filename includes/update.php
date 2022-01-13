<!-- Footer -->
<?php include "../header.php"?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
    if(isset($_GET['phone_no'])) 
    {
      $phone_no = $_GET['phone_no']; 
    }
    
    // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM classteacher WHERE phone_no = {$phone_no}";  
      $view_users= mysqli_query($conn,$query);            
      while($row = mysqli_fetch_assoc($view_users))
        {
          $name = $row['name'];
          $age = $row['age'];
          $phone_num = $row['phone_no'];
          $subject_name = $row['subject_name'];
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      $name = $_REQUEST['name'];
      $age = $_REQUEST['age'];
      $phone_num = $_REQUEST['phone_no'];
      $subject_name = $_REQUEST['subject_name'];
  
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE classteacher SET name = '{$name}' , age = '{$age}' , phone_no = '{$phone_num}' , subject_name='{$subject_name}' WHERE phone_no = $phone_no";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
    }
    ?>       

<h1 class="text-center">Update User Details</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="name" >name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $name  ?>" required>
      </div>

      <div class="form-group">
        <label for="age" >age</label>
        <input type="text" name="age"  class="form-control" value="<?php echo $age  ?>" required>
      </div>
        <small id="emailHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
    
      <div class="form-group">
        <label for="phone_no" >phone no</label>
        <input type="text" name="phone_no"  class="form-control" value="<?php echo $phone_no  ?>" required>
      </div>   
        <div class="form-group">
        <label for="subject_name" >subject name</label>
        <input type="text" name="subject_name"  class="form-control" value="<?php echo $subject_name  ?>" required>
      </div>     

      <div class="form-group">
         <input type="submit"  name="update" class="btn btn-primary mt-2" value="submit">
      </div>
    </form>    
  </div>

    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
      <a href="home.php" class="btn btn-warning mt-5"> Back </a>
      </div>