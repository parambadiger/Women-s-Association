<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="logo">
        <center><h4>WOMEN'S ASSOCIATION</h4></center>
    </div>
    
    <div id="header">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#">Logo</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a data-value="#update_sliders" onclick="handleNavigation(event)">Update Sliders</a></li>
                        <li><a data-value="#update_events" onclick="handleNavigation(event)" >Update Events</a></li>
                        <li><a data-value="#update_news" onclick="handleNavigation(event)" >Update News</a></li>
                        <li><a data-value="#update_gallery" onclick="handleNavigation(event)" >Update gallery</a></li>
                        <li><a data-value="#update_about" onclick="handleNavigation(event)" >Update About</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</body>
</html>