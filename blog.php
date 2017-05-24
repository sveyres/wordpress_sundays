<?php
/*
template name: Blog
 */
 ?>
    <?php get_header()  ?>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <main>

            <div class=" container-fluid myblog">
                <div class="row">
    
                <?php
                $args = array(
        	           'posts_per_page'   => 20,
        	           'category_name'    => 'blog'
                );
                $posts = get_posts($args);
                get_template_part( 'template-parts/content_loop_blog');
                ?>
                </div>
            </div>

        </main>
<?php endwhile; ?>
<?php endif; ?>

        <?php get_footer() ?>
