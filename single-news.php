<?php
/*
Template Name: Single News
*/
get_header(); ?>

<div class="page-header news-single-header">
    <div class="page-header-overlay"></div>
    <h1 class="page-title">EVENT & NEWS</h1>
</div>


<article class="news-single-section">
    <div class="news-single-container">
        <div class="news-single-content">
            <div class="news-single-meta">
                <time class="news-single-date"><?php echo get_the_date(); ?></time>
                <h2 class="news-single-title"><?php the_title(); ?></h2>
            </div>

            <div class="news-single-body">
                <p><?php the_content(); ?></p>
            </div>
        </div>

        <div class="back-to-page">
            <a href="<?php echo home_url('/news-list'); ?>" class="back-link">← BACK TO PAGE</a>
        </div>
    </div>
</article>

<?php get_footer(); ?>
