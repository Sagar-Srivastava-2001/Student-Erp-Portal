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
        <h3>STUDENT <span>PORTAL</span></h3>
      </div>
      <div class="right_area">
        <a href="login.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">

  <a href="homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> <span>Dashboard</span></a>

  <a href="profile.php"><i class="fa fa-envelope" aria-hidden="true"></i> <span>Profile</span></a>

  <a href="timetable.php"><i class="fa fa-calendar" aria-hidden="true"></i><span>Time Table</span></a>


  <a href="events.php"><i class="fa fa-beer" aria-hidden="true"></i> <span>Events</span></a>
  
    </div>
    <!--sidebar end-->

    <div>
      
      <form style="margin-left: 500px;" action="" method="POST">
       <br><br><br><br><br> 
          <input type="password" name="password" placeholder="Enter the password to get Details" size="50">

          <input type="submit" name="search" value="Get Details" size="50" >

      </form>

      <br><br>

      <table style="margin-left: 400px;">
        
        <tr>
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

          if(isset($_POST['search']))
          {
              $password = $_POST['password'];

              $query = "SELECT * FROM login2 WHERE password='$password' ";

              $query_run = mysqli_query($conn,$query);

              while($row = mysqli_fetch_array($query_run))
              {
                  ?>

                  <tr>
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
          }
          ?>

      



      </table>

    </div>

  </body>
</html>

