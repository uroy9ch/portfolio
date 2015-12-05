<?php
/*
Template Name: Homepage
*/
get_header(); ?>

<!--First Section - Table of Contents & Bio-->

<!--Table of Contents-->

<div class="row bump20">
	<div class="small-6 columns">
		<?php
		query_posts(array('showposts' => 30, 'post_parent' => 20, 'post_type' => 'page'));

		while (have_posts()) { the_post();
		?>
		<ul>
			<li><a href="<?php echo the_id();?>"><?php echo the_title() ;?>  </li></a>
		</ul>				  
		<?php }
		wp_reset_query();  // Restore global post data
		?>	
	</div>
	
<!--Bio	-->
	<div class="small-6 columns">
	<p>I’m theChristopher<br>
	Interactive Creative Director</p>
	
	<p>Hello and welcome I am a Professional Interactive  Creative Director and have held many creative leadership positions within major corporations.</p>

<p>I’m formally the brand strategist and internal design guru for National Geographic’s product development group with over 10 years experience in a creative leadership role. Presenting and being a advocate for design is a passion for me. I have a background in Industrial Design as well as Design and product development.</p>
	</div>
</div>

<hr>
<!--App Development Section-->

<!--First Columns - The Weather Wizard-->
<div class="row">

<div class="small-3 columns">
<img  src="wp-content/themes/portfolio/assets/images/sketchWizard01.png">
	
</div>


<!--Second Column - Concept Sketches-->
<div class="small-3 columns">
	
</div>


<!--Third Column - Brand-->
<div class="small-3 columns">
	
</div>


<!--Fourth Column - Working Prototypes-->
<div class="small-3 columns">
	
</div>
</div>

<?php get_footer(); ?>
