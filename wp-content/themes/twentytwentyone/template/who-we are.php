<?php /* Template Name: Who we are Page */ ?>
<?php get_header(); ?>


<div class="main_who_we_are_page">
        <div class="main_help_small_section">
            <div class="banner-who-section">
              <?php echo the_post_thumbnail( $post_id, 'full', array( 'class' => 'alignleftfull' ) ); ?>
            </div>

			<div class="main_banner_content">
			  <div class="container">
				<?php the_content(); ?>
			  </div>
			</div>
	    </div>


		<div class="main_about_us">
			<div class="container">
			<div class="about_us_content"><?php the_field("about_us_section"); ?>
			<div class="we-develiver-best"><?php the_field("we_deliver_section"); ?></div>
			</div>
            <div class="we-ranked-section">
			<div class="keyword-ranked"><?php the_field("key_word_section"); ?></div>
            </div>
			</div>
		</div>

			<div class="main-post-section">
			<div class="container">
			<div class="our_post_section">
            <?php
            $args = array(
            'post_type'=> 'post',
            'category_name'=> 'Mission Vision',
            'orderby'    => 'ID',
            'post_status' => 'publish',
            'order'       => 'ASC',
             'posts_per_page' => -1
            );
            $result = new WP_Query( $args );
            if ( $result-> have_posts() ) : ?>
         <?php while ( $result->have_posts() ) : $result->the_post(); ?>
         <div class="our-post">
		 
		 <div class="our-post-image"><?php echo get_the_post_thumbnail();?></div>
            <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?> </a></h4>
			<?php the_content(); ?>	
         </div>
		
         <?php endwhile; ?>
         <?php endif; wp_reset_postdata(); ?>
		 </div>
		 </div>
        </div>

         
		 
		<div class="main-glimpse-section">
            <div class="container">
			  <h3><?php the_field("glimpse_of_our_happy_clients!_title"); ?></h3>
	           <div class="glimpse-inner-content">
			    <?php
				 if( have_rows('glimpse_of_our_happy_clients!_content') ):
				 while( have_rows('glimpse_of_our_happy_clients!_content') ) : the_row();
				
			     echo get_sub_field('glimpse_content');
			     endwhile;		
			     endif;
			    ?> 
			   </div>
			</div>
		</div>
 

	<div class="reviews-section">
	  <div class="container">
	  <div class="thousand-title"><h2><?php the_field("thousand_of_reviews_build_title"); ?></h2></div>
	  <div class="reviews-image"><?php the_field("thousand_of_reviews_build"); ?></div>
	 </div>
    </div>
	
	<div class="dbug-digital-section">
	  <div class="container">
	  <div class="dbug-digital-title"><h2><?php the_field("dbug_digital"); ?></h2></div>
	  <div class="video-dbug">
	  <video width="" height="" poster="http://developer.dbuglab.com/digital-marketing/wp-content/uploads/2022/02/111.png"controls>
     <source src="<?php the_field("video_section"); ?>" type="video/mp4">
     </video></div>
	 </div>
    </div>
	
	
		<div class="main-executive-section">
          <div class="container">
           <div class="executive-image-section"><h3><?php the_field("executive_section"); ?></h3></div>
		  </div>
		</div>
		
           <div class="main-our-section">
            <div class="container">
			   <h3><?php the_field("our_team_title"); ?></h3>
	           <div class="our-inner-content">
			    <?php
				 if( have_rows('our_team') ):
				 while( have_rows('our_team') ) : the_row();
				
			     echo get_sub_field('image_text');
			     endwhile;		
			     endif;
			  ?> 
			  </div>
			</div>
		</div>
			
			
	   </div>




<?php get_footer(); ?>