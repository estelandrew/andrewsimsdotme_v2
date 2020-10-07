<?php get_header(); ?>
<h2 class="body-heading body-heading--first">The Blog...</h2>
<div class="posts-wrapper">
        <?php 

                if (have_posts()) {
                        while (have_posts()) {
                                the_post(); ?>

                                <div class="post">
                                        <a class="post-title-link" href="<?php the_permalink(); ?>"><h3 class="post-title"><?php the_title(); ?></h3></a>
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
                                        <div class="post-body"><?php the_content(); ?></div>
                                        <a class="body-link--post" href="<?php the_permalink(); ?>">Keep Reading &rarr;</a>
                                </div>
                
                
                <?php        }
                } else {
                        _e( 'Sorry, no posts were found.', 'textdomain' );
                }

        ?>
</div>
<?php get_footer(); ?>