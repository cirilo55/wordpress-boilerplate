<?php 
/*
Template Name: General Template
*/

?>
<?php
get_header();
?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
                <div class="container">
                    <div class="general-template">
                        <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post();
                        ?>
                                <h2><?php the_title() ?></h2>
                                <article>
                                    <p>Posted in by <?= get_the_date(); ?> by <?php the_author_posts_link();?></p>
                                    <p>Categories: <?php the_category(''); ?></p>
                                    <p>Tags: <?php the_tags(); ?></p>
                                </article>
                            <?php
                            endwhile;
                        else :
                            ?>
                            <p>Not</p>
                        <?php endif ?>
                    </div>
                </div>

        </main>
    </div>
</div>
<!--  -->
<?php get_footer(); ?>