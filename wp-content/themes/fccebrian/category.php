<?php

//fichier template category
get_header();

?>

<div class="cat_articles">

    <h1 class="title-articles"><?=single_cat_title();?></h1>
    <div class="flex">
            <?php if(have_posts()){

                while(have_posts()){
                the_post();
                //the_title("<h2 class='title-article'>", "</h2>");
                get_template_part("template-parts/article");
                
                }
            }
            ?>
  </div>
</div>

<?php

get_footer();