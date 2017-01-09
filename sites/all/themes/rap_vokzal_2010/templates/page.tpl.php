<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="//www.w3.org/1999/xhtml" xmlns:fb="//www.facebook.com/2008/fbml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <?php if (defined('_SAPE_TPL')): ?>
    <title>{title}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="{keywords}" />
    <meta name="description" content="{description}">
  <?php else: ?>
    <title><?php print $head_title ?></title>
    <?php print $head ?>
  <?php endif; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>">
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-M4VHQN"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-M4VHQN');</script>
<!-- End Google Tag Manager -->

  <div id="bg-header"></div>

  <?php if ($primary_links): ?>
    <div id="skip-link"><a href="#main-menu"><?php print t('Jump to Navigation'); ?></a></div>
  <?php endif; ?>

  <div id="page-wrapper"><div id="page">

    <div id="header"><div class="section clearfix">

      <div id="login-region">
        <?php print rap_vokzal_2010_user_bar() ?>
      </div>

      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
      <?php endif; ?>

      <?php print $header; ?>

    </div></div> <!-- /.section, /#header -->
      <?php if ($primary_links): ?>
        <div id="navigation"><div class="section clearfix">

          <?php print theme(array('links__system_main_menu', 'links'), $primary_links,
            array(
              'id' => 'main-menu',
              'class' => 'links clearfix',
            ),
            array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => 'element-invisible',
            ));
          ?>

          <div id="searchform">
              <form id="searchbox_partner-pub-9768859166525254:em9uh9tqmhv" onsubmit="return false;">
                <input type="text" name="q" size="25" class="text" />
                <input type="submit" value="&gt;" class="submit" />
              </form>
              <script type="text/javascript" src="//www.google.com/coop/cse/brand?form=searchbox_partner-pub-9768859166525254%3Aem9uh9tqmhv&lang=ru"></script>
              <div id="results_partner-pub-9768859166525254:em9uh9tqmhv" style="display:none; margin: 0em auto 0 auto; width: 600px;">
                <div class="cse-closeResults"><a>&times; <?php t('Close'); ?></a></div>
                <div class="cse-resultsContainer"></div>
              </div>
              <style type="text/css">
                @import url(//www.google.com/cse/api/overlay.css);
              </style>
              <script src="//www.google.com/uds/api?file=uds.js&v=1.0&key=ABQIAAAAAmuLWPLeOY9tw8kDrrmF_hSaJhGcWPn2TJZaW8rX2kwfTH-aMhQqKa55EaU_1yWVSVhKXiGqbwaifg&hl=ru" type="text/javascript"></script>
              <script src="//www.google.com/cse/api/overlay.js"></script>
              <script type="text/javascript">
                function OnLoad() {
                new CSEOverlay("partner-pub-9768859166525254:em9uh9tqmhv",
                   document.getElementById("searchbox_partner-pub-9768859166525254:em9uh9tqmhv"),
                   document.getElementById("results_partner-pub-9768859166525254:em9uh9tqmhv"));
                }
                GSearch.setOnLoadCallback(OnLoad);
              </script>
          </div>

        </div></div> <!-- /.section, /#navigation -->
      <?php endif; ?>
    <div id="main-wrapper"><div id="main" class="clearfix<?php if ($primary_links) { print ' with-navigation'; } ?>">

      <div id="content" class="column"><div class="section">

        <?php print $highlight; ?>
        <?php if (defined('_SAPE_TPL')): ?>
          <h1 class="title">{header}</h1>
          <div id="content-area">
            {body}
          </div>
        <?php else: ?>

          <?php print $breadcrumb; ?>
          <?php if ($title): ?>
            <h1 class="title"><?php print $title; ?></h1>
          <?php endif; ?>
          <?php print $messages; ?>
          <?php if ($tabs): ?>
            <div class="tabs"><?php print $tabs; ?></div>
          <?php endif; ?>
          <?php print $help; ?>
          <?php print $content_top; ?>
          <div id="content-area">
            <!-- google_ad_section_start -->
            <?php print $content; ?>
            <!-- google_ad_section_end -->
          </div>
          <?php print $content_bottom; ?>
          <?php if ($feed_icons): ?>
            <div class="feed-icons"><?php print $feed_icons; ?></div>
          <?php endif; ?>

        <?php endif; ?>


      </div></div> <!-- /.section, /#content -->

      <?php print $sidebar_second; ?>

    </div></div> <!-- /#main, /#main-wrapper -->

    <?php if ($footer_message || $secondary_links): ?>
      <div id="footer">
      <div id="site_author"><? print t('Powered by');?> <img alt="RAPвокзал" src="/<?=path_to_theme();?>/images/rapvokzal_com_small_logo.png" /></div>
      <div class="section">

        <?php print theme(array('links__system_secondary_menu', 'links'), $secondary_links,
          array(
            'id' => 'secondary-menu',
            'class' => 'links clearfix',
          ),
          array(
            'text' => t('Secondary menu'),
            'level' => 'h2',
            'class' => 'element-invisible',
          ));
        ?>

        <?php if ($footer_message): ?>
          <div id="footer-message"><?php print $footer_message; ?></div>
        <?php endif; ?>

      </div></div> <!-- /.section, /#footer -->
    <?php endif; ?>

  </div></div> <!-- /#page, /#page-wrapper -->

  <?php print $page_closure; ?>

  <?php print $closure; ?>

</body>
</html>
