
<?php
var_dump($articles);
foreach ($articles as $article) {
setup_postdata( $article ); ?>

<article>
    <img src="http://lorempixel.com/110/150/" alt="img_product">
    <div>
        <h4 class="buy"></h4>
        <h5><?php the_title(); ?></h5>
        <span></span>
    </div>
</article>

<?php };?>
