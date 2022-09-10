<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin </title>
    <link rel="stylesheet" href="adminstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

    <input type="checkbox" id="check">
    
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3> RAFT<span> </span></h3>
      </div>
      <div class="right_area">
        <a href="http://localhost/DBMS/admin%20login/adminlogin-form.php" class="logout_btn">Logout</a>
      </div>
    </header>
    
    <div class="mobile_nav">
      <div class="nav_bar">
       
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="http://localhost/DBMS/admin%20login/admin.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="http://localhost/DBMS/staff/staff.html"><i class="fas fa-people-carry"></i><span>Staff</span></a>
        <a href="http://localhost/DBMS/manage/manage_complaints/user-table.php"><i class="fas fa-comments"></i><span>Complaints</span></a>
        <a href="http://localhost/DBMS/tracking/admintracking.php"><i class="fas fa-comments"></i><span>Tracking</span></a>
        <a href="http://localhost/DBMS/manage/manage_tracking/user-table.php"><i class="fas fa-desktop"></i><span>Orders</span></a>
      </div>
    </div>
   
    <div class="sidebar">
      <div class="profile_info">
       
        <h4>ADMIN</h4>
      </div>
      <a href="http://localhost/DBMS/admin%20login/admin.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="http://localhost/DBMS/staff/staff.html"><i class="fas fa-people-carry"></i><span>Staff</span></a>
      <a href="http://localhost/DBMS/manage/manage_complaints/user-table.php"><i class="fas fa-comments"></i><span>Complaints</span></a>
      <a href="http://localhost/DBMS/tracking/admintracking.php"><i class="fas fa-comments"></i><span>Tracking</span></a>
      <a href="http://localhost/DBMS/manage/manage_tracking/user-table.php"><i class="fas fa-desktop"></i><span>Orders</span></a>
    </div>
   

    <div class="content">
      
    </div>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>
      