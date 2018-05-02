<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HNG FUN</title>

    <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


      <!-- Custom fonts for this template -->
  <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'> -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Work+Sans:400,900&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../assets/css/custom.css" type="text/css"> -->
    <link rel="shortcut icon" href="images/favicon.png">
   
    <!-- Custom styles for this template -->
      <link href="css/style2.css" rel="stylesheet">
      <link href="css/style1.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/learn.css" rel="stylesheet">
      <link href="css/custom.css" rel="stylesheet">
      <link rel="stylesheet" href="css/login.css">
      <link rel="stylesheet" href="css/signout.css">
      <link href="css/landing-page.min.css" rel="stylesheet">
      <link href="css/shield-invite.css" rel="stylesheet">
        <link href="css/404.css" rel="stylesheet">
      <!-- <link href="css/carousel.css" rel="stylesheet"> -->
      

      <style>
        body{
            background-color: #fafafa;
            font-family: 'Lato', sans-serif;
        }
        #navbar{
            font-size: 15px;
            font-weight: bold;
        } 
        
        .nav-item{
            padding-right: 15px;
            padding-left: 15px;
        }

        .nav-item:hover { 
            background-color: rgba(199, 196, 196, 0.1);
            border-bottom: 3px solid rgb(90, 145, 247);
        }



        li.nav-item {
            padding-bottom: 0px;
        }

        ul.navbar-nav {
            height: auto !important;
        }

  <?php if (function_exists('custom_styles')) {
      custom_styles();
    }
    ?>

    nav.navbar {
        box-sizing: border-box !important;
        padding: 0px 50px !important;
        font-size: 15px;
        font-weight: bold;
        display: inline-block;
        width: 100%;
    }

    @media (min-width: 992px){
    .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem;
        padding-top: 20px;
        font-size: 15px !important;
        float: right;
    }

    ul.navbar-nav.collapse.ml-auto {
        display: -webkit-inline-box;
        height: 100% !important;
    }

    nav.navbar {
        padding: 0 16px 0 50px !important;
        height: 100px;
    }

    .navbar-logo {
        width: auto !important;
        margin-top: 30px;
    }
    }

    .nav-item.active {
        background-color: rgba(199, 196, 196, 0.1);
        border-bottom: 3px solid rgb(90, 145, 247);
    }

    .navbar-fixed {
      background: #f4f4f4 !important;
    }

    </style>

  </head>

  <body>
    <!-- Navigation -->
    <div id="navbar-fixed" class="navbar-fixed">
        <nav class="navbar navbar-expand-lg navbar-light"  style="background-color: #f2f2f2;">
        <a class="navbar-brand" href="./index.php"><img src="./img/logo.png" alt="" class="navbar-logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <ul class="navbar-nav collapse ml-auto">
                <li class="nav-item active">
                    <a href="index.php" class="nav-link">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="learn.php" class="nav-link">LEARN</a>
                </li> <li class="nav-item">
                    <a href="listing.php" class="nav-link">INTERN</a>
                </li> <li class="nav-item">
                    <a href="testimonies.php" class="nav-link">TESTIMONIES</a>
                </li> <li class="nav-item">
                    <a href="sponsors.php" class="nav-link">SPONSORS</a>
                </li> <li class="nav-item">
                    <a href="#" class="nav-link">ALUMNI</a>
                </li> 
                <!-- Fix if(signed_in) display "login" else display "logout" -->
                </li> <li class="nav-item">
                    <a href="login.php" class="nav-link">LOGIN</a>
                </li> 
                <!-- <li class="nav-item"> -->
                    <!-- <a href="logout.php" class="nav-link">LOGOUT</a> -->
                <!-- </li> -->
        
            </ul>
          <!-- </div> -->
            
        </nav>
    </div>
