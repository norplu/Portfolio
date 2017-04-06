<!DOCTYPE html>
<html>
        <head>
                <title>Nora's Portfolio</title>
                <link rel="stylesheet" type="text/css" href="css/materialize.min.css" />
        </head>
        <body>
                <div class="row">
                <div id="sidebar" class="col m3">
                        <h2>Nora Cook</h2>
                        <img class="responsive-img circle" src="img/profile.jpg" />
                        <p>
                        Hi! My name is Nora Cook, I'm a 22 year old student at SUNY Alfred State
                        studying Application Software Development. Filler text for now, put stuff
                        in please because I really need too. Cthulhu Ryleh Fhtang 
                        </p>
                </div>
                <div id="main" class="col m9">
                        <nav>
                                <div id="header" class="nav-wrapper">
                                        <!--sideways nav bar hopefully -->
                                        <ul class="left">
                                                <li><a href="?action=list_articles">Blog</a></li>
                                                <li><a href="?action=proj_list">Projects</a></li>
                                        </ul>
                                </div>
                        </nav>
                        <?php include 'controllers/index.php' ?>
                </div>
                
                </div>
                
