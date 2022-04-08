<?php /* Template Name: CRO Page */ ?>

<?php get_header(); ?>

<div class="main_cro_page">
	<div class="main_cro_section">
		<div class="banner-image-section">
		   <?php echo the_post_thumbnail( $post_id, 'full', array( 'class' => 'alignleftfull' ) ); ?>
		</div>

		<div class="main-banner-content">
		   <div class="container"><?php the_title(); ?></div>
		</div>
	</div>
	
	
		<div class="main-what-cro-section">
			  <div class="container">
					<h2><?php the_field("what_is_cro"); ?></h2>
					<img src="<?php the_field("cro_image"); ?>">
					<?php the_field("cro_right_text"); ?>
	
	          </div>
        </div>
		
		
		<div class="main-how-work-section">
			<div class="container">
		       <div class="how-does-section">
			        <?php the_field("how_does_cro_work"); ?>
			   </div>
		
			</div>			
	   </div>

        <div class="what-are-your-goal-section">
		    <div class="container">
			    <div class="inner-content-section">
				 <?php
                     if( have_rows('what_are_your') ):
					 while( have_rows('what_are_your') ) : the_row();
					
				  echo get_sub_field('what_are_your_goals_text');
			      endwhile;		
				  endif;
				  ?>
				</div>
		     </div>
		</div>

		<div class="main-stages-section">
			<div class="container">
				<h2><?php the_field("stages_of_conversion"); ?></h2>
				<div class="stages-image-section">
				    <img src="<?php the_field("stages_of_conversion_image"); ?>">
				</div>
			</div>
        </div>


		   <div class="main-how-we-can-section">
				<div class="container">
				   <div class= "inner-content-section">
					<h2><?php the_field("how_we_can_we_help_in_your_title"); ?></h2>
			
					<div class="left-img-section">
						<img src="<?php the_field("how_we_can_image"); ?>">
					</div>
					<div class="right-text-section">
						 <?php the_field("we_believe"); ?>
					</div>
				  </div>
				</div>		
		   </div>


			<div class="main-our-exclusive-section">
			     <div class="container">
					 <h2><?php the_field("our_exclusive_conversion"); ?></h2>
					
					<div class="custom-our-exclusive-post">
         <?php
            $args = array(
            'post_type'=> 'post',
            'category_name'=> 'CRO- Post',
            'orderby'    => 'ID',
            'post_status' => 'publish',
            'order'       => 'ASC',
             'posts_per_page' => -1
            );
            $result = new WP_Query( $args );
            if ( $result-> have_posts() ) : ?>
         <?php while ( $result->have_posts() ) : $result->the_post(); ?>
         <div class="common-our-post">
		 
		 <?php echo get_the_post_thumbnail();?>
            <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?> </a></h4>
			<div class="a/b-content"><?php the_content(); ?> </div>		
         </div>
		
         <?php endwhile; ?>
         <?php endif; wp_reset_postdata(); ?>
		
		 </div>
				</div>
			</div>


				<div class="main-benefit-section">
						<div class="container">
							<div class="inner-cro-content-section">
						          <?php the_field ("benefits_of_cro_conversion_rate"); ?>
				             </div>
				        </div>
				</div>


				<div class="main-why-choose-section">
						<div class="container">
								<h2><?php the_field("why_choose_dbug_lab"); ?></h2>
								<div class="why-chose-contnt">								
											 <?php
				 if( have_rows('why_choose_inner_section') ):
				 while( have_rows('why_choose_inner_section') ) : the_row();
				
			  echo get_sub_field('we_believe_our_team');
			  endwhile;		
			  endif;
			  ?>
								
								</div>
								
								
								<div class="get-button"><?php the_field("get_in_touch_button"); ?></div>
				         </div>
				</div>

</div>

<?php get_footer(); ?>