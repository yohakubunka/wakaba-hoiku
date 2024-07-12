<nav class="menu">
  <!-- メニューボタン -->
  <div class="menu__btn">
    <span class="menu__btn--line"></span>
    <span class="menu__btn--line"></span>
    <span class="menu__btn--line"></span>
  </div>
</nav>
<!-- メニューの中身 -->
<div class="inside">
  <div class="inside__inner">
    <div class="inside__inner--logo">
      <a href="<?= esc_url( home_url( '/' ) ); ?>">
        <img src="<?php echo esc_html(get_theme_mod('header-logo'))?>" alt="若葉保育園">
      </a>
    </div>
    <ul class="inside__inner--menulist">
      <li><a href="<?= esc_url( home_url( '/' ) ); ?>/about">園について</a></li>
      <li><a href="<?= esc_url( home_url( '/' ) ); ?>/life">園での生活</a></li>
      <li><a href="<?= esc_url( home_url( '/' ) ); ?>/guide">入園案内</a></li>
      <li><a href="<?= esc_url( home_url( '/' ) ); ?>/news">お知らせ</a></li>
      <li><a href="<?= esc_url( home_url( '/' ) ); ?>/recruit">採用情報</a></li>
    </ul>
    <div class="inside__inner--contact">
      <a href="<?= esc_url( home_url( '/' ) ); ?>/contact">お問い合わせフォーム</a>
    </div>
  </div>
</div>
