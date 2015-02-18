<?php
/**
 * Template Name: About Us 
 */

get_header(); ?>
<!-- Page Content -->
    <div class="container">
		
        <div class="row">
	        <h1 class="page-header">
	                    <?php the_title();?>
	        </h1>
	        <div class="col-md-6">
	        	<h4>Section-1</h4>
		        <?php
			        $about_us_posts = get_posts(array('category_name'=>'about-us-1'));
			        
			        foreach ( $about_us_posts as $post ) : setup_postdata( $post );
		        ?>
		        
		        <h1><?php the_title();?></h1>
		        <p><?php the_content();?></p>
		        
				
				<?php 
					endforeach;
					wp_reset_postdata();
				 ?>
			 </div>
        	<div class="col-md-6">
        		<h4>Section-2</h4>
        		<?php
			        $about_us_posts = get_posts(array('category_name'=>'about-us-2'));
			        
			        foreach ( $about_us_posts as $post ) : setup_postdata( $post );
		        ?>
		        
		        <h1><?php the_title();?></h1>
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