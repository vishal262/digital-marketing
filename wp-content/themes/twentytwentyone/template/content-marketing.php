<?php /* Template Name: Content Marketing Page */ ?>

<?php get_header(); ?>

<div class="content-marketing-page">
	<div class="main-content-baner-section">
		<div class="banner-image-section">
			<?php echo the_post_thumbnail( $post_id, 'full', array( 'class' => 'alignleftfull' ) ); ?>
		</div>

			<div class="main-banner-content">
				<div class="container"><h2><?php the_title(); ?></h2></div>
			</div>
	</div>

     <div class="main-what-is-content">
	      <div class="container">
		        <h2><?php the_field("what_is_content_marketing"); ?></h2>					
	            <div class="content-image-section">
				   <img src="<?php the_field("what_is_content_img"); ?>">				
				</div>	
						<div class="content-right-section">
							<?php the_field("what_is_marketing"); ?>
				        </div>
	       </div>
	 </div>

      <div class="main-benefit-marketing">
	       <div class="container">
				<h2><?php the_field("the_benefits_of_content_marketing_title"); ?></h2>
	             <div class="benefits-image-section">
				   <img src="<?php the_field("the_marketing_image"); ?>">				 
				 </div>
	       </div>
	  </div>
	  
	  
	  <div class="main-why-content-section">
	       <div class="container">
				<h2><?php the_field("why_needs_section"); ?></h2>
				<div class="main-content-section">
				<?php the_field("why_inner_content_section"); ?>
				
				</div>
	        </div>
	  </div>
	  
	  
		<div class="main-content-marketing-section">
			<div class="container">
				<h3><?php the_field("content_marketing_strategies_title"); ?></h3>
				<div class= "cntnt-define-section">
				   <?php the_field("content_marketing_section"); ?>
				</div>
			</div>
		</div>

		<div class="main-contnt-markt-section">
		     <div class= "container">
				<h2><?php the_field("why_content_marketing_title"); ?></h2>
				<div class="inner-marketing-section">
				  <?php the_field("why_content_marketing_section"); ?>
				</div>
			 </div>
		</div>
	
		<div class="main-why-choose-section">
		     <div class="container">
					<h2><?php the_field("why_choose_us"); ?> </h2>					
					<div class="why-leftimg-section">
					    <img src="<?php the_field("why_choose_img"); ?>">
					</div>
					<div class="why-ryt-content-section">
							<?php the_field("why_choose_us_content"); ?>
					</div>					
			 </div>
		</div>
		
		<div class="main-our-most-section">
			  <div class="container">
			      <div class="our-most-section">
		               <?php the_field("our_most_engaging_content_title"); ?>
		           </div>
				 
				<div class="social-media-section">				 
					 <?php 
						 if( have_rows ('our_most_inner_section') ) :
						 while(have_rows ('our_most_inner_section') ) : the_row();
						 echo get_sub_field('social_media');
						 endwhile;
						 endif;
					?>
				</div>
				<div class="social-btn">
					<?php the_field("get_in_touch_button"); ?>
				</div>
				
		      </div>
		</div>
		
		
</div>
<?php get_footer(); ?>  
