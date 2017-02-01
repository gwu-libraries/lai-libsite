<?php

/**
* Use relative paths for head resources.
**/
function libsite7b_process_html(&$vars)
{
    foreach (array('head', 'styles', 'scripts') as $replace) {
        if (!isset($vars[$replace])) {
            continue;
        }

        $vars[$replace] = preg_replace('/(src|href|@import )(url\(|=)(")http(s?):/', '$1$2$3', $vars[$replace]);
    }
}

/**
* Change heading/title for personal contact form.
**/
function libsite7b_form_contact_personal_form_alter(&$form, &$form_state) {
    $contactVar = "Send an email to this member of GW Libraries";
    drupal_set_title($contactVar);
}

/**
* Implements hook_preprocess_search_results(). From Brock Boland / Lullabot http://lb.cm/Wyp.
*/
function libsite7b_preprocess_search_results(&$vars) {
  // search.module shows 10 items per page (this isn't customizable)
  $itemsPerPage = 10;

  // Determine which page is being viewed
  // If $_REQUEST['page'] is not set, we are on page 1
  $currentPage = (isset($_REQUEST['page']) ? $_REQUEST['page'] : 0) + 1;

  // Get the total number of results from the global pager
  $total = $GLOBALS['pager_total_items'][0];

  // Determine which results are being shown ("Showing results x through y")
  $start = (10 * $currentPage) - 9;
  // If on the last page, only go up to $total, not the total that COULD be
  // shown on the page. This prevents things like "Displaying 11-20 of 17".
  $end = (($itemsPerPage * $currentPage) >= $total) ? $total : ($itemsPerPage * $currentPage);

  // If there is more than one page of results:
  if ($total > $itemsPerPage) {
    $vars['search_totals'] = t('Displaying !start - !end of !total results', array(
      '!start' => $start,
      '!end' => $end,
      '!total' => $total,
    ));
  }
  else {
    // Only one page of results, so make it simpler
    $vars['search_totals'] = t('Displaying !total !results_label', array(
      '!total' => $total,
      // Be smart about labels: show "result" for one, "results" for multiple
      '!results_label' => format_plural($total, 'result', 'results'),
    ));
  }
}

/**
* Implements responsive opt-out: removes viewport from head and sets links below footer.
*/
if (isset($_GET['mobile']))  {
  setcookie("MediaQueries", $_GET['mobile']);
  if ($_GET['mobile'] == 'no') {
    $_SESSION['viewport'] = '';     
    $respOpt = "B";
  }
  elseif ($_GET['mobile'] == 'yes') {
    $_SESSION['viewport'] = "<meta name='viewport' content='width=device-width, initial-scale=1.0' />";
    setcookie("MediaQueries", "", time()-3600);
    $respOpt = "A";
  }
}
elseif (!isset($_GET['mobile']) && isset($_COOKIE['MediaQueries'])) {
  if ($_COOKIE['MediaQueries'] == 'no') {
    $_SESSION['viewport'] = '';     
    $respOpt = "B";
  }
  else {
    $_SESSION['viewport'] = "<meta name='viewport' content='width=device-width, initial-scale=1.0' />";
    $respOpt = "A";
  }
}
elseif (!isset($_GET['mobile']) && !isset($_COOKIE['MediaQueries'])) {
  $_SESSION['viewport'] = "<meta name='viewport' content='width=device-width, initial-scale=1.0' />";
  $respOpt = "A";
}
else {
  $_SESSION['viewport'] = "<meta name='viewport' content='width=device-width, initial-scale=1.0' />";
  $respOpt = "A";
}

if (isset($_GET['killcookie'])) {
  setcookie("MediaQueries", "", time()-3600);
  echo "<script>alert('The responsive opt-out cookie is dead Jim');</script>";
}

if ($respOpt == 'B') { 
  // show options, mobile-link | desktop
  $_SESSION['respOptString'] = "<div style='margin: 0 auto 0; width:100%; max-width:960px;'><div style='float:right; font-size:1em; line-height:1.6em; clear:left; margin: .2 .5em 0 0; padding:5px;'><a href='?mobile=yes'>Mobile</a>&nbsp;|&nbsp;Desktop&nbsp;</div></div>";
}
elseif ($respOpt == 'A') {
  // show options on 'mobile-show' class, mobile | desktop-link
  $_SESSION['respOptString'] = "<div style='margin: 0 auto 0; width:100%; max-width:960px;' class='mobile-show'><div style='float:right; font-size:1em; line-height:1.6em; clear:left; margin: .2 .5em 0 0; padding:5px;'>Mobile&nbsp;|&nbsp;<a href='?mobile=no'>Desktop</a>&nbsp;</div></div>"; 
}
else {
  // show options on 'mobile-show' class, mobile | desktop-link
  $_SESSION['respOptString'] = "<div class='mobile-show' style='float:right; font-size:1em; line-height:1.6em; clear:left; margin: .2 .5em 0 0; padding:5px;'>Mobile&nbsp;|&nbsp;<a href='?mobile=no'>Desktop</a>&nbsp;</div>";       
}

/* Counter for Kiosks. */
if (isset($_GET['kiosk'])) {
  $theCount = variable_get('kiosk_counter', $default = NULL);
  variable_set('kiosk_counter', ($theCount + 1));
  if ($_GET['kiosk'] == 'reset') {
     variable_set('kiosk_counter', 0);
     variable_set('kiosk_since', date('Y-m-d'));
  }
}

/* Injecting classes into body per library */
function libsite7b_preprocess_html(&$vars) {
  if (false !== stripos($_SERVER["REQUEST_URI"], 'eckles') || false !== stripos($_SERVER["REQUEST_URI"], 'virginia')) {
    $vars['classes_array'][] = 'is-branch';
  }
}
