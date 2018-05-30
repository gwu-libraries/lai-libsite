<?php 
  if(drupal_is_front_page()) {
    $campus = 'none';
  }
  else if (false !== stripos($_SERVER["REQUEST_URI"], 'eckles')) {
    $campus = 'eckles';
  }
  else if (false !== stripos($_SERVER["REQUEST_URI"], 'virginia')) {
    $campus = 'virginia';
  }
  else if (false !== stripos($_SERVER["REQUEST_URI"], 'utlc')) {
          $campus = 'utlc';
  }
  else {
    $campus = 'gelman';
  }
?>

<?php if ($_SERVER['SERVER_NAME'] != 'library.gwu.edu'): ?>
  <div class="staging-header-container">
    <div class="staging-header-message">
      <span style="color:#FC2847">WARNING:</span> this is a test server for GW Libraries & Academic Innovation and is intended for internal use only. Content, functionality and design may not match the GW Libraries site (<a href="http://library.gwu.edu">library.gwu.edu</a>)
    </div>
  </div>
<?php endif; ?>

<div id="topheader-container" <?php if($campus == 'eckles' || $campus == 'virginia'): ?>class="is-branch"<?php endif; ?>>

  <div id="topheader-content">

    <?php if ($campus == 'utlc'): ?>
    <div id="gwlogo-topheader" style="width: 460px;">
      <a href="/utlc" aria-label="UTLC home page">
        <img src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/logos/utlc-logo-01.png" alt="logo: University Teaching and Learning Center" style="width: 460px;">
        <span class="sr-only">UTLC home page</span>
      </a>
    </div>
    <?php else: ?>
    <div id="gwlogo-topheader">
      <a href="<?php print $front_page; ?>" aria-label="GW Libraries home page">
        <img src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/logos/gw_iddol_libraries_1cs_pos.png" alt="logo: The George Washington University Libraries" width="199" height="90">
        <span class="sr-only">GW Libraries home page</span>
      </a>
    </div>
    <?php endif; ?>

    <p id="lai-division">
      A division of <a target="_blank" href="https://lai.gwu.edu">Libraries and Academic Innovation</a>
    </p>

    <?php if ($campus == 'gelman' OR $campus == 'none'): ?>
      <div id='header-hours'>
        <?php print render($page['topheader_right']); ?>
      </div>
    <?php endif; ?> 


<div class="limiter">
  <div id="local-header">   
  </div>
</div>

<!-- Emergency Notice Banner -->

<?php if ($page['emergency_banner']): ?>
  <style type="text/css">
    #topheader-content { height: initial; }
    @media screen and (max-width: 960px) {
      #bannerContainer { margin: 1em auto .5em; }
    }
  </style>
  <div id="bannerContainer">
    <div id="bannerMessage">
      <?php print render($page['emergency_banner']); ?>
    </div>
  </div>
<?php endif; ?>

</div>


<!-- Primary Navigation -->

<?php
include 'libnav.php';
?>
    

<script>document.createElement('main'); //for IE compatibility with semantic elements</script>

<main id="maincontent" class="main-container center-content">
  <div id="hero">
  <?php if(($campus == 'gelman' || $campus == 'none') && drupal_is_front_page()): ?>
    <div id="hero-image">
      <img alt="background image: Gelman library" src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/editorial-bg-23.jpg" />
    </div>
  <?php elseif(($campus == 'gelman' || $campus == 'none') && !drupal_is_front_page()): ?>
    <img alt="background image of Gelman Library" src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/gelman-10.jpg"/>
  <?php elseif($campus == 'eckles'): ?>
    <div id="hero-image">
      <img alt="background image of Eckles Library" src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/eckles-12.jpg"/>
      <div id="branch-name">
        Eckles Library at the Mount Vernon Campus
      </div>
    </div>
  <?php elseif($campus == 'virginia'): ?>
    <div id="hero-image">
      <img alt="background image of Virginia Campus Library" src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/virginia-04.jpg"/>
      <div id="branch-name">
        Virginia Science and Technology Campus Library
      </div>
    </div>
  <?php elseif($campus == 'utlc' && request_path() == 'utlc'): ?>
    <div id="panels-ipe-paneid-3" class="panels-ipe-portlet-wrapper panels-ipe-portlet-marker">
      <div class="panels-ipe-portlet-content">
        <div class="panel-pane pane-views-panes pane-promotion-slider-12-col-panel-pane-1">
          <div class="view view-promotion-slider-12-col view-id-promotion_slider_12_col view-display-id-panel_pane_1 view-dom-id-564713f4d738dd65125afa82f448335a">
            <div class="view-content">
              <div class="promo-slider-12-col"><div id="flexslider-1" class="flexslider flexslider-processed">
                <ul class="slides">
                  <li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" aria-hidden="false">
                    <div class="promo-slider-12-col-item">
                      <div class="promo-slider-12-col-img">
                        <img typeof="foaf:Image" src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/utlc-hero-02.jpg" alt="hero image of UTLC activities" title="" draggable="false" width="1080">
                      </div>
                      <div class="promo-slider-12-col-info">
                        <div class="promo-slider-12-col-inner">
                           <p style="margin-top: 1em;">The University Teaching & Learning Center (UTLC) is a faculty-driven effort to expand course design and teaching support to all GW faculty members.</p>
                           <span class="heroHeroBtn">
                              <a href="/utlc/about" target="_self">Read more</a>.
                           </span>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <ol class="flex-control-nav flex-control-paging"></ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
