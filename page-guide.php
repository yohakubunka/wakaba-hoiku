<?php get_header(); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>
<main id="guide">
  <!-- 定員 -->
  <section class="capacity">
    <div class="illust-back">
      <div class="inner">
        <h2 class="title"><span>定</span>員</h2>
        <?php $guide_capacity = get_field('guide_capacity'); ?>
        <div class="mid-in">
          <p>途中入園は<a id="alert-content" href="<?= $guide_capacity['capacity_link']; ?>" target="_brank">こちら</a></p>
        </div>
        <ul class="flexitem">
          <?php for ($i = 0; $i < 6; $i++) : ?>
            <li>
              <p class="bold-text"><?= $guide_capacity['capacity_text-' . $i]; ?></p>
              <p><?= $guide_capacity['capacity_value-' . $i]; ?></p>
            </li>
          <?php endfor; ?>
        </ul>
      </div>
    </div>
  </section>

  <!-- 園の見学 -->
  <section class="inspection">
    <div class="butterfly-back">
      <div class="inner">
        <h2 class="title"><span>園</span>の見学</h2>
        <div class="flexcolumn">
          <?php $guide_inspection = get_field('guide_inspection'); ?>
          <div class="flexcolumn__left">
            <img class="img-frame-16" src="<?= $guide_inspection['inspection_image']; ?>" alt="園の見学画像">
          </div>
          <div class="flexcolumn__right">
            <p><?= ($guide_inspection['inspection_text']); ?></p>
            <div class="button flex-right">
              <a href="https://reserva.be/wakabahoikuen" target="_blank" class="button__switch">予約サイトはこちら</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 入園までの流れ -->
  <section class="guide-flow">
    <div class="grass-back">
      <div class="inner">
        <h2 class="title"><span>入</span>園までの流れ</h2>
        <?php
        $flow_box = SCF::get('flow_box');
        $count = 1;
        foreach ($flow_box as $fields) :
        ?>
          <div class="flow-box">
            <div class="flex-left">
              <p class="step">0<?php echo $count; ?></p>
              <div class="flex-left">
                <p class="flow-s"><?php echo $fields['flow_season']; ?></p>
                <p><?php echo $fields['flow_text']; ?></p>
              </div>
            </div>
          </div>
          <?php $count++; ?>
        <?php endforeach ?>
      </div>
    </div>
  </section>

  <!-- 提出書類 -->
  <section class="guide-document last-section">
    <div class="ladybug-back">
      <div class="inner">
        <h2 class="title"><span>提</span>出書類</h2>
        <div class="flexitem">
          <?php
          $guide_document = SCF::get('guide_document');
          foreach ($guide_document as $fields) :
          ?>
            <a class="document-link wrap-2" href="<?php echo wp_get_attachment_url($fields['document_file']); ?>" target="_blank"><?php echo $fields['document_title']; ?></a>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>