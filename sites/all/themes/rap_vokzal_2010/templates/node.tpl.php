<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix">
  <?php print $user_picture; ?>

  <?php if (!$page): ?>
    <h2 class="title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>

  <?php if ($unpublished): ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?>

  <?php if ($display_submitted || $terms): ?>
    <div class="meta">
      <?php if ($display_submitted): ?>
        <span class="submitted">
          <?php
            print t('Submitted by !username on !datetime',
              array('!username' => $name, '!datetime' => $date));
          ?>
        </span>
      <?php endif; ?>

      <?php if ($terms): ?>
        <div class="terms terms-inline"><?php print $terms; ?></div>
      <?php endif; ?>
    </div>
  <?php endif; ?>
  <div class="content">
    <?php print $content; ?>
  </div>
  <?php
    if (!$teaser) {
      print '<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>';
      print '<noindex><div class="yashare-auto-init" data-yashareType="button" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir,lj,blogger,gplus"></div></noindex>';
    }
  ?>
  <?php print $links; ?>
</div> <!-- /.node -->
