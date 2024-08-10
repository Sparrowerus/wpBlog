<?php
/*
Template Name: Custom Single Post Template
*/

get_header();
?>
<section class="post-single">
    <div class="background">
        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>">
        <?php else : ?>
            <img src="" alt="Default Image">
        <?php endif; ?>
    </div>

    <div class="preview">
        <div class="image image-loader">
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>">
            <?php else : ?>
                <img src="" alt="Default Image">
            <?php endif; ?>
        </div>

        <div class="tag">
            <span><?php echo get_the_category()[0]->name; ?></span>
        </div>

        <h1><?php the_title(); ?></h1>

        <div class="info">
            <div class="date"><?php echo get_the_date('d F, Y'); ?></div>
        </div>
    </div>

    <div class="content">
        <?php the_content(); ?>
    </div>
</section>

<?php get_footer();?>
