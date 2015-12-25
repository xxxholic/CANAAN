<?php $can_style=get_option('can_style'); ?>
<section class="sidebar_sect">
    <aside id="sidebar" class="blackbg">
	   <?php dynamic_sidebar('can'); ?>
       <div class="clearfix"></div>
    </aside>
</section>

<?php wp_footer();  ?>
</div>
<footer class="footer">
    <div class="footer_content">
        <img src="<?php echo get_template_directory_uri(); ?>/images/upload/head.gif">
        <div class="footer_des">
            <h1 class="footer_title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
            <div class="h_dividing"></div>
            <h2 class="footer_description"><?php bloginfo('description'); ?></h2>
        </div>
        <div class="copyright_div"><a title="holic">xxxholic</a> |   <a href="http://www.miitbeian.gov.cn/" title="beian">京备案申请中。。</a></div>
    </div>
</footer>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
</body>
</html>