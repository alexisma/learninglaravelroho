<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
       
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/custom-styles.css">
        <link rel="stylesheet" href="css/component.css">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.9/angular.min.js"></script>

    </head>
    <body ng-app="app">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
            <div class="menu">
                <div class="navbar">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="fw-icon-th-list"></i>
                    </a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active border-left"><a href="#">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="work.html">Work</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
                <div class="mini-menu">
            <label>
          <select class="selectnav">
            <option value="#" selected="">Home</option>
            <option value="#">About</option>
            <option value="#">→ Another action</option>
            <option value="#">→ Something else here</option>
            <option value="#">→ Another action</option>
            <option value="#">→ Something else here</option>
            <option value="#">Work</option>
            <option value="#">Contact</option>
          </select>
          </label>
          </div>
            </div>
            <div class="container bg-light-gray">
              <div class="main-content">

                  @yield('center')
             
              </div>
        </div>
        <div class="site-footer">
            <div class="container">
            <div class="row-fluid">
                <div class="span8 offset2">
            <div class="copy-rights">
                Copyright (c) websitename. All rights reserved. 
            </div>
            </div>
            </div>
            </div>
            <div class="site-content">
            <p class="last">Designed By: <a href="http://www.alltemplateneeds.com">www.alltemplateneeds.com</a></p>
                Images from: <a href="http://www.wallcoo.net">www.wallcoo.net</a>
            </div>
        </div>                  

        <!-- /container -->

       <script src="js/jquery-1.9.1.js"></script> 
<script src="js/bootstrap.js"></script>
    </body>
</html>
