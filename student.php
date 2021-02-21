<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <title>Student Attendance</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/c3.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/highcharts.js"></script>
  <script src="js/highcharts-exporting.js"></script>
  <script src="js/jquery.knob.js"></script>
  <script src="js/student.js"></script>
  <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
 </head>
 <body>
   <!-- Fixed navbar
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Online Attendance</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>

          </ul>
        </div> </.nav-collapse -->
      <!-- </div>
    </nav></br></br></br></br></br></br></br></br></br> -->

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
          <li class="active"><a style="color: #242a30;" href="student.php"> <img src="img/home.svg" alt="Home" width="24px"> Home</a></li>
          <li><a style="color: #242a30;" href="#about"> <img src="img/about.svg" alt="About" width="24px"> About</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>

  <div class="container">
    <div id="output"></div>
    <div class="row" id="studentRow">
      <div class="col-md panel panel-default">
        <form id="getAttendance" class="panel-body">
          <div class="form-group">
            <label>Year of course</label>
            <select name="year" class="form-control">
              <?php foreach(range(date('Y',time()),1983) as $r) echo '<option>'.$r.'</option>'; ?>
            </select>
          </div>
          <div class="form-group">
            <label>Section</label>
            <select name="section" class="form-control">
              <option value="Section" selected disabled>Section</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
            </select>
          </div>
          <div class="form-group">
            <label>Subject Code of Course</label>
            <input type="text" class="form-control" name="code" placeholder="Eg - CSE-734">
            <span class="help-block">DDD-NNN where D : Department, N : Subject Code Number</span>
          </div>
          <div class="form-group">
            <label>Roll Number</label>
            <input type="text" class="form-control" name="roll" placeholder="Eg - 734/CN/17">
            <span class="help-block">NNN/DD/YY where N : Subject Code Number, D : Department, Y : Year</span>
          </div>
          <button class="btn btn-lg btn-block btn_custom">Get Results</button>
        </form>
      </div>
    </div>
  <!-- </div> -->
  </div><!-- /.container -->
  <!-- FOOTER -->
  <div class="container-fluid">
    <div style="margin-top: 2rem;">
      <footer class="fixed-bottom" style="background: #ccc; height: 8rem;">
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
  </div>


 </body>
</html>
