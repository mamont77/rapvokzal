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

<table id="forum-topic-<?php print $topic_id; ?>" class="forum-topics">
  <thead class="forum-header">
    <tr><?php print $header; ?></tr>
  </thead>

  <tbody>
  <?php foreach ($topics as $topic): ?>
    <?php
    if ($topic->sticky) {
      // Extra label on sticky topics
      $topic->title = t('Sticky') . ': ' . $topic->title;
    }
    ?>

    <?php
    // Add "new" or "updated" to title where appropriate.
    $topic_new = "";
    if ($topic->new) {
      if ($topic->new_replies > 0) {
        $topic_new = ' <span class="marker">' . t('updated') . '</span>';
      }
      else {
        $topic_new = ' <span class="marker">' . t('new') . '</span>';
      }
    }
    ?>

    <tr class="<?php print $topic->zebra;?> <?php print $topic->sticky_class;?>">
      <td class="icon"><div class="forum-icon"><?php print $topic->icon; ?></div></td>

      <td class="title">
      <?php print $topic->title . $topic_new; ?>
      <?php if (!empty($topic->pager)): ?>
         <div class="forum-topic-pager"> <?php print $topic->pager ?> </div>
      <?php endif; ?>
      </td>

      <?php if ($topic->moved): ?>
        <td colspan="3">
        <?php print $topic->message; ?>
        </td>
      <?php else: ?>
        <td class="replies">
          <div class="num num-replies"><?php print $topic->num_comments; ?></div>
          <?php if ($topic->new_replies): ?>
            <div class="num num-new-replies"><a href="<?php print $topic->new_url; ?>"><?php print $topic->new_text; ?></a></div>
          <?php endif; ?>
        </td>

      <?php if (module_exists('statistics')): ?>
        <td class="views"><?php print $topic->views;?> </td>
      <?php endif; ?>

      <?php if (!variable_get('advanced_forum_hide_created', 0)): ?>
        <td class="created"><?php print $topic->created; ?></td>
      <?php endif; ?>

      <td class="last-reply"><?php print $topic->last_reply; ?></td>
    <?php endif; ?>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
<?php if (!empty($topic_legend)): ?>
  <?php print $topic_legend; ?>
<?php endif; ?>
<?php print $pager; ?>