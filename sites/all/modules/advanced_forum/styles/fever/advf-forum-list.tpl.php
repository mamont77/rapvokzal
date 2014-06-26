<?php
// $Id$

/*
+----------------------------------------------------------------+
|   Feverultra for Dupal 6.x - Version 1.0                       |
|   Copyright (C) 2010 Antsin.com All Rights Reserved.           |
|   @license - Copyrighted Commercial Software                   |
|----------------------------------------------------------------|
|   Theme Name: Feverultra                                       |
|   Description: Feverultra by Antsin                            |
|   Author: Antsin.com                                           |
|   Date: 2nd August 2010                                        |
|   Website: http://www.antsin.com/                              |
|----------------------------------------------------------------+
|   This file may not be redistributed in whole or               |
|   significant part.                                            |
+----------------------------------------------------------------+
*/
?>

<table id="forum-<?php print $forum_id; ?>" class="forum-table">

  <thead class="forum-header">
    <tr>
      <th class="forum-icon"></th>
      <th class="forum-name"><?php print t('Forum'); ?></th>
      <th class="forum-num-topics"><?php print t('Topics');?></th>
      <th class="forum-posts"><?php print t('Posts'); ?></th>
      <th class="forum-last-post"><?php print t('Last post'); ?></th>
    </tr>
  </thead>

  <tbody>
    <?php $container_adjustment = 0; ?>
    <?php foreach ($forums as $child_id => $forum): ?>

        <?php if ($forum->is_container): ?>
		  <?php if ($container_adjustment == 0): ?>
          <tr id="forum-list-<?php print $child_id; ?>" class="<?php print $forum->zebra; ?> <?php print $forum->row_classes;?> container-<?php print $forum->container_id;?>" >
            <td colspan="5" class="container">
              <div class="forum-details">
                <div class="name">
                  <a href="<?php print $forum->link; ?>"><?php print $forum->name; ?></a>
                </div>
                <?php if ($forum->description): ?>
                  <div class="description"><?php print $forum->description; ?></div>
                <?php endif; ?>
              </div>
            </td>
            <?php $container_adjustment = 1; ?>
          </tr>
		  <?php else: ?>
		  <tr id="forum-list-<?php print $child_id; ?>" class="<?php print $forum->zebra; ?> <?php print $forum->row_classes;?> container-<?php print $forum->container_id;?>" >
            <td colspan="5" class="container">
              <div class="forum-details">
                <div class="name">
                  <a href="<?php print $forum->link; ?>">
				  <?php print $forum->name; ?></a>
                </div>
                <?php if ($forum->description): ?>
                  <div class="description"><?php print $forum->description; ?></div>
                <?php endif; ?>
              </div>
            </td>
            <?php $container_adjustment = 1; ?>
          </tr>
          <?php endif; ?>
        <?php else: ?>
          <tr id="forum-list-<?php print $child_id; ?>" class="<?php print $forum->zebra; ?> <?php print $forum->row_classes;?> in-container-<?php print $forum->container_id;?>">
            <?php if ($forum->depth == 0) {$container_adjustment = 0;} ?>

            <td class="forum-icon"> <?php print $forum->icon ?> </td>

            <td>
              <?php print str_repeat('<div class="indent">', $forum->depth - $container_adjustment); ?>
                <div class="forum-details">
                  <div class="name"><a href="<?php print $forum->link; ?>"><?php print $forum->name; ?></a></div>
                  <?php if ($forum->description): ?>
                    <div class="description"><?php print $forum->description; ?></div>
                  <?php endif; ?>
                </div>
              <?php print str_repeat('</div>', $forum->depth - $container_adjustment); ?>
            </td>

            <td class="topics">
              <div class="num num-topics"><?php print $forum->num_topics ?>
                <?php if ($forum->new_topics): ?>
                  <div class="num num-new-topics"><a href="<?php print $forum->new_url; ?>"><?php print $forum->new_text; ?></a></div>
                <?php endif; ?>
              </div>
            </td>

            <td class="num posts">
              <?php print $forum->num_posts ?>
              <?php if ($forum->new_posts): ?>
                  <br />
                  <a href="<?php print $forum->new_url_posts; ?>"><?php print $forum->new_text_posts; ?></a>
              <?php endif; ?>
            </td>

            <td class="last-reply"><?php print $forum->last_reply ?></td>
        </tr>
        <?php endif; ?>
    <?php endforeach; ?>
  </tbody>
</table>

<?php if (!empty($forum_statistics)): ?>
  <?php print $forum_statistics; ?>
<?php endif; ?>

<?php if (!empty($forum_legend)): ?>
  <?php print $forum_legend; ?>
<?php endif; ?>