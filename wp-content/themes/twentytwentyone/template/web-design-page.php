<?php /* Template Name: Web Design Page */ ?>
<?php get_header(); ?>

<div class="main-web-design-page">
			<div class="main_host_our-section">
				<div class="banner-image-section">
				     <?php echo the_post_thumbnail( $post_id, 'full', array( 'class' => 'alignleftfull' ) ); ?>
				</div>

				<div class="main-banner-content">
					<div class="container"><h1><?php the_title(); ?></h1></div>
				</div>
			</div>

			<div class="main-build-section">
			     <div class="container">
			          <h2> <?php the_field("build_your_business"); ?> </h2>
							<div class="left-text-section"><?php the_field("build_your_text"); ?></div>
							<div class="right-image-section">
								<img src="<?php the_field("build_your_image"); ?>">
							</div>
			     </div>
			
			</div>
			
			
			
			<div class="main-we-create-section">
			      <div class="container">
				     <h2><?php the_field("we_create_responsive"); ?> </h2>
				  
				     <div class="we-create-img-section"> <img src="<?php the_field("we_left_image"); ?>"> </div>
				     <div class="we-are-right-section"><?php the_field("we_are_text_section") ?></div>
				 </div>				</div>
			
			
			<div class="main-our-service-section">
				 <div class="container">				 
				 <h2><?php the_field("our_service"); ?> </h2>
				 <div class="our-service-section">
					 <?php
					 if( have_rows('our_service_text_section') ):
					 while( have_rows('our_service_text_section') ) : the_row();
					
				  echo get_sub_field('responsive_seo_fast');
				  endwhile;		
				  endif;
				  ?>
				 </div>			
			      </div>			
			</div>
			
			
            <div class="main-technology-section">
				<div class="container">
				  <?php the_field("technologies_we_use"); ?>
				</div>
			</div>


			<div class="main-why-dbug-section">
				<div class="container">
				    <h2><?php the_field("why_dbug"); ?></h2>
				
				<div class="why-being-section">
					 <?php
					 if( have_rows('why_dbug_text_section') ):
					 while( have_rows('why_dbug_text_section') ) : the_row();
					
				  echo get_sub_field('being_each_text');
				  endwhile;		
				  endif;
				  ?>
				</div>					
				</div>			 						
			</div>


			<div class="our-work-section">
			  <div class="container"> 
			  <div class="our-work-title">
			  <?php the_field("our_work_portfolio"); ?>
			  </div>
			    <?php echo do_shortcode("[slide-anything id='1451']"); ?>

			   </div>
			</div>
			
			<div class="main-accordian">
				<div class="container">
					<?php echo do_shortcode('[sp_easyaccordion id="1455"]'); ?>
				</div>
			</div>

</div>
<?php get_footer(); ?>