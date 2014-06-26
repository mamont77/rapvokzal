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

<?php if ($top_post): ?>

  <?php print $topic_header ?>
  
  <?php $classes .= $node_classes; ?>
  <div id="node-<?php print $node->nid; ?>" class="top-post forum-post <?php print $classes; ?> clear-block">

<?php else: ?>
  <?php $classes .= $comment_classes; ?>
  <div id="comment-<?php print $comment->cid; ?>" class="forum-post <?php print $classes; ?> clear-block">
<?php endif; ?>

  <div class="post-info clear-block">
    <div class="posted-on"></div>
  </div>

  <div class="forum-post-wrapper">
    <div class="forum-post-panel-sub">
      <?php print $author_pane; ?>
	  <div class="author-pane-line-extra">
	    <ul>
          <?php if (!$top_post): ?>
		    <li class="author-pane-line author-post-num first"><span class="author-pane-label"><?php print t('Post Number'); ?>:</span> <?php print $comment_link . ' ' . $page_link; ?> 
		      <?php if (!empty($comment->new)): ?>
		        <a id="new"><span class="new">(<?php print $new ?>)</span></a>
              <?php endif; ?>
		    </li>
		    <li class="author-pane-line author-post-date"><span class="author-pane-label"><?php print t('Post Date'); ?>:</span> <?php print $date ?></li>
		  <?php else: ?>
    	    <li class="author-pane-line author-post-date first"><span class="author-pane-label"><?php print t('Post Date'); ?>:</span> <?php print $date ?></li>
		  <?php endif; ?>
		</ul>
	  </div>
    </div>

    <div class="forum-post-panel-main clear-block">
	  <div class="makeup-up"></div>
	  <div class="makeup-down"></div>
      <div class="content">
	    <?php if ($title && !$top_post): ?>
          <h5 class="title"><?php print $title ?></h5>
        <?php endif; ?>
        <?php print $content ?>
      </div>

      <?php if ($signature): ?>
        <div class="author-signature">
          <?php print $signature ?>
        </div>
      <?php endif; ?>
	      
	  <?php if (!empty($links)): ?>
        <div class="forum-post-links">
          <?php print $links ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>