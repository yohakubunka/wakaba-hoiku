<div class="mainvisual">
  <div class="mainvisual__inner">
    <div class="mainvisual__inner--text">
      <?php if (is_home() || is_front_page()) : ?>
        <p class="catchcopy">「まごころ」<br class="sp-only">を大切に、<br>心身ともに明るく<br class="sp-only">元気な子を育てる</p>
      <?php elseif (is_page('about')) : ?>
        <p class="under-title">園について</p>
      <?php elseif (is_page('guide')) : ?>
        <p class="under-title">入園案内</p>
      <?php elseif (is_page('life')) : ?>
        <p class="under-title">園での生活</p>
      <?php elseif (is_page('recruit')) : ?>
        <p class="under-title">採用情報</p>
      <?php elseif (is_page('contact')) : ?>
        <p class="under-title">お問い合わせ</p>
      <?php elseif (is_archive() || is_category() || is_date() || is_single()) : ?>
        <p class="under-title">お知らせ</p>
      <?php endif; ?>
    </div>
    <div class="mainvisual__inner--image">
      <?php if (is_home() || is_front_page()) : ?>
        <img src="<?php echo esc_html(get_theme_mod('main-visual')) ?>" alt="若葉保育園">
      <?php elseif (is_page('about')) : ?>
        <img class="under-visual" src="<?php echo esc_html(get_theme_mod('about-visual')) ?>" alt="「園について」メインビジュアル">
      <?php elseif (is_page('guide')) : ?>
        <img class="under-visual" src="<?php echo esc_html(get_theme_mod('guide-visual')) ?>" alt="「入園案内」メインビジュアル">
      <?php elseif (is_page('life')) : ?>
        <img class="under-visual" src="<?php echo esc_html(get_theme_mod('life-visual')) ?>" alt="「園の生活」メインビジュアル">
      <?php elseif (is_page('recruit')) : ?>
        <img class="under-visual" src="<?php echo esc_html(get_theme_mod('recruit-visual')) ?>" alt="「求人情報」メインビジュアル">
      <?php elseif (is_page('contact')) : ?>
        <img class="under-visual" src="<?php echo esc_html(get_theme_mod('contact-visual')) ?>" alt="「お問い合わせ」メインビジュアル">
      <?php elseif (is_archive() || is_category() || is_date() || is_single()) : ?>
        <img class="under-visual" class="under-visual" src="<?php echo esc_html(get_theme_mod('news-visual')) ?>" alt="「お知らせ」メインビジュアル">
      <?php endif; ?>
    </div>
  </div>
  <div class="mainvisual__menubar">
    <div class="inner">
      <?php $img_url = get_stylesheet_directory_uri(); ?>
      <ul>
        <li><a href="<?= esc_url(home_url('/')); ?>/about"><img src="<?= $img_url ?>/images/svg/about.svg" alt="園について">園について</a></li>
        <li><a href="<?= esc_url(home_url('/')); ?>/life"><img src="<?= $img_url ?>/images/svg/life.svg" alt="園での生活">園での生活</a></li>
        <li><a href="<?= esc_url(home_url('/')); ?>/guide"><img src="<?= $img_url ?>/images/svg/guide.svg" alt="入園案内">入園案内</a></li>
      </ul>
      <div class="logo"><a href="<?= esc_url(home_url('/')); ?>"><img src="<?= $img_url ?>/images/svg/logo.svg" alt="トップページ"></a></div>
      <ul>
        <li><a href="<?= esc_url(home_url('/')); ?>/news"><img src="<?= $img_url ?>/images/svg/news.svg" alt="お知らせ">お知らせ</a></li>
        <li><a href="<?= esc_url(home_url('/')); ?>/recruit"><img src="<?= $img_url ?>/images/svg/recruit.svg" alt="採用情報">採用情報</a></li>
        <li><a href="<?= esc_url(home_url('/')); ?>/contact"><img src="<?= $img_url ?>/images/svg/contact.svg" alt="お問い合わせ">お問い合わせ</a></li>
      </ul>
    </div>
  </div>
</div>