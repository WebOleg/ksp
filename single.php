<?php get_header(); ?>
	<main>
		<div class="container">
			
			<article class="single-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php
				
				the_post();


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
	      	<span href="" class="single-share"><?php echo do_shortcode('[addtoany]'); ?></span>
	      	
	      </div>
			</div>
		</div>
	</main>

<?php get_footer(); ?>