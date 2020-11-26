<?php

// Create connection
$conn = mysqli_connect('localhost','root','','login2');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['search']))
{
    $id = $_POST['id'];

    // sql to delete a record
    $sql = "DELETE FROM login2 WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
     
    } else {
      echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);

}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sidebar Dashboard Template</title>
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

    <style>
      
      table, th, td{

    border: 1px solid black;
    border-collapse: collapse;
    }

    th,td {

    padding: 20px;
    }

    </style>

  </head>
  <body>

    <!--header area start-->
    <header>
      <div class="left_area">
        <h3>ADMIN <span>PORTAL</span></h3>
      </div>
      <div class="right_area">
        <a href="login.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">

    <a href="admin_homepage.php"> <i class="fa fa-desktop" aria-hidden="true"></i> <span>Dashboard</span></a>

      <a href="registration.php"><i class="fa fa-registered" aria-hidden="true"></i> <span>Registration</span></a>

      <a href="delete.php"><i class="fa fa-times" aria-hidden="true"></i> <span>Delete Record</span></a>

      <a href="update.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> <span>Update Record</span></a>
  
    </div>
    <!--sidebar end-->

    <div>
      
       <form style="margin-left: 500px;" action="" method="POST">
       <br><br><br><br><br> 
          <input type="id" name="id" placeholder="Enter the id to delete record" size="50">

          <input type="submit" name="search" value="Delete" size="50" >

      </form>

      <table style="margin-left: 300px;">
        
        <tr>
              <th>Id</th>
              <th> Name </th>
              <th> Library Id </th>
              <th> Password </th>
              <th> Branch </th>
              <th> Marks (%) </th>
              <th> Attendence (%) </th>
              <th> User Type </th>
        </tr> <br>

        <?php

          $conn = mysqli_connect('localhost','root','','login2');

              $query = "SELECT * FROM login2 ";

              $query_run = mysqli_query($conn,$query);

              while($row = mysqli_fetch_array($query_run))
              {
                  ?>

                  <tr>
                    <td> <?php echo $row['id']; ?> </td>
                    <td> <?php echo $row['name']; ?>  </td>
                    <td> <?php echo $row['username']; ?>  </td>
                    <td> <?php echo $row['password']; ?>  </td>
                    <td> <?php echo $row['branch']; ?>  </td>
                    <td> <?php echo $row['marks']; ?>  </td>
                    <td> <?php echo $row['attendence']; ?>  </td>
                    <td> <?php echo $row['usertype']; ?>  </td>
                  </tr>

                  <?php
              }
          
          ?>

      </table>

    </div>

  </body>
</html>

