<?php get_header();?>
<section class="news-list">
    <div class="news-list-wrapper">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="news-card" draggable="false">
                    <div class="image">
                        <div class="filler"></div>
                        <div class="image-wrapper image-loader">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>" />
                            <?php else : ?>
                                <img src="" alt="Default Image" />
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="info">
                        <div class="date"><?php echo get_the_date('d F, Y'); ?></div>
                        <div class="tag"><?php
                            $categories = get_the_terms(get_the_ID(), 'category');
                            if ( ! empty( $categories ) ) {
                                echo esc_html( $categories[0]->name );
                            }
                            ?></div>
                    </div>
                    <h3><?php the_title(); ?></h3>
                </a>
            <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <p>Посты не найдены</p>
        <?php endif; ?>
    </div>
</section>
<?php get_footer();?>