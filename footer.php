  <footer>
    <div class="container">
      <div class="footer-left">
        <a href="index.html" class="logo">
          <img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="KS partners">
          <h1>Адвокатское <span>Объединение</span></h1>
        </a>
        <p class="copyright">
          © 2020 Все права защищены
        </p>
        <p class="copyright-text">
          Любое использование материалов сайта<br>
          без согласия правообладателя строго<br>
          запрещено
        </p>
      </div>
      <div class="footer-right">
        <?php wp_nav_menu( array(
        	'theme_location'  => '',
        	'menu'            => '',
        	'container'       => 'nav',
        	'container_class' => '',
        	'container_id'    => '',
        	'menu_class'      => 'menu',
        	'menu_id'         => '',
        	'echo'            => true,
        	'fallback_cb'     => 'wp_page_menu',
        	'before'          => '',
        	'after'           => '',
        	'link_before'     => '',
        	'link_after'      => '',
        	'items_wrap'      => '%3$s',
        	'depth'           => 0,
        	'walker'          => '',
        ) ); ?>
        <p class="adress">
          49000,  Украина, г. Днепр,  ул. Сичеславская Набережная, 27а<br>тел.: <a href="tel:+380970017016">+38 097-001-70-16</a>
                <a href="tel:+380636530382"> +38 063-653-03-82</a>
                <a href="tel:+380508845402"> +38 050-884-54-02</a>
        </p>
        <a href="" class="confidentiality">Политика конфиденциальности</a>
      </div>
    </div>

  </footer>



  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/script.js" ?> "></script>
  <?php wp_footer(); ?>
</body>
</html>