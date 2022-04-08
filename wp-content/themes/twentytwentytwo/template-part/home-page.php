<?php /* Template Name: Home Page */ ?>

<?php get_header(); ?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<div class="main_home_section">
<div class="main_host_our-section">
<div class="banner-image-section">
<?php echo the_post_thumbnail( $post_id, 'full', array( 'class' => 'alignleftfull' ) ); ?>
</div>

<div class="main-banner-content">
<div class="container">
<?php the_content(); ?>
</div>
</div>
</div>
                    <div class="main_digital_section">

					<div class="container">
					<div class="why_chose_section">
					<?php the_field("why_choose"); ?>
					</div>

					<div class="digital_section">
					<?php the_field("digital_market_content"); ?>
					</div>
					<div class="get-button">
					<?php the_field("get_button"); ?>
					</div>
					</div>
					</div>
 
  <div class="main_third_section">
  <div class="container">
	<div class="forbe-content-section">
	<?php the_field("forbes_content"); ?>
	</div>
  
  <div class="specialist-section">
	<?php the_field("specialist"); ?>
	</div>
	
  </div>
  </div>
  
				<div class="main_fourth_section">
				<div class="container">
				<div class="technolog-section">
				<?php the_field("technologies"); ?>
				</div>


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





<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->