<?php get_header(); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>
<?php get_template_part('template-parts/news-single-visual'); ?>
<?php $theme_options = get_option('theme_option_name'); ?>


<main id="single">

  <section class="section single-news">
    <article class="section_inner single-content">

      <div class="single-content__title">
        <p class="text-24"><?php the_title(); ?></p>
      </div>
      <div class="single-content__time date">
        <?php the_time('Y.m.d') ?>／
        <?php the_category(',') ?>
      </div>

      <div class="single-content__img">
        <?php
        $news_img_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
        if ($news_img_url) :
        ?>
          <img src="<?php the_post_thumbnail_url() ?>" alt="">
        <?php else : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/images/default.png" alt="">
        <?php endif; ?>
      </div>

      <div class="single-content__text">
        <?= the_content(); ?>
      </div>

      <div class="single-content__page">
        <?php previous_post_link('%link', '<img src="' . get_template_directory_uri() . '/svg/common/prev-arrow.svg" alt="Prev" class="prev-img" />前の記事'); ?>
        <a href="<?= home_url("/news") ?>" class="tolist">記事一覧</a>
        <?php next_post_link('%link', '次の記事<img src="' . get_template_directory_uri() . '/svg/common/next-arrow.svg" alt="Next" class="next-img" />'); ?>
      </div>
    </article>
  </section>

  <section class="section single-recommend">
    <div class="section_inner recommend-contents">
      <h2>RECOMMENDED</h2>
      <div class="news">
        <div class="news__inner">
          <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3
          );
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
          ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <article>
                <a href="<?php echo get_permalink(); ?>" class="article">
                  <div class="article__img">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(array(368, 240)); ?>
                    <?php else : ?>
                      <img src="<?php echo get_template_directory_uri() ?>/images/top/n_dammy.png">
                    <?php endif; ?>
                  </div>
                  <h4 class="article__title"><?php the_title(); ?></h4>
                  <div class="article__option">
                    <p class="article__option--time">
                      <?php echo get_the_date('Y.m.d'); ?>/
                      </ｐ>
                    <p class="article__option--category">
                      <?php
                      $category = get_the_category();
                      if ($category[0]) {
                        echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a>';
                      }
                      ?>
                    </p>
                  </div>
                </a>
              </article>
            <?php endwhile; ?>
          <?php endif;
          wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/index-online'); ?>

</main>

<?php get_footer(); ?>