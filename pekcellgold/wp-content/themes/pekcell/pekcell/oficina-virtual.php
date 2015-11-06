<?php
/**
 * Template Name: Oficina Virtual
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package pekcell
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div id="ov_container" style="background:url(http://networksoft.mx/pekcellgold/wp-content/uploads/2015/04/city-slide.png);">
				<div class="row">
					<div class="col-sm-6" id="ov_text_content" >
						<div class="content_text">
							<?php 
								while ( have_posts() )
								{ 
										the_post();
										the_content();
								}
							?>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form">
				            <h4>Ingrese a su Oficina Virtual</h4>
			              	<form>
				                <input class="form-control" placeholder="Usuario">
				                <input class="form-control" type="password" placeholder="Contraseña">
				                <div class="button">
				                  <button class="btn">Entrar</button>
				                </div>
			              	</form>
			            </div>
			        </div>
			    </div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
