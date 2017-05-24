
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

        <?php
        $args = array(
	           'posts_per_page'   => 20,
	           'category_name'    => 'product'
        );
        $posts = get_posts($args);

        foreach ($posts as $post) {
            setup_postdata( $post );
            $tags = wp_get_post_tags($post->ID);
            ?>
            <article>
                <img src="http://lorempixel.com/110/150/" alt="img_product">
                <div>
                    <h4 class="<?php echo $tags[0]->name ?>"><?php echo $tags[0]->name ?></h4>
                    <h5><?php the_title(); ?></h5>
                    <span><?php echo get_post_meta( $post->ID,'price', true ) ?> €</span>
                </div>
            </article>

        <?php };?>





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
