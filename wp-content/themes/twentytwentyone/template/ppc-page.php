<?php /* Template Name: PPC Page */ ?>

<?php get_header(); ?>
<div class="main_ppc_page">
<div class="main_pay_per-section">
<div class="banner-image-section">
<?php echo the_post_thumbnail( $post_id, 'full', array( 'class' => 'alignleftfull' ) ); ?>
</div>

<div class="ppc-banner-content">
<div class="container"><?php the_content(); ?></div>
</div>
</div>

		<div class="main-why-pay-section">
		   <div class="container">
            <h2><?php the_field("what_is_pay"); ?></h2>
		
		     <div class="hanapin-market-section">
		        <?php the_field("a_hanapin_marketing"); ?>
		     </div>
		
		
		   </div>
		</div>
		
		
					<div class="main-ppc-section">
						<div class="container"> <?php the_field("what_is_ppc"); ?> </div>
					</div>


		<div class="main-what-are-the-section">
			<div class="container"> 
			 <h2><?php the_field("what_are_the"); ?></h2>
		
				<div class="left-contnt-section">
					<?php the_field("what_the_content"); ?>
				</div>
		        <div class="right-contnt-section">
				 <?php the_field("what_are_the_right_image"); ?>				
				</div>
			</div>
		</div>
		
		
		
		
		<div class="what_are_post_section">
		<div class="container">
			<div class="search-post-main">
         <?php
            $args = array(
            'post_type'=> 'post',
            'category_name'=> 'PPC-Post',
            'orderby'    => 'ID',
            'post_status' => 'publish',
            'order'       => 'ASC',
             'posts_per_page' => -1
            );
            $result = new WP_Query( $args );
            if ( $result-> have_posts() ) : ?>
         <?php while ( $result->have_posts() ) : $result->the_post(); ?>
         <div class="search-post">
		 <div class="search-post-inner">
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
		 
		 
		 
		 <div class="main-why-market-section">
			<div class="container">
			   <h2><?php the_field("why_ppc_marketing"); ?></h2>
			
			     <div class="ppc-image-text-section">
			        <?php the_field("ppc_advertising"); ?>			
			     </div>		
		    </div>	 
		 </div>
		 
		 <div class="main-low-barrier-section">
		    <div class="container">
		      <div class="inner-content">
			    <?php
				 if( have_rows('low_barrier_content') ):
				 while( have_rows('low_barrier_content') ) : the_row();
				
			     echo get_sub_field('content');
			     endwhile;		
			    endif;
			    ?>
			  
		       </div>
			   
			   <div class="get-button">
			      <?php the_field("get_in_touch"); ?> 
			   </div>
			   
			</div>
		</div>	
		 
		 
		 

</div>
<?php get_footer(); ?>