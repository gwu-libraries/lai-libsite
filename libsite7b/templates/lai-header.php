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

</div> <!-- End #topheader-content -->
</div> <!-- End #topheader-container -->


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
<?php if(!drupal_is_front_page() && $campus !== 'utlc'): ?>
  <div id="internal-search">
    <?php
    include 'primo-search.php';
    ?>
  </div>
<?php endif; ?>

<!-- Homepage Searchbox -->
<?php if(drupal_is_front_page()): ?>
  <div id="home-search">
    <h3>What would you like to find at the libraries today?</h3>
    <?php
    include 'primo-search.php';
    ?>
    <p id="home-search-explanation">
      Articles, books, e-books, media, and archival resources at GW and WRLC libraries, plus <a href="http://libguides.gwu.edu/">research guides</a>
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

// Helper function when submitting the search form
function preSubmissionCleanup() {
  jQuery(".highlightedQuery").removeClass("highlightedQuery");
  jQuery("#primo-dropdown-copy").hide();
}

// Explicitly submit the form via JS (as opposed to <button type="submit">) so as to call Google Analytics beforehand, 
// lest the event not actually get sent before leaving the page
jQuery("#primo-go").on("click keypress", function(e) {
  if (e.type == "click" || e.which == 13 || e.which == 32) { // If clicking or hitting Enter (13) or Spacebar (32) on the magnifying glass
    preSubmissionCleanup();
    if (typeof ga != "undefined" && !ga.q) { // Only bother if GA is loaded and available, otherwise submit the form straight away
      var scope = jQuery("#current-scope").text().trim();
      scope = jQuery("#scope-dropdown li").filter(function (){ // find the element in the dropdown that's based on the #current-scope text
        return jQuery(this).text().trim() == scope;
      }).attr("id"); // and get its ID
      ga('send','event','search', scope, {
        hitCallback: function() { // Submit the form after the GA event has indeed been sent
          jQuery("#primo-search-form").submit();
        }
      });
    } else {
      jQuery("#primo-search-form").submit();
    }
  }
});

// sendGAandSubmit() sends an event with Google Analytics (if found (sometimes it's not found if logged in or blocked))
// so that we have an idea of how often the search is being run via a click/enter of the magnifying glass
// vs. an Enter while on the #primo-dropdown-copy list vs. a click while on the #primo-dropdown-copy
function sendGAandSubmit(event) {
  preSubmissionCleanup();
  if (typeof ga != "undefined" && !ga.q) { // Only bother if GA is loaded and available, otherwise submit the form straight away
    var scope = jQuery("#current-scope").text().trim();
    scope = jQuery("#scope-dropdown li").filter(function (){ // find the element in the dropdown that's based on the #current-scope text
      return jQuery(this).text().trim() == scope;
    }).attr("id"); // and get its ID
    if (jQuery("#primo-dropdown-copy").is(":visible") && jQuery(".highlightedQuery").length) { // Add "-autocomplete" to the GA event if applicable
      scope = scope + "-autocomplete";
    }
    scope = scope + "-" + event.type;
    ga('send','event','search', scope, {
      hitCallback: function() { // Submit the form after the GA event has indeed been sent
        jQuery("#primo-search-form").submit();
      }
    });
  } else {
    jQuery("#primo-search-form").submit();
  }
}

// This captures hitting "Enter" while in the search box.  Do this instead of letting the form submit naturally
// to make sure GA is sent the event before leaving the page and thus potentially not getting fully sent (keyup is too late).
jQuery("#search-input").on("keypress", function(e) {
  if (e.which == 13) {
    if (jQuery(".highlightedQuery").length == 1) {
      jQuery("#current-scope").text(jQuery(".highlightedQuery .search-scope").text());
    }
    sendGAandSubmit(e);
    e.preventDefault();
    return false;
  }
});

jQuery("#scope-dropdown").on("click", "li", function() {
  searchDropdown(jQuery(this));
});
jQuery("#scope-dropdown").on("keypress", "li", function(e) {
  if (e.which == 13) { // Enter
    searchDropdown(jQuery(this));
    jQuery("#primo-go").focus();
    e.preventDefault();
  }
});

function searchDropdown(passedThis) {
  jQuery("#current-scope").text(passedThis.text());
  jQuery("#search-input").attr("placeholder",passedThis.data("placeholder"));
  jQuery("#home-search-explanation").html(passedThis.data("description"));
  jQuery(".highlightedQuery").removeClass("highlightedQuery");
  jQuery("#scope-dropdown ul").hide();
}

jQuery("#current-scope").on("click", function() {
  jQuery("#scope-dropdown ul").show();
});

jQuery("#scope-dropdown").on("keydown", function(e) {
  if (!e.shiftKey && !e.ctrlKey && !e.altKey && !e.metaKey && e.which != 27) { // 27 = Escape key
    var ul = jQuery(this).find("ul");
    if (ul.is(":hidden")) {
      ul.show();
    }
    var scopes = jQuery(this).find("li");
    var nearestScope = scopes.filter(":focus");
    var nearestScopeIndex = scopes.index(nearestScope);
    if (jQuery(document.activeElement).is("#current-scope")) {
      var currentText = jQuery("#current-scope").text().trim();
      jQuery("#scope-dropdown li").filter(function (){ // .focus() the element in the dropdown that's based on the #current-scope text
        return jQuery(this).text().trim() == currentText;
      }).focus();
      e.preventDefault(); // Else the keypress on #scope-dropdown delegated to li will get called, which will call searchDropdown, which will close the dropdown immediately
    } else if (e.which == 38) { // Up arrow
      if (nearestScope.length == 0) {
        scopes.last().focus();
      } else {
        scopes.eq(nearestScopeIndex - 1).focus();
      }
      e.preventDefault(); // page scrolling
    } else if (e.which == 40) { // Down arrow
      if (nearestScopeIndex == scopes.length - 1) {
        scopes.first().focus();
      } else {
        scopes.eq(nearestScopeIndex + 1).focus();
      }
      e.preventDefault(); // page scrolling
    }
  }
});

