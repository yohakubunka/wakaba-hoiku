<div class="sidebar-wrap">
  <?php
  $cat = array(
    'title_li'           => __(''),
    'number'             => 5,
    'taxonomy'           => 'category',
  );
  $arch = array(
    'type'            => 'monthly',
    'title_li'           => __(''),
    'number'             => 5,
    'post_type'     => 'post'
  )
  ?>
  <div class="mon all">
    <h2>アーカイブ</h2>
    <div class="accordion-container">
      <div class="accordion-item js-accordion-title">
        <div class="title-field">
          <p class="title-field__title">公開年を選択</p>
        </div>
      </div>
      <div class="accordion-content">
        <ul class="monthly-list">
          <?php wp_get_archives('post_type=post&type=yearly&show_post_count=1'); ?>
        </ul>
      </div>
    </div>
    </select>
  </div>
  <div class="cat all">
    <h2>カテゴリー</h2>
    <ul class="cat flexitem">
      <?php wp_list_categories($cat); ?>
    </ul>
  </div>
</div>