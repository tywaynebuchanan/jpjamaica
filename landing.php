<?php include 'config/config.php'; 
      include 'functions/functions.php';
      
      ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Justice of The Peace</title>
    <link rel="stylesheet" type="text/css" href="css/landing.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/blog-home.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Justice of the Peace</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">St Catherine</li>
    </ol>
  </nav>
</div>



<div class="container">


  <div class="container text-center">
    
        <a href="#"><h1 class="text-center">Search for a Justice of the Peace</h1></a> 
          <form action="landing.php" method = "get">
            <div class="form-group">
              <label for = "keyword">Enter the Last Name of the Justice of the Peace</label>
              <input type="text" name = "keyword" class="form-control"></input>
          </div>
       
            <input class = "btn btn-primary"type="submit" name="submit" value = "Search" onclick="showTable()">
        </form>
    </div>
  </div>
</div>



<div class="container ">

      <table class="table" id="table" >
        <thead>
          <tr>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Address</th>
            <th>City</th>
            <th>Phone Number</th>
          </tr>
        </thead>

        <tbody>
       
       <?php SearchDB(); ?>

        </tbody>
      </table>
    </div>
  </div>





</body>
</html>