<?php
// Template Name: Left widget
get_header();
?>
<div id="template-container">

    <?php dynamic_sidebar("left_sidebar"); ?>
        <div id="left_sidebar-content">
                <?php while(have_posts()){
                     the_post();
                     $content=get_the_content();
                      echo do_shortcode($content);
                }
                 ?>
       
        </div>
</div>

<?php
get_footer();