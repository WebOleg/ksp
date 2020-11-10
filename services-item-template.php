<?php
/*
Template Name: Шаблон одной услуги
*/
?>

<?php get_header(); ?>

<section class="one-service">
  <div class="container">
    <?php the_post(); ?>
    <?php
      $newSrc = get_the_post_thumbnail_url();    
      echo '<img class="one-icon" src="'.$newSrc.'" alt="<?php wp_title() ?>">';
    ?>

    <h1 class="section-title"><?php echo get_the_title() ?></h1>
    <?php the_content(); ?>
    
    
  </div>
</section>

<?php get_footer(); ?>
