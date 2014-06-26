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

<div class="forum-topic-header clear-block">
  <div class="forum-top-links">
    <?php print $reply_link; ?>
  </div>
  <div class="reply-count">
    <?php print $total_posts; ?>
    <?php if (!empty($new_posts)): ?>
      [<?php print $new_posts; ?>]
    <?php endif; ?>
    <?php if (!empty($last_post)): ?>
       [<?php print $last_post; ?>]
    <?php endif; ?>
  </div>
</div>
