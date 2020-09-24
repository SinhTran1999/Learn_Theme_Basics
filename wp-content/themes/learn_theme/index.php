<?php get_header();?>
<section class="post-area">
    <?php 
        //Loops.
        // Trong vòng lặp Wordpress thì khối scope của câu điều kiện if thay vì dùng {} thì nó sẽ sử dụng dấu ':' cho '{' và sử dụng Endif; cho '}' của câu lệnh điều kiện if
        // còn khối scope của câu điều kiện while thay vì dùng {} thì nó sẽ sử dụng dấu ':' cho '{' và sử dụng Endwhile; cho '}' của câu lệnh điều kiện while


        // Trong câu lệnh dưới đây, câu lệnh if để kiểm tra xem trang web có post hay không  và biểu thức if sẽ trả về true và sau đó bên trong khối này, sẽ bắt đầu vòng lặp while
        // Ở đây sử dụng vòng lặp while để hiển thị tất cả các post trên blog
        if(have_posts()):
            while(have_posts()):
                the_post();  ?>
                <article <?php post_class()?> id="post-<?php the_ID();?>">
                    <h1><a href="<?php the_permalink()?>"><?php the_title()?></a></h1>

                    <div class="post-meta">
                        <span class="date"> Posted on: <?php the_date();?> at <?php the_time()?></span>
                        <span class="category"> Posted in: <?php the_category()?></span>
                        <span class="author"><?php the_author()?></span>
                       
                    </div>
                    <?php //the_content();?>
                    <!-- Không muốn hiển thị toàn bộ nội dung và muốn nó hiển thị 55 từ từ nội dung, khi vượt quá nó hiển thị [...] thì sử dụng the_excerpt()-->
                    <?php the_excerpt()?>
                </article>

                <?php
            Endwhile;
        Endif;
    ?>
</section>
<!--add sidebar -->

<aside class="sidebar"> 
    <?php //get_sidebar(); ?> <!-- get_sidebar() ở đây là sidebar tĩnh -->

    <?php dynamic_sidebar("new_sidebar");?> <!-- dynamic_sidebar("new_sidebar") ở đây là sidebar động nó được truyền id là new_sidebar của function my_register_widgets trong file functions.php -->
</aside>

<div class="pagination">
    <?php posts_nav_link()?>
</div>
<?php get_footer();?>
 


 