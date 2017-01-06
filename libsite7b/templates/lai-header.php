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

<div id="container" class="three-six-three logo-slogan">
	<div id="skip">
	  <a href="#maincontent">Skip to Main Content</a>
	  <a href="#secondary-nav">Skip to Main Menu</a>
	</div>
</div>

<div id="topheader-container">

  <div id="topheader-content">

		<div id="gwlogo-topheader"><a href="<?php print $front_page; ?>" aria-label="GW Libraries home page"><img src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/logos/gw_iddol_libraries_1cs_pos.png" alt="logo: The George Washington University Libraries" width="199" height="90"><span class="sr-only">GW Libraries home page</span></a>

	    </div>

		<p id="lai-division">
		A division of <a href="https://lai.gwu.edu">Libraries and Academic Innovation</a>
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
      <img src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/editorial-bg-23.jpg" />
    </div>

  <?php elseif(($campus == 'gelman' || $campus == 'none') && !drupal_is_front_page()): ?>

    <img src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/gelman-10.jpg"/>

  <?php elseif($campus == 'eckles'): ?>

    <div id="hero-image">
      <img src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/eckles-04.jpg"/>
      <div id="branch-name">
        Eckles Library at the Mount Vernon Campus
      </div>
    </div>

  <?php elseif($campus == 'virginia'): ?>

    <div id="hero-image">
      <img src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/virginia-04.jpg"/>
      <div id="branch-name">
        Virginia Science and Technology Campus Library
      </div>
    </div>

  <?php endif; ?>

<!-- Internal Page Searchbox -->
<?php
  if(!drupal_is_front_page()) {
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

                		<li id="search-all" data-placeholder="feminism, Les Miserables, economics, JSTOR, 3-D printing ...">

                		  <a href="#">

                	        <span class="search-label">Search All</span>

                	        <div class="search-description">Articles and books, plus library databases, research guides and tutorials</div>

                		  </a>

                	    </li>

                	    <li id="search-articlesplus" data-placeholder="Fidel Castro, sustainable energy, gender and identity ...">

                		  <a href="#">

                	        <span class="search-label">ArticlesPlus</span>

                		    <div class="search-description">Journal &amp; newspaper articles, plus books and more</div>

                		  </a>

                	    </li>

                	    <li id="search-catalog" data-placeholder="The Communist Manifesto, calculus, Bladerunner ...">

                	      <a href="#">

                	        <span class="search-label">Books & More</span>

                			<div class="search-description">Books (including e-books), A/V media, and archival resources</div>

                		  </a>

                		</li>

                		<li id="search-journals" data-placeholder="Wall Street Journal, Journal of American History, sociology, ...">

                	      <a href="#">

                			<span class="search-label">Browse Journals</span>

                			<div class="search-description">Online access to journals and other periodicals, by subject area and title</div>

                		  </a>

                		</li>

                		<li id="search-website" data-placeholder="building hours, study rooms, Churchill ...">

                	      <a href="#">

                			<span class="search-label">Library Website</span>

                			<div class="search-description">Library policies, news and events, and research help</div>

                		  </a>

                	    </li>

                	  </ul>

                	  </div>

                	</div>

                    <input type="text" placeholder="feminism, Les Miserables, economics, JSTOR, 3-D printing ..."/>

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

                    <input type="submit" value="Go"/>

                  </form>

  	  <p id="home-search-explanation">
        Articles and books, plus library databases, research guides and tutorials. 
      </p>

  	</div>

  <!--</div> dupe closing hero div? -->
<?php endif; ?>
    

<?php if(!drupal_is_front_page()): ?>

<style>

/* temp hack, copied from header.css */

#internal-featured-services .promo-items-item, #internal-featured-services h4 {
  display: inline-block;
  font-size: 1em;
  white-space: nowrap;
  line-height: 30px;
  font-weight: normal;
  position: relative;
  margin: 0;
}
@media screen and (max-width: 800px) {
  #internal-featured-services h4 {
    display: none;
  }
}
#internal-featured-services .promo-image, #internal-featured-services .promo-image img {
  width: 30px;
  display: inline-block;
}
#internal-featured-services {
  margin: .5em auto 1em;
  text-align: right;
  max-width: 1080px;
}
#internal-featured-services .promo-body {
  display: none;
}
#internal-featured-services .promo-label {
  padding: .25em 1em;
  margin: 0 -.5em;
  border: 1px solid transparent;
  z-index: 3 !important;
  position: relative;
  display: inline-block;
}
#internal-featured-services .promo-items-item:hover .promo-label {
  border: 1px solid #ccc;
  background-color: #eee;
}
#internal-featured-services .promo-items-item.has-promo-body .promo-label {
  border-bottom-width: 0;
}
#internal-featured-services .promo-items-item:hover .promo-body {
  z-index: 2 !important;
  display: block;
  position: absolute;
  top: 100%;
  margin-top: -2px;
  right: -.5em;
  border: 1px solid #ccc;
  background-color: #eee;
  text-align: left;
  padding: .5em 1em;
  box-shadow: 0px 8px 10px 0px rgba(0, 0, 0, 0.15);
}

