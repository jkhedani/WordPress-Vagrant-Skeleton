<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Smart_Yields
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- Main jumbotron for a primary marketing message or call to action -->
			<div class="jumbotron">
				<div class="container">
					<h1 class="tagline">Farm with confidence and protection.</h1>
					<a class="learn-more" href="javascript:void(0);">Learn more</a>
				</div>
				<!-- Mailer Form -->
				<?php echo smlsubform(array('showname'=>false, 'submittxt'=>'Request a Demo', 'emailholder'=>'enter your email address')); ?>
			</div><!-- jumbotron -->

			<div id="content" class="container-fluid">

				<!-- Features -->
				<?php $posts = get_field('features'); ?>
				<?php $index = 0; ?>
				<?php if( $posts ): ?>
				<div id="features" class="section row">
		            <?php foreach( $posts as $post): ?>
		                <?php setup_postdata($post); ?>
						<div class="feature col-sm-4 col-lg-3">
							<div class="image-wrapper">
								<?php the_post_thumbnail(); ?>
							</div>
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
		                </div>
						<?php $index++; ?>
		            <?php endforeach; ?>
					<?php wp_reset_postdata(); ?>
				</div>
				<?php endif; ?>

				<!-- Benefits -->
				<?php $posts = get_field('benefits'); ?>
				<?php $index = 0; ?>
				<?php if( $posts ): ?>
				<div id="benefits" class="section row">
		            <?php foreach( $posts as $post): ?>
		                <?php setup_postdata($post); ?>
						<div class="benefit row">
							<?php if ( $index % 2 === 0 ) : ?>
								<div class="col-xs-offset-1 col-xs-5   col-sm-offset-1 col-sm-4   col-lg-offset-2 col-lg-3 left small">
									<h2 class="title"><?php the_title(); ?></h2>
									<div class="content"><?php the_content(); ?></div>
								</div>
								<div class="col-xs-5   col-sm-6 col-lg-5 right large">
									<?php the_post_thumbnail(); ?>
								</div>
						 	<?php else : ?>
								<div class="col-xs-5   col-sm-offset-1 col-sm-6 col-lg-offset-2 col-lg-5 left large">
									<?php the_post_thumbnail(); ?>
								</div>
								<div class="col-xs-offset-1 col-xs-5   col-sm-4 col-lg-3 right small">
									<h2 class="title"><?php the_title(); ?></h2>
									<div class="content"><?php the_content(); ?></div>
								</div>
							<?php endif; ?>
		                </div>
						<?php $index++; ?>
		            <?php endforeach; ?>
					<?php wp_reset_postdata(); ?>
				</div>
				<?php endif; ?>

			</div><!-- #content -->

			<!-- Team -->
			<div class="container-fluid">
				<div id="team" class="section row">
					<?php
						$team = new WP_Query(array(
							'post_type' => 'page',
							'post_parent' => 50,
							'order' => 'ASC',
							'posts_per_page' => 20
						));
						$index = 0;
					?>
					<?php while( $team->have_posts() ) : $team->the_post(); ?>
						<?php if ( $index === 0 || $index === 4 || $index === 8 ) : ?>
							<div class="member col-sm-3 col-lg-offset-2 col-lg-2">
						<?php else: ?>
							<div class="member col-sm-3 col-lg-2">
						<?php endif; ?>
							<div class="image-wrapper">
								<?php the_post_thumbnail('medium'); ?>
							</div>
							<h2 class="name"><?php the_title(); ?></h2>
							<p class="title"><?php echo get_field('title'); ?></p>
						</div>
						<?php $index++; ?>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				</div>

				<!-- News -->
				<div id="news" class="section row">
					<div class="title-block col-sm-6 col-lg-3">
						<h2>Latest News</h2>
						<p>See what our team has been up to in the media and the fields.</p>
					</div>
					<?php
						$news = new WP_Query(array(
							'post_type' => 'post',
							'posts_per_page' => 3
						));
					?>
					<?php while( $news->have_posts() ) : $news->the_post(); ?>
						<a href="<?php the_permalink(); ?>" class="article col-sm-6 col-lg-3">
							<div class="image-wrapper">
								<?php the_post_thumbnail(); ?>
							</div>
							<div class="overlay"></div>
							<div class="content">
								<span class="date"><?php the_date(); ?></span>
								<h2 class="name"><?php the_title(); ?></h2>
								<!-- <div class="excerpt"><?php the_excerpt(); ?></div> -->
							</div>
						</a>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				</div>

				<!-- Contact -->
				<div id="contact" class="section row">
					<div class="info-block col-sm-7">
						<h2>Contact</h2>
						<ul class="contact-info">
							<li>info@smartyields.com</li>
							<li>(808) 291 2080</li>
							<li>Honolulu, HI, USA</li>
							<li><a href=""></a></li>
						</ul>
					</div>
					<!-- <div id="contact-form" class="col-sm-5"> -->
						<?php// echo do_shortcode( '[contact-form-7 id="43" title="Contact form 1"]' ); ?>
					<!-- </div> -->
					<div class="map-container col-sm-5">
						<div id="map"></div>
					</div>
				</div>

			</div><!-- .container-fluid -->

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
	get_footer();
