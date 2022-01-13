<!-- Header -->
<?php include "../header.php"?>

  <div class="container">
    <h1 class="text-center" >Class teacher data</h1>
      <a href="create.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Create New User</a>

        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">Name</th>
              <th  scope="col">Age</th>
              <th  scope="col">Phone Number</th>
              <th  scope="col"> Subject Name</th>
              <th  scope="col" colspan="3" class="text-center">CRUD Operations</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
            $query="SELECT * FROM classteacher";               // SQL query to fetch all table data
            $view_users= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
              $name = $row['name'];                
              $age = $row['age'];        
              $phone_no = $row['phone_no'];         
              $subject_name = $row['subject_name'];        

              echo "<tr >";
              echo " <th scope='row' >{$name}</th>";
              echo " <td > {$age}</td>";
              echo " <td > {$phone_no}</td>";
              echo " <td >{$subject_name} </td>";

              echo " <td class='text-center'> <a href='view.php?phone_no={$phone_no}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";

              echo " <td class='text-center' > <a href='update.php?edit&phone_no={$phone_no}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";

              echo " <td  class='text-center'>  <a href='delete.php?delete={$phone_no}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";
              echo " </tr> ";
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>

<!-- a BACK button to go to the index page -->
<div class="container text-center mt-5">
      <a href="../index.php" class="btn btn-warning mt-5"> Back </a>
    <div>

