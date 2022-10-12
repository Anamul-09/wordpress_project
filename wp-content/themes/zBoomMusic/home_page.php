<!-- 
	template name: home
 -->

<?php get_header() ?>

<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">
					<?php 
						$sql = new WP_Query(array(
							'post_type'=>'slider'
						));

						if($sql->have_posts()):
							while($sql->have_posts()):$sql->the_post();
	
					?>
					<li><?php the_post_thumbnail()?></li>
					<?php 
					endwhile;
					endif;

					?>
				</ul>
			</div>
		</div>
	</div>
</div>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">
		<?php

			$sql = new WP_Query(array(
				'post_type'=>'service',
				// 'posts_per_page'=> '3'
				
			));

			if($sql->have_posts()):
				while($sql->have_posts()):$sql->the_post();


			?>

			<div class="col-1-3">
				<div class="wrap-col box">
					<h2><?php the_title()?></h2>
					<p><?php the_excerpt()?></p>
					<div class="more"><a href="<?php the_permalink()?>">[...]</a></div>
				</div>
			</div>
			

			<?php 
					endwhile;
					endif;

			?>

		</div>
		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="heading"><h2>Latest Blog</h2></div>
					<?php

						$sql = new WP_Query(array(
							'post_type'=>'post',
							'posts_per_page'=> '3'
						));

						if($sql->have_posts()):
							while($sql->have_posts()):$sql->the_post();

					
					?>
					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<?php the_post_thumbnail()?>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
								<div class="info">By <?php the_author()?> on <?php the_time('F j, Y')?> with <a href="<?php the_permalink()?>"> <?php comments_number('no comment','one comment','% comments')?></a></div>
								<?php the_excerpt()?>
							</div>
						</div>
					</article>

					<?php 
					endwhile;
					endif;
						
					?>
					
				</div>
			</div>
			<?php dynamic_sidebar('right-sb-1')?>
			<!-- <div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Latest Albums</h2></div>
						<div class="content">
							<img src="<?php echo get_template_directory_uri()?>/images/albums.png"/>
						</div>
					</div>
					<div class="box">
						<div class="heading"><h2>Upcoming Events</h2></div>
						<div class="content">
							<div class="list">
								<ul>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</section>
<!--------------Footer--------------->

<!-- <footer>
	<div class="wrap-footer zerogrid">
		<div class="row block09">
			<div class="col-1-4">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>About Us</h2></div>
						<div class="content">
							<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis natoque penatibus.</p>
							<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis natoque penatibus.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-1-4">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Latest Post</h2></div>
						<div class="content">
							<ul>
								<li><a href="#">Magic Island Ibiza</a></li>
								<li><a href="#">Bamboo Is Just For You</a></li>
								<li><a href="#">Every Hot Summer</a></li>
								<li><a href="#">Magic Island Ibiza</a></li>
								<li><a href="#">Bamboo Is Just For You</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-1-4">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Hot Albums</h2></div>
						<div class="content">
							<div class="tag">
								<a href="#">Galaxy</a><a href="#">Beatport</a><a href="#">Amazon</a><a href="#">Itunes</a><a href="#">Sonic</a><a href="#">Kpopps</a><a href="#">Summer</a><a href="#">Magical</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-1-4">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Contact Us</h2></div>
						<div class="content">
							<ul>
								<li>Address : 0123 Some Street. Country</li>
								<li>Phone : 000.000.000.000</li>
								<li>Email : admin@zerotheme.com</li>
								<li>Website : www.zerotheme.com</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row copyright">
			<p>Copyright © 2013 - Designed by <a href="https://www.zerotheme.com">ZEROTHEME</a></p>
		</div>
	</div>
</footer> -->

<?php get_footer()?>

</body>
</html>