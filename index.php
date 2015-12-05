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
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<!-- Here is the Index / Bio part -->

<div class="row">

	<div class="large-6 columns">
		
		<!-- Index of pieces -->
		
		<?php
query_posts(array('showposts' => 30, 'post_parent' => 20, 'post_type' => 'page'));

while (have_posts()) { the_post();
?>
<ul>
	<li><a href="#<?php echo the_id();?>"><?php echo the_title() ;?>  </li></a>
</ul>				  
<?php }

wp_reset_query();  // Restore global post data

?>

		
	</div>

		
	<div class="large-6 columns">

<!-- BIO -->
	
		<?php
		query_posts(array('showposts' => 1, 'post_title' => "Bio", 'post_type' => 'page'));
		while (have_posts()) { the_post();
					  
		echo the_content();
					 }
	?>
	</div>
</div>

<!-- Loop thru the pages that are parent of page ID 20 (My Pieces holder) -->


<?php
query_posts(array('showposts' => 30, 'post_parent' => 20, 'post_type' => 'page'));

while (have_posts()) { the_post();
?>
<div id="<?php echo the_id();?>">


	<div class "piece_title"><?php echo the_title();?></div>
	
	<div class "piece_content"><?php echo the_content();?>  </div> 




</div>


<?php
}

wp_reset_query();  // Restore global post data


?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>
	<?php /*get_sidebar();*/ ?>
</div>
<?php get_footer(); ?>
