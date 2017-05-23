
    <?php get_header()  ?>
    <div class="container-fluid">
        <div class="row myHeader">
            <div class="col-md-12 text-center">
                <div>
                    <ul class="list-inline">
                        <li><a href="index.html">Catalog</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Store</a></li>
                        <li><a href="#">Blog</a></li>
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
    <main>
        <h3 class="text-center">Spring Summer 2017</h3>
        <div class="myCatalog">

        <?php global $post;
        $args = array(
	           'posts_per_page'   => 5,
	           'category_name'    => ''
        );
        $articles = get_posts($args);
        get_template_part('template_part/content_loop.php')
        ?>





            <article>
                <img src="http://lorempixel.com/110/150/" alt="img_product">
                <div>
                    <h4 class="buy">Buy</h4>
                    <h5>Winter Scarf</h5>
                    <span>$180.00</span>
                </div>
            </article>

            <article>
                <img src="http://lorempixel.com/110/150/" alt="img_product">
                <div>
                    <h4 class="onSale">On sale</h4>
                    <h5>Winter Scarf</h5>
                    <span>$180.00</span>
                </div>
            </article>
            <article>
                <img src="http://lorempixel.com/110/150/" alt="img_product">
                <div>
                    <h4 class="soldOut">Sold out</h4>
                    <h5>Winter Scarf</h5>
                    <span>$180.00</span>
                </div>
            </article>
            <article>
                <img src="http://lorempixel.com/110/150/" alt="img_product">
                <div>
                    <h4 class="buy">Buy</h4>
                    <h5>Winter Scarf</h5>
                    <span>$180.00</span>
                </div>
            </article>
            <article>
                <img src="http://lorempixel.com/110/150/" alt="img_product">
                <div>
                    <h4 class="buy">Buy</h4>
                    <h5>Winter Scarf</h5>
                    <span>$180.00</span>
                </div>
            </article>
            <article>
                <img src="http://lorempixel.com/110/150/" alt="img_product">
                <div>
                    <h4 class="onSale">On sale</h4>
                    <h5>Winter Scarf</h5>
                    <span>$180.00</span>
                </div>
            </article>
            <article>
                <img src="http://lorempixel.com/110/150/" alt="img_product">
                <div>
                    <h4 class="buy">Buy</h4>
                    <h5>Winter Scarf</h5>
                    <span>$180.00</span>
                </div>
            </article>
            <article>
                <img src="http://lorempixel.com/110/150/" alt="img_product">
                <div>
                    <h4 class="buy">Buy</h4>
                    <h5>Winter Scarf</h5>
                    <span>$180.00</span>
                </div>
            </article>
            <article>
                <img src="http://lorempixel.com/110/150/" alt="img_product">
                <div>
                    <h4 class="soldOut">Sold out</h4>
                    <h5>Winter Scarf</h5>
                    <span>$180.00</span>
                </div>
            </article>
            <article>
                <img src="http://lorempixel.com/110/150/" alt="img_product">
                <div>
                    <h4 class="onSale">On sale</h4>
                    <h5>Winter Scarf</h5>
                    <span>$180.00</span>
                </div>
            </article>
            <article>
                <img src="http://lorempixel.com/110/150/" alt="img_product">
                <div>
                    <h4 class="buy">Buy</h4>
                    <h5>Winter Scarf</h5>
                    <span>$180.00</span>
                </div>
            </article>
            <article>
                <img src="http://lorempixel.com/110/150/" alt="img_product">
                <div>
                    <h4 class="soldOut">Sold out</h4>
                    <h5>Winter Scarf</h5>
                    <span>$180.00</span>
                </div>
            </article>
            <article>
                <img src="http://lorempixel.com/110/150/" alt="img_product">
                <div>
                    <h4 class="onSale">On sale</h4>
                    <h5>Winter Scarf</h5>
                    <span>$180.00</span>
                </div>
            </article>
            <article>
                <img src="http://lorempixel.com/110/150/" alt="img_product">
                <div>
                    <h4 class="buy">Buy</h4>
                    <h5>Winter Scarf</h5>
                    <span>$180.00</span>
                </div>
            </article>
            <article>
                <img src="http://lorempixel.com/110/150/" alt="img_product">
                <div>
                    <h4 class="buy">BUY</h4>
                    <h5>Winter Scarf</h5>
                    <span>$180.00</span>
                </div>
            </article>
            <article>
                <img src="http://lorempixel.com/110/150/" alt="img_product">
                <div>
                    <h4 class="buy">Buy</h4>
                    <h5>Winter Scarf</h5>
                    <span>$180.00</span>
                </div>
            </article>

            <article>
                <img src="http://lorempixel.com/110/150/" alt="img_product">
                <div>
                    <h4 class="buy">Buy</h4>
                    <h5>Winter Scarf</h5>
                    <span>$180.00</span>
                </div>
            </article>

            <article>
                <img src="http://lorempixel.com/110/150/" alt="img_product">
                <div>
                    <h4 class="buy">Buy</h4>
                    <h5>Winter Scarf</h5>
                    <span>$180.00</span>
                </div>
            </article>
        </div>
    </main>
    <footer>
        <div class="container-fluid myFooter">
            <div class="container">
                <div class="row ">
                    <div class="col-sm-6 col-md-3">
                        <dl>
                            <dt>Quick link</dt>
                            <dd>
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Careers</a></li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <dl>
                            <dt>Contact us</dt>
                            <dd>
                                <ul>
                                    <li><i class="fa fa-twitter" aria-hidden="true"></i> @californiatheme
                                    </li>
                                    <li><i class="fa fa-envelope" aria-hidden="true"></i> support@smallvictories.co
                                    </li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i> +1 917 (123) 4567</li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <dl>
                            <dt>Newsletter</dt>
                            <dd>
                                <input type="email" name="user_mail" value="your email">
                                <button type="button" name="button">OK</button>
                            </dd>
                        </dl>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <dl>
                            <dt>Follow us</dt>
                            <dd>
                                <ul>
                                    <li><a href="#"><i class="fa fa-pinterest-square"></i> Pinterest</a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i> Instagram</a></li>
                                    <li><a href="#"><i class="fa fa-vimeo-square" ></i> Vimeo</a></li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.container fluid -->
        <?php get_footer() ?>
