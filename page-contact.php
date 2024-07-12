<?php get_header(); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>
<main id="contact">
  <!-- 入力フォーム -->
  <section class="contact last-section">
    <div class="illust-back ">
      <div class="inner">
        <h2 class="title"><span>入</span>力フォーム</h2>
        <ul class="caution">
          <li class="flowered">「プライバシーポリシー」をお読みになり、同意のうえご記入ください。</li>
          <li class="flowered">ご返信までに2～3日かかることもございますので、お急ぎの方はお電話にてお問い合わせください。</li>
          <li class="flowered">返信メールをお受け取りいただけるよう、受信設定（迷惑メール設定）等をお確かめください。</li>
          <li class="flowered">万一、こちらから返信がない場合は、大変お手数ですが再度ご連絡ください。</li>
        </ul>
        <div class="contact-form">
          <?php echo do_shortcode('[contact-form-7 id="5" title="お問い合わせ"]'); ?>
        </div>
      </div>
    </div>


  </section>

</main>
<?php get_footer(); ?>