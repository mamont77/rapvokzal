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

<div class="author-pane">
 <div class="author-pane-inner">
    <div class="author-pane-name-status author-pane-section">
      <div class="author-pane-line author-name"> <?php print $account_name; ?> </div>

      <?php if (!empty($facebook_status_status)): ?>
        <div class="author-pane-line author-facebook-status"><?php print $facebook_status_status;  ?></div>
      <?php endif; ?>

      <?php if (!empty($picture)): ?>
        <?php print $picture; ?>
      <?php endif; ?>
      <div class="author-pane-line">
	    <ul>
		  <li class="author-pane-line author-status"><span class="author-pane-label"><?php print t('Online Status'); ?>:</span> <?php print $online_status; ?></li>
          <?php if (!empty($user_title)): ?>
            <li class="author-pane-line author-title"> <?php print $user_title; ?> </li>
          <?php endif; ?>
		  <?php if (!empty($user_title)): ?>
            <li class="author-pane-line author-title"> <?php print $user_title; ?> </li>
          <?php endif; ?>
          <?php if (!empty($user_badges)): ?>
            <li class="author-pane-line author-badges"> <?php print $user_badges;  ?> </li>
          <?php endif; ?>
          <?php if (!empty($location)): ?>
            <li class="author-pane-line author-location"> <?php print $location;  ?> </li>
          <?php endif; ?>
	      <?php if (!empty($joined)): ?>
            <li class="author-pane-line author-joined"><span class="author-pane-label"><?php print t('Joined'); ?>:</span> <?php print $joined; ?></li>
          <?php endif; ?>
          <?php if (isset($user_stats_posts)): ?>
            <li class="author-pane-line author-posts"><span class="author-pane-label"><?php print t('Posts'); ?>:</span> <?php print $user_stats_posts; ?></li>
          <?php endif; ?>
          <?php if (isset($userpoints_points)): ?>
            <li class="author-pane-line author-points"><span class="author-pane-label"><?php print t('!Points', userpoints_translation()); ?>:</span> <?php print $userpoints_points; ?></li>
          <?php endif; ?>
          <?php if (isset($og_groups)): ?>
            <li class="author-pane-line author-groups"><span class="author-pane-label"><?php print t('Groups'); ?>:</span> <?php print $og_groups; ?></li>
          <?php endif; ?>
          <?php if (!empty($user_stats_ip)): ?>
            <li class="author-pane-line author-ip"><span class="author-pane-label"><?php print t('IP'); ?>:</span> <?php print $user_stats_ip; ?></li>
          <?php endif; ?>
          <?php if (!empty($fasttoggle_block_author)): ?>
            <li class="author-fasttoggle-block"><?php print $fasttoggle_block_author; ?></li>
          <?php endif; ?>
          <?php if (!empty($troll_ban_author)): ?>
            <li class="author-pane-line author-troll-ban"><?php print $troll_ban_author; ?></li>
          <?php endif; ?>
          <?php if (!empty($contact)): ?>
            <li class="author-pane-icon"><?php print $contact; ?></li>
          <?php endif; ?>
          <?php if (!empty($privatemsg)): ?>
            <li class="author-pane-icon"><?php print $privatemsg; ?></li>
          <?php endif; ?>
          <?php if (!empty($buddylist)): ?>
            <li class="author-pane-icon"><?php print $buddylist; ?></li>
          <?php endif; ?>
          <?php if (!empty($user_relationships_api)): ?>
            <li class="author-pane-icon"><?php print $user_relationships_api; ?></li>
          <?php endif; ?>      
          <?php if (!empty($flag_friend)): ?>
            <li class="author-pane-icon"><?php print $flag_friend; ?></li>
          <?php endif; ?>
		</ul>
	  </div>
    </div>
  </div>
</div>
