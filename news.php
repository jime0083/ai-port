<?php
/*
Template Name: News
*/
get_header(); ?>

<div class="page-header news-page-header">
    <div class="page-header-overlay"></div>
    <h1 class="page-title">NEWS</h1>
</div>
<section class="news-page-section">
    <div class="news-page-container">
        <!-- ニュースアイテム1 -->
        <?php
            $news_query = new WP_Query(array(
            'post_type'      => 'news',
            'posts_per_page' => 3, // 最新5件を表示
            ));
        ?>

        <?php if ($news_query->have_posts()) : ?>
        <ul>
            <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
            <li>
                <div class="news-page-list">
                    <article class="news-page-item">
                        <a href="<?php the_permalink(); ?>" class="news-page-link">
                            <time class="news-page-date"><?php echo get_the_date(); ?></time>
                            <h2 class="news-page-title"><?php the_title(); ?></h2>
                            <span class="news-page-arrow">→</span>
                        </a>
                    </article>
                </div>
            </li>
            <?php endwhile; ?>
        </ul>

        <div class="back-to-top">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="back-link">← BACK TO TOP</a>
        </div>
        
        <?php the_posts_pagination(); // ページネーション ?>
        <?php else : ?>
            <p>現在、ニュースはありません。</p>
        <?php endif; ?>

        
    </div>
</section>

<?php get_footer(); ?>

