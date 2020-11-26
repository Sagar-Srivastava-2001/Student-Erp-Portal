<?php
$link = mysqli_connect("localhost", "root", "", "login2"); 
  
if($link === false){ 
    die("ERROR: Could not connect. "  
                . mysqli_connect_error()); 
} 

  if(isset($_POST['submit']))
  {
      $id = $_POST['id'];
      $name = $_POST['name'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $branch = $_POST['branch'];
      $marks = $_POST['marks'];
      $attendence = $_POST['attendence'];
      $usertype = $_POST['usertype'];

      $sql = "UPDATE login2 SET name='$name',username='$username',password='$password',branch='$branch',marks='$marks',attendence='$attendence',usertype='$usertype' WHERE id=$id"; 

      if(mysqli_query($link, $sql)){ 
          
      } else { 
          echo "ERROR: Could not able to execute $sql. "  
                                  . mysqli_error($link); 
      }  
      mysqli_close($link); 

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
      
       <form style="margin-left: 550px;margin-top: 0px;" action="" method="POST">

        <br><br><br><br><br>

      <table>


        <tr>
          <td> <b> Id: </b></td>
          <td> <input style="border-radius: 25px; height:30px; width:200px; font-style: italic; " type="text" name="id" placeholder="eg.1/2/3..etc" required> </td>
        </tr>

        <tr>
          <td> <b> Name: </b></td>
          <td> <input style="border-radius: 25px; height:30px; width:200px; font-style: italic; " type="text" name="name" placeholder="eg.rahul sharma" required> </td>
        </tr>

        <tr>
          <td> <b>Library Id:</b> </td>
          <td> <input style="border-radius: 25px; height:30px; width:200px; font-style: italic;" type="text" name="username" placeholder="eg. 1923CS1071" required> </td>
        </tr>

        <tr>
          <td> <b>Password:</b>  </td>
          <td> <input style="border-radius: 25px; height:30px; width:200px;font-style: italic; " type="text" name="password" placeholder="eg. Abcd.Xyz@2001" required> </td>
        </tr>

        <tr>
          <td> <b>Branch:</b> </td>
          <td> <input style="border-radius: 25px; height:30px; width:200px;font-style: italic; " type="text" name="branch" placeholder="eg. CSE/IT/EC etc" required> </td>
        </tr>

        <tr>
          <td> <b> Marks: </b></td>
          <td> <input style="border-radius: 25px; height:30px; width:200px;font-style: italic; "  type="text" name="marks" placeholder="eg. 89/97/100 etc" required> </td>
        </tr>

        <tr>
          <td> <b>Attendence: </b></td>
          <td> <input style="border-radius: 25px; height:30px; width:200px; font-style: italic;"  type="text" name="attendence" placeholder="eg. 87/50/68 etc" required> </td>
        </tr>


        <tr>
          <td> <b>Select User Type:</b> </td>
          <td> <select class="" name="usertype"> <option value="admin"> Admin </option> <option value="user"> User </option> required</td>
        </tr>
        
        <tr>
      <td colspan="2" align="center"><input style="border-radius: 25px; height:30px; width:200px; margin-left: 200px;margin-top: 20px; font-size: 20px; background-color:  #2f4f4f; color:white; font-style: italic;" type="submit" name="submit" value="Update"></td>
      </tr>

      </table>

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



<!-- if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $branch = $_POST['branch'];
    $marks = $_POST['marks'];
    $attendence = $_POST['attendence'];
    $usertype = $_POST['usertype'];

    $sql = "UPDATE login2 SET name= '$name' WHERE id='$id'";
    $sql = "UPDATE login2 SET username='$username' WHERE id='$id'";
    $sql = "UPDATE login2 SET password='$password' WHERE id='$id'";
    $sql = "UPDATE login2 SET branch='$branch' WHERE id='$id'";
    $sql = "UPDATE login2 SET marks = '$marks' WHERE id='$id'";
    $sql = "UPDATE login2 SET attendence = '$attendence' WHERE id='$id'";
    $sql = "UPDATE login2 SET usertype = '$usertype' WHERE id='$id'";




    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
 -->