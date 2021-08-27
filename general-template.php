<?php 

/*

Template Name: Modelo Geral

*/

?>

<?php get_header('special'); ?>
	<div class="modelo-geral">
		<main>
			<section class="area-conteudo">
				<div class="container container-conteudo">

						<div >
							<?php 
							// Se houver algum post
							if( have_posts() ):
								// Enquanto houver posts, mostre-os pra gente
								while( have_posts() ): the_post();

							?>

							<article>
								<?php the_content(); ?>
							</article>

							<?php 
								endwhile;
							else:
							?>

							 <p>Não há nada para ser exibido...</p>

							<?php endif; ?>

						</div>						

				</div>				
			</section>
		</main>
	</div>
<?php get_footer(); ?>