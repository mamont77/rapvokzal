<?php
// $Id: template.php,v 1.5 2009/06/13 20:35:12 nbz Exp $

/**
 * Modify page variables.
 */
function arthemia_preprocess_page(&$variables) {

}

/**
 * Return a full tree of the expanded menu. Thank you multiflex-3 for this code!
 */
function arthemia_primary() {
  $output = '<div id="page-bar">';
  $output .= menu_tree(variable_get('menu_primary_links_source', 'primary-links'));
  $output .= '</div>';
  return $output;
}

/**
 * Return a themed breadcrumb trail, but only if there is more than one link in it.
 */
function arthemia_breadcrumb($breadcrumb) {
  if (count($breadcrumb) > 1) {
    return '<div class="breadcrumb">'. implode(' &rsaquo; ', $breadcrumb) .'</div>';
  }
}

/**
 * Allow themable wrapping of all comments.
 */
function phptemplate_comment_wrapper($content, $node) {
  $comments_per_page = _comment_get_display_setting('comments_per_page', $node);
  $content = theme('pager', NULL, $comments_per_page, 0) . $content;
  if (!$content || $node->type == 'forum') {
    return '<div id="comments">'. $content .'</div>';
  }
  else {
    return '<div id="comments"><h2 class="comments">'. t('Comments') .'</h2>'. $content .'</div>';
  }
}

/**
 * Modify and extend the comment template theming.
 */
function arthemia_preprocess_comment(&$variables) {
  //Add a comment number and link to comments, borrowed from Advanced Forum module.
  if (!isset($comment_number)) {
    static $comment_number = 0;
  }

  $comments_per_page = _comment_get_display_setting('comments_per_page', $variables['node']);
  $page_number = $_GET['page'];

  if (!$page_number) {
    $page_number = 0;
  }
  $comment_number++;
  $post_number++;
  $fragment = 'comment-' . $variables['comment']->cid;
  $query = ($page_number) ? 'page=' . $page_number : NULL;
  $linktext = '#' . (($page_number * $comments_per_page) + $comment_number);
  $linkpath = 'node/' . $variables['node']->nid;
  $variables['comment_link'] = l($linktext, $linkpath, array('query' => $query, 'fragment' => $fragment, 'class' => 'comment-link'));
}

/**
 * Modify the theme search box. Thank you http://agaric.com/note/theme-search-form-drupal-6 for instructions.
 */
function arthemia_preprocess_search_theme_form(&$vars, $hook) {
  // Remove the search box title.
  unset($vars['form']['search_theme_form']['#title']);
  
  // Replace the submit button with an image.
  $theme_path = drupal_get_path('theme', 'arthemia');
  $vars['form']['submit'] = array('#type' => 'image_button', '#value' => t('Search'),
                             '#src'  => $theme_path . '/images/magnify.gif');

  // Rebuild the rendered version (search form only, rest remains unchanged)
  unset($vars['form']['search_theme_form']['#printed']);
  $vars['search']['search_theme_form'] = drupal_render($vars['form']['search_theme_form']);

  // Rebuild the rendered version (submit button, rest remains unchanged)
  unset($vars['form']['submit']['#printed']);
  $vars['search']['submit'] = drupal_render($vars['form']['submit']);

  // Collect all form elements to make it easier to print the whole form.
  $vars['search_form'] = implode($vars['search']);
}


/* Rapvokzal v1 */
function _arthemia_user_bar() {
  global $user;
  $output = '';

  if (!$user->uid) {
    $output .= drupal_get_form('user_login_block');
  }
  else {
    $output .= t('<p class="user-info">Hi !user, welcome back.</p>', array('!user' => theme('username', $user)));
 
    $output .= theme('item_list', array(
      l(t('Your account'), 'user/'.$user->uid, array('title' => t('Edit your account'))),
      l(t('Sign out'), 'logout')));
  }

  $output = '<div id="user-bar">'.$output.'</div>';

  return $output;
}

function arthemia_user_bar() {
  global $user;
  //added: redirect to previous page
  $redirect = 'destination=' . drupal_get_path_alias(substr(urldecode(drupal_get_destination()), 12));
  if ($user->uid) {
    $edit_account_link = l(t('Your Account'), 'user/'.$user->uid);
    $logout_link = l(t('Log out'), 'logout', array( 'query' => $redirect, 'alias' => TRUE));
    $user_name = $user->name;
    $user_bar = $user_name . ' (' . $edit_account_link . ') ' . $logout_link;
  } else {
    $login_link = l(t('Log in'), 'user', array( 'query' => $redirect, 'alias' => TRUE));
    $register_link = l(t('Register'), 'user/register', array( 'query' => $redirect, 'alias' => TRUE));
    $user_bar = $login_link . ' ' . t('or') . ' ' . $register_link;
  }

  return $user_bar;

/*    *   rpiskarev (profile) sign out
    * Sign In or Create an Account

*/
}


