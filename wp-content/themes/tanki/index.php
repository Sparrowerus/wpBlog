<?php get_header();?>
<div class="search-wrapper">
    <form
            role="search"
            method="get"
            id="searchform"
            class="searchform"
            action="<?php echo esc_url( home_url( '/' ) ); ?>"
    >
        <input
                autofocus
                placeholder="Поиск"
                type="text"
                value="<?php echo get_search_query(); ?>"
                name="s"
                class="search-input-modal"
                id="s"
        />
        <input type="submit" id="searchsubmit" value=" " />
    </form>
</div>
<section class="news-list">
    <div class="news-list-wrapper">
        <?php
        $custom_posts = new WP_Query(array(
            'post_type' => 'my_post',
            'posts_per_page' => -1
        ));

        if ($custom_posts->have_posts()) :
            while ($custom_posts->have_posts()) : $custom_posts->the_post(); ?>
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