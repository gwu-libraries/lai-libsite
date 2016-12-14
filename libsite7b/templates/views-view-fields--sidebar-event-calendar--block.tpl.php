<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->separator)): ?>
    <?php print $field->separator; ?>
  <?php endif; ?>
  <?php

  // Parse rss feed

  if (strpos($field->label_html, 'Title:') !== false) {
    preg_match("/[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}/", $field->content, $datearray);
    preg_match('/http:\/\/browse\.calendar\.gwu\.edu.*rss=rss/', $field->content, $linktextmatch);
    $linkstring = $linktextmatch[0];
    $linkhtml =  preg_replace("/\([0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}\)/", '', $field->content);
    $eventdate = strtotime($datearray[0]);
    $eventmonth = date("F", $eventdate);
    $eventday = date("d", $eventdate);
    $eventwday = date("l", $eventdate);
echo <<<EOT
<div class="sidebar-event">
  <div class="sidebar-calendar">
    <div class="sidebar-event-month">
    $eventmonth
    </div>
    <div class="sidebar-event-day"><a href="
    $linkstring
    ">
    $eventday
    </a>
    </div>
    <div class="sidebar-event-week-day">
    $eventwday
    </div>
  </div>
  <div class="sidebar-event-info">
  $linkhtml <br>
EOT;
  } elseif (strpos($field->label_html, 'Body:') !== false) {
    preg_match("/[0-9]{1,2}:[0-9]{2}\s[APM]{2}/", $field->content, $timearray) ||
    preg_match("/All Day/", $field->content, $timearray) ||
    preg_match("/Start Day/", $field->content, $timearray) ||
    preg_match("/End Day/", $field->content, $timearray);
    $eventtime = $timearray[0];
    echo '<span class="sidebar-event-start-time">' . $eventtime . '</span></div></div>';
  }

  ?>
<?php endforeach; ?>
