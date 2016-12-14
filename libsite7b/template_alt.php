<?php

/**
 * Implementation of hook_form_FORM_ID_alter()
 */
function Libsite7_form_contact_personal_form_alter(&$form, &$form_state) {
    global $user;
    if (empty($user->name)) {
        $theName = 'Contact';
        }
    else $theName='Contact staff member ' . $user->name;
    $contactVar = $theName;
    drupal_set_title($contactVar);
}

function Libsite7_breadcrumb($variables) {
  $sep = ' &gt; ';
  if (count($variables['breadcrumb']) > 0) {
    return implode($sep, $variables['breadcrumb']);
  }
  else {
    return t("Home");
  }
}

//function Libsite7_process_page(&$variables) {
//    if (arg(0) == 'search' ) {
//        $keys = arg(2);
//        if (!$keys) $keys = $_REQUEST['keys'];
//        if ($keys) $variables['title'] = 'Search the GW Libraries Website for "'.$keys.'"';
//        else $variables['title'] = 'Search the GW Libraries Website';
//    }
//}

/**
 * Use relative paths for head resources (SSL purposes).
**/
function Libsite7_process_html(&$vars)
{
    foreach (array('head', 'styles', 'scripts') as $replace) {
        if (!isset($vars[$replace])) {
            continue;
        }

        $vars[$replace] = preg_replace('/(src|href|@import )(url\(|=)(")http(s?):/', '$1$2$3', $vars[$replace]);
    }
}

/**
 * Add an extras field to the personal contact form.
**/
function Libsite7_form_alter(&$form, $form_state, $form_id) {
if ($form_id == 'contact_personal_form') { // Is this the personal contact form?
    $form['extra_field'] = array( // add a field to the form
      '#type' => 'textfield',
      '#title' => t('Extra field'),
      '#weight' => -99,
    $
  );
  array_unshift($form['#submit'][] = 'custom_form_onSubmit');
  }
}