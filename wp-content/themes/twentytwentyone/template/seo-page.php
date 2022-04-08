<?php /* Template Name: SEO Page */ ?>

<?php get_header(); ?>

<div class="seo-page">
        <div class="main_seo_section">
            <div class="banner-seo-section">
              <?php echo the_post_thumbnail( $post_id, 'full', array( 'class' => 'alignleftfull' ) ); ?>
            </div>

			<div class="seo-banner-content">
			  <div class="container"><?php the_content(); ?></div>
			</div>
	    </div>
		
		
		<div class="what-is-seo-section">
			<div class="container">
			<div class="what-is-seo-title"><h3><?php the_field("what_is_seo"); ?></h3></div>
            <div class="what-img-txt-section"><?php the_field("seo_image_text"); ?></div>
			</div>
	    </div>


        <div class="How-Does-Seo-Section">
		<div class="container">
		<div class="how-does-section"><?php the_field("how_does_seo_work"); ?></div>
		</div>
		</div>

		<div class="why-is-seo-section">
		<div class="container">
		<h2><div class="why-seo-title"><?php the_field("why_is_seo"); ?></div></h2>
		<div class="why-img-section"><?php the_field("why_is_image_text"); ?></div>
		
		</div>
		</div>


			


           	<div class="how-to-make-section">
			   <div class="container">
			    <div class="itsp-section"><?php the_field("how_to_make"); ?></div>
			  
			      <div class="website_post_section">
						 <?php
						$args = array(
						'post_type'=> 'post',
						'category_name'=> 'Seo-Post',
						'orderby'    => 'ID',
						'post_status' => 'publish',
						'order'       => 'ASC',
						 'posts_per_page' => -1
						);
						$result = new WP_Query( $args );
						if ( $result-> have_posts() ) : ?>
					 <?php while ( $result->have_posts() ) : $result->the_post(); ?>
					 <div class="muli-post">
					 <div class="muli-post-inner">
					 <div class="post-image"><?php echo get_the_post_thumbnail();?></div>
						<div class="post-title"><?php the_title(); ?>	</div>
						<div class="post-content"><?php the_content(); ?>	</div>
					</div>
					 </div>
					
					 <?php endwhile; ?>
					 <?php endif; wp_reset_postdata(); ?>
					</div>
					<div class="post-below-btn"><?php the_field("get_in_touch"); ?></div>
					
				</div>
			</div>
			
			
			<div class="main-local-seo-section">
			<div class="container">
			<?php the_field("local_seo_the_data"); ?>
			
			</div>
			</div>

	            <div class="newsletter-section">	
				<div class="container">
						<?php echo do_shortcode( '[nls_form]' ) ?>
				</div>
				</div>
				



</div>
<?php get_footer(); ?>