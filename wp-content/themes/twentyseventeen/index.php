<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="container">


	<div class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="primario col-lg-6 col-md-6 col-sm-6 col-xs-12">


			<h2 class="main-headling">NOSOTROS</h2>
			<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
			</div>

<div class="galeria col-lg-6 col-md-6 col-sm-6 col-xs-12">
	<h2 class="main-headling">INSPIRACIÓN</h2>

	<?php dynamic_sidebar( 'sidebar-3' ); ?>



	</div>
		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- .wrap -->
<?php get_footer();
