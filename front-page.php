<?php get_header(); ?>
<main id="front">
  <!-- お知らせ -->
  <section class="top-news">
    <div class="dot-back">
      <h2 class="title"><span>お</span>知らせ</h2>
      <div class="inner">
        <div class="newslist">
          <?php
          $news = array(
            'post_type' => 'post',
            'posts_per_page' => 4
          );
          $news_puery = new WP_Query($news);
          if ($news_puery->have_posts()) :
          ?>
            <?php while ($news_puery->have_posts()) : $news_puery->the_post(); ?>
              <article class="newslist__article">
                <div class="newslist__article--data">
                  <p class="data"><?php echo get_the_date('Y.m.d'); ?></p>
                  <?php $categories = get_the_category();
                  if ($categories) : ?>
                    <p class="category">
                      <?php foreach ($categories as $category) : ?>
                        <a href="<?= get_category_link($category->term_id) ?>"><?= $category->name ?></a>
                      <?php endforeach; ?>
                    </p>
                  <?php endif; ?>
                </div>
                <a class="newslist__article--title" href="<?= esc_url(home_url('/')); ?>/news">
                  <p><?php the_title(); ?></p>
                  <div class=" news-link">
                    <img src="<?= get_stylesheet_directory_uri(); ?>/images/svg/link-icon.svg" alt="お知らせ">
                  </div>
                </a>
              </article>
            <?php endwhile; ?>
          <?php endif;
          wp_reset_postdata(); ?>
        </div>
        <div class="button flex-center">
          <a href="<?= esc_url(home_url('/')); ?>/news" class="button__switch">一覧を見る</a>
        </div>
      </div>
    </div>
  </section>

  <!-- 私たちの想い -->
  <section class="top-policy">
    <div class="flagback_left">
      <div class="cloud-back">
        <div class="inner">
          <h2 class="title"><span>私</span>たちの想い</h2>
          <div class="flexcolumn">
            <?php $top_policy = get_field('top_policy'); ?>
            <div class="flexcolumn__left">
              <img class="window-frame" src="<?= $top_policy['top_policy-image']; ?>" alt="私たちの想い">
            </div>
            <div class="flexcolumn__right">
              <h3><?= $top_policy['top_policy-title']; ?></h3>
              <p><?= nl2br($top_policy['top_policy-text']); ?></p>
              <div class="button flex-right">
                <a href="<?= esc_url(home_url('/')); ?>/about" class="button__switch">詳しく見る</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    </div>
  </section>

  <!-- 園での取り組み -->
  <section class="top-project">
    <div class="illust-back">
      <div class="inner">
        <h2 class="title"><span>園</span>の取り組み</h2>
        <?php get_template_part('template-parts/project'); ?>
      </div>
    </div>
  </section>

  <!-- もくじ -->
  <section class="top-index flagback_right">
    <h2 class="title"><span>も</span>くじ</h2>
    <p class="subtitle">気になる情報をチェック！</p>
    <div class="grass-back">
      <div class="inner">
        <div class="flexitem">
          <?php
          $field_index = SCF::get('index');
          $counter = 0;
          foreach ($field_index as $value) :
            $index_icon = wp_get_attachment_image_src($value['index_icon'], 'large');
            $index_image = wp_get_attachment_image_src($value['index_image'], 'large');
            $value_url = $value['index_link'];
          ?>
            <a class="flexitem__box indexpic" href="<?= esc_url(home_url('/' . $value_url)); ?>">
              <div class="indexpic__inner">
                <div class="indexpic__inner--icon"><img src="<?= $index_icon[0]; ?>" alt="もくじアイコン"></div>
                <div class="indexpic__inner--image"><img src="<?= $index_image[0]; ?>" alt="もくじイメージ"></div>
                <?php if ($counter == 1) : ?>
                  <div class="indexpic__inner--text red-text">
                    <?= $value['index_title']; ?><img src="<?= get_stylesheet_directory_uri(); ?>/images/svg/line-red.svg">
                  </div>
                  <?php $counter = 0; ?>
                <?php else : ?>
                  <div class="indexpic__inner--text">
                    <?= $value['index_title']; ?><img src="<?= get_stylesheet_directory_uri(); ?>/images/svg/line-green.svg">
                  </div>
                  <?php $counter = 1; ?>
                <?php endif; ?>
              </div>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- 採用情報 -->
  <section class="top-recruit last-section">
    <div class="dot-back">
      <div class="inner">
        <h2 class="title"><span>採</span>用情報</h2>
        <div class="flexcolumn reverse">
          <?php $top_policy = get_field('top_recruit'); ?>
          <div class="flexcolumn__left">
            <img class="window-frame" src="<?= $top_policy['top_recruit-image']; ?>" alt="私たちの想い">
          </div>
          <div class="flexcolumn__right">
            <h3><?= $top_policy['top_recruit-title']; ?></h3>
            <p><?= nl2br($top_policy['top_recruit-text']); ?></p>
            <div class="button flex-right">
              <a href="<?= esc_url(home_url('/')); ?>/recruit" class="button__switch">詳しく見る</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>