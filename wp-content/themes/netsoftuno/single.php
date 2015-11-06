<?php get_header(); ?>
<div class="content container text-center">
	<?php if(have_posts()) : while( have_posts() ) : the_post(); ?>
		<div  class="row">
			<div class="col-md-12">
				<div class="post-title-single">
					<h2><?php the_title();?></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="post-img-full">
					<?php the_post_thumbnail('full', array('class' => 'img-responsive'));?>
				</div>
			</div>

			<div class="col-md-12 text-justify">
				<div class="post-content-single">
					<?php the_content();?>
				</div>
			</div>

			<!-- <div class="col-md-12 text-center">
				<div class="share_this_btns">
					<span class='st_facebook_hcount' displayText='Facebook'></span>
					<span class='st_twitter_hcount' displayText='Tweet'></span>
					<span class='st_email_hcount' displayText='Email'></span>
				</div>
			</div> -->

			<div class="col-md-12 text-center">
				<div class="more_posts_links">
					<?php 
						$cat = get_the_category();
						$cat_object = $cat[0];
					?>

					<a href="<?php echo get_site_url().'/category/'.$cat_object->slug;?>"><h2>Artículos Similares</h2></a>
					<?php 
						$curPostID = get_the_ID();
						query_posts(
							array(
							'category_name' => 'articulos', 
							'posts_per_page' => 3, 
							'order' => 'asc',
							'post__not_in'   => array($curPostID),
							)
						);
						if(have_posts()) : 
							while(have_posts()) : 
								the_post();
					?>
								<div class="col-md-4 post_link">
									<a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium', array( 'class' => 'img-responsive' ));?></a>
									<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
								</div>
					<?php 
							endwhile;
						endif;
						wp_reset_query();
					?>
					<div class="clearfix"></div>
				</div>
			</div>


			<div class="col-md-12 text-center">
				<div class="post-call-to-action">
					<div class="jumbotron text-center">
						<div class="row">
							<div class="col-md-12">
								<h4>
									Ofrecemos el mejor software especializado para <br/>empresas de venta directa y network marketing multinivel.
								</h4>
							</div>
							<div class="col-md-3 col-md-offset-3">
								<a href="http://sharesystems.co/empresa" class="btn btn-primary btn-lg cta-btn">Conócenos</a>
							</div>
							<div class="col-md-3">
								<a href="http://sharesystems.co/contacto" class="btn btn-danger btn-lg cta-btn">Contactanos</a>
							</div>
							<div class="col-md-3">
							</div>
						</div>
					</div>
				</div>
			</div>


			
		</div>
	<?php endwhile; endif;?>
</div>
<?php get_footer(); ?>