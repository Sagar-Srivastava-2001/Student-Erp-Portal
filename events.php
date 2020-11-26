<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sidebar Dashboard Template</title>
    <link rel="stylesheet" href="events.css">
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
    <div>

      <br>

    <div align="center" style="margin-left: 250px;">

       <!-- <marquee hspace="200" vspace="100" scrollamount="15"> -->
        <marquee hspace="200" vspace="100" behaviour="scroll" scrollamount="20" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
        <img src="event3.jpg" width="500" height="350">
        <img src="event1.jpg" width="500" height="350" >
        <img src="event2.jpg" width="500" height="350" >
      </marquee>



    </div>

  </body>
</html>
                           