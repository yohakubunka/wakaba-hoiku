<?php get_header(); ?>
<?php $theme_options = get_option('theme_option_name'); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>
<main id="about">
  <!-- 園の取り組み -->
  <section class="project">
    <div class="illust-back">
      <div class="inner">
        <h2 class="title"><span>園</span>の取り組み</h2>
        <?php get_template_part('template-parts/project'); ?>
      </div>
    </div>
  </section>

  <!-- 保育方針 -->
  <section class="policy" id="policy">
    <div class="butterfly-back">
      <div class="inner">
        <h2 class="title"><span>保</span>育方針</h2>
        <?php $project_policy = get_field('project_policy'); ?>
        <h3><?= nl2br($project_policy['projectpolicy-title']); ?></h3>
        <p><?= nl2br($project_policy['projectpolicy-text']); ?></p>
      </div>
    </div>

  </section>

  <!-- 保育目標 -->
  <section class="vision" id="vision">
    <div class="dot-back">
      <div class="inner">
        <h2 class="title"><span>保</span>育目標</h2>
        <p class="intro">集団生活の中で、一人ひとりの個性を尊重し、明るい雰囲気の中で<br class="pc-only">「まごころ」を持った子どもに育つよう保育をしています。</p>
        <div class="flexitem">
          <?php $project_point = get_field('project_point');
          for ($i = 0; $i <= 3; $i++) : ?>
            <div class="point wrap-2">
              <img class="circle" src="<?= $project_point['point_image-' . $i]; ?>">
              <p class="p-flowered">Point<?= $i + 1 ?></p>
              <h3><?= nl2br($project_point['point_text-' . $i]); ?></h3>
            </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>

  </section>

  <!-- 施設概要 -->
  <section class="facility" id="facility">
    <div class="grass-back">
      <div class="inner">
        <h2 class="title"><span>施</span>設概要</h2>
        <div class="white-back">
          <div class="facility-img">
            <?php if (get_field('facility_image')) : ?>
              <img src="<?php the_field('facility_image'); ?>" />
            <?php endif; ?>
          </div>
          <div class="facility-content">
            <ul class="flexitem">
              <li class="item-box flex-left">
                <p class="f-title">施設名</p>
                <p><?= $theme_options['op_0'] ?></p>
              </li>
              <li class="item-box flex-left">
                <p class="f-title">園長</p>
                <p><?= $theme_options['op_1'] ?></p>
              </li>
              <li class="item-box flex-left">
                <p class="f-title">種別</p>
                <p><?= $theme_options['op_2'] ?></p>
              </li>
              <li class="item-box flex-left">
                <p class="f-title">設立</p>
                <p><?= $theme_options['op_3'] ?> </p>
              </li>
              <!-- <li class="item-box flex-left">
                <p>郵便番号</p><?= $theme_options['op_4'] ?>
              </li> -->
              <li class="item-box flex-left">
                <p class="f-title">所在地</p>
                <p><?= $theme_options['op_5'] ?> </p>
              </li>
              <li class="item-box flex-left">
                <p class="f-title">定員</p>
                <p><?= $theme_options['op_6'] ?></p>
              </li>
              <li class="item-box flex-left">
                <p class="f-title">連絡先</p>
                <p>TEL:<?= $theme_options['op_7'] ?><br>FAX:<?= $theme_options['op_8'] ?></p>
              </li>
              <li class="item-box flex-left">
                <p class="f-title">保育時間</p>
                <p>平日:<?= $theme_options['op_9'] ?><br>土曜:<?= $theme_options['op_10'] ?></p>
              </li>
              <li class="item-box flex-left">
                <p class="f-title">MAIL</p>
                <p><?= $theme_options['op_11'] ?></p>
              </li>
              <li class="item-box flex-left">
                <p class="f-title">アクセス</p>
                <p><?= $theme_options['op_12'] ?></p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ダウンロード資料 -->
  <section class="download" id="download">
    <div class="butterfly-back">
      <div class="inner">
        <h2 class="title"><span>ダ</span>ウンロード資料</h2>
        <div class="flexitem">
          <?php
          $download_document = SCF::get('download_document');
          foreach ($download_document as $fields) :
          ?>
            <a target="_blank" class="document-link wrap-2" href="<?php echo wp_get_attachment_url($fields['download_file']); ?>"><?php echo $fields['download_title']; ?></a>
          <?php endforeach ?>
        </div>
      </div>
    </div>


  </section>

  <!-- ギャラリー-->
  <section class="gallery last-section" id="gallery">
    <div class="ladybug-back">
      <div class="inner">
        <h2 class="title"><span>ギ</span>ャラリー</h2>
        <ul class="slick-slider">
          <?php
          $gallery = SCF::get('gallery');
          foreach ($gallery as $fields) :
            $gallery_image = wp_get_attachment_image_src($fields['gallery_image'], 'large');
          ?>
            <li class="gallery-box">
              <div class="img-box">
                <img src="<?php echo $gallery_image[0]; ?>">
                <p><?php echo $fields['gallery_title']; ?></p>
              </div>
            </li>
          <?php endforeach ?>
        </ul>

      </div>
    </div>

  </section>
</main>
<?php get_footer(); ?>