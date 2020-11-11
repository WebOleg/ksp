<?php
/*
Template Name: Шаблон контактов
*/
?>

<?php get_header(); ?>

<section class="contacts">
  <div class="contacts-top">
    <div class="container">
      <h1 class="section-title">Свяжитесь с нами</h1>
      <p class="contacts-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
      <div class="contacts-row">
        <div class="contacts-form">
          <?php echo do_shortcode('[contact-form-7 id="72" title="Контактная форма 1"]') ?>
        </div>
        <div class="contacts-text">
          <p>49000, Украина, г. Днепр, ул. Сичеславская Набережная, 27а</p>
          <p>Е-mail: <a href="mailto:pravoks@gmail.com"><span>pravoks@gmail.com</span></a></p>
          <p>График работы:<br>
            Пн. - Пт.: с 08:30 до 18:00<br>
            Сб. - Вс.: с 10:00 до 17:00
          </p>
          <p>
            <a href="tel:+380970017016">+38 097-001-70-16</a><br>
            <a href="tel:+380636530382">+38 063-653-03-82</a><br>
            <a href="tel:+380508845402">+38 050-884-54-02</a>
          </p>
          <div class="contacts-social">
            <a href=""><img src="<?php bloginfo('template_directory') ?>/img/c-in.png" alt="linkedIn"></a>
            <a href=""><img src="<?php bloginfo('template_directory') ?>/img/c-face.png" alt="facebook"></a>
            <a href=""><img src="<?php bloginfo('template_directory') ?>/img/c-viber.png" alt="viber"></a>
            <a href=""><img src="<?php bloginfo('template_directory') ?>/img/c-wats.png" alt="wat's Up"></a>
            <a href=""><img src="<?php bloginfo('template_directory') ?>/img/c-teleg.png" alt="telegram"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="contacts-map">
    <h2 class="section-title">Наши офисы на карте</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d935.2481401199423!2d35.04829843904454!3d48.47031946902195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z0YPQuy4g0KHQuNGH0LXRgdC70LDQstGB0LrQsNGPINCd0LDQsdC10YDQtdC20L3QsNGPLCAyN9CwLCDQlNC90ZbQv9GA0L7MgSwg0JTQvdGW0L_RgNC-0L_QtdGC0YDQvtCy0YHRjNC60LAg0L7QsdC70LDRgdGC0YwsIDQ5MDAw!5e0!3m2!1suk!2sua!4v1605036537751!5m2!1suk!2sua" width="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
</section>

<?php get_footer(); ?>
