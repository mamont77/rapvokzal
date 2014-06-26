<?php
// $Id: ext_link_page.admin.inc,v 1.1.2.3 2010/05/13 17:28:12 zzolo Exp $

/**
 * @file
 * The main logic for the administrative page of the ext_link_page
 * module
 */

/**
 * Admin Settings Page for ext_link_page
 */
function ext_link_page_admin_settings() {
  // Define default values
  $defaults = _ext_link_page_get_defaults();

  // put together form elements
  $form['ext_link_page_direct_delay'] = array(
    '#type' => 'textfield',
    '#title' => t('Direct Delay'),
    '#default_value' => variable_get('ext_link_page_direct_delay', $defaults['ext_link_page_direct_delay']),
    '#maxlength' => 4,
    '#description' => t('The delay (in seconds) before the user will be redirected to the new site.  If the delay is 0, then the user will simply be redirected.'),
  );
  $form['ext_link_page_link_page'] = array(
    '#type' => 'textfield',
    '#title' => t('Link Page'),
    '#default_value' => variable_get('ext_link_page_link_page', $defaults['ext_link_page_link_page']),
    '#maxlength' => 256,
    '#description' => t('The page that external links will be directed to.  Example: !link',
      array(
        '!link' => url(
          variable_get('ext_link_page_link_page', $defaults['ext_link_page_link_page']),
          array(
            'query' => array(
              'url' => 'http://example.com',
            ),
          )
        ),
      )
    ),
  );
  $form['ext_link_page_page_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Page Title'),
    '#maxlength' => 256,
    '#default_value' => variable_get('ext_link_page_page_title', $defaults['ext_link_page_page_title']),
    '#description' => t('The title of the external link page.'),
  );
  $form['ext_link_page_page_message'] = array(
    '#type' => 'textarea',
    '#title' => t('Page Message'),
    '#default_value' => variable_get('ext_link_page_page_message', $defaults['ext_link_page_page_message']),
    '#description' => t('The message that will be displayed on the Link Page.  You may use the following variables: %var.', array('%var' => '[site_name], [url], [delay], [link]')),
  );
  $form['ext_link_page_new_window'] = array(
    '#type' => 'checkbox',
    '#title' => t('New Window'),
    '#default_value' => variable_get('ext_link_page_new_window', $defaults['ext_link_page_new_window']),
    '#description' => t('If this option is checked, the link that handles external pages will be given: %code, which will cause the link to open in a new page.', array('%code' => 'target="_blank"')),
  );
  $form['ext_link_page_nofollow'] = array(
    '#type' => 'checkbox',
    '#title' => t('No Follow'),
    '#default_value' => variable_get('ext_link_page_nofollow', $defaults['ext_link_page_nofollow']),
    '#description' => t('If this option is checked, the link that handles external pages will be given: %code, which will suggest to search engines not to index the link.', array('%code' => 'rel="nofollow"')),
  );

  return system_settings_form($form);
}
