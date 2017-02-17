<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php // print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h5<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h5>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>

    <?php
      // Get start date and time.
      $eventDate = $node->field_event_date['und'][0]['value'];
      // Get end date and time.
      $eventDate2 = $node->field_event_date['und'][0]['value2'];
      // Display warning if event is in the past.
      if ( strtotime($eventDate2) < strtotime('now') ) {
        print '<div class="old-event">This event has already taken place, please don\'t try to go to it!</div>'; 
      }
    ?>

    <?php
      // Setting Summary content.
      $summaryVal = render(field_view_field('node', $node, 'body', array(
        'label'=>'hidden',
        'type' => 'text_summary_or_trimmed',
        'settings'=>array('trim_length' => 150),
      )));

      // Setting Body content.
      $bodyVal = $content['body']['#object']->body['und'][0]['value'];

      // Checking if there is Body content, otherwise using Summary.
      if ($bodyVal == "") {
        $bodyMod = $summaryVal;
      }
      else {
        $bodyMod = $bodyVal;
      }
    ?>

    <?php
      // Hide the comments and links (render at end) and body field (since we're substituting body content).
      hide($content['comments']);
      hide($content['links']);
      hide($content['body']);
      hide($content['field_events_image']);
      print render($content['field_events_image']);
      print "<div id='bodyMod-wrapper'>";
      print render($bodyMod);
      print "</div>";
      print "<div id='content-wrapper'>";
      //print render($content);
      print "</div>";
      print "<div id='some-fields-wrapper-example'>";
      print render($content['field_event_date']);
      print render($content['field_event_location']);
      print render($content['field_event_type']);
      print "</div>";
      print "<div id='other-fields-wrapper-example'>";
      print render($content['field_event_format']);
      print render($content['field_event_location']);
      print "</div>";
    ?>

    <?php print '<div class="events-notice"><p><i class="fa fa-info-circle"></i> Please see our <a href="/news-events/upcoming-events">Upcoming Events</a> page or our <a href="/news-events/past-events">Archive of Past Events</a> for a complete list of events in the GW Libraries.</p></div>'; ?>

    <?php
      //print '<br /><br /><pre>';
      //print_r($content);
      //print '</pre>';
    ?>

  </div>

  <?php // print render($content['links']); ?>

  <?php // print render($content['comments']); ?>

</div>

