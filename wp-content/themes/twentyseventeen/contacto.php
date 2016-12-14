<?php
/**
Template Name: CONTACTO
 */

get_header(); ?>

<div class="container">
	<div id="primary" class="content-area">

	<div class="contact">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="maps">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d753.5911826708642!2d-2.9224033118484427!3d40.92967099870045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd436d48de49347b%3A0x7efc7fc56176a7b1!2sCalle+Alcarria%2C+39%2C+19240+Jadraque%2C+Guadalajara!5e0!3m2!1sen!2ses!4v1481652168222" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<p>C/ calle</p>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<h2>¡ENCUENTRANOS!</h2>
<ul class="find">
<li><i class="fa fa-phone"></i> 000 00 00 00 - 000 00 00 00</li>
<li><i class="fa fa-envelope-o"></i> <a href="mailto:tu@correo.com">info@empresa.com</a></li>
<li><i class="fa fa-instagram"></i> <a href="#" target="_blank">@empresa</a></li>
<li><i class="fa fa-facebook"></i><a href="#" target="_blank"> Nombre de empresa</a></li>

<li class="relo"><i class="fa fa-clock-o"></i>
L-V 9:30h - 14:30h y 16:00 - 20:00h | S 9:30h - 14:30h
</li>
</ul>
</div>
	</div>
<div class="clear"></div>
		<main id="main" class="site-main" role="main">

		<h2 class="form-head">Envíanos cualquier duda o pídenos presupuesto. Te atenderemos encantados:</h2>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