<!--
    <div id="hero-image">
      <img alt="hero image of UTLC activities" src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/utlc-hero-02.jpg"/>
    </div>
-->
  <?php endif; ?>

  <?php
    // Sets placeholder text for "all-search (bento)". Calls function from catalog_pointer module.
    if (function_exists('search_placeholder')) {
      if (search_placeholder() != '') {
        $bentoPlaceholder = search_placeholder();
      }
      else {
        $bentoPlaceholder = 'feminism, Les Miserables, economics, JSTOR, 3-D printing ...';
      }
    }
    else {
      $bentoPlaceholder = 'feminism, Les Miserables, economics, JSTOR, 3-D printing ...';
    }
  ?>

<!-- Internal Page Searchbox -->
<?php
  if(!drupal_is_front_page() && $campus !== 'utlc') {
    include 'lai-header-in-search.php';
  }
?>

<!-- Homepage Searchbox -->
<?php if(drupal_is_front_page()): ?>
  <div id="home-search">
    <h3>What would you like to find at the libraries today?</h3>
    <form id="search-form">
    <div class="search-dropdown">
      <div class="search-dropdown-inner">
      <a href="#" aria-haspopup="true" class="current-search-text">Search All</a>
      <ul class="search-dropdown-ul">
      <li id="search-all" data-placeholder="<?php echo $bentoPlaceholder; ?>">
            <span class="search-label" tabindex="0">Search All</span>
            <div class="search-description">Articles and books, plus library databases, <a href="http://libguides.gwu.edu/" tabindex="-1">research guides</a> and tutorials</div>
        </li>
        <li id="search-articlesplus" data-placeholder="Fidel Castro, sustainable energy, gender and identity ...">
            <span class="search-label" tabindex="0">ArticlesPlus</span>
          <div class="search-description">Journal &amp; newspaper articles, plus books and more</div>
        </li>
        <li id="search-catalog" data-placeholder="The Communist Manifesto, calculus, Blade Runner ...">
            <span class="search-label" tabindex="0">Books & More</span>
        <div class="search-description">Books (including e-books), A/V media, and archival resources <div class="search-subdescription">Search the <a href="http://catalog.wrlc.org/">classic catalog</a> (<a href="/new-search-experience">retiring July 2018</a>)</div></div>
      </li>
      <li id="search-journals" data-placeholder="Wall Street Journal, Journal of American History, sociology, ...">
        <span class="search-label" tabindex="0">Browse Journals</span>
        <div class="search-description">Online access to journals and other periodicals, by subject area and title</div>
      </li>
      <li id="search-website" data-placeholder="building hours, study rooms, Churchill ...">
        <span class="search-label" tabindex="0">Library Website</span>
        <div class="search-description">Library policies, news and events, and research help</div>
        </li>
      </ul>
      </div>
    </div>

    <input type="text" aria-label="searchbox: enter your search terms here" placeholder="<?php echo $bentoPlaceholder; ?>"/>
    <select id="catalog-options">
      <option>title</option>
      <option>journal title</option>
      <option selected="selected">keyword</option>
      <option>author</option>
      <option>subject</option>
      <option>call number</option>
    </select>
    <select id="journals-options">
      <option>title begins with</option>
      <option>title (exact)</option>
      <option selected="selected">title keywords</option>
      <option>ISSN</option>
    </select>
      <input type="submit" value="Go" id="go" onClick="ga('send','event','search','/search-all');" >
    </form>
    <p id="home-search-explanation">
      Articles and books, plus library databases, <a href="http://libguides.gwu.edu/">research guides</a> and tutorials
    </p>

  </div>

