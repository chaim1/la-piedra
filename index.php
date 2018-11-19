<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="imags/lapiedra.png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="main.js"></script>
    <link rel="stylesheet" href="main.css">
    <title>La Piedra
    </title>
</head>
<body>
    <div style="display:none;" id="navA">
        <div ng-controller="HeaderCtrl" ng-include="'partials/header.html'">    
            <nav id="nav"  class="fixed-top navbar navbar-expand-lg navbar-light   bg-white ">
                <a class=" navbar-brand" href="#"><img src="imags/lapiedra.png" alt="la piedra logo" style="width: 90px;
                    height: 40px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class=" navbar-nav ml-auto ">
                    <li class=" nav-item active">
                        <a  class="hoverA nav-link" href="#">צור קשר  <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="hoverA nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        תפריט פיצות
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="hoverA dropdown-item" href="#">פיצות אדומות</a>
                        <a class="hoverA dropdown-item" href="#">פיצות לבנות</a>
                    </li>
                    <li class="nav-item active">
                        <a style="" class="hoverA nav-link" href="#">תפריט</a>
                    </li>
                    <li class="nav-item active">
                        <a class="hoverA nav-link" href="#">אודות</a>
                    </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div id="changeNavD">
         <div ng-controller="HeaderCtrl" ng-include="'partials/header.html'">    
             <nav id="nav"  class="fixed-top navbar navbar-expand-lg navbar-dark   bg-dark ">
                <a class="navbar-brand" href="#"><img src="imags/lapiedra.png" alt="la piedra logo" style="width: 120px;
                       height: 60px;"></a>
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                   </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto ">
                    <li class="nav-item active">
                          <a  class="hoverD nav-link" href="#">צור קשר  <span class="sr-only"></span></a>
                      </li>
                     <li class="nav-item dropdown active">
                          <a class="hoverD nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           תפריט פיצות
                        </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="hoverA dropdown-item" href="#">פיצות אדומות</a>
                           <a class="hoverA dropdown-item" href="#">פיצות לבנות</a>
                    </li>
                    <li class="nav-item active">
                        <a class="hoverD nav-link" href="#">תפריט</a>
                    </li>
                     <li class="nav-item active">
                          <a class="hoverD nav-link" href="#">אודות</a>
                       </li>
                       </ul>

                   </div>
              </nav>
          </div>
     </div>
    <div class="haederMt"></div>
    
        <div id="change2" style="">
            
                <video id="mtn1" autoplay muted loop id="myVideo">
                    <source src="imags/pizzan.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <video id="mtn2" autoplay muted loop id="myVideo">
                    <source src="imags/pizzan.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

        </div>
    <div id='space' >

    </div>
    <div id='space1'>

    </div>
</body>
</html>