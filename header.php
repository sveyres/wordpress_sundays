<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sass_inte catalogue</title>
    <link rel="stylesheet" href=<?php echo '"'.get_stylesheet_directory_uri( ).'/static/external/bootstrap/dist/css/bootstrap.css"';  ?>>
    <link rel="stylesheet" href="static/external/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
</head>

<body>
    <div class="container-fluid">
        <div class="row myHeader">
            <div class="col-md-12 text-center">
                <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                        </div>
                        <?php
                        $args = array (
                            'container' => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id' => 'bs-example-navbar-collapse-1',
                            'menu_class' => 'nav navbar-nav',
                        );
                        wp_nav_menu($args) ?>
                      </div>
                    </nav>
                    <ul class="list-inline">
                        <li class="pull-right"> <a href="panier.html"><span class="glyphicon glyphicon-shopping-cart"></span></a> <a href="login.html"><span class="glyphicon glyphicon-user"></span></a> <span class="glyphicon glyphicon-search"></span></li>
                    </ul>
                </div>
                <div class="myTitle">
                    <h1 class="text-uppercase">Sundays</h1>
                    <h2 class="">We craft ocean <br>friendly apparel</h2>
                    <button type="button" name="button">Browse our products</button>
                </div>
                <div>
                    <span class="glyphicon glyphicon-menu-down pull-right"></span>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container fluid  -->
