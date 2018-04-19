<?php
    require'config.php';
?>

<!DOCTYPE html>
<html lang="en">

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

    <div class="container">
      <div class="row">
        <div class="col-lg-3">
            
        </div>
        <div class="col-lg-6">
                    <div class="page-header  text-center">
                        <h1>Report an Incidence<br></h1>
                    </div>
        <br><br>
                    <div>
                        <p>Repoter's Username :</p>
                        <form action="report.php">
                        <p>Location :</p>
                        <div class="form-group">
                                    <label>
                                        Title :
                                    </label>
                                    <input  type="text-area" class="form-control" placeholder="Flood in Pitipana">
                        </div>
                        <div class="form-group">
                                    <label>
                                        Type :
                                    </label>
                                    <select class="form-control" id="">
                                        <option value="flood">Flood</option>
                                        <option value="tsunami">Tsunami</option>
                                        <option value="earthquake">Earthquake</option>
                                        <option value="hurricane">Hurricane</option>
                                        <option value="mudsides">Mudsides</option>
                                        <option value="fire">Fire</option>
                                        <option value="electricalbreakdown">Electrical Breakdown</option>
                                        <option value="roadaccident">Road Side Accident</option>
                                        
                                    </select>
                        </div>
                        <div class="form-group">
                                    <label>
                                        Description :
                                    </label>
                                    <input  type="text" class="form-control" >
                        </div>
                        <div class="form-group">
                                    <input  type="submit" class="btn-success" >
                        </div>
                    </form>
                    
            </div>
            
        </div>
    
      </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
