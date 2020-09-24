</main>

<?php 
    // Kiểm tra xem có navigation menu hay không vì ta đã register trong file functions.php nên nó có
        if(has_nav_menu('footer-menu')){
            // Chỉ định vị trí của navigation menu
            wp_nav_menu(array('theme_location' => 'footer-menu'));
        }
?>

<footer>
    <p>&copy; Copyrights <a href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a>.All Rights Reserved</p>
</footer>
<?php wp_footer()?>
</body>
</html>