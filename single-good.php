<?php get_header(); ?>
	<main>
		<div class="container">
			
			<article class="single-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php
				while ( have_posts() ) :
					the_post();
					echo do_shortcode('[wp_ulike]');

				endwhile; // End of the loop.
				?>
				<div class="single-top">
					<div class="single-avatar"><?php echo get_avatar(get_the_author_meta('user_email'), 32 ); ?></div>
					<span class="single-author"> <?php the_author() ?> </span>
					<div class="single-circle"></div> 
					<span class="single-date"><?php the_date(); ?></span>
				</div>
				<h1 class="single-name section-title"><?php the_title() ?></h1>
	      <div class="single-text"><?php the_content(); ?></div>
	      <div class="single-callback">
	      	<img src="<?php bloginfo('template_directory') ?>/img/view.png" alt="">
	      	<span class="single-views"> <?php echo do_shortcode('[post-views]'); ?> </span>
	      	<img src="<?php bloginfo('template_directory') ?>/img/like.png" alt="">
	      	<span class="single-likes"><?php echo do_shortcode('[wp_ulike]'); ?></span>
	      	<a href="" class="single-comment">Комментировать</a>
	      	<a href="" class="single-share"><span>Поделиться</span><img src="<?php bloginfo('template_directory') ?>/img/share.png" alt=""></a>
	      	
	      </div>
			</div>
		</div>
	</main>

<?php get_footer(); ?>