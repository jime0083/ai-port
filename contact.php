<?php
/*
Template Name: Contact
*/
get_header(); ?>


<div class="page-header news-single-header">
    <div class="page-header-overlay"></div>
    <h1 class="page-title">CONTACT</h1>
</div>

<div class="contact-1-container">
    <div class="contact-1-section">
    <?php echo do_shortcode('[contact-form-7 id="338cfb3" title="Contact1"]'); ?>
    </div>
</div>

<p class="contact-1-label"></p>
<p class="contact-1-required"></p>
<p class="contact-1-label-en"></p>

<?php get_footer(); ?>