<?php /* Template Name: Blog Page */ ?>
<?php get_header(); ?>

<div class="main-blog-section">
<div class="main_banner_section">
<div class="banner-image-section">
<?php echo the_post_thumbnail( $post_id, 'full', array( 'class' => 'alignleftfull' ) ); ?>
</div>

<div class="main-banner-content">
<div class="container">
<?php the_content(); ?>
</div>
</div>
</div>


				<div class="blog-section">
				<div class="container">
				<h3><?php the_field("blog_title"); ?></h3>
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
				<div class="see-buton">
				<a href="#"><?php the_field("see_more_button"); ?></a>
			</div>
				
				</div>
				</div>



</div>


<?php get_footer(); ?>