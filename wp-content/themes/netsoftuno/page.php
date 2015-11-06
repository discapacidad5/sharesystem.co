<?php get_header(); ?>
<div class="content container text-left">
	<?php if(have_posts()) : while( have_posts() ) : the_post(); ?>
		<div  class="row">
			<div class="col-md-12">
				<div class="page-title">
					<h2><?php the_title();?></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="page-img-full">
					<?php the_post_thumbnail('full', array('class' => 'img-responsive'));?>
				</div>
			</div>

			<div class="col-md-12 text-justify">
				<div class="page-content">
					<?php the_content();?>
				</div>
			</div>
			
		</div>
	<?php endwhile; endif;?>
</div>
<?php get_footer(); ?>