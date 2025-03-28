<footer class="footer">
    <div class="footer-container">
        <div class="footer-content">
            <div class="footer-info">
                <h2 class="footer-logo"><?php bloginfo('name'); ?></h2>
                <p class="footer-address">
                    〒000-0000<br>
                    東京都渋谷区○○町0-0-0
                </p>
                <p class="footer-tel">TEL：03-0000-0000</p>
                <p class="footer-hours">
                    営業時間：9:00〜18:00<br>
                    定休日：水曜日
                </p>
            </div>
            <nav class="footer-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'container' => false,
                    'menu_class' => '',
                    'items_wrap' => '<ul>%3$s</ul>'
                ));
                ?>
            </nav>
        </div>
        <p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> All Rights Reserved.</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
