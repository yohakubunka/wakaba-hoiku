<p class="subtitle"><?= nl2br(get_theme_mod('project-subtitle')); ?></p>
<div class="box">
  <ul class="flexthree attempt">
    <?php for ($i = 0; $i < 3; $i++) : ?>
      <li>
        <p class="bold-text"><?= esc_html(get_theme_mod('project-title_' . $i)); ?></p>
        <p><?= nl2br(get_theme_mod('project-text_' . $i)); ?></p>
      </li>
    <?php endfor; ?>
  </ul>
</div>
<?php if (is_home() || is_front_page()) : ?>
  <div class="button flex-center">
    <a href="<?= esc_url(home_url('/')); ?>/about" class="button__switch">もっと見る</a>
  </div>
<?php endif; ?>