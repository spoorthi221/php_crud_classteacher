 <!-- Footer -->
<?php  include "../header.php" ?>

<?php 
     if(isset($_GET['delete']))
     {
         $phone_no= $_GET['delete'];

         // SQL query to delete data from user table where id = $userid
         $query = "DELETE FROM classteacher WHERE phone_no = {$phone_no}"; 
         $delete_query= mysqli_query($conn, $query);
         header("Location: home.php");
     }
              ?>

 