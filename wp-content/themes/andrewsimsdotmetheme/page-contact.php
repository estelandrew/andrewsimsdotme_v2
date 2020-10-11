<?php get_header(); ?>
<div class="flex-container contact-icons-container">
    <div class="first-contact-icon"><a target="_blank" href="https://github.com/estelandrew"><i class="fab fa-github"></i></a></div>
    <div><a target="_blank" href="https://www.linkedin.com/in/andrew-e-sims/"><i class="fab fa-linkedin"></i></a></div>
</div>
<div class="contact-form-wrapper contact-form-wrapper--contact-page">
    <h2 class="body-heading">Say Hello</h2>
        <?php 
        while(have_posts()) {
            the_post(); ?>
            <?php the_content(); ?>
    <?php } ?>    
</div>

<?php get_footer(); ?>