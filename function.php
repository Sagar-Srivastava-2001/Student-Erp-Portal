<?php
    
  $conn = mysqli_connect('localhost','root','','login2');
    
  if(isset($_POST['submit']))
  {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $branch = $_POST['branch'];
        $marks = $_POST['marks'];
        $attendence = $_POST['attendence'];
        $usertype = $_POST['usertype'];

        $insertquery = "insert into login2(name,username,password,branch,marks,attendence,usertype) values('$name','$username','$password','$branch','$marks','$attendence','$usertype')";

        $res = mysqli_query($conn,$insertquery);

    }

    if($res)
    {
        echo "Data Inserted Properly";
    }    
    else
    {
        echo "Data not inserted";
    }

?>       