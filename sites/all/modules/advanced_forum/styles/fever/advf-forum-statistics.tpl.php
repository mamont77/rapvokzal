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

<div id="forum-statistics">
  <div id="forum-statistics-header"><?php print t("What's Going On?"); ?></div>
  <div class="forum-statistics">
    <div id="forum-statistics-active-header" class="forum-statistics-sub-header">
      <?php print t('Currently active users: !current_total (!current_users users and !current_guests guests)', array('!current_total' => $current_total, '!current_users' => $current_users, '!current_guests' => $current_guests)); ?>
    </div>
    <div id="forum-statistics-active-body" class="forum-statistics-sub-body">
      <?php print $online_users; ?>
    </div>
  </div>
  <div class="forum-statistics">
    <div id="forum-statistics-statistics-header" class="forum-statistics-sub-header">
      <?php print t('Statistics'); ?>
    </div>
    <div id="forum-statistics-statistics-body" class="forum-statistics-sub-body">
      <?php print t('Topics: !topics, Posts: !posts, Users: !users', array('!topics' => $topics, '!posts' => $posts, '!users' => $users)); ?>
      <br /><?php print t('Welcome to our latest member, !user', array('!user' => $latest_user)); ?>
    </div>
  </div>
</div>
