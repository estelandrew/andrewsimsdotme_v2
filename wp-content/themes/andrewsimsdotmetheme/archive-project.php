<?php get_header(); ?>

<h2 class="body-heading body-heading--first">Projects...</h2>
<div class="projects-wrapper">
    <?php if (have_posts()) {
                    while (have_posts()) {
                            the_post(); ?>

                            <div class="project-container flex-container">
                                    <div class="project-flex-item-1">        
                                            <h3 class="item-heading"><?php the_title(); ?></h3>
                                            <div class="project-body"><?php the_content(); ?></div>
                                            <div class="btn-container">
                                                    <a target="_blank" href="<?php the_field('demo_url'); ?>"><span class="btn">Demo &rarr;</span></a>
                                                    <a target="_blank" href="<?php the_field('repository_url'); ?>"><span class="btn">Github &rarr;</i></span></a>
                                            </div>
                                    </div>
                                    <div class="project-flex-item-2">
                                        <a href="<?php the_field('demo_url'); ?>"><?php the_post_thumbnail(); ?></a>
                                    </div>
                            </div>
            
            
            <?php        }
            } else {
                    _e( 'Sorry, no posts were found.', 'textdomain' );
            }
    ?>
</div>
<?php get_footer(); ?>