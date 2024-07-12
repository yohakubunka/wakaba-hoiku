<?php
// ページスラッグ取得 ================================================
function get_page_slug()
{
  global $post;
  $slug = $post->post_name;
  if (is_home() || is_front_page()) {
    $slug = "index";
  }
  if (is_date()) {
    $slug = "date";
  }
  if (is_archive()) {
    $slug = "archive";
  }
  if (is_404()) {
    $slug = "404";
  }
  if (is_category()) {
    $slug = "category";
  }
  if (is_tax()) {
    $slug = "taxonomy";
  }
  if (is_tag()) {
    $slug = "tag";
  }
  if (is_single()) {
    $slug = "single";
  }
  if (is_admin()) {
    $slug = "admin";
  }

  return $slug;
}

// 和暦取得 ================================================
function get_wareki($year, $format = false, $gannen = false)
{
  $gengoList = [
    ['name' => '令和', 'name_short' => 'R', 'year' => 2019],  // 2019-05-01,
    ['name' => '平成', 'name_short' => 'H', 'year' => 1989],  // 1989-01-08,
    ['name' => '昭和', 'name_short' => 'S', 'year' => 1926], // 1926-12-25'
    ['name' => '大正', 'name_short' => 'T', 'year' => 1912], // 1912-07-30
    ['name' => '明治', 'name_short' => 'M', 'year' => 1868], // 1868-01-25
  ];

  $gengo = array();
  foreach ($gengoList as $g) {
    if ($g['year'] <= $year) {
      $gengo = $g;
      break;
    }
  }

  $year = ($year - $gengo['year']) + 1;
  if ($year == 1 && $gannen) {
    $year = '元';
  }

  $out = $gengo['name'] . $year . '年';
  if ($format) {
    $out = $gengo['name_short'] . $year . '年';
  }
  return $out;
}

// 使用しているテンプレートファイル名取得 =======================================================

function get_template_failename()
{
  global $template; // テンプレートファイルのパスを取得
  $temp_name = basename($template); // パスの最後の名前（ファイル名）を取得
  return $temp_name;
}

function get_option_value($op_num)
{
  $theme_options = get_option('theme_option_name'); // Array of All Options
  $out = $theme_options['op_' . $op_num];
  return $out;
}



function get_browser_name()
{
  // 判定するのに小文字にする
  $browser = strtolower($_SERVER['HTTP_USER_AGENT']);

  // ユーザーエージェントの情報を基に判定
  if (strstr($browser, 'edge')) {
    $browser_name = "edge";
  } elseif (strstr($browser, 'trident') || strstr($browser, 'msie')) {
    $browser_name = "ie";
  } elseif (strstr($browser, 'chrome')) {
    $browser_name = "chrome";
  } elseif (strstr($browser, 'firefox')) {
    $browser_name = "firefox";
  } elseif (strstr($browser, 'safari')) {
    $browser_name = "safari";
  } elseif (strstr($browser, 'opera')) {
    $browser_name = "opera";
  } else {
    $browser_name = "other";
  }

  return $browser_name;
}
?>

<?php
// 画像が決まってないsample =====================================================================
function dummy_img($width = "100", $height = "200", $bg = "27709b", $color = "ffffff")
{
  $url = "https://tools.arashichang.com/";
  $url = $url . $width . "x" . $height . "/" . $bg . "/" . $color;
  return $url;
}
?>



