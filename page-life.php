<?php get_header(); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>
<main id="life">
  <!-- 一日の流れ -->
  <section class="one-day" id="one-day">
    <div class="flagback_single-left">
      <div class="dot-back-repeat">
        <div class="inner">
          <h2 class="title"><span>一</span>日の流れ</h2>
          <?php $dayflowtext = get_field('life_text'); ?>
          <p class="dayflow-text"><?= nl2br($dayflowtext); ?></p>
          <div class="flexcolumn">
            <div class="flexcolumn__left">
              <h3>乳児</h3>
              <?php
              $dayflow_infant = SCF::get('dayflow_infant');
              $end = end($dayflow_infant);
              foreach ($dayflow_infant as $fields) {
                $infant_image = wp_get_attachment_image_src($fields['infant_image'], 'large');
              ?>
                <div class="flex-left <?php if ($fields === $end) {
                                        echo 'end-flower';
                                      } else  echo 'lined'; ?>">
                  <div class="left">
                    <p class="dayflow-time"><?php echo $fields['infant_time']; ?></p>
                    <p><?php echo nl2br($fields['infant_text']); ?></p>
                  </div>
                  <div class="right">
                    <img class="img-frame-8" src="<?php echo $infant_image[0]; ?>">
                  </div>
                </div>
              <?php } ?>
            </div>
            <div class="flexcolumn__right">
              <h3>幼児</h3>
              <?php
              $dayflow_child = SCF::get('dayflow_child');
              $end = end($dayflow_child);
              foreach ($dayflow_child as $fields) {
                $child_image = wp_get_attachment_image_src($fields['child_image'], 'large');
              ?>
                <div class="flex-left <?php if ($fields === $end) {
                                        echo 'end-flower';
                                      } else  echo 'lined'; ?>">
                  <div class="left">
                    <p class="dayflow-time"><?php echo $fields['child_time']; ?></p>
                    <p><?php echo nl2br($fields['child_text']); ?></p>
                  </div>
                  <div class="right">
                    <img class="img-frame-8" src="<?php echo $child_image[0]; ?>">
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 年間行事 -->
  <section class="year-event last-section" id="year-event">
    <div class="year-event-back">
      <div class="inner">
        <h2 class="title"><span>年</span>間行事</h2>
        <p class="event-text">毎月の行事として、誕生会・身体測定・避難訓練を実施します。</p>
        <div class="event">
          <div class="flexitem">
            <?php
            $spring_image = SCF::get('spring_image');
            foreach ($spring_image as $fields) {
              $sp_image = wp_get_attachment_image_src($fields['image_spring'], 'large');
            ?>
              <div class="img-box">
                <img class="img-frame-16" src="<?php echo $sp_image[0]; ?>">
              </div>
            <?php } ?>
          </div>
          <div class="flex-left">
            <p class="season">春</p>
            <div class="flexitem">
              <?php
              $spring_event = SCF::get('spring_event');
              foreach ($spring_event as $fields) {
              ?>
                <p class="flowered"><?php echo $fields['event_spring']; ?></p>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="event">
          <div class="flexitem">
            <?php
            $summer_image = SCF::get('summer_image');
            foreach ($summer_image as $fields) {
              $s_image = wp_get_attachment_image_src($fields['image_summer'], 'large');
            ?>
              <div class="img-box">
                <img class="img-frame-16" src="<?php echo $s_image[0]; ?>">
              </div>
            <?php } ?>
          </div>
          <div class="flex-left">
            <p class="season">夏</p>
            <div class="flexitem">
              <?php
              $summer_event = SCF::get('summer_event');
              foreach ($summer_event as $fields) {
              ?>
                <p class="flowered"><?php echo $fields['event_summer']; ?></p>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="event">
          <div class="flexitem">
            <?php
            $autumn_image = SCF::get('autumn_image');
            foreach ($autumn_image as $fields) {
              $a_image = wp_get_attachment_image_src($fields['image_autumn'], 'large');
            ?>
              <div class="img-box">
                <img class="img-frame-16" src="<?php echo $a_image[0]; ?>">
              </div>
            <?php } ?>
          </div>
          <div class="flex-left">
            <p class="season">秋</p>
            <div class="flexitem">
              <?php
              $autumn_event = SCF::get('autumn_event');
              foreach ($autumn_event as $fields) {
              ?>
                <p class="flowered"><?php echo $fields['event_autumn']; ?></p>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="event">
          <div class="flexitem">
            <?php
            $winter_image = SCF::get('winter_image');
            foreach ($winter_image as $fields) {
              $w_image = wp_get_attachment_image_src($fields['image_winter'], 'large');
            ?>
              <div class="img-box">
                <img class="img-frame-16" src="<?php echo $w_image[0]; ?>">
              </div>
            <?php } ?>
          </div>
          <div class="flex-left">
            <p class="season">冬</p>
            <div class="flexitem">
              <?php
              $winter_event = SCF::get('winter_event');
              foreach ($winter_event as $fields) {
              ?>

                <p class="flowered"><?php echo $fields['event_winter']; ?></p>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
</main>
<?php get_footer(); ?>