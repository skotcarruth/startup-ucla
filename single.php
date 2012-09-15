<?php
/*
template name: single
*/
get_header(); ?>

<?php if (in_category('internships')) : get_sidebar('internships'); ?>
    <?php elseif (get_sidebar()) : ?>
<?php endif; ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <div class="post">

        <?php if (in_category('news')) : ?><a class="back" href="<?php echo home_url('/category/news'); ?>" >« Back to all News</a>
        <?php elseif (in_category('events')) : ?><a class="back" href="<?php echo home_url('/category/events'); ?>" >« Back to all Events</a>
        <?php elseif (in_category('internships')) : ?><a class="back" href="<?php echo get_permalink( get_page_by_title('internships')); ?>" >« Back to all internships</a>
        <?php endif; ?>

            <div class="post_header">

                <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); }
                    else { ?>
                        <img class="preview_image" src="<?php bloginfo('template_directory'); ?>/images/post_default.png" />
                <?php } ?>

                <div class="post_copy">
                    <div class="post_title" ><?php the_title(); ?></div>

                    <div class="post_meta">
                        <p><?php the_date(); ?></p>
                        <p class="category">Posted in <?php the_category(', '); ?></p>
                    </div>
                </div><!-- .post_copy -->

            </div><!-- .post_header -->

            <div class="post_text"><?php the_content(); ?></div>

        </div><!-- #post -->

    <?php endwhile; // end of the loop. ?>

    <div class="clearfix"></div>


<? get_footer(); ?>