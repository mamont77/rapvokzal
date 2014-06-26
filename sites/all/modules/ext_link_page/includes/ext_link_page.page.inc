<?php
// $Id: ext_link_page.page.inc,v 1.1.2.2 2010/05/13 17:28:12 zzolo Exp $

/**
 * @file
 * The main logic for the External Link Page of the ext_link_page
 * module
 */

/**
 * Link Page
 *
 * Handles page for external linking
 *
 * @return
 *   page output
 */
function _ext_link_page_build_page() {
  // Sanitize url query
  $url = check_plain($_GET['url']);
  if (valid_url($url, TRUE)) {
    // Get variables
    $defaults = _ext_link_page_get_defaults();
    $delay = (int) variable_get('ext_link_page_direct_delay', $defaults['ext_link_page_direct_delay']);
    $page_message = filter_xss_admin(variable_get('ext_link_page_page_message', $defaults['ext_link_page_page_message']));

    // Should be in a theme?
    $site_name = '<span class="ext_link_page-site_name">' . check_plain(variable_get('site_name', 'site_name')) . '</span>';

    // Create link
    $attributes = array('class' => 'ext_link_page-link');
    $link = l($url, $url, $attributes);

    // Check delay.  If delay is zero, simply redirect
    if ($delay == 0) {
      drupal_goto($url);
    }
    else {
      // Make redirect and add to header
      $redirect = '<meta http-equiv="refresh" content="' . $delay . '; url=' . $url . '" />';
      drupal_set_html_head($redirect);

      // Replace values in message
      $page_message = str_replace('[link]', $link, $page_message);
      $page_message = str_replace('[url]', $url, $page_message);
      $page_message = str_replace('[delay]', $delay, $page_message);
      $page_message = str_replace('[site_name]', $site_name, $page_message);

      // Call theme function
      return theme('ext_link_page', $page_message);
    }
  }

  return t('URL not valid.');
}
