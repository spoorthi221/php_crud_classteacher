<!-- Header -->
<?php  include "../header.php" ?>

<?php 
  if(isset($_POST['create'])) 
    {
        $host = 'localhost';  // server 
        $username = 'root';   
        $pass = "";   
        $database = 'php_crud';   //Database Name  

        // establishing connection
        $conn = mysqli_connect($host,$username,$pass,$database);   

        // for displaying an error msg in case the connection is not established
        if (!$conn) {                                             
            die("Connection failed: " . mysqli_connect_error());     
        }

      
        // SQL query to insert user data into the users table
        $query= "INSERT INTO classteacher (`name`, age, phone_no, subject_name) VALUES (?,?,?,?)";
        
        if($stmt=mysqli_prepare($conn,$query))
        {
          mysqli_stmt_bind_param($stmt,"siss",$name,$age,$phone_no,$subject_name);
          $name = $_REQUEST['name'];
          $age = $_REQUEST['age'];
          $phone_no = $_REQUEST['phone_no'];
          $subject_name = $_REQUEST['subject_name'];
          if(mysqli_stmt_execute($stmt)){
            echo "Records inserted successfully.";
        } else{
            echo "ERROR: Could not execute query: $query. " . mysqli_error($conn);
        }
    } else{
        echo "ERROR: Could not prepare query: $query. " . mysqli_error($conn);
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
        $add_user = mysqli_query($conn,$query);
    
        // displaying proper message for the user to see whether the query executed perfectly or not 
          if (!$add_user) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('User added successfully!')</script>";
              }         
    }
?>

<h1 class="text-center">Add Class teacher details </h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name"  class="form-control" required>
      </div>

      <div class="form-group">
        <label for="Age" class="form-label">Age</label>
        <input type="text" name="age"  class="form-control" required>
      </div>
    
      <div class="form-group">
        <label for="Phone Number" class="form-label">Phone Number</label>
        <input type="text" name="phone_no"  class="form-control" required>
      </div>    

      <div class="form-group">
        <label for="Subject Name" class="form-label">Subject Name</label>
        <input type="text" name="subject_name"  class="form-control" required>
      </div>   

      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
      </div>
    </form> 
  </div>

   <!-- a BACK button to go to the home page -->
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>

