<!-- gets header -->
<?php
   get_header();
   ?> 
  
		<article class="wpContent px-3 py-5 p-md-5 contentMargins">
	    
		<?php
			if(have_posts()){
				while(have_posts()){
					the_post();
                    
                    get_template_part('template-parts/content', 'article');
				}
			}
		?>

	    </article>
	  
<!-- gets footer -->
    <?php
    get_footer();
    ?>