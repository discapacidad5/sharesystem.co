<?php get_header(); ?>
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="blog-title"><?php echo get_bloginfo('name');?> Blog</h1>
			</div>
			<div class="col-md-12">
				<?php 
					query_posts(array('category_name' => 'articulos', 'posts_per_page' => 4, 'order' => 'asc'));
					if(have_posts()) : 
						while(have_posts()) : 
							the_post();
				?>
					<div class="col-md-12 category-post-row">
							<div class="col-md-3">
								<div class="category-post-img">
									<a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium', array('class' => 'img-responsive'));?></a>
								</div>
							</div>
							<div class="col-md-9">
								<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
							</div>
							<div class="col-md-9">
								<p><?php the_excerpt();?></p>
							</div>
					</div>

				<?php 
						endwhile;
					endif;
					wp_reset_query();
				?>
			</div>
		</div>
	</div><!--.container-->
</div><!--/content-->

</div>

<?php get_footer(); ?>