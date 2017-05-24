
    <?php get_header()  ?>

    <main>

        <?php if (get_the_ID()== 43): ?>
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

        <?php elseif (get_the_ID()== 41): ?>
            <div class="myblog">
            <?php
            $args = array(
    	           'posts_per_page'   => 20,
    	           'category_name'    => 'blog'
            );
            $posts = get_posts($args);
            get_template_part( 'template-parts/content_loop_blog');
            ?>
            </div>
        <?php endif; ?>
        </div>
    </main>

    <?php get_footer() ?>
