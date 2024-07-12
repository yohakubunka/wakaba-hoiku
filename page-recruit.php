<?php get_header(); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>
<main id="recruit">
  <!-- メッセージ -->
  <section class="recruit-message">
    <div class="butterfly-back">
      <div class="inner">
        <h2 class="title"><span>メ</span>ッセージ</h2>
        <div class="flexcolumn">
          <?php $recruit_message = get_field('recruit_message'); ?>
          <div class="flexcolumn__left">
            <h3><?= $recruit_message['message_title']; ?></h3>
            <p><?= nl2br($recruit_message['message_text']); ?></p>
          </div>
          <div class="flexcolumn__right">
            <img class="img-frame-16" src="<?= $recruit_message['message_image']; ?>" />
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- 働きやすい理由 -->
  <section class="recruit-reason">
    <div class="grass-back">
      <div class="inner">
        <h2 class="title"><span>働</span>きやすい理由</h2>
        <div class="flexitem">
          <?php $recruit_reason = get_field('recruit_reason');
          for ($i = 0; $i <= 3; $i++) : ?>
            <div class="point wrap-2">
              <img class="circle" src="<?= $recruit_reason['reason_image-' . $i]; ?>" />
              <p class="p-flowered">Point<?= $i + 1 ?></p>
              <h3><?= nl2br($recruit_reason['reason_text-' . $i]); ?></h3>
            </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>

  </section>

  <!-- 先輩の声 -->
  <section class="senior-voice">
    <div class="cloud-back">
      <div class="illust-back">
        <div class="inner">
          <h2 class="title"><span>先</span>輩の声</h2>
          <?php
          $args = array(
            'post_type' => 'voice_post',
          );
          $wp_voice = new WP_Query($args); ?>
          <?php if ($wp_voice) : ?>
            <?php while ($wp_voice->have_posts()) : $wp_voice->the_post(); ?>
              <?php $recruit_voice = get_field('voice'); ?>
              <div class="flexcolumn">
                <div class="flexcolumn__left">
                  <div class="flex-left">
                    <h3 class="name"><?= $recruit_voice['voice_name']; ?></h3>
                    <p class="teacher">保育士</p>
                  </div>

                  <h3 class="voice-title"><?= nl2br($recruit_voice['voice_title']); ?></h3>
                  <p><?= nl2br($recruit_voice['voice_text']); ?></p>
                </div>
                <div class="flexcolumn__right">
                  <img class="window-frame" src="<?= $recruit_voice['voice_image']; ?>">
                </div>
              </div>


            <?php endwhile; ?>
          <?php else : ?>
            <?php wp_reset_postdata(); ?>
            <p>記事がまだありません</p>
          <?php endif; ?>
        </div>
      </div>
    </div>

  </section>

  <!-- 募集要項 -->
  <section class="recruit-guide last-section">
    <div class="dot-back">
      <div class="inner">
        <h2 class="title"><span>募</span>集要項</h2>
        <?php
        $args = array(
          'post_type' => 'recruit_post',
        );
        $wp_posts = new WP_Query($args); ?>
        <?php if ($wp_posts) : ?>
          <?php while ($wp_posts->have_posts()) : $wp_posts->the_post(); ?>
            <div class="accordion-box">
              <div class="accordion-item js-accordion-title">
                <h3><?php the_title(); ?></h3>
              </div>
              <div class="accordion-content">
                <?php
                $recruitment_box = SCF::get('recruitment_box');
                foreach ($recruitment_box as $fields) {
                ?><div class="flex-left">
                    <p class="title-n"><?php echo $fields['recruitment_title']; ?></p>
                    <p class="contents"><?php echo nl2br($fields['recruitment_text']); ?></p>
                  </div>
                <?php } ?>
              </div>
            </div>
          <?php endwhile; ?>
        <?php else : ?>
          <?php wp_reset_postdata(); ?>
          <p>記事がまだありません</p>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>