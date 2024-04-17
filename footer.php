<footer class='site-footer'>
    <div class="container">
        <div class="copyright"> Copyright X - All rights Reserved</div>
    </div>
    <nav class="footer-menu">
    <?php wp_nav_menu(array( 'theme_location' => 'wp_devs_footer_menu',
                        'depth' => 2 )); ?>
    </nav>
</footer>

</div>
    <?php wp_footer() ;?>
</body>

</html>