<?php
  // Define the themename for drupal_get_path calls
  $themename = 'libsite7b';
?>
<!DOCTYPE html>
<html lang="en">
<head profile="<?php print $grddl_profile; ?>">

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" >
  <meta property="og:description" name="description" content="GW Libraries at the George Washington University, including the Gelman Library on the Foggy Bottom Campus, Eckles Library at Mount Vernon Campus, and the Virginia Science and Technology Campus Library" />
  <meta property="og:url" content="http://library.gwu.edu" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php print $head_title; ?>" />
  <meta property="og:image" content="http://library.gwu.edu/sites/all/themes/Libsite7/images/gw_iddol_libraries_4cp_pos_62h_cropped.png" />
  <meta property="og:locale" content="en_US" />
  <link rel="canonical" href="http://library.gwu.edu" />
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>

  <!-- check for mobile opt-out (ignore media queries/responsive) and set viewport -->
  <?php echo $_SESSION['viewport']; ?>

  <link type="text/plain" rel="author" href="http://library.gwu.edu/humans.txt" />

  <!-- favicon -->
  <link rel="shortcut icon" href="<?php print base_path() ?><?php print drupal_get_path('theme', $themename); ?>/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="<?php print base_path() ?><?php print drupal_get_path('theme', $themename); ?>/apple-touch-icon-iphone.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="<?php print base_path() ?><?php print drupal_get_path('theme', $themename); ?>/apple-touch-icon-ipad.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="<?php print base_path() ?><?php print drupal_get_path('theme', $themename); ?>/apple-touch-icon-iphone4.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="<?php print base_path() ?><?php print drupal_get_path('theme', $themename); ?>/apple-touch-icon-ipad3.png" />

  <!-- stylesheets -->

  <!-- including Font Awesome! cdn http://fortawesome.github.io/Font-Awesome/ -->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- web fonts -->
  <!-- SCRC for main page title (appears inset over rotating banner #scrc-banner-title) -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
  <!-- GRC for grc icca pages, move to Context/Context Assets -->
  <link href='https://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>

  <!-- theme javascript -->
  <?php print $scripts; ?>
  <!-- js to allow for .os-mac class -->
  <script>(function(e,t){function n(n,r){if(t.indexOf(n)!==-1)e.push(r)}n("Mac","os-mac");if(document.documentElement){document.documentElement.className+=e.join(" ")}})([""],String(navigator&&navigator.appVersion))</script>
  <?php print $styles; ?>

  <!--[if lt IE 9]>
  <link rel="stylesheet" href="<?php print base_path() ?><?php print drupal_get_path('theme', $themename); ?>/css/style-ie.css" type="text/css" media="screen" />
  <![endif]-->

  <!-- jquery version/cdn options set by Jquery Update module https://www.drupal.org/project/jquery_update -->
  <!-- Adobe accessibleMegaMenu -->
  <script type="text/javascript" src="<?php print base_path() ?><?php print drupal_get_path('theme', $themename); ?>/js/jquery-accessibleMegaMenu.js"></script>

  <!-- google webmaster tools site verification -->
  <meta name="google-site-verification" content="-8pMjtJQyjw3F_vzHnBE8N5XfQHGJt_8zvNQu374zfo" />
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
