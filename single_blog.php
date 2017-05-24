<?php
/*
template name: Article
template post type: post
 */
 ?>
    <?php get_header()  ?>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <main>
        <div class="container-fluid">
            <div class="row myMain">
                <div class="row pageProduct">
                    <article>
                        <div class="articleImages">
                            <img src="http://lorempixel.com/200/250/" alt="img_product">
                        </div>
                        <div class="descriptifProduit">
                            <div class="infoProduit">
                                <h3 class="text-center"><?php the_title(); ?></h3>
                                <p><?php the_content(); ?>
                                </p>
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
