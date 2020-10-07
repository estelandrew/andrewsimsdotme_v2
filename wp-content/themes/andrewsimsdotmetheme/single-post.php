<?php get_header(); ?>

<?php 

        if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>

                <div class="post">
                        <h3 class="post-title"><?php the_title(); ?></h3>
                        <span class="post-date">Posted on <?php echo get_the_date(); ?></span>
                        <?php 
                                $categories = get_the_category();

                                if ( ! empty( $categories ) ) {
                                        echo "<ul class=\"post-category-list\">";
                                        foreach( $categories as $category ) {
                                                echo "<li class=\"post-category-list-item\">$category->name</li>";
                                        }
                                        echo "</ul>";
                                }
                        ?>
                        <div class="post-body"><?php the_excerpt(); ?></div>
                </div>


<?php        }
        } else {
                _e( 'Sorry, no posts were found.', 'textdomain' );
        }

?>

<?php get_footer(); ?>