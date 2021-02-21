<?php
  session_start();
  $isIndex = 0;
  if(!(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id']))) {
    session_destroy();
    if(!$isIndex) header('Location: index.php');
  }
?>
<?php include 'php/node_class.php'; ?>
<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <title>Profile</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/profile.js"></script>
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
          <li class="active"> <a href="teacher.php" style="color: #242a30;"> <img src="img/four-squares-with-frame-shape.svg" alt="Dashboard" width="24px"> Dashboard</a></li>
          <li><a href="profile.php" style="color: #242a30;"> <img src="img/user.svg" alt="Faculty Profile" width="24px"> Profile</a></li>
          <li><a href="statistics.php" style="color: #242a30;"> <img src="img/stats.svg" alt="Statistics" width="24px"> Statistics</a></li>
          <li><a style="color: #242a30;" href="#about"> <img src="img/about.svg" alt="About" width="24px"> About</a></li>
          <li><a href="logout.php" style="color: #242a30;"> <img src="img/log-out.svg" alt="Logout" width="24px"> Logout</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>

  <div id="profile_edit">
    <div class="container">
      <?php
        $name = $_SESSION['name'];
        $phone = $_SESSION['phone'];
        $email = $_SESSION['email'];
        $classes = $_SESSION['classes'];
        $teacher_id = $_SESSION['teacher_id'];
        echo '<h2>Welcome, '.$name.'. &nbspEdit your profile here,</h2><br>';
      ?>
      <div class="wrapper">
        <dl class="dl-horizontal">
          <dt>Name : </dt>
          <dd>
            <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input class="form-control" name="name" placeholder="Enter your name" value="<?php echo $name; ?>">
            </div>
          </dd><br>
          <dt>Phone : </dt>
          <dd>
            <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
            <input class="form-control" name="phone" placeholder="Enter your phone" value="<?php echo $phone; ?>">
            </div>
          </dd><br>
          <dt>Email : </dt>
          <dd>
            <div class="input-group">
            <span class="input-group-addon">@</span>
            <input class="form-control" name="email" placeholder="Enter your email"  value="<?php echo $email; ?>">
            </div>
          </dd><br>
          <dt>Classes : </dt>
          <dd><?php echo $classes == 0? 0 : count($classes); ?></dd>
      </dl>
      <button class="btn btn-lg btn-block btn-success update-profile">Save</button>
      </div>
    </div>
  </div>
 </body>
</html>
