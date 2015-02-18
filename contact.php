<?php
/**
 * Template Name: Contact 
 */

get_header(); ?>
<!-- Page Content -->
    <div class="container">
		
        <div class="row">
	        <h1 class="page-header">
	                    <?php the_title();?>
	        </h1>
	        <div class="col-md-6">
	        <?php
			        $about_us_posts = get_posts(array('category_name'=>'contact-us'));
			        
			        foreach ( $about_us_posts as $post ) : setup_postdata( $post );
		        ?>
		        
		        <p><?php the_content();?></p>
		        
				
				<?php 
					endforeach;
					wp_reset_postdata();
				 ?>
	        </div>
	    </div>
	    <?php get_template_part( 'sub_footer'); ?>
	</div>
<?php get_footer(); ?>
