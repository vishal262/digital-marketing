<?php /* Template Name: Email Marketing Page */ ?>
<?php get_header(); ?>

<div class="main-email-page">
			<div class="main_email-baner-section">
				<div class="banner-image-section">
				     <?php echo the_post_thumbnail( $post_id, 'full', array( 'class' => 'alignleftfull' ) ); ?>
				</div>

				<div class="main-banner-content">
					<div class="container"><h1><?php the_title(); ?></h1></div>
				</div>
			</div>



            <div class="main-email-market-section">
			     <div class="container">
			          <h2> <?php the_field("we_provide_seamless"); ?> </h2>
			          <div class="right-image-section">
							<img src="<?php the_field("we_provide_image");?>">
						</div>
						<div class="left-text-section"><?php the_field("we_provide_text"); ?></div>							
			     </div>			
			</div>
			
			<div class="email-provide-section">
			     <div class="container">
			          <h2><?php the_field("why_email_marketing"); ?></h2>
			        <div class="right-image-section">
						<img src="<?php the_field("why_email_image"); ?>">
					</div>
					<div class="left-text-section"><?php the_field("why_email_text"); ?></div>
							
			     </div>			
			</div>
			
			<div class="why-mail-post-section">
					<div class="container">
					 <div class="email-post-section">
         <?php
            $args = array(
            'post_type'=> 'post',
            'category_name'=> 'Email-Post',
            'orderby'    => 'ID',
            'post_status' => 'publish',
            'order'       => 'ASC',
             'posts_per_page' => -1
            );
            $result = new WP_Query( $args );
            if ( $result-> have_posts() ) : ?>
         <?php while ( $result->have_posts() ) : $result->the_post(); ?>
         <div class="email-post">
		  <div class="email-post-inner">
		 <?php echo get_the_post_thumbnail();?>
            <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?> </a></h4>
			<?php the_content(); ?> 
</div>
				
         </div>
		
         <?php endwhile; ?>
         <?php endif; wp_reset_postdata(); ?>
		
		 </div>
					   
			        </div>
			</div>
			<div class="email-marketing-section">
			     <div class="container">
			          <h2><?php the_field("email_marketing_services"); ?> </h2>
			          <div class="right-image-section">
						<img src="<?php the_field("email_marketing_image"); ?>">
					  </div>
					<div class="left-text-section"><?php the_field("email_marketing_text"); ?></div>							
			     </div>			
			</div>
									
			<div class = "main-reach-section">
			      <div class="container">
					<div class="inner-reach-section">
					 	<?php
						 if( have_rows('reach_customers') ):
						 while( have_rows('reach_customers') ) : the_row();
						
					  echo get_sub_field('reach_image_title');
					  endwhile;		
					  endif;
					  ?>			
					</div>				  
				  </div>						
			</div>
			
			
			<div class="main-email-marketing-section">
			     <div class="container">
					<h2><?php the_field("email_marketing_strategy"); ?></h2>
			        <img src="<?php the_field("email_strategy"); ?>">
			      </div>			
			</div>
			
			
			<div class="main-why-choose-dbug">
			     <div class="container">
					<h2><?php the_field("why_choose_dbug"); ?></h2>
					  <div class="why-choose-section">
					    <?php
						 if( have_rows('why_choose_content') ):
						 while( have_rows('why_choose_content') ) : the_row();
						
					  echo get_sub_field('why_choose_we_use');
					  endwhile;		
					  endif;
					  ?>
					
					  </div>
			     </div>
			</div>

     
</div>

<?php get_footer(); ?>