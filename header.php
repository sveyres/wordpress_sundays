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
                <div>
                    <ul class="list-inline">
                        <li><a href="<?php echo get_page_link(43) ?>">Catalog</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="index.html">Store</a></li>
                        <li><a href="<?php echo get_page_link(41) ?>">Blog</a></li>
                        <li class="pull-right"> <a href="panier.html"><span class="glyphicon glyphicon-shopping-cart"></span></a> <a href="login.html"><span class="glyphicon glyphicon-user"></span></a> <span class="glyphicon glyphicon-search"></span></li>
                    </ul>
                </div>
                <div class="myTitle">
                    <h1 class="text-center text-uppercase">Sundays</h1>
                    <h2 class="text-center">We craft ocean <br>friendly apparel</h2>
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
