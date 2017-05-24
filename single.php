<?php
/*
template name: Produit
template post type: post
 */
 ?>
    <?php get_header()  ?>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <main>
        <div class="container-fluid">
            <div class="row myMain">
                <h3 class="text-center">Spring Summer 2017</h3>
                <div class="row pageProduct">
                    <article>
                        <div class="articleImages">
                            <img src="http://lorempixel.com/200/250/" alt="img_product">
                            <div class="appercus">
                                <img src="http://lorempixel.com/50/65/" alt="img_product">
                                <img src="http://lorempixel.com/50/65/" alt="img_product">
                                <img src="http://lorempixel.com/50/65/" alt="img_product">
                            </div>
                        </div>
                        <div class="descriptifProduit">
                            <div class="infoProduit">
                                <h3 class="text-center"><?php the_title(); ?></h3>
                                <p><?php the_content(); ?>
                                </p>
                            </div>
                            <div class="btnPrix">
                                <?php $tags = wp_get_post_tags($post->ID);
                                ?>
                                <h4 class="<?php echo $tags[0]->name ?>"><?php echo $tags[0]->name ?></h4>
                                <span><?php echo get_post_meta( $post->ID,'price', true ) ?> €</span>
                                <input type="number" value="1">
                                <button type="button" name="button">Au panier !</button>
                            </div>
                        </div>
                    </article>
                </div>

            </div><!-- /.row -->
        </div><!-- /.container -->
    </main>
<?php endwhile; ?>
<?php endif; ?>

        <?php get_footer() ?>
