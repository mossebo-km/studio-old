<?php

get_header();

$post_objects_port_main = get_field( 'port_option_page_project', 'option' );

if ( $post_objects_port_main ) {

	foreach ( $post_objects_port_main as $post ) {# variable must be called $post (IMPORTANT)

	setup_postdata($post);

?>
		<div class="portfolio-top-header" style="background: url(<?php the_field( 'port_img_header' ) ?>) 50% 50% no-repeat; background-size: cover;">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-4 offset-xl-4 portfolio-primary-project text-center">
						<span class="title-before">Новый проект</span>
						<h3 class="title"><?php the_field('port_title'); ?></h3>
						<div class="text-right">
							<a href="javascript:void(0)" class="link-arrow">Подробнее</a>
						</div>
						<a class="link-overlay-grid" href="<?php the_permalink(); ?>"></a>
					</div>
				</div>
			</div>
		</div>
<?php

	}

	wp_reset_postdata(); # IMPORTANT - reset the $post object so the rest of the page works correctly

}

?>


<!-- Portfolio item's -->
<div class="container-fluid">
	<div class="row portfolio-page-grids-project-row">

		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); ?>

			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-grid">
				<div class="grid">
					<figure class="effect-roxy">
						<div class="roxy-grid-img-bg" style="background: url(<?php the_field( 'port_img_header' ) ?>) 50% 50% no-repeat; background-size: cover;"></div>
						<figcaption>
							<div class="portfolio-page-block">
								<h3 class="text-center"><?php the_field('port_title') ?></h3>
								<span class="portfolio-page-grid-description text-center"><?php the_field( 'port_description_text_archive' ) ?></span>
							</div>
							<a href="javascript:void(0)" class="link-arrow">Подробнее</a>
							<a class="main-link" href="<?php echo get_permalink(); ?>">Перейти</a>
						</figcaption>
					</figure>

					<!-- Only mobile -->
					<div class="mobile-row-portfolio-info text-left">
						<span class="mobile-geid-title"><?php the_field('port_title'); ?></span>
						<a href="<?php the_permalink(); ?>" class="link-arrow">Подробнее</a>
					</div>

				</div>
			</div>

			<?php
		  }
		}
		?>

	</div><!-- Portfolio row END -->
</div><!-- Portfolio container-fluid END -->
<?php get_footer(); ?>