<?php
// テーマカスタマイザー
function my_theme_customize_register($wp_customize)
{
  $wp_customize->add_section(
    'main-v',
    [
      'title'           => 'メインビジュアル',
      'priority'        => 1,
      'description' => 'メインビジュアルを設定してください。',
    ]
  );
  $wp_customize->add_setting('main-visual');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'main-visual', array(
    'label' => 'メインビジュアル', //設定項目のタイトル
    'section' => 'main-v', //追加するセクションのID
    'settings' => 'main-visual', //追加する設定項目のID
    'description' => 'メインビジュアルを設定してください', //設定項目の説明
  )));
  $wp_customize->add_setting('header-logo');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header-logo', array(
    'label' => 'ヘッダーロゴ', //設定項目のタイトル
    'section' => 'main-v', //追加するセクションのID
    'settings' => 'header-logo', //追加する設定項目のID
    'description' => 'ヘッダーロゴを設定してください', //設定項目の説明
  )));
  $wp_customize->add_setting('footer-logo');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer-logo', array(
    'label' => 'フッターロゴ', //設定項目のタイトル
    'section' => 'main-v', //追加するセクションのID
    'settings' => 'footer-logo', //追加する設定項目のID
    'description' => 'フッターロゴを設定してください', //設定項目の説明
  )));
  $wp_customize->add_setting('main-text');
  $wp_customize->add_control(
    //コントロールID
    "main-text",
    [
      // add_settingで設定したID
      'settings'    => 'main-text',
      // カスタマイザー画面で表示するラベル名
      'label'       => 'キャッチコピー',
      // 表示するセクションを指定
      'section'     => 'main-v',
      // フォームの種類を指定
      'type'        => 'textarea'
    ]
  );
  // 下層ページ　メインビジュアル
  $wp_customize->add_section(
    'under-visual',
    [
      'title'           => '下層ページ メインビジュアル',
      'priority'        => 2,
      'description' => '下層ページのメインビジュアルを設定してください。',
    ]
  );
  $wp_customize->add_setting('news-visual');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'news-visual', array(
    'label' => 'お知らせメインビジュアル', //設定項目のタイトル
    'section' => 'under-visual', //追加するセクションのID
    'settings' => 'news-visual', //追加する設定項目のID
    'description' => '「お知らせ」のメインビジュアルを設定してください', //設定項目の説明
  )));
  $wp_customize->add_setting('about-visual');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about-visual', array(
    'label' => '園についてメインビジュアル', //設定項目のタイトル
    'section' => 'under-visual', //追加するセクションのID
    'settings' => 'about-visual', //追加する設定項目のID
    'description' => '「園について」のメインビジュアルを設定してください', //設定項目の説明
  )));
  $wp_customize->add_setting('guide-visual');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'guide-visual', array(
    'label' => '入園案内メインビジュアル', //設定項目のタイトル
    'section' => 'under-visual', //追加するセクションのID
    'settings' => 'guide-visual', //追加する設定項目のID
    'description' => '「入園案内」のメインビジュアルを設定してください', //設定項目の説明
  )));
  $wp_customize->add_setting('life-visual');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'life-visual', array(
    'label' => '園での生活メインビジュアル', //設定項目のタイトル
    'section' => 'under-visual', //追加するセクションのID
    'settings' => 'life-visual', //追加する設定項目のID
    'description' => '「園での生活」のメインビジュアルを設定してください', //設定項目の説明
  )));
  $wp_customize->add_setting('recruit-visual');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'recruit-visual', array(
    'label' => '採用情報メインビジュアル', //設定項目のタイトル
    'section' => 'under-visual', //追加するセクションのID
    'settings' => 'recruit-visual', //追加する設定項目のID
    'description' => '「採用情報」のメインビジュアルを設定してください', //設定項目の説明
  )));
  $wp_customize->add_setting('contact-visual');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact-visual', array(
    'label' => 'お問い合わせメインビジュアル', //設定項目のタイトル
    'section' => 'under-visual', //追加するセクションのID
    'settings' => 'contact-visual', //追加する設定項目のID
    'description' => '「お問い合わせ」のメインビジュアルを設定してください', //設定項目の説明
  )));
  // 園での取り組み
  $wp_customize->add_section(
    'project',
    [
      'title'           => '園での取り組み',
      'priority'        => 3,
      'description' => '園での取り組みの文章を設定してください。',
    ]
  );
  $wp_customize->add_setting('project-subtitle');
  $wp_customize->add_control(
    //コントロールID
    "main-text",
    [
      'settings'    => 'project-subtitle',
      'label'       => '園での取り組みの文章',
      'section'     => 'project',
      'type'        => 'textarea'
    ]
  );
  $wp_customize->add_setting('project-title_0');
  $wp_customize->add_control(
    //コントロールID
    "project-title_0",
    [
      'settings'    => 'project-title_0',
      'label'       => '園での取り組み その1 タイトル',
      'section'     => 'project',
      'type'        => 'text'
    ]
  );
  $wp_customize->add_setting('project-text_0');
  $wp_customize->add_control(
    //コントロールID
    "project-text_0",
    [
      'settings'    => 'project-text_0',
      'label'       => '園での取り組み その1 文章',
      'section'     => 'project',
      'type'        => 'textarea'
    ]
  );
  $wp_customize->add_setting('project-title_1');
  $wp_customize->add_control(
    //コントロールID
    "project-title_1",
    [
      'settings'    => 'project-title_1',
      'label'       => '園での取り組み その2 タイトル',
      'section'     => 'project',
      'type'        => 'text'
    ]
  );
  $wp_customize->add_setting('project-text_1');
  $wp_customize->add_control(
    //コントロールID
    "project-text_1",
    [
      'settings'    => 'project-text_1',
      'label'       => '園での取り組み その2 文章',
      'section'     => 'project',
      'type'        => 'textarea'
    ]
  );
  $wp_customize->add_setting('project-title_2');
  $wp_customize->add_control(
    //コントロールID
    "project-title_2",
    [
      'settings'    => 'project-title_2',
      'label'       => '園での取り組み その3 タイトル',
      'section'     => 'project',
      'type'        => 'text'
    ]
  );
  $wp_customize->add_setting('project-text_2');
  $wp_customize->add_control(
    //コントロールID
    "project-text_2",
    [
      'settings'    => 'project-text_2',
      'label'       => '園での取り組み その3 文章',
      'section'     => 'project',
      'type'        => 'textarea'
    ]
  );
}
add_action('customize_register', 'my_theme_customize_register');
?>