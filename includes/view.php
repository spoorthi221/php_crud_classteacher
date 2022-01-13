<!-- Header -->
<?php  include '../header.php'?>

<h1 class="text-center">User Details</h1>
  <div class="container">
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th  scope="col">name</th>
          <th  scope="col">age</th>
          <th  scope="col">phone_no</th>
          <th  scope="col">subject_name</th>
        </tr>  
      </thead>
        <tbody>
          <tr>
               
            <?php
              //  first we check using 'isset() function if the variable is set or not'
              //Processing form data when form is submitted
              if (isset($_GET['phone_no'])) {
                  $phone_no = $_GET['phone_no']; 

                  // SQL query to fetch the data where id=$userid & storing data in view_user 
                  $query="SELECT * FROM classteacher WHERE phone_no = {$phone_no} ";  
                  $res= mysqli_query($conn,$query);            

                  while($row = mysqli_fetch_assoc($res))
                  {
                      $name = $row['name'];
                      $age = $row['age'];
                      $phone_num = $row['phone_no'];
                      $subject_name = $row['subject_name'];

                        echo "<tr>";
                        echo " <td>{$name}</td>";
                        echo " <td> {$age}</td>";
                        echo " <td> {$phone_num}</td>";
                        echo " <td>{$subject_name} </td>"; 
                        echo " </tr> ";
                  }
                }
            ?>
          </tr>  
        </tbody>
    </table>
  </div>

   <!-- a BACK Button to go to pervious page -->
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>

