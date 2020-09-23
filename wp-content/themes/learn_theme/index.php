<?php get_header();?>
<?php 
    //Loops.
    // Trong vòng lặp Wordpress thì khối scope của câu điều kiện if thay vì dùng {} thì nó sẽ sử dụng dấu ':' cho '{' và sử dụng Endif; cho '}' của câu lệnh điều kiện if
    // còn khối scope của câu điều kiện while thay vì dùng {} thì nó sẽ sử dụng dấu ':' cho '{' và sử dụng Endwhile; cho '}' của câu lệnh điều kiện while


    // Trong câu lệnh dưới đây, câu lệnh if để kiểm tra xem trang web có post hay không  và biểu thức if sẽ trả về true và sau đó bên trong khối này, sẽ bắt đầu vòng lặp while
    // Ở đây sử dụng vòng lặp while để hiển thị tất cả các post trên blog
    if(have_posts()):
        while(have_posts()){
            the_post();
            
            // get blog post title
            the_title();

            // get blog content 
            the_content();
        }
    Endif;
?>
<!--add sidebar -->
<?php get_sidebar(); ?>

<?php get_footer();?>
 


 