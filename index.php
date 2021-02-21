<?php
  session_start();
  $isIndex = 1;
  if(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id'])) {
   header('Location: teacher.php');
  } else {
    if(!$isIndex) header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <title>Student Attendance</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/login.js"></script>
   <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
 </head>
 <body>

  <!-- Fixed navbar -->
  <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #66cdaa;">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" style="color: #242a30;" href="index.php">Attendance Record</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a style="color: #242a30;" href="#"> <img src="img/home.svg" alt="Home" width="24px"> Home</a></li>
          <li><a style="color: #242a30;" href="#about"> <img src="img/about.svg" alt="About" width="24px"> About</a></li>
          <li><a style="color: #242a30;" href="student.php"> <img src="img/four-squares-with-frame-shape.svg" alt="Dashboard" width="24px"> Student Dashboard</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>

  <div class="container">
    <h2 id="faculty_section">For Faculty</h2>
    <div class="alert alert-warning hidden">
      <span></span>
      <button type="button" class="close" onclick="$('.alert').addClass('hidden');">&times;</button>
    </div>

    <div class="row">
      <div class="col-md panel panel-default">
        <h4 class="panel-heading">Login</h4>
        <form class="panel-body" id="login">
          <div class="form-group">
            <label>Email ID</label>
              <input class="form-control" placeholder="Email" type="email" name="email">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input class="form-control" placeholder="Password" type="password" name="password">
          </div>
          <button class="btn btn-lg btn-block btn_custom">Login</button>
        </form>
      </div>
    </div>

    <br>
    <div class="row">
      <div class="col-md panel panel-default">
        <h4 class="panel-heading">Sign Up</h4>
        <form class="panel-body" id="signup">
          <div class="form-group">
            <label>Name</label>
            <input class="form-control" placeholder="Name" type="text" name="name">
          </div>
          <div class="form-group">
            <label>Phone Number</label>
            <input class="form-control" placeholder="Phone" type="text" name="phone">
          </div>
          <div class="form-group">
            <label>Email ID</label>
            <input class="form-control" placeholder="Email" type="email" name="email">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input class="form-control" placeholder="Password" type="password" name="password">
            <span class="help-block">Password should be 6 characters long.</span>
          </div>
          <div class="form-group">
            <label>Re-type Password</label>
            <input class="form-control" placeholder="Re-type Password" type="password" name="password2">
          </div>
          <button class="btn btn-lg btn-block btn_custom">Sign Up</button>
        </form>
      </div>
    </div>
  </div>
  <!-- FOOTER -->
  <div class="container-fluid">
    <footer style="background: #ccc; height: 8rem;">
      <ul id="footer_items">
        <li id="footer_list1">
          <p> &copy; 2021 Made with <img src="img/like.svg" alt="Love" width="24px"> </p>
        </li>
        <li id="footer_list2">
          <p> <a href="#"> <img src="img/top-alignment.svg" alt="Back to Top" width="30px"> </a> </p>
        </li>
      </ul>
    </footer>
  </div>

</div><!-- /.container -->

 </body>
</html>