</style>

						<div class="promotional-six-col" id="internal-featured-services">
				<div class="promo-items-item" id="promo-item-1">
                                <div class="promo-label">
				<div class="promo-image"><a href="/help/reference/ask-us"><img src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/icons/icon-help-02.png"></a></div>
								<h4 class="promo-title"><a href="/help/reference/ask-us">Ask Us</a></h4>
</span>
							</div>
                                </div>
				<div class="promo-items-item" id="promo-item-2">
                                <div class="promo-label">
				<div class="promo-image"><a href="/about/facilities/study-room-reservations"><img src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/icons/icon-reservation-02.png"></a></div>
								<h4 class="promo-title"><a href="/about/facilities/study-room-reservations">Study room reservations</a></h4>
</span>
							</div>
                                </div>
				<div class="promo-items-item" id="promo-item-3">
                                <div class="promo-label">
				<div class="promo-image"><a href="https://mylibrary.wrlc.org/"><img src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/icons/icon-account-02.png"></a></div>
									<h4 class="promo-title"><a href="https://mylibrary.wrlc.org/">My Account</a></h4>
</span>
							</div>
                                </div>
				<div class="promo-items-item" id="promo-item-4">
                                <div class="promo-label">
				<div class="promo-image"><a href="http://libguides.gwu.edu/databases"><img src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/icons/icon-databases-04.png"></a></div>
									<h4 class="promo-title"><a href="http://libguides.gwu.edu/databases">Databases</a></h4>
</span>
							</div>
                                </div>
				<div class="promo-items-item" id="promo-item-5">
                                <div class="promo-label">
				  <div class="promo-image"><a href="/news-events/upcoming-events?field_event_format_value=1"><img src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/icons/icon-workshops-04.png"></a></div>
									<h4 class="promo-title"><a href="/news-events/upcoming-events?field_event_format_value=1">Workshops</a></h4>
</span>
				  </div>
                                </div>
				<div class="promo-items-item" id="promo-item-6">
                                <div class="promo-label">
				<div class="promo-image"><a href="#"><img src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/icons/icon-other-libraries-04.png"></a></div>
									<h4 class="promo-title"><a href="#">All GW Libraries</a></h4>

<span class="promo-body">
	<ul>
	<li><a href="/">Estelle and Melvin Gelman Library</a></li>
	<li><a href="/eckles">Eckles Library at the Mount Vernon Campus</a></li>
	<li><a href="/virginia">Virginia Science and Technology Campus Library</a></li>
	</ul>
	<hr/>
	<ul>
	<li><a href="https://himmelfarb.gwu.edu/" class="external-link">Himmelfarb Health Sciences Library <i class="fa fa-external-link" aria-hidden="true"></i></a></li>
	<li><a href="https://www.law.gwu.edu/library" class="external-link">Jacob Burns Law Library <i class="fa fa-external-link" aria-hidden="true"></i></a></li>
	</li>
	</ul>
</span>

							</div>
						</div>
                                            </div>

<?php endif; ?>

</div> <!-- closing hero div -->


<script type="text/javascript">

  jQuery(".search-dropdown").on("click", ".search-dropdown-ul li", function() {

  jQuery(".current-search-text").text(jQuery(this).find(".search-label").text());

  jQuery("#search-form input[type=text]").attr("placeholder",jQuery(this).data("placeholder"));

  jQuery("#home-search-explanation").html(jQuery(this).find(".search-description").html());

  jQuery("#catalog-options").hide();

  jQuery("#journals-options").hide();

  if (this.id == "search-catalog") {

    jQuery("#catalog-options").show();

  }

  if (this.id == "search-journals") {

    jQuery("#journals-options").show();

  }

});

jQuery(".search-dropdown").on("click", "a", function(e) {

  e.preventDefault();

});

jQuery(".search-dropdown").on("keydown", function(e) {

  var ul = jQuery(this).find("ul");

  if (ul.is(":hidden")) {

    ul.show();

  }

});

jQuery(".search-dropdown").on("click", function(e) {

  var ul = jQuery(this).find("ul");

  if (ul.is(":hidden")) {

    ul.show();

	e.stopPropagation(); // to prevent the html.onclick below from being triggered

  } else {

    closeSearchDropdown();

  }

  jQuery("#home-search-explanation").hide();

});

jQuery("html").on("click", function() {

  closeSearchDropdown();

});

function closeSearchDropdown() {

  jQuery(".search-dropdown ul").hide();

  jQuery("#home-search-explanation").show();

  // this is taking focus from all form fields, adjust behavior to only take focus on page load and selection of dropdown category: jQuery("#search-form input[type=text]").focus();

}

</script>
