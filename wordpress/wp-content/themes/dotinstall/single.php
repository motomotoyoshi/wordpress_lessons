<?php get_header(); ?>
<div id="main" class="container">
    <div id="posts">

        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>

                <div class="post">
                    <div class="post-header">
                        <h2>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <div class="post-meta">
                            <?php echo get_the_date(); ?> [<?php the_category(', '); ?>]
                        </div>
                        <div class="post-content">
                            <div class="post-body">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="navigation">
                    <div class="prev"><?php previous_post_link(); ?></div>
                    <div class="next"><?php next_post_link(); ?></div>
                </div>
            <?php
                endwhile;
            else :
            ?>
            <p>Nothing post.</p>
        <?php
        endif;
        ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>