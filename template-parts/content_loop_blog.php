<?php
foreach ($posts as $post) {
    setup_postdata( $post );
    $tags = wp_get_post_tags($post->ID);
    ?>
    <article>

        <div class="panel panel-default">
            <div class="panel-heading"><a href=" <?php the_permalink(); ?> "><?php the_title(); ?></a></div>
            <div class="panel-body">
                <img src="http://lorempixel.com/200/150/" alt="img_product">
                <?php the_content(); ?></h4>
            </div>
            <div class="panel-footer"><?php the_date(); ?></div>
        </div>


    </article>

<?php };?>
