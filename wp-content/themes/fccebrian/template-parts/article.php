<?php

$content=get_the_content();
$thumbnail=get_the_post_thumbnail(null,'medium');// balise image medium
$thumbnail_url=get_the_post_thumbnail_url(null,'full');// uniquement url 


?>



<div class='thumbnail-image ' >
        <?php  echo $thumbnail  ;
        $permalink=get_the_permalink();
        the_title("<h2 class='title-article'>", "</h2>");
     echo "<br><a href='$permalink'>Lire l'article</a>";
     ?>

</div>