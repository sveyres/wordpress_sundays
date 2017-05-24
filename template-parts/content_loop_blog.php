<?php
foreach ($posts as $post) {
    setup_postdata( $post );
    $tags = wp_get_post_tags($post->ID);
    ?>
    <div class="col-sm-12 col-md-6">
        <article>

            <div class="panel panel-default">
                <div class="panel-heading"><a href=" <?php the_permalink(); ?> "><?php the_title(); ?></a></div>
                <div class="panel-body">
                    <img src="http://lorempixel.com/200/150/" alt="img_product">
                    <?php the_content(); ?></h4>
                </div>
                <div class="panel-footer"><?php echo get_the_date(); ?></div>
            </div>

        </article>
    </div>

<?php };?>
