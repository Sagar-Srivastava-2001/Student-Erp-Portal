<?php

  $conn = mysqli_connect('localhost','root','','login2');
  error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sidebar Dashboard Template</title>
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

    <style type="text/css">

      input{
        text-align:center;
      }

      table, td, th {  
      border: 1px solid #ddd;
      text-align: left;
      }

    table {
      background-color:white;
      border-collapse: collapse;
      width: 70%;
      height: 50px;


    }

    th, td {
      font-style: italic;
      padding: 23px;
    }
    </style>

    <script type="text/javascript">

      function validate()
      {
          var name=document.myform.name.value; 
          // var username = document.myform.username.value; 
          // var password=document.myform.password.value;
          // var branch=document.myform.branch.value;
          // var marks=document.myform.marks.value;
          // var attendence=document.myform.attendence.value;

          if (name==null || name==""){  
          alert("Name can't be blank");  
          return false;  
          }
          else
            return true;
         
      }
  
    </script>

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
      <br><br>

    <form name="myform" style="margin-left: 350px;margin-top: 60px;" action="function.php" onsubmit="return validate()" method="POST">

      <table>

        <tr>
          <td> <b> Name: </b></td>
          <td> <input style="border-radius: 25px; height:30px; width:200px; font-style: italic; " type="text" name="name" placeholder="eg.rahul sharma"> </td>
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
      <td colspan="2" align="center"><input style="border-radius: 25px; height:30px; width:200px; margin-left: 200px;margin-top: 20px; font-size: 20px; background-color:  #2f4f4f; color:white; font-style: italic;" type="submit" name="submit" value="Submit"></td>
      </tr>

      </table>

    </form>

    </div>
      

  </body>
</html>
           