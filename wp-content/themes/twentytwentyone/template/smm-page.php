<?php /* Template Name: SMM Page */ ?>

<?php get_header(); ?>

<div class="main-smm-page">
<div class="main_social-media-section">
<div class="banner-image-section">
<?php echo the_post_thumbnail( $post_id, 'full', array( 'class' => 'alignleftfull' ) ); ?>
</div>

<div class="main-banner-content">
<div class="container"><?php the_content(); ?></div>
</div>
</div>


	<div class = "main-about-smm">
		<div class="container">
		<h2><?php the_field("about_smm_services"); ?></h2>
		<?php the_field("social_media_marketing"); ?>
		
		
        </div>

    </div>

			<div class = "main-about-smm-section">
		       <div class="container">
			   <div class="how-work-section"><?php the_field("how_does_smm_work"); ?> </div>
			   </div>
			</div>

			<div class="main-grow-your-section">
			     <div class="container">
			       <h2><?php the_field("grow_your"); ?></h2>
				   <?php the_field("social_strategy"); ?>
			     </div>
			</div>

			<div class="main-importance-section">
					<div class="container">
						<h2><?php the_field("importance_of_social"); ?></h2>
			
						<div class="smm_post_section">
         <?php
            $args = array(
            'post_type'=> 'post',
            'category_name'=> 'SMM-Post',
            'orderby'    => 'ID',
            'post_status' => 'publish',
            'order'       => 'ASC',
             'posts_per_page' => -1
            );
            $result = new WP_Query( $args );
            if ( $result-> have_posts() ) : ?>
         <?php while ( $result->have_posts() ) : $result->the_post(); ?>
         <div class="website-post">
		  <div class="website-post-inner">
		 <?php echo get_the_post_thumbnail();?>
            <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?> </a></h4>
			<?php the_content(); ?> 
</div>
         </div>
		
         <?php endwhile; ?>
         <?php endif; wp_reset_postdata(); ?>
		
		 </div>
		 <div class="get-button"><?php the_field("get_in_touch"); ?></div>
			</div>
            </div> 
			
			<div class="main-magic-section">
				<div class="container">
			<h2><?php the_field("magic_of_social"); ?> </h2>
			
			<?php the_field("social_media"); ?>
			
			
			
			    </div>
			</div>
			
			
			<div class="main-what-we-will-section">
			     <div class="container">     
			          <?php the_field("we_uses_both_section"); ?>
			
			
					<div class="social-content-section">
						<?php
						 if( have_rows('facebook_youtube_section') ):
						 while( have_rows('facebook_youtube_section') ) : the_row();
						
					  echo get_sub_field('social_content_section');
					  endwhile;		
					  endif;
					  ?>
					  
					  </div>

			     </div>
			</div>
			
</div>
<?php get_footer(); ?>