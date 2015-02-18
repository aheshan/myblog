<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Web app Guideline for developers
                </h1>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                
                <!-- First Blog Post -->
                <h2>
                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php the_author();?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php the_date();?> <?php the_time();?></p>
                <hr>
                
                <p><?php the_content();?></p>
               <?php modify_read_more_link();?>
                <hr>
                <?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
				
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                     <?php posts_nav_link( ",","Newer", "Older" ); ?>
                     </li> 
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Categories</h4>
                    <div class="row">
                        
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                            	<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                

            </div>

        </div>
        <!-- /.row -->

       <?php get_template_part( 'sub_footer'); ?>

    </div>
    <!-- /.container -->
<?php
get_footer();
?>