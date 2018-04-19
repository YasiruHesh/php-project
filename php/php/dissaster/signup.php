<?php
//require 'config.php';
//session_start();
//if(session_destroy())
//{
//header("Location: index.php");
//}
require 'server.php';
?>

<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }

    </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Dissaster Management System - Western Province </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
             <li class="nav-item">
              <a class="nav-link" href="#">Map</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Graphs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="rep.php">Report</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-md-2">
            
        </div>
        <div class="col-md-8 text-center">
            <div class="page-header">
                <h1>User Signup</h1>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-default">
                            <div class="panel-body">
                                    <form action="" method="post" action="signup.php">
                                            <div class="form-group">
                                                <label>
                                                    Enter Username :
                                                </label>
                                                <input  type="text" class="form-control" placeholder="John_Doe">
                                            </div>
                                            <div class="form-group">
                                                <label>
                                                    Enter Password :
                                                </label>
                                                <input type="password" class="form-control" placeholder="*******">
                                            </div>
                                            <div class="form-group">
                                                <label>
                                                    Re-enter Password :
                                                </label>
                                                <input type="password" class="form-control" placeholder="*******">
                                            </div>
                                            <div class="form-group">
                                                        <label>
                                                            Account Type :
                                                        </label>
                                                        <select class="form-control" id="">
                                                            <option value="generaluser">Genaral User</option>
                                                            <option value="dssecetary">DS Secretary</option>
                                                            <option value="police">Police</option>
                                                            <option value="gramaniladari">Gramaniladari</option>
                                                            <option value="reportmanager">reportmanager</option>
                                                            <option value="administrator">administrator</option>
                                                            
                                                        </select>
                                            </div>
                                            
                                            <input type="submit" value="login" class="btn btn-primary">
                                    </form>
                            </div>
                    </div>
                    <br><br>
                    <div class="text-center">
                    Haven't sign-up yet? <a href="signup.php">SignUp Here</a>
                </div>
                </div>
               
                 <div class="col-lg-3">
                    
                </div>
                    
        </div>
        <div class="col-md-2">
            
        </div>
      </div>
    </div>
      </div>
    <!-- Bootstrap JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
