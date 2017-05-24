<?php
foreach ($posts as $post) {
    setup_postdata( $post );
    $tags = wp_get_post_tags($post->ID);
    ?>
    <article>
        <img src="http://lorempixel.com/110/150/" alt="img_product">
        <div>
            <h4 class="<?php echo $tags[0]->name ?>"><?php echo $tags[0]->name ?></h4>
            <h5><a href=" <?php the_permalink(); ?> "><?php the_title(); ?></a></h5>
            <span><?php echo get_post_meta( $post->ID,'price', true ) ?> €</span>
        </div>
    </article>

<?php };?>
