<?php
/**
 * Content for homepage template
 *
 * @package pekcell
 */
?>

	<?php 
		$sq = new WP_Query( array(
	    	'post_type'    => 'slide',
	 		'post_status'  => 'publish',
	    ));
		if($sq->have_posts()):
	?>	
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	      <!-- Indicators -->
	      	<ol class="carousel-indicators">
	      		<?php 
	      			for( $i=0; $i < $sq->post_count; $i++){
	      				$active = ($i == 0) ? 'class="active"' : '';
	      				echo '<li data-target="#carousel-example-generic" data-slide-to="'.$i.'" '.$active.'></li>';
	      			}
	      	    ?>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
		    <?php 
			$s_count = 0;
			while( $sq->have_posts() )
			{
				$sq->the_post();
				$sactive = ($s_count == 0) ? 'active' : '';
				$post_thumbnail_id = get_post_thumbnail_id(get_the_ID());
				$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
				echo '	<div class="item '.$sactive.'">
				          <img src="'.$post_thumbnail_url.'">
				          <div class="carousel-caption">
				            <p>'.get_the_content().'</p>
				          </div>
				        </div>';
			}
			?>
			</div><!-- end Wrapper for slides -->
	      	<!-- Controls -->
	      	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	        	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	        	<span class="sr-only">Previous</span>
	      	</a>
	      	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	        	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	        	<span class="sr-only">Next</span>
	      	</a>
		</div>
	<?php 
		endif;
	?>

	<section id="logos2" data--500-top-top="background-size:100%" data-500-top-top="background-size:140%">
      <div class="container">
        <div class="row">
          	<?php 
				$pq = new WP_Query( array(
			    	'post_type'    => 'post',
			 		'post_status'  => 'publish',
			 		'orderby' => 'ID',
					'order'   => 'ASC',
			     ));
				if($pq->have_posts())
				{	
					$p_count = 0;
					while( $pq->have_posts() )
					{
						$pq->the_post();
						$p_count++;
						if($p_count == 4){
							//start second row
							echo '</div><div class="row">';
						}
						$post_thumbnail_id = get_post_thumbnail_id(get_the_ID());
						$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
						echo '	<div class="col-sm-4">
						            <a href="'.get_the_permalink().'" class="logo">
						                  <img src="'.$post_thumbnail_url.'">
							              <p>Conoce Nuestro Producto: '.get_the_title().'</p>
							        </a>
						        </div>';
					}
				}
			?>
			<div class="col-sm-4">
	            
	        </div>
		 </div><!-- row-->
      </div>
    </section>

         
        
	          
       