<?php endif; ?>

</div> <!-- closing hero div -->

<?php if(!drupal_is_front_page() && $campus !== 'utlc'): ?>
		<div class="promotional-six-col" id="internal-featured-services">
				<div class="promo-items-item">
                                <div class="promo-label">
				<div class="promo-image"><a href="/help/reference/ask-us" onclick="ga('send', 'event', 'service links', 'ask-us (internal <?php echo $campus; ?>)');"><img alt="icon: ask us for help" src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/icons/icon-ask-us.png"></a></div>
								<h4 class="promo-title"><a href="/help/reference/ask-us" onclick="ga('send', 'event', 'service links', 'ask-us (internal <?php echo $campus; ?>)');">Ask Us</a></h4>
</span>
							</div>
                                </div>
				<div class="promo-items-item">
                                <div class="promo-label">
				<div class="promo-image"><a href="/about/facilities/study-room-reservations" onclick="ga('send', 'event', 'service links', 'rooms (internal <?php echo $campus; ?>)');"><img alt="icon: reserve a study room" src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/icons/icon-study-rooms.png"></a></div>
								<h4 class="promo-title"><a href="/about/facilities/study-room-reservations" onclick="ga('send', 'event', 'service links', 'rooms (internal <?php echo $campus; ?>)');">Study Room Reservations</a></h4>
</span>
							</div>
                                </div>
				<div class="promo-items-item">
                                <div class="promo-label">
				<div class="promo-image"><a href="https://mylibrary.wrlc.org/" onclick="ga('send', 'event', 'service links', 'my account (internal <?php echo $campus; ?>)');"><img alt="icon: my library account" src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/icons/icon-my-account.png"></a></div>
									<h4 class="promo-title"><a href="https://mylibrary.wrlc.org/" onclick="ga('send', 'event', 'service links', 'my account (internal <?php echo $campus; ?>)');">My Account</a></h4>
</span>
							</div>
                                </div>
				<div class="promo-items-item">
                                <div class="promo-label">
				<div class="promo-image"><a href="http://libguides.gwu.edu/databases" onclick="ga('send', 'event', 'service links', 'databases (internal <?php echo $campus; ?>)');"><img alt="icon: access our databases" src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/icons/icon-databases.png"></a></div>
									<h4 class="promo-title"><a href="http://libguides.gwu.edu/databases" onclick="ga('send', 'event', 'service links', 'databases (internal <?php echo $campus; ?>)');">Databases</a></h4>
</span>
							</div>
                                </div>
				<div class="promo-items-item">
                                <div class="promo-label">
				  <div class="promo-image"><a href="/news-events/upcoming-events?field_event_format_value=1" onclick="ga('send', 'event', 'service links', 'workshops (internal <?php echo $campus; ?>)');"><img alt="icon: workshops" src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/icons/icon-workshops.png"></a></div>
									<h4 class="promo-title"><a href="/news-events/upcoming-events?field_event_format_value=1" onclick="ga('send', 'event', 'service links', 'workshops (internal <?php echo $campus; ?>)');">Workshops</a></h4>
</span>
				  </div>
                                </div>
				<div class="promo-items-item has-promo-body">
                                <div class="promo-label">
				<div class="promo-image"><a href="#"><img alt="icon: all GW libraries" src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/icons/icon-all-libraries.png"></a></div>
									<h4 class="promo-title"><a href="#">All GW Libraries</a></h4>

							</div>