jQuery("#scope-dropdown").on("mouseenter mouseover", function() {
  if (jQuery("#current-scope").css("font-size") != "0px") {
    jQuery(this).find("ul").show();
  }
});
jQuery("#scope-dropdown").on("mouseleave", function() {
  jQuery(this).find("ul").hide();
});


/* Populate a list below the search input with a copy of what the user is typing, as a shortcut to the scopes */
jQuery("#primo-dropdown-copy").html(jQuery("#scope-dropdown ul").clone().css("min-width",jQuery("#search-input").outerWidth()).show());
jQuery("#primo-dropdown-copy li").removeAttr("id");
jQuery("#primo-dropdown-copy li").wrapInner('<span class="search-scope"></span>');
jQuery("#primo-dropdown-copy li").prepend(jQuery("#primo-go svg").clone());
jQuery("#primo-dropdown-copy li").prepend('<span class="search-query"></span>');
jQuery("#primo-dropdown-copy li").on("focus", function(e) {
  jQuery("#primo-dropdown-copy li").removeClass("highlightedQuery");
  jQuery(this).addClass("highlightedQuery");
});
jQuery("#search-input, #primo-dropdown-copy li").on("keydown input focus", function(e) {
  var query = jQuery("#search-input").val().trim();
  if (query != "") { // Only bother if something's been typed
    var searchQueries = jQuery("#primo-dropdown-copy li");
    var nearestQuery = searchQueries.filter(".highlightedQuery");
    var nearestQueryIndex = searchQueries.index(nearestQuery);
    // Can't use .focus() alone for these since that removes the cursor from the text input, thus losing the keydown event,
    // but do use .focus() if the user has already lost focus in the output by tabbing out into the options
    if (e.which == 38) { // Up arrow
      if (nearestQuery.length == 0) {
        searchQueries.removeClass("highlightedQuery");
        searchQueries.last().addClass("highlightedQuery");
        if (e.target.id !== "search-input") searchQueries.last().focus();
      } else {
        searchQueries.removeClass("highlightedQuery");
        searchQueries.eq(nearestQueryIndex - 1).addClass("highlightedQuery");
        if (e.target.id !== "search-input") searchQueries.eq(nearestQueryIndex - 1).focus();
      }
      e.preventDefault(); // page scrolling
    } else if (e.which == 40) { // Down arrow
      if (nearestQueryIndex == searchQueries.length - 1) {
        searchQueries.removeClass("highlightedQuery");
        searchQueries.first().addClass("highlightedQuery");
        if (e.target.id !== "search-input") searchQueries.first().focus();
      } else {
        searchQueries.removeClass("highlightedQuery");
        searchQueries.eq(nearestQueryIndex + 1).addClass("highlightedQuery");
        if (e.target.id !== "search-input") searchQueries.eq(nearestQueryIndex + 1).focus();
      }
      e.preventDefault(); // page scrolling
    } else if (e.which != 13) { // If it's not the Enter key. Enter (submission) is instead handled in the #search-input/keypress event above
      jQuery("#primo-dropdown-copy .search-query").text(query);
      jQuery("#primo-dropdown-copy").show();
    }
  } else { // hide if there is no non-whitespace text
    jQuery("#primo-dropdown-copy").hide();
  }
});

// Run a search if clicking directly on a scope in the copy of what the user has typed
jQuery("#primo-dropdown-copy li").on("click", function(e) {
  jQuery("#current-scope").text(jQuery(this).find(".search-scope").text());
  sendGAandSubmit(e);
});

// Prevent page scrolling on up/down arrow when going through options in primo-dropdown-copy (keyup wasn't enough)
jQuery("#primo-dropdown-copy li").on("keydown", function(e) {
  if (e.which == 38 || e.which == 40) {
    e.preventDefault();
  }
});

// These are to undo above keydown that triggers the dropdowns to be shown on keys like up/down/tab
jQuery("#current-scope").on("focusout", function(e) {
  if (e.relatedTarget == null || e.relatedTarget.id == "search-input") {
    jQuery("#scope-dropdown ul").hide();
  }
});
jQuery("#search-input").on("focusout", function(e) {
  if (e.relatedTarget == null || jQuery(e.relatedTarget).closest("#primo-search-form").length == 0) {
    jQuery("#primo-dropdown-copy").hide();
  }
});

// Hide dropdowns if you click away from them or tab away from them
jQuery("#scope-dropdown ul").on("focusout", function(e) {
  if (e.relatedTarget == null || jQuery("#" + e.relatedTarget.id).closest(jQuery(this)).length == 0) {
    jQuery(this).hide();
  }
});
jQuery("#primo-dropdown-copy").on("focusout", function(e) {
  if (e.relatedTarget == null || jQuery(e.relatedTarget).closest(jQuery(this)).length == 0 && e.relatedTarget.id != "primo-search-form") {
    jQuery(this).hide();
  }
});
jQuery(document).on("touchstart", function(e) { // Touchstart for mobile devices where focusout wasn't working
  dropdowns = jQuery("#scope-dropdown ul, #primo-dropdown-copy");
  if (!dropdowns.is(e.target) && dropdowns.has(e.target).length === 0) {
    dropdowns.hide();
  }
});

</script>
