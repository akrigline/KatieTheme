<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package KatieTheme
 */

get_header(); ?>


<section id="intro" class="skrollrSlide intro fullHeight">

	<?php query_posts('category_name=intro&posts_per_page=1'); ?>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php $splashImg = get_field('intro_image'); ?>
	<h1 class="sr-only"><?php bloginfo('description'); ?></h1>

	<div id="preload" class="sr-only">
		<img src="<?php echo $splashImg['url']; ?>">
	</div>

	<div class="bcg"
				data-center="background-position: 50% 0px;"
				data-top-bottom="background-position: 50% -200px;"
				data-bottom-top="background-position: 50% 200px;"
				data-anchor-target="#intro"
				style="background-image:url('<?php echo $splashImg['url']; ?>')">
		<figure class="arrow col-xs-12"
		data-bottom="opacity: 1"
		data-center-bottom="opacity: 0"
		data-anchor-target="#intro">
			<img src="<?php bloginfo('template_directory'); ?>/img/downarrow.png" alt="Scroll Down">
		</figure>

	</div>

	<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>
	<?php wp_reset_query(); ?>
</section>

<section id="portfolio" class="skrollrSlide">
	<h1 class="sr-only">Portfolio</h1>
	<?php query_posts('category_name=work'); ?>
	<?php if ( have_posts() ) : ?>

		<div
		data-bottom-top="opacity: 0"
		data-center-top="opacity: 1"
		data-center-bottom="opacity: 1"
		data-top-bottom="opacity: 0.25"
		data-anchor-target="#portfolio">
		<ul class="clearfix list-unstyled">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>

			</ul><!-- End Portfolio -->
		</div>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>

	<?php wp_reset_query(); ?>
</section>


<section id="about" class="skrollrSlide fullHeight">
	<div class="container"
	data-bottom-top="opacity: 0"
	data-center-top="opacity: 1"
	data-anchor-target="#about"
	>
	<?php query_posts('category_name=about'); ?>
	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<h1><?php the_title(); ?></h1>

			<h2>
				<?php echo $tagline; ?>
			</h2>

			<h3>
				<?php echo $subhead; ?>
			</h3>
			<div class="row">
				<p class="skills col-xs-12 col-sm-4">
					<?php echo $skills1; ?>
				</p>

				<p class="skills col-xs-12 col-sm-4">
					<?php echo $skills2; ?>
				</p>

				<p class="skills col-xs-12 col-sm-4">
					<?php echo $skills3; ?>
				</p>
			</div><!-- /row -->

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>

	<?php wp_reset_query(); ?>

</div>
</section>

<?php get_footer(); ?>
