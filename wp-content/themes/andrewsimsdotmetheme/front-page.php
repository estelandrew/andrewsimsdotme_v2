<?php get_header(); ?>
<div class="flex-container welcome-flex-container">
        <div class="welcome-flex-item-1">
                <picture>
                        <source media="(min-width:600px)" srcset="<?php echo get_theme_file_uri('/img/welcome-headershot_large.png'); ?>" />
                        <img class="headshot" width="250" height="246" src="<?php echo get_theme_file_uri('/img/welcome-headershot_small.png'); ?>" alt="Andrew Sims photo" />
                </picture>
        </div>
        <div class="welcome-flex-item-2">
                <span class="welcome-text-container">Hi! My name is <span class="highlight">Andrew Sims</span>. I'm a web developer located in the Columbus, Ohio area. I create modern websites and applications, with responsive designs and delightful user experiences.</span>
        </div>
</div>

<h2 class="body-heading"><span class="heading-border">Skills include...</span></h2>
<h3 class="item-heading">Front-End Development</h3>
<p class="skills-desc">I build out visual components of websites and applications as well as integrate them with a database or Content Management System (CMS). Using HTML, CSS, JavaScript, and other modern or popular languages, I can create fast, interactive web applications. I have experience working with popular front-end libraries and technologies, such as React, SASS, Bootstrap, SAPUI5, and jQuery.</p>
<h3 class="item-heading">Back-End Development</h3>
<p class="skills-desc">I have worked with backend technologies including SQL, Node, Express, PHP, and ABAP (from SAP). I have professional experience writing RESTful API’s to create and edit database records.</p>
<h3 class="item-heading">UI/UX Design</h3>
<p class="skills-desc">User Interface (UI) and User Experience (UX) design involve planning and iterating a site's structure and layout, which is a necessary first step in building any web site or application. I have experience using design and editing tools such as Adobe Photshop and Adobe XD for this process.</p>

<h2 class="body-heading"><span class="heading-border">Recent Projects...</span></h2>
<div class="projects-wrapper">
        <?php 

                $homepageProjects = new WP_Query(array(
                        'posts_per_page' => 2,
                        'post_type' => 'project'
                ));
                while($homepageProjects->have_posts()) {
                        $homepageProjects->the_post(); ?>
                                <div class="project-container flex-container">
                                    <div class="project-flex-item-1">        
                                            <h3 class="item-heading"><?php the_title(); ?></h3>
                                            <div class="project-body"><?php the_content(); ?></div>
                                            <div class="btn-container">
                                                    <a target="_blank" href="<?php the_field('demo_url'); ?>"><span class="btn">Demo &rarr;</span></a>
                                                    <a target="_blank" href="<?php the_field('repository_url'); ?>"><span class="btn">Github &rarr;</span></a>
                                            </div>
                                    </div>
                                    <div class="project-flex-item-2">
                                        <a href="<?php the_field('demo_url'); ?>"><?php the_post_thumbnail(); ?></a>
                                    </div>
                                </div>

                <?php }

        ?>
</div>
<a class="body-link large-link" href="<?php echo site_url('/projects') ?>">View all projects &rarr;</a>

<h2 class="body-heading"><span class="heading-border">Recent Blog Posts...</span></h2>
<div class="posts-wrapper">
        <?php 

                $homepageBlogs = new WP_Query(array(
                        'posts_per_page' => 2,
                        'post_type' => 'post'
                ));

                while($homepageBlogs->have_posts()) {
                        $homepageBlogs->the_post(); ?>

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
                                        <div class="post-body"><?php the_excerpt(); ?></div>
                                        <a class="body-link--post" href="<?php the_permalink(); ?>">Keep Reading &rarr;</a>
                                </div>

                <?php }

        ?>
</div>
<a class="body-link large-link" href="<?php echo site_url('/blog') ?>">View Blog &rarr;</a>

<div class="contact-form-wrapper contact-form-wrapper--front-page">
<h2 class="body-heading">Say Hello</h2>
        <?php echo do_shortcode('[contact-form-7 id="50" title="My Contact Form"]'); ?>
</div>

<?php get_footer(); ?>