<span class="promo-body">
	<ul>
	<li><a href="/">Estelle and Melvin Gelman Library</a></li>
	<li><a href="/eckles">Eckles Library at the Mount Vernon Campus</a></li>
	<li><a href="/virginia">Virginia Science and Technology Campus Library</a></li>
	</ul>
	<hr/>
	<ul>
	<li><a target="_blank" href="https://himmelfarb.gwu.edu/" class="external-link">Himmelfarb Health Sciences Library <i class="fa fa-external-link" aria-hidden="true"></i></a></li>
	<li><a target="_blank" href="https://www.law.gwu.edu/library" class="external-link">Jacob Burns Law Library <i class="fa fa-external-link" aria-hidden="true"></i></a></li>
	</li>
	</ul>
</span>

						</div>
                                            </div>


<?php endif; ?>

<script type="text/javascript">

jQuery(".search-dropdown").on("click", ".search-dropdown-ul li", function() {
  searchDropdown(jQuery(this));
});
jQuery(".search-label").on("keypress", function(e) {
  if (e.which == 13) { // Enter
    searchDropdown(jQuery(this).parent());
    e.preventDefault();
  }
});

function searchDropdown(passedThis) {
  jQuery(".current-search-text").text(passedThis.find(".search-label").text());
  jQuery("#search-form input[type=text]").attr("placeholder",passedThis.data("placeholder"));
  jQuery("#home-search-explanation").html(passedThis.find(".search-description").html());
  jQuery(".search-dropdown ul").hide();
  jQuery("#home-search-explanation").show();
  jQuery("#search-form input[type=text]").focus();
  jQuery("#catalog-options").hide();
  jQuery("#journals-options").hide();
  if (passedThis.attr("id") == "search-all") {
	  jQuery("#go").remove();
      jQuery("#search-form").append('<input id="go" class="search-all" type="submit" value="Go" title="Search" onClick="ga(\'send\',\'event\',\'search\',\'/search-all\');" alt="Search"> ');  
  }
  if (passedThis.attr("id") == "search-articlesplus") {
	  jQuery("#go").remove();
      jQuery("#search-form").append('<input id="go" class="search-articlesplus" type="submit" value="Go" title="Search" onClick="ga(\'send\',\'event\',\'search\',\'/search-articlesplus\');" alt="Search"> ');    }
  if (passedThis.attr("id") == "search-catalog") {
    jQuery("#catalog-options").show();
	  jQuery("#go").remove();
      jQuery("#search-form").append('<input id="go" class="search-catalog" type="submit" value="Go" title="Search" onClick="ga(\'send\',\'event\',\'search\',\'/search-catalog\');" alt="Search"> ');  
  }
  if (passedThis.attr("id") == "search-journals") {
    jQuery("#journals-options").show();
	  jQuery("#go").remove();
      jQuery("#search-form").append('<input id="go" class="search-journals" type="submit" value="Go" title="Search" onClick="ga(\'send\',\'event\',\'search\',\'/search-journals\');" alt="Search"> ');  
  }
  if (passedThis.attr("id") == "search-website") {
	  jQuery("#go").remove();
      jQuery("#search-form").append('<input id="go" class="search-website" type="submit" value="Go" title="Search" onClick="ga(\'send\',\'event\',\'search\',\'/search-website\');" alt="Search"> ');  
  }
}

jQuery(".search-dropdown").on("click", "a", function(e) {
  e.preventDefault();
});

jQuery(".search-dropdown").on("keydown", function(e) {
  var ul = jQuery(this).find("ul");
  if (ul.is(":hidden")) {
    ul.show();
  }
  var searchLabels = jQuery(".search-label");
  var nearestLabel = searchLabels.filter(":focus");
  var nearestLabelIndex = searchLabels.index(searchLabels.filter(":focus"));
  if (e.which == 38) { // Up arrow
    if (nearestLabel.length == 0) {
      searchLabels.last().focus();
    } else {
      searchLabels.eq(nearestLabelIndex - 1).focus();
    }
    e.preventDefault(); // page scrolling
  }
  if (e.which == 40) { // Down arrow
    if (nearestLabelIndex == searchLabels.length - 1) {
      searchLabels.first().focus();
    } else {
      searchLabels.eq(nearestLabelIndex + 1).focus();
    }
    e.preventDefault(); // page scrolling
  }
});

jQuery(".search-dropdown").on("mouseenter mouseover", function() {
  jQuery(this).find("ul").show();
});
jQuery(".search-dropdown").on("mouseleave", function() {
  jQuery(this).find("ul").hide();
});

</script>
