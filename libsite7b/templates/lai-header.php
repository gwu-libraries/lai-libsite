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

	

                           <div id="header-hours">
                          
                                  <div class="region region-topheader-right">
                          
                              <div id="block-library_hours-library_hours_gelman_week" class="block block-library-hours">
                          
                            <div class="inner clearfix gutter">
                          
                              <div class="inner-wrapper">
                          
                                <div class="inner-inner">
                          
                                                  <div class="content clearfix">
                          
                                  
                          
                            <div class="container" itemscope="" itemtype="http://schema.org/Library">
                          
                              <table>
                          
                                <tbody><tr>
                          
                                  <td colspan="7">
                          
                                  <time itemprop="openingHours" datetime="Mo,Su"></time>
                          
                                  <i class="fa fa-clock-o" aria-hidden="true"></i> Gelman Hours for GWorld Holders
                          
                                  </td>
                          
                                </tr>
                          
                                <tr>
                          
                                  <td>TODAY <span class="sr-only">Monday</span></td>
                          
                                  <td>Tomorrow <span class="sr-only">Tuesday</span></td>
                          
                                  <td>Wednesday</td>
                          
                                  <td>Thursday</td>
                          
                                  <td>Friday</td>
                          
                                  <td>Saturday</td>
                          
                                  <td>Sunday</td>
                          
                                </tr>
                          
                                <tr>
                          
                                  <td>24 hours</td>
                          
                                  <td>24 hours</td>
                          
                                  <td>24 hours</td>
                          
                                  <td>24 hours</td>
                          
                                  <td>24 hours</td>
                          
                                  <td>24 hours</td>
                          
                                  <td>24 hours</td>
                          
                                </tr>
                          
                                <tr>
                          
                                  <td colspan="7">
                          
                                  <a href="http://library.gwu.edu/hours/visitors">Visitor Hours</a> • <a href="http://library.gwu.edu/hours">Complete Hours Information</a> • <a href="http://library.gwu.edu/hours/closures">Holidays and Closures</a>
                          
                                  </td>
                          
                                </tr><tr>
                          
                              </tr></tbody></table>
                          
                              <div class="handheld">
                          
                                <div class="handheld-hours"><i class="fa fa-clock-o" aria-hidden="true"></i> GELMAN: 24 hours</div>
                          
                                <div class="handheld-hours-links"><a href="http://library.gwu.edu/hours">Complete Hours Information</a></div>
                          
                              </div>
                          
                            </div>      </div>
                          
                                </div><!-- /inner-inner -->
                          
                              </div><!-- /inner-wrapper -->
                          
                            </div><!-- /block-inner -->
                          
                          </div><!-- /block -->  </div>
                          
                          
                          
                              </div>
                          
                              
                          
                            </div>
                          
                          </div>



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

<?php 
//echo "<h1>the nav is below this</h1>";
//include "lai-libnav.php"; 
include 'libnav.php';
//echo "<h1>above this</h1>";
?>
		

	</div>

</div>

	

  

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
