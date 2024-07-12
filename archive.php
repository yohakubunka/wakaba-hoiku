<?php get_header(); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>
<main id="news" class="news">
  <div class="inner">
    <div class="flex-left">
      <section class="news-col">
        <div class="news-contents">
          <?php
          $terms = wp_get_object_terms($post->ID, 'category');
          foreach ($terms as $term) {
            $cat = $term->name;
            $slug = $term->slug;
          }
          // ブログの一覧を表示する start 
          ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <article class="blog-list__list-item">
                <div class="accordion">
                  <div class="accordion-container">
                    <div class="accordion-item js-accordion-title">
                      <p class="accordion-title ">
                      <div class="title-tag flex-left">
                        <div class="title-tag__date">
                          <p class="date"><?php echo get_the_date("Y.m.d"); //投稿日時を表示させる
                                          ?></p>
                        </div>
                        <div class="title-tag__category">
  <?php
  $category = get_the_category();
  if (!empty($category) && isset($category[0])) {
    $category_link = get_category_link($category[0]->term_id);
    $category_name = $category[0]->cat_name;
    echo '<p class="tag"><a href="' . esc_url($category_link) . '">' . esc_html($category_name) . '</a></p>';
  }
  ?>
</div>

                      </div>
                      <?php // タイトルを表示させる start 
                      ?>
                      <div class="title-field">
                        <h3 class="title-field__title"><?php the_title(); ?></h3>
                        <!-- <img class="arrow" src="<?= get_stylesheet_directory_uri(); ?>/images/svg/arrow.svg" alt="矢印"> -->
                        <?php // タイトルを表示させる end 
                        ?>
                      </div>
                      </p>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content__content">
                        <?php // 抜粋を表示させる start 
                        ?>
                        <h3 class="accordion-content__read"><?php the_content(); ?></h3>
                        <?php // 抜粋を表示させる end 
                        ?>
                        <?php // アイキャッチを表示させる start 
                        ?>
                        <div class="accordion-content__thumbnail">
                          <?php if (has_post_thumbnail()) : ?>
                            <img class="accordion-conten__thumbnail-image" src="<?php the_post_thumbnail_url('large'); ?>">
                          <?php endif; ?>
                        </div>
                        <?php // アイキャッチを表示させる end 
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

          <?php endwhile;
          endif; ?>
        </div>
        <div class="pagination">
          <?php the_posts_pagination(
            array(
              'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
              'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
              'prev_text'     => __('前へ'), // 「前へ」リンクのテキスト
              'next_text'     => __('次へ'), // 「次へ」リンクのテキスト
              'type'          => 'list', // 戻り値の指定 (plain/list)
            )
          ); ?>
        </div>
        <?php // ブログの一覧を表示する end 
        ?>
      </section>
      <section id="sidebar">
        <?php get_template_part('template-parts/news-sidebar'); ?>
      </section>
    </div>
  </div>
  <!--end archive-top-->
</main>


<?php get_footer(); ?>