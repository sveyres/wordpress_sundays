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

                                <form>
                                    <input type="email" name="email" value="" placeholder="Your email">
                                    <button type="submit" name="button">OK</button>
                                </form>
                                <?php
				                    date_default_timezone_set('UTC');
    				                    if (isset($_GET['email'])){
        					                $wpdb->insert(
        							            'emails',
        							            array(	'email' => $_GET['email'],)
    					                );
				                    };
			                    ?>
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
    </footer>
    <script src="<?php echo get_stylesheet_directory_uri().'/static/external/jquery/dist/jquery.min.js' ; ?>"></script>
    <script src="<?php echo get_stylesheet_directory_uri().'/static/external/bootstrap/dist/js/bootstrap.min.js'; ?>"></script>
</body>

</html>
