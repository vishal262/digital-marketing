<?php /* Template Name: Home Page */ ?>

<?php get_header(); ?>

<div class="main_home_section">
<div class="main_host_our-section">
<div class="banner-image-section">
<?php echo the_post_thumbnail( $post_id, 'full', array( 'class' => 'alignleftfull' ) ); ?>
</div>

<div class="main-banner-content">
<div class="container"><?php the_content(); ?></div>
</div>
</div>
                   <div class="main_digital_section">

					<div class="container">
					<div class="why_chose_section">
					<h2><?php the_field("why_choose_dbug_digital_title"); ?></h2>
					</div>

					<div class="digital_section">
					<?php the_field("surety_100%_inner_text"); ?>
					</div>
					<div class="get-button">
					<?php the_field("get_a_free_proposal_now"); ?>
					</div>
					</div>
					</div>
 
  <div class="main_third_section">
  <div class="container">
  <h2><?php the_field("recognised_by"); ?> </h2>
	<div class="forbe-content-section">
	     <?php the_field("forbes_agency_council"); ?>
	</div>
  
  <div class="forbe-content-section specialist-section ">
	<?php the_field("specialist_right_content"); ?>
	</div>
	
  </div>
  </div>
  
				<div class="main_fourth_section">
				<div class="container">
				<div class="technolog-section">
				<?php the_field("technologies_we_have_expertise_in_section"); ?>
				</div>

                    <div class="iner-section">
					 <?php
                     if( have_rows('technologies_inner_content') ):
					 while( have_rows('technologies_inner_content') ) : the_row();
					
				  echo get_sub_field('image_with_text');
			      endwhile;		
				  endif;
				  ?>
				  </div>


				</div>
				</div>
  
				<div class="main_fifth_section">
				<div class="container">
				<?php echo do_shortcode('[TABS_R id=106]'); ?>
				</div>
				</div>
					
				<div class="main_sixth_section">
				<div class="container">
				<div class="our-result-title">
				<h2><?php the_field(""); ?></h2>
				</div>
				
            <div class="inner-content">
			 <?php
				 if( have_rows('our_result_content') ):
				 while( have_rows('our_result_content') ) : the_row();
				
			  echo get_sub_field('ready_to_content');
			  endwhile;		
			  endif;
			  ?>
			  
			  </div>
				</div>
				</div>


				<div class="main_seventh_section">
				
				
				<div class="how_its_image">
		        <img src="<?php the_field("how_its"); ?>">
		
				</div>
               <div class="container">
				<div class="how_its_content ">
				<?php the_field("how_its_done"); ?>
				</div>

				</div>
				</div>
				
				
				<div class="main_eight_section">
				<div class="container">
                <div class="our_services_title">
				<?php the_field("our_services"); ?> 
				</div>
				<div class="post-section">
					  <div class="custom_post_section">
         <?php
            $args = array(
            'post_type'=> 'post',
            'category_name'=> 'Our Services',
            'orderby'    => 'ID',
            'post_status' => 'publish',
            'order'       => 'ASC',
             'posts_per_page' => -1
            );
            $result = new WP_Query( $args );
            if ( $result-> have_posts() ) : ?>
         <?php while ( $result->have_posts() ) : $result->the_post(); ?>
         <div class="common-use-post">
		 
		 <?php echo get_the_post_thumbnail();?>
            <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?> </a></h4>
			<?php //the_content(); ?> <p><?php echo wp_trim_words( get_the_content(), 20 ); ?></p>
			
			<div class="arrow-post-image">
			<a href="<?php echo get_permalink(); ?>"><img src="http://developer.dbuglab.com/digital-marketing/wp-content/uploads/2022/02/arrow-PNG.png" >				
			</a></div>	
				
         </div>
		
         <?php endwhile; ?>
         <?php endif; wp_reset_postdata(); ?>
		
		 </div>

				
				</div>
				</div>
				</div>
				
				<div class="ninth-section">
				
				<div class="container">
				<h2><?php the_field("our_happy_customers"); ?></h2>
				<div class="testimonial-section">
				
				</div>
				</div>
				</div>
				
				
				<div class="tenth-section">
				<div class="container">
				<h2><?php the_field("why_should_you"); ?></h2>
				<div class="project-content-section">
				<?php the_field("completed_projects_text"); ?>
				</div>
				</div>
				</div>
				
			<!---	<div class="elevnth-section">
				<div class="container">
				<h2><?php the_field("latest_blog_&_articles"); ?></h2>
				<div class="blog-post-section">
									
         <?php
            $args = array(
            'post_type'=> 'post',
            'category_name'=> 'Market',
            'orderby'    => 'ID',
            'post_status' => 'publish',
            'order'       => 'ASC',
             'posts_per_page' => -1
            );
            $result = new WP_Query( $args );
            if ( $result-> have_posts() ) : ?>
         <?php while ( $result->have_posts() ) : $result->the_post(); ?>
         <div class="blog-post">
		 
		 <?php echo get_the_post_thumbnail();?>
            <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?> </a></h4>
			<?php the_content(); ?>
			<div class="dbl-arrow-image">
			<a href="<?php echo get_permalink(); ?>">Know More<img src="http://developer.dbuglab.com/digital-marketing/wp-content/uploads/2022/02/arrow-PNG.png" >				
			</a></div>	
				
         </div>
		
         <?php endwhile; ?>
         <?php endif; wp_reset_postdata(); ?>
		
		
				</div>
				</div>
				</div>--->
				
				<div class="twelve-section">
				
				<div class="container">
				<h2><?php the_field("latest_projects"); ?></h2>
				<div class="latest-section">
				<?php the_field("latest_projects_image"); ?>
				</div>
				</div>
				</div>
					<div class="newsletter-section">	
				<div class="container">
						
				</div>
				</div>
				

</div>
<?php get_footer(); ?>
