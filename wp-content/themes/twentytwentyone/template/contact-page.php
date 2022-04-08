<?php /* Template Name: Contact Page */ ?>
<?php get_header(); ?>
<div class="contact-main-section">
<div class="banner-contact-section">
<div class="banner-img">
<?php echo the_post_thumbnail( $post_id, 'full', array( 'class' => 'alignleftfull' ) ); ?>
</div>

				<div class="content-section">
				<div class="container"><h2><?php the_title(); ?></h2></div>
				</div>
				</div>



			<div class="contact-form-section">
			<div class="container">	
			<div class="contact-form-section">
			<h3><?php the_field("form_title"); ?></h3>
			<?php echo do_shortcode('[contact-form-7 id="777" title="Contact form 1"]'); ?>
			</div>
			</div>
			</div>





</div>


<?php get_footer(); ?>