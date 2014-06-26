<?php
/**
 * @file rapvokzal_frontpage.admin.inc
 * Functions that are only called on the admin pages.
 */

/**
 * Module settings form.
 */
function rapvokzal_frontpage_settings(&$form_state) {

  $form = array();

  $form['rapvokzal_frontpage_count_albums'] = array(
    '#type' => 'textfield',
    '#title' => t('Count items Albums'),
    '#default_value' => variable_get('rapvokzal_frontpage_count_albums', 6),
  );

  $form['rapvokzal_frontpage_count_videos'] = array(
    '#type' => 'textfield',
    '#title' => t('Count items Videos'),
    '#default_value' => variable_get('rapvokzal_frontpage_count_videos', 5),
  );

  $form['rapvokzal_frontpage_count_news'] = array(
    '#type' => 'textfield',
    '#title' => t('Count items News'),
    '#default_value' => variable_get('rapvokzal_frontpage_count_news', 4),
  );

  $form['rapvokzal_frontpage_count_articles'] = array(
    '#type' => 'textfield',
    '#title' => t('Count items Articles'),
    '#default_value' => variable_get('rapvokzal_frontpage_count_articles', 4),
  );

  $form['rapvokzal_frontpage_count_cinema'] = array(
    '#type' => 'textfield',
    '#title' => t('Count items Cinema'),
    '#default_value' => variable_get('rapvokzal_frontpage_count_cinema', 3),
  );

  $form['rapvokzal_frontpage_welcome'] = array(
    '#type' => 'textarea',
    '#title' => t('Welcome text'),
    '#required' => FALSE,
    '#rows' => 10,
    '#default_value' => variable_get('rapvokzal_frontpage_welcome', ''),
  );

  $form['rapvokzal_frontpage_welcome_enable'] = array(
    '#type' => 'checkbox',
    '#title' => t('Welcome text enabled?'),
    '#default_value' => variable_get('rapvokzal_frontpage_welcome_enable', ''),
  );


  return system_settings_form($form);
}
