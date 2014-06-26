<?php
// $Id: page.tpl.php,v 1.7 2009/07/03 15:09:30 nbz Exp $
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
<?php if ( defined('_SAPE_TPL') ): ?>
<title>{title}</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="{keywords}" />
<meta name="description" content="{description}">
<?php else: ?>
<title><?php print $head_title ?></title>
<?php print $head ?>
<?php endif; ?>
    <?php print $styles ?>
    <?php print $scripts ?>
  </head>
  <body>
    <div id="head" class="clearfloat">

      <div class="clearfloat">
        <div id="logo">
          <?php if ($logo || $site_name) {
            print '<a href="'. check_url($base_path) .'" title="'. $site_name .'">';
            if ($logo) {
              print '<img src="'. check_url($logo) .'" alt="'. $site_name .'" width="150" height="30" />';
          } else {
            print '<span id="sitename">'. $site_name .'</span>';
          }
            print '</a>';
          }
        ?>
        <?php if ($site_slogan): print '<div id="tagline">'. $site_slogan .'</div>'; endif; ?>
        </div>

        <div id="login-region">
          <?php print arthemia_user_bar() ?>
        </div>

      </div>

      <div id="navbar" class="clearfloat">
          <?php if (isset($primary_links)) {
            print arthemia_primary($primary_links);
          } ?>
          <div id="searchform">
            <div style="float:right">
              <form id="searchbox_partner-pub-9768859166525254:em9uh9tqmhv" onsubmit="return false;">
                <input type="text" name="q" size="25" style="border: 1px solid gray;" /> 
                <input type="submit" value="&gt;" style="background-color:black;color:gray;border:1px solid gray;" />
              </form>
              <script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=searchbox_partner-pub-9768859166525254%3Aem9uh9tqmhv&lang=ru"></script>
              <div id="results_partner-pub-9768859166525254:em9uh9tqmhv" style="display:none; margin: 0em auto 0 auto; width: 600px;">
                <div class="cse-closeResults"><a>&times; <?php t('Close'); ?></a></div>
                <div class="cse-resultsContainer"></div>
              </div>
              <style type="text/css">
                @import url(http://www.google.com/cse/api/overlay.css);
              </style>
              <script src="http://www.google.com/uds/api?file=uds.js&v=1.0&key=ABQIAAAAAmuLWPLeOY9tw8kDrrmF_hSaJhGcWPn2TJZaW8rX2kwfTH-aMhQqKa55EaU_1yWVSVhKXiGqbwaifg&hl=ru" type="text/javascript"></script>
              <script src="http://www.google.com/cse/api/overlay.js"></script>
              <script type="text/javascript">
                function OnLoad() {
                new CSEOverlay("partner-pub-9768859166525254:em9uh9tqmhv",
                   document.getElementById("searchbox_partner-pub-9768859166525254:em9uh9tqmhv"),
                   document.getElementById("results_partner-pub-9768859166525254:em9uh9tqmhv"));
                }
                GSearch.setOnLoadCallback(OnLoad);
              </script>
            </div>
          </div>
      </div>
    </div>

    <div id="page" class="clearfloat">

      <?php if ($headline): ?>
      <div id="top" class="clearfloat">
        <div id="headline" class="<?php print empty($featured)? 'no' : 'with'?>-featured">
          <?php print $headline; ?>
        </div>
        <?php if ($featured): ?>
          <div id="featured">
            <?php print $featured; ?>
          </div>
        <?php endif; ?>
      </div>
      <?php endif; ?>
      
      <?php if ($middle):?>
        <div id="middle" class="clearfloat">
          <?php print $middle; ?>
        </div>
      <?php endif; ?>

      <div id="content" class="main-content <?php print empty($sidebar)? 'no' : 'with'?>-sidebar">

        <?php if ($banner): ?>
          <div id="banner-region">
            <?php print $banner; ?>
          </div>
        <?php endif; ?>

        <?php if ($content_top): ?>
          <div id="content-top">
            <?php print $content_top; ?>
          </div>
        <?php endif; ?>

        <?php if ($breadcrumb) { print $breadcrumb; } ?>
        <?php if ($mission) { print "<div id='mission'>". $mission ."</div>"; } ?>
        <?php if ($tabs) { print "<div id='tabs-wrapper' class='clear-block'>"; } ?>

        <?php if ( defined('_SAPE_TPL') ): ?>
          <h1 class="title">{header}</h1>
          <div class="node"><div class="content">{body}</div></div>
        <?php else: ?>
          <?php if ($title) {
              print '<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>';
              print '<noindex><div class="yashare-auto-init" data-yashareType="button" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir,friendfeed,lj,blogger,evernote" style="float: right;"></div></noindex>';
              print "<h1". ($tabs ? " class='with-tabs'" : "") .">". $title ."</h1>";
          } ?>
          <?php if ($tabs) { print $tabs ."</div>"; } ?>
          <?php if (isset($tabs2)) { print $tabs2; } ?>
          <?php if ($help) { print $help; } ?>
          <?php if ($show_messages && $messages) { print $messages; } ?>
          <?php print $content; ?>
        <?php endif; ?>

        <?php if ($content_bottom): ?>
          <div id="content-bottom">
            <?php print $content_bottom; ?>
          </div>
        <?php endif; ?>

      </div>

      <?php if ($sidebar):?>
        <div id="sidebar">
          <?php print $sidebar; ?>
        </div>
      <?php endif; ?>

      <?php if ($bottom):?>
        <div id="bottom">
          <?php print $bottom; ?>
        </div>
      <?php endif; ?>
    </div>

    <div id="footer-region" class="clearfloat">
      <div id="footer-left" class="clearfloat">
        <?php print $footer_left; ?>
      </div> 		

      <div id="footer-middle" class="clearfloat">
        <?php print $footer_middle; ?>
      </div>

      <div id="footer-right" class="clearfloat">
        <?php print $footer_right; ?>
      </div>
    </div>

    <div id="footer-message">
      <?php print $footer_message; ?>
    </div>
    <?php print $closure; ?>
  </body>
</html>