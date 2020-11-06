<?php
/*
Template Name: Шаблон новости
*/
?>

<?php
$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // определяем текущую страницу блога
$args = array(
  'posts_per_page' => get_option('posts_per_page'), // значение по умолчанию берётся из настроек, но вы можете использовать и собственное
  'paged'          => $current_page // текущая страница
);
query_posts( $args );
 
$wp_query->is_archive = true;
$wp_query->is_home = false;
?>

<?php get_header(); ?>
<section class="page-inner" style="background-image: url('<?php bloginfo('template_directory') ?>/img/news-inner.png')">
  <div class="container">
    <div class="page-info">
      <h1>Новости компании</h1>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna </p>
    </div>
  </div>
</section>
<section class="all-news-section">
  <div class="container">
    <div class="all-news-row">
      <?php while(have_posts()): the_post(); ?>
        <div class="all-news-item">
          <?php
            $newSrc = get_the_post_thumbnail_url();
            if ($newSrc) {
              ?>
              <div class="all-news-item-img" style="background-image: url(' <?php echo $newSrc ?> ')"></div>
            <?php } ?>  
          
          
          <div class="all-news-text">
            <h2>
              <?php the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ); ?>
            </h2>
            <?php
              $newSrc = get_the_post_thumbnail_url();
              if (!$newSrc) {
                echo '<p>'.the_excerpt().'</p>';
              }
            ?>    
          </div>
          <div class="share">
            <div class="shareline"></div>
            <?php echo do_shortcode('[addtoany]'); ?>
              
            </div>   
        </div>
        <?php
      endwhile;
       
      if( function_exists('wp_pagenavi') ) wp_pagenavi(); // функция постраничной навигации
      ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
