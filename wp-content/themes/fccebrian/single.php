<?php
get_header();

 ?>

<div id="article-container">
<?php  while ( have_posts()){//on appel la liste des artclicle donc 1 seul
				the_post(); //sert a initialiser l'article en cours 
				
				$title=get_the_title();
				//$content=get_the_content();
				$thumbnail=get_the_post_thumbnail(null,'medium');// balise image medium
				$content=get_the_content();
				;
				$categories=get_the_category();
				$tags=get_the_tags();
				
			?>

<div class="center">
			<h1 class='title-article'><?= $title?></h1>
		
			
				   <?= $thumbnail?>  
		

			<div class='content-article'> 
			 <?= do_shortcode($content)?>
			  </div> 
</div>	
			 
		
	<div class="flex2">
		<div class='related-cat cloud'>
			<h3 class="center">Categories associées</h3>
			<ul>
				<?php
			
				foreach ($categories as $category) {?>
					<li class="center">
					<a href="<?= get_category_link($category->cat_ID)?>">
					
					<?=$category->name ?>
					</a>
					</li>

				<?php	} ?>
			</ul>
		</div>

			<?php if($tags)	{?>
						<div class='related-tag cloud'>
							<h3 class="center">tags associés</h3>
							<ul >
								<?php
							
								foreach ($tags as $tag) {?>
									<li class="center">
										
									<a href="<?= get_tag_link($tag)?>">
									
									#<?=$tag->name ?>
									</a>
									</li>

								<?php	} ?>
							</ul>
						</div>

			<?php } 
			?>
		</div>




		<?php
		} 
		?>
</div>

<?php
//get_sidebar();
get_footer();
