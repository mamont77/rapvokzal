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

<?php if ($forums_defined): ?>
  <?php if ($forum_description): ?>
    <div class="forum-description">
      <?php print $forum_description; ?>
    </div>
  <?php endif; ?>
<div id="forum">
  <div class="forum-top-links"><?php print theme('links', $links, array('class' => 'links forum-links')); ?></div>
  <?php print $forums; ?>
  <?php print $topics; ?>
</div>
<?php endif; ?>
