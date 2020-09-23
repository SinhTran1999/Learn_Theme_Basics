<h1><?php the_title()?></h1>

<!-- câu lệnh bloginfo() này yêu cầu Wordpress làm ba thứ là nó sẽ khởi động PHP và sau đó 
    lấy dữ liệu header từ cơ sở dữ liệu MySQL và hiển thị -->
<h2><?php bloginfo(); ?></h2>
<?php echo "<br>"?>
<?php bloginfo("description");?>
<p><a href="<?php bloginfo('url')?>">Home</a></p>

