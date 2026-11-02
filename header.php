<!DOCTYPE html>
<html class="fwHtml" <?php language_attributes(); ?>>

<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="description" content="<?php seo_description(); ?>">
  <link rel="shortcut icon" href="<?= get_stylesheet_directory_uri(); ?>/images/favicon.ico">
  <title>
  <?php if (is_home() || is_front_page()) : ?>
    <?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>
  <?php else:?>
    <?php wp_title('|', true, 'right'); ?>若葉保育園
  <?php endif;?>
  </title>
  <?php wp_head(); ?>

  <!-- lottie cdn -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.6.6/lottie.min.js" type="text/javascript"></script> -->


  <script>
    (function(d) {
      var config = {
          kitId: 'teb0kii',
          scriptTimeout: 3000,
          async: true
        },
        h = d.documentElement,
        t = setTimeout(function() {
          h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
      h.className += " wf-loading";
      tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
      tk.async = true;
      tk.onload = tk.onreadystatechange = function() {
        a = this.readyState;
        if (f || a && a != "complete" && a != "loaded") return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config)
        } catch (e) {}
      };
      s.parentNode.insertBefore(tk, s)
    })(document);
  </script>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-RHT946NDW2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-RHT946NDW2');
  </script>
  <meta name="google-site-verification" content="ma0AggRdCrIy2fHXVL_b6VRiQdav0tM0JwnXoX_30QE" />

</head>
<?php get_template_part('template-parts/header-menu'); ?>
<header class="header">
  <?php get_template_part('template-parts/main-visual'); ?>
</header>
<!-- get template directory uri for Javascript -->

<body class="body_<?php echo get_page_slug() ?> fwWrap">