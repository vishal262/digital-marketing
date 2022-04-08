<?php /* Template Name: Portfolio Page */ ?>
<?php get_header(); ?>
<div class="main-portfolio-section">
        <div class="main_port_section">
            <div class="banner-port-section">
              <?php echo the_post_thumbnail( $post_id, 'full', array( 'class' => 'alignleftfull' ) ); ?>
            </div>

			<div class="port-banner-content">
			  <div class="container">
			  <h2><?php the_title(); ?></h2>
			  <?php the_content(); ?>
			  </div>
			</div>
	    </div>
		
		    <div class="main-digital-video">
			    <div class="container">
			    <h2><?php the_field("digital_marketing"); ?></h2>
			
			     <div class="video-dbug">
			     <video width="500" height="500" controls>
			     <source src="<?php the_field("video"); ?>">
			     </video>
				 
				 <video width="500" height="500" controls>
			     <source src="<?php the_field("videoos"); ?>">
			     </video>
				 
				 <video width="500" height="500" controls>
			     <source src="<?php the_field("video_rd"); ?>">
			     </video>
				 
				 <video width="500" height="500" controls>
			     <source src="<?php the_field("fourth_video"); ?>">
			     </video>
				 
				 <video width="500" height="500" controls>
			     <source src="<?php the_field("fifth_video"); ?>">
			     </video>
				 
				 <video width="500" height="500" controls>
			     <source src="<?php the_field("sixth_video"); ?>">
			     </video>
				 

			     </div>

			    </div>
			</div>


			<div class="main-google-section">
				<div class="container">
					<h2><?php the_field("google"); ?></h2>
					<div class="main-google-section-inner">
					<div class="main-we-have-section">
					<?php the_field("we_have"); ?>					
					</div>

					<div class="simko-section">
						 <div class="samko-image-text">
						  <?php the_field("samko_&_miko"); ?>
						  </div>
					</div>
					
					<div class="nick-section simko-section">
						<div class="nick-image-text samko-image-text">
						<?php the_field("nick_ryan_motor_works"); ?>
						</div>
				    </div>
					
					<div class="design_vertical_section simko-section">
						<div class="disgner-img-text samko-image-text">
						<?php the_field("designer_vertical_gardens"); ?></h3>
						</div>
	                </div>
					
					<div class="airco_air_section simko-section">
						<div class="airco_air_text samko-image-text">
						<?php the_field("airco_air_conditioning_&_heating"); ?></h3>
						</div>
                    </div>
					</div>
				</div>
			</div>

			<div class="main-case-section">
            <div class="container">			
			<div class="case-study-title"><h3><?php the_field("case_study"); ?></h3></div>
			    <div class="clent-feedback-section">
			    <?php
				 if( have_rows('client_feedback') ):
				 while( have_rows('client_feedback') ) : the_row();
				
			     echo get_sub_field('image_with_text');
			     endwhile;		
			     endif;
			    ?>
			   </div>
			</div>
			</div>
			
				<div class="main-follow-subscribe-section">
				<div class="container">
				<div class="follow-up-left"><?php the_field("follow_up"); ?></div>
                <div class="subscribe-right">
				<?php the_field("subscribe_for_update"); ?>
				<?php echo do_shortcode('[nls_theme1]'); ?>	
				</div>
			    </div>
	           </div>
			
  
		

</div>
<?php get_footer(); ?>