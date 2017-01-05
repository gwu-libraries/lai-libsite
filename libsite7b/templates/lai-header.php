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


<!-- begin library unit section header -->

<div id="libheader-front" style="display: none;">

  <div class="sr-only">
    <a href="http://library.gwu.edu/about" itemprop="copyrightNotice">
        © <span itemprop="copyrightYear">2016</span><span itemprop="copyrightHolder" itemscope="" itemtype="http://schema.org/Library" itemid="http://library.gwu.edu"><span itemprop="name"> GW Libraries &amp; Academic Innovation</span></span>
    </a>
  </div>

	<section id="banner">

		<div id="innerBannerDiv">				

			<div class="banner-container">	

                                             

                                              <!-- formerly: libraries logo -->

                                            						  

				                                                  <!-- formerly: rollovers for each library name -->

																

				<!-- begin tabbed search block -->

			    						<!--end searchboxes-->

				<!-- end tabbed search block -->

				<!-- alternate single search box code for handheld is located in libnav.php -->



			    <div class="front-page-header-variant">

				<a href="http://library.gwu.edu/">Estelle<span class="three-libs-smalltype"> and </span>Melvin Gelman Library</a>&nbsp;•

				<a href="http://library.gwu.edu/eckles/">Eckles Library<span class="three-libs-smalltype"> at the </span>Mount Vernon Campus</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://library.gwu.edu/virginia/">Virginia Science<span class="three-libs-smalltype"> and </span>Technology Campus Library</a>

				</div>			

			</div><!-- closes <div class="banner-container">-->

		</div><!-- closes <div id="innerBannerDiv"> -->

	</section>

</div><!-- closes library specific div set in opening php-->

<!-- Lib Nav -->

<div class="limiter">

	<div id="local-header">		


		<div id="search-menu-mobile" style="display: none;"><!-- main search located in libheader.php -->


			<!-- SEARCH ALL single search -->

			<form action="/search-all" method="get" onsubmit="ga('send','event','single-search','/search-all','Single Search (handheld)');">

				<label for="mobile-search">enter your search terms</label>

				<input id="mobile-search" name="query" style="padding-left:.5em;" placeholder="search everything (catalogs and website)" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="100" type="text">					

				<input value="go" type="submit">

			</form>

			<div style="margin-top:.4em;"><a href="http://gw.summon.serialssolutions.com/">ArticlesPlus</a> • <a href="http://findit.library.gwu.edu/catalog/" target="_blank">Catalog</a> • <a href="http://findit.library.gwu.edu/?L=UZ4UG4LZ9G&amp;" target="_blank">Journals</a> • <a href="http://refuniv.odyssi.com/cgi-bin/phtml?newsearch.htm" target="_blank">Reference</a> • <a href="http://library.gwu.edu/search">Site</a>

			</div>

		</div>		

	</div>

</div>

<?php if ($page['emergency_banner']): ?>
	<div id="bannerContainer">
		<div id="bannerMessage">
		  <?php print render($page['emergency_banner']); ?>
		</div>
	</div>
<?php endif; ?>

</div>

<?php
//echo "<h1>the nav is below this</h1>";
//include "lai-libnav.php"; 
include 'libnav.php';
//echo "<h1>above this</h1>";
?>
	  

<script>document.createElement('main'); //for IE compatibility with semantic elements</script>


<main id="maincontent" class="main-container center-content">

  <div id="hero">

    <div id="hero-image">

      <img src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/editorial-bg-23.jpg" />

	  </div>

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

  </div>

    

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
@media screen and (max-width: 640px) {
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
				<div class="promo-image"><a href="#"><img src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/icons/icon-help-02.png"></a></div>
								<h4 class="promo-title"><a href="#">Ask Us</a></h4>
								<span class="promo-body"><p>Need help with something?  Get in touch.</p>
</span>
							</div>
				<div class="promo-items-item" id="promo-item-2">
				<div class="promo-image"><a href="#"><img src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/icons/icon-reservation-02.png"></a></div>
								<h4 class="promo-title"><a href="#">Study room reservations</a></h4>
								<span class="promo-body"><p>Reserve a group study room.</p>
</span>
							</div>
				<div class="promo-items-item" id="promo-item-3">
				<div class="promo-image"><a href="#"><img src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/icons/icon-account-02.png"></a></div>
									<h4 class="promo-title"><a href="#">My Account</a></h4>
								<span class="promo-body"><p>Check due dates, access saved articles, etc.</p>
</span>
							</div>
				<div class="promo-items-item" id="promo-item-4">
				<div class="promo-image"><a href="#"><img src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/icons/icon-databases-04.png"></a></div>
									<h4 class="promo-title"><a href="#">Databases</a></h4>
								<span class="promo-body"><p>Find by topic or by A-Z listing.</p>
</span>
							</div>
				<div class="promo-items-item" id="promo-item-5">
				<div class="promo-image"><a href="#"><img src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/icons/icon-workshops-04.png"></a></div>
									<h4 class="promo-title"><a href="#">Workshops</a></h4>
								<span class="promo-body"><p>Come learn about new topics.</p>
</span>
							</div>
				<div class="promo-items-item" id="promo-item-6">
				<div class="promo-image"><a href="#"><img src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/icons/icon-other-libraries-04.png"></a></div>
									<h4 class="promo-title"><a href="#">All GW Libraries</a></h4>
								<span class="promo-body"><p>Other branches of GW Libraries</p>
</span>
							</div>
						</div>

<?php endif; ?>




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
