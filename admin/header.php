<!DOCTYPE html>
<html>
  <head>
    <title>Panel administrateur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/panel.css" rel="stylesheet">
  </head>
  <body>
	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="accueil.php">Panel administrateur</a></h1>
	              </div>
	           </div>
	           <div class="col-md-7">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['pseudo'];?> <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="../logout.php">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="accueil.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <!-- <li><a href="calendar.html"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>
                    <li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>-->
                    <li><a href="contact.php"><i class="glyphicon glyphicon-list"></i> Contact</a></li>
                    <!-- <li><a href="upload.php"><i class="glyphicon glyphicon-record"></i> Upload images</a></li> -->
                    <!-- <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li> -->
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-pencil"></i> Gerer images du site
                            <span class="caret pull-right"></span>
                         </a>
                         <ul>
                            <li><a href="edit.php">Editer images</a></li>
                            <li><a href="upload.php">Upload images</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
		  </div>
      <script src="https://code.jquery.com/jquery.js"></script>
      <script src="../assets/js/bootstrap.min.js"></script>
      <script src="../assets/js/custom.js"></script>