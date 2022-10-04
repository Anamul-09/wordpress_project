<?php get_header()?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
				<?php 
					
					if(have_posts( )):
						while (have_posts()): 
							the_post( );
						

				
				?>
					<article>
						<!-- <img src="<?php echo get_template_directory_uri()?>/images/img1.png"/> -->
						<?php the_post_thumbnail()?>
						<h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
						<div class="info">By <?php the_author()?> on<?php the_time('F,J,Y' )?>  with <a href="<?php the_permalink()?>"> <?php comments_number('no comment','one comment','% comments')?></a>]</div>

						<?php the_excerpt()?>
					</article>
					
					<?php
					endwhile;
					endif;
					?>
					
				</div>
			</div>
			<?php get_sidebar()?>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<?php get_footer()?>