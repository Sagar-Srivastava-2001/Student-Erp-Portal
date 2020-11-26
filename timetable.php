<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sidebar Dashboard Template</title>
    
    <style>
    table, th, td{

    border: 1px solid black;
    border-collapse: collapse;
    }

    th,td {

    padding: 15px;
    }
    table#t01 {

      width: 50%;    
      background-color: #4682b4;
    }

    .main {
     margin-left: 260px; /* Same as the width of the sidenav */
    font-size: 20px; /* Increased text to enable scrolling */
    padding: 0px 10px;
    height:100px;
    width: 50%;
}

    </style>

    <link rel="stylesheet" href="timetable_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
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
  
    <div class="main">
      <br><br>
     <h1 style="margin-left: 360px; color:black ; font:serif;"> <ul>
     Time Table </ul> </H1>

<table style="width:100%">
<table id="t01">

<tr>
<th> Lecture / Day </th>
<th> Lecture 1    </th>
<th> Lecture 2    </th>
<th> Lecture 3    </th>
<th> Lecture 4    </th>
<th rowspan="9"> LUNCH</TH>
<th> Lecture 5    </th>
<th> Lecture 6    </th>
<th> Lecture 7    </th>
<th> Lecture 8 </center>   </th>
</tr>

<tr>
<th> Monday </TH>
<th> Maths</TH>
<th> Maths </TH>
<th> English </TH>
<th> CS </TH>
<th> CS </TH>
<th> Chem. </TH>
<th> Chem. </TH>
<th> Lib </TH>
</TR>

<tr>
<th> Tuesday </TH>
<th> Maths</TH>
<th> Maths </TH>
<th> English </TH>
<th> CS </TH>
<th> CS </TH>
<th> Chem. </TH>
<th> Chem. </TH>
<th> Lib </TH>
</TR>

<tr>
<th> Wednesday </TH>
<th> Maths</TH>
<th> Maths </TH>
<th> English </TH>
<th> CS </TH>
<th> CS </TH>
<th> Chem. </TH>
<th> Chem. </TH>
<th> Lib </TH>
</TR>

<tr>
<th> Thursday </TH>
<th> Maths</TH>
<th> Maths </TH>
<th> English </TH>
<th> CS </TH>
<th> CS </TH>
<th> Chem. </TH>
<th> Chem. </TH>
<th> Lib </TH>
</TR>

<tr>
<th> Friday </TH>
<th> Maths</TH>
<th> Maths </TH>
<th> English </TH>
<th> CS </TH>
<th> CS </TH>
<th> Chem. </TH>
<th> Chem. </TH>
<th> Lib </TH>
</TR>


<tr>
<th> Saturday </TH>
<th> Maths</TH>
<th> Maths </TH>
<th> English </TH>
<th> CS </TH>
<th> CS </TH>
<th> Chem. </TH>
<th> Chem. </TH>
<th> Lib </TH>
</TR>

    </div>

  </body>
</html>
                           