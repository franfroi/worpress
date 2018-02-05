<?php
// Template Name: Right widget
get_header();

?>


<div id="template-container" >
<?php dynamic_sidebar("right_sidebar") ?>   
<div id="right_sidebar-content">
                <?php while(have_posts()){
                        the_post();
                        // $title=get_the_title();
                      $content=get_the_content();
                      $content=get_the_content();
                      echo do_shortcode($content);}
        ?>
       
        </div>
      
    
  </div 
      










<?php
get_footer();