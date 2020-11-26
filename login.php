<?php

  $conn = mysqli_connect('localhost','root','','login2');

  if(!$conn)
  {
      echo 'Connection error:'.mysqli_connect_error();
  }

  else
  {
      $db = mysqli_select_db($conn,'login2');

      if(!$db)
      {
          echo 'DataBase not found'.mysql_error();
      }

      if(isset($_POST['submit']))
      {
          $username = $_POST['username'];
          $password = $_POST['password'];
          $usertype = $_POST['usertype'];

          // $query = "select * from login2 where username='$username' and password='$password'";

          $result = mysqli_query($conn,"select * from login2 where username='$username' and password='$password' and usertype='$usertype'");

          while($row=mysqli_fetch_array($result)){

            if($row['username']==$username and $row['password']==$password and $row['usertype']=='Admin')
            {
                  header("Location: admin_homepage.php");
            }

            else if($row['username']==$username and $row['password']==$password and $row['usertype']=='User')
            {
                  header("Location: homepage.php");
            }
          }
      }
  }

  // $sql = 'SELECT username,password FROM login2';

  // $result = mysqli_query($conn, $sql);

  // $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // print_r($users);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student ERP Portal</title>
    <link rel="stylesheet" href="style.css">

    <style>
    select {
        width: 150px;
        margin: 10px;
        color:black;
        height:35px;
    }
    select:focus {
        min-width: 150px;
        width: auto;
    }
</style>



  </head>
  <body>

    <script type="text/javascript">

    function validateform(){
      var uid = document.myform.userid.value;
      var pass = document.myform.password.value;

      if(uid==null || uid=="")
      {
        alert("Enter the UserID");
        return false;
      }
      else if(pass.length==0)
      {
        alert("Enter the Password");
        return false;
      }

      return true;
    }

    </script>


<form  name="myform" class="box" onsubmit="return validateform();" method="post">
  <h1> <strong>PORTAL</strong> Login</h1>
  <br>
  <input type="text" name="username" placeholder=" UserId">
  <input type="password" name="password" placeholder="Password"><br>
    <p style="color:#800000"> <strong>Select User Type</strong></p> <select class="" name="usertype"> <option value="admin"> Admin </option> <option value="user"> User </option>
  <input type="submit" name="submit" value="Login">
  
  </select>
</form>


  </body>
</html>
