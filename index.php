
    <?php get_header()  ?>

    <main>

            <h3 class="text-center">Spring Summer 2017</h3>
            <div class="myCatalog">
            <?php
            $args = array(
    	           'posts_per_page'   => 20,
    	           'category_name'    => 'product'
            );
            $posts = get_posts($args);
            get_template_part( 'template-parts/content_loop_post');
            ?>
            </div>
        </div>
    </main>

    <?php get_footer() ?>
