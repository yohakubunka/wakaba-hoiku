<?php wp_footer(); ?>
<?php $theme_options = get_option('theme_option_name');  ?>
<div class="pagetop inner">
  <a class="pagetop__inner" href="#">
    <p>トップへ<br>もどる</p>
    <div class="ilust">
      <img class="yurayura_anime" src="<?= get_stylesheet_directory_uri(); ?>/images/svg/leaf.svg" alt="トップページ">
    </div>

  </a>
</div>
<footer class="footer">
  <div class="footer__inner inner">
    <div class="footer__inner--company">
      <div class="footer-logo">
        <img src="<?php echo esc_html(get_theme_mod('footer-logo')) ?>" alt="若葉保育園">
      </div>
      <div class="footer-company">
        <p>〒<?= $theme_options['op_4'] ?></p>
        <p class="footer-company__address"><?= $theme_options['op_5'] ?></p>
        <div class="footer-company__tel">
          <span><img src="<?= get_stylesheet_directory_uri(); ?>/images/svg/tel-icon.svg"></span>
          <p><?= $theme_options['op_7'] ?></p>
        </div>
      </div>
      <div class="button flex-left">
        <a href="<?= esc_url(home_url('/')); ?>/contact" class="button__switch">お問い合わせフォーム</a>
      </div>
    </div>
    <div class="footer__inner--map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15521.831961779853!2d136.9224755339442!3d35.130096017690605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60037a5a606767bb%3A0x4c69d884accc14e!2z6Iul6JGJ5L-d6IKy5ZyS!5e0!3m2!1sja!2sjp!4v1666599920326!5m2!1sja!2sjp" width="100%" height="270" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="footer__inner--menu">
      <ul>
        <li><a href="<?= esc_url(home_url('/')); ?>">トップ</a></li>
        <li><a href="<?= esc_url(home_url('/')); ?>/about">園ついて</a></li>
        <li><a href="<?= esc_url(home_url('/')); ?>/life">園での生活</a></li>
        <li><a href="<?= esc_url(home_url('/')); ?>/guide">入園案内</a></li>
        <li><a href="<?= esc_url(home_url('/')); ?>/news">お知らせ</a></li>
        <li><a href="<?= esc_url(home_url('/')); ?>/recruit">採用情報</a></li>
        <li><a href="<?= esc_url(home_url('/')); ?>/contact">お問い合わせ</a></li>
      </ul>
    </div>
  </div>
  <div class="copyright">© 2022 宗教法人浄照寺　若葉保育園</div>
</footer>
</body>

</html>