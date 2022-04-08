<?php /* Template Name: Services Page */ ?>
<?php get_header(); ?>
<div class="main-services-section">
        <div class="main_digital_section">
            <div class="banner-digital-section">
              <?php echo the_post_thumbnail( $post_id, 'full', array( 'class' => 'alignleftfull' ) ); ?>
            </div>

			<div class="digital-banner-content">
			  <div class="container"><?php the_content(); ?></div>
			</div>
	    </div>

        <div class="main_howdigital_section">
			<div class="container">
			<div class="how-digital-title"><h3><?php the_field("how_digital_marketing"); ?></h3></div>
            <div class="how-content-section"><?php the_field("how_digital_content"); ?></div>
			</div>
	    </div>

        
			<div class="business-post-section">
			   <div class="container">
			      <div class="muliple_post_section">
						 <?php
						$args = array(
						'post_type'=> 'post',
						'category_name'=> 'Business Factors',
						'orderby'    => 'ID',
						'post_status' => 'publish',
						'order'       => 'ASC',
						 'posts_per_page' => -1
						);
						$result = new WP_Query( $args );
						if ( $result-> have_posts() ) : ?>
					 <?php while ( $result->have_posts() ) : $result->the_post(); ?>
					 <div class="muli-post">
					 
					 <?php echo get_the_post_thumbnail();?>
						<?php the_content(); ?>	
					 </div>
					
					 <?php endwhile; ?>
					 <?php endif; wp_reset_postdata(); ?>
					</div>
					<div class="post-below-cntnt"><?php the_field("post_below_content"); ?></div>
					
				</div>
			</div>

			 
			 <div class="main_digitalmart_section">
				<div class="container">
				<div class="digital-mart-title"><h3><?php the_field("digital_marketing"); ?></h3></div>
              <!-- <div class="digital-market-section">
			    <?php
				 if( have_rows('digital_marketing_content') ):
				 while( have_rows('digital_marketing_content') ) : the_row();
				
			     echo get_sub_field('sco_content');
			     endwhile;		
			     endif;
			    ?>
			   </div>-->
			   		<div class="digital-market-section">
						 <?php
						$args = array(
						'post_type'=> 'post',
						'category_name'=> 'Digital Market',
						'orderby'    => 'ID',
						'post_status' => 'publish',
						'order'       => 'ASC',
						 'posts_per_page' => -1
						);
						$result = new WP_Query( $args );
						if ( $result-> have_posts() ) : ?>
					 <?php while ( $result->have_posts() ) : $result->the_post(); ?>
					 <div class="main-sco-cls">
					<div class="sco-img"> <?php echo get_the_post_thumbnail();?></div>
					<div class="seo-title"> <h3><?php the_title(); ?></h3></div>
                     
						<?php //the_content(); ?>	
						
						<div class="seo-view-btn"><a href="<?php the_field("page_link"); ?>">VIEW MORE <img src="http://developer.dbuglab.com/digital-marketing/wp-content/uploads/2022/02/32.png"> </a>
					 </div></div>
					
					 <?php endwhile; ?>
					 <?php endif; wp_reset_postdata(); ?>
					</div>
			   
			   
			   
			   
			   </div>
	         </div>
 
                <div class="why_your_section">
				<div class="container">
				<div class="why-your-title"><h3><?php the_field("why_your_business"); ?></h3></div>
                <div class="why-your-content-section">
			    <?php the_field("why_your_content"); ?>
			   </div>
			    </div>
	           </div>


				<div class="main-indust-section">
				<div class="container">
				<div class="indust-title"><h2><?php the_field("industries_we_serve"); ?></h2></div>
                <div class="indust-content-section">
			    <?php the_field("industries_content"); ?>
			   </div>
			    </div>
	           </div>

				<div class="main-our-process-section">
				<div class="container">
				<div class="our-process"><h2><?php the_field("our_process"); ?></h2></div>
			    </div>
	           </div>
			   
			   	<div class="main-blog-section">
				<div class="container">
				<div class="blog-post"><?php the_field("latest_from_blog"); ?></div>
				
					<div class="blog_post_section">
						 <?php
						$args = array(
						'post_type'=> 'post',
						'category_name'=> 'From Blog',
						'orderby'    => 'ID',
						'post_status' => 'publish',
						'order'       => 'ASC',
						 'posts_per_page' => -1
						);
						$result = new WP_Query( $args );
						if ( $result-> have_posts() ) : ?>
					 <?php while ( $result->have_posts() ) : $result->the_post(); ?>
					 <div class="blog-post">
					 <h3><?php the_title(); ?></h3>
                      <p><?php echo get_the_date(); ?></p>
						<?php the_content(); ?>	
						
						<a href="<?php echo get_permalink(); ?>">Read More > </a>
					 </div>
					
					 <?php endwhile; ?>
					 <?php endif; wp_reset_postdata(); ?>
					</div>
			    </div>
	           </div>
 
</div>






<?php get_footer(); ?>