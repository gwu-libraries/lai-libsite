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


<?php if(!drupal_is_front_page()): ?>

<style type="text/css">

  #hero {

    position: relative;

	max-width: 1080px;

	margin: auto;

	visibility: visible;

  }

  @media screen and (max-width: 1080px) {

    #hero {

	  width: 100%;

	}

  }

  #hero img {

    width: 100%;

  }

  @media screen and (max-width: 640px) {

     #hero img {

	   display: none;

	 }

  }

  .is-branch #hero {

    border-right: 1px solid rgb(200,177,139);

  }

  #internal-search {

    position: absolute;

	top: auto;

	left: 0;

	bottom: 100%;

	min-height: 3rem;

	line-height: 3rem;

	z-index: 50000;

	padding: 0 .5em;

  }

  #internal-search:hover {

    background-color: #007FB7;

  }

  @media screen and (max-width: 1080px) {

    #internal-search {

	  bottom: auto;

	  top: 0;

	  position: static;

	  background-color: #004065;

	}

  }

  #internal-search form select, #internal-search form input {

    color: #333;

	padding: .75em;

	font-size: 1em;

  }

  #internal-search form input[type=image] {

    padding-top: 0;

	padding-bottom: 0;

  }

  /*

  #internal-search input[type=text] {

    width: 300px;

  }*/

  @media screen and (max-width: 960px) {

    #internal-search input[type=text] {

/*	  width: 450px; */

	}

  }

  @media screen and (max-width: 640px) {

    #internal-search input[type=text] {

	  width: calc(100% - 120px);

	}

  }

  #internal-search-dropdown, #internal-search-dropdown li {

    margin: 0;

	padding: 0;

	display: inline-block;

	background-color: #0096d6;

	color: #fff;

	text-align: left;

	line-height: normal;

  }

  #internal-search-dropdown {

    position: relative;

	cursor: pointer;

  }

  #internal-search-dropdown ul {

    position: absolute;

	display: none;

	top: 100%;

	margin: 0;

	padding: 0;

	left: 0;

  }

  #internal-search-dropdown:hover ul {

    display: block;

  }

  #internal-search-dropdown li {

    padding: .75em 1em;

  }

  #internal-search-dropdown li div {

    width: 350px;

    font-size: .85em;

    color: #000;

	margin-top: .5em;

  }

  #internal-search-dropdown li div a {

    color: #000;

	text-decoration: underline;

  }

  #internal-search-dropdown li:not(:first-child) {

    border-top: 1px dotted #007FB7;

  }

  #internal-search-dropdown  ul li:hover {

    background-color: #007FB7;

  }

  .current-search {

	display: block;

	padding: .75em 1em;

  }

  .current-search::after {

    content: " ▼";

  }

  .current-search-text {

    display: none;

  }

  @media screen and (max-width: 960px) {

    #current-search-text-a {

      display: inline;

    }

  }

  @media screen and (max-width: 640px) {

    #current-search-text-a {

	  display: none;

	}

  }

  #branch-name {

     position: absolute;

	 bottom: 0;

	 color: #fff;

	 font-size: 1.3em;

	 text-shadow: 1px 1px 10px rgba(0,0,0,0.5);

	 border: 1px solid rgb(200,177,139);

	 background-color: rgba(200,177,139,.85);

	 right: 0;

	 padding: .5em 1em;

	 width: 100%;

	 box-sizing: border-box;

	 text-align: right;

  }

  @media screen and (max-width: 1080px) {

    #branch-name {

      bottom: 3rem;

	  font-size: 1em;

	}

  }

  @media screen and (max-width: 640px) {

    #branch-name {

/*	   bottom: calc(100% + 6em); */

	}

  }  

  
/* 

  .center-content {

    max-width: 1080px;

  }

  .page-node-1 .primary-content-363 {

    max-width: 1080px;

	width: auto;

  }

  #hero {

    position: relative;

  }

  #home-search {

    position: absolute;

	top: 0;

	left: 0;

	text-align: center;

	width: 600px;

	left: 240px;

	top: 40px;

  }

  @media screen and (max-width: 1080px) {

    #home-search {

	  width: 100%;

	  left: 0;

	  top: 30px;

	}

	#home-search form {

	  width: 640px;

	  margin: auto;

	}

  }

  @media screen and (max-width: 840px) {

    #home-search {

	  top: 20px;

	}

  }

  @media screen and (max-width: 720px) {

    #home-search {

	  padding-top: 1em;

	  top: 30px;

	}

	#home-search form {

	  width: 450px;

	}

  }

  @media screen and (max-width: 640px) {

    #home-search {

	  position: static;

	}

    #home-search form {

	  width: 90%;

	}

	#hero {

	  min-height: 100px;

	  width: auto !important;

	}

	#hero-image {

	  display: none;

	}

  }

  #home-search, #home-search form input[type=submit], #home-search-explanation, #home-search h3, #home-search a {

	color: #fff;

  }

*/

  #internal-search a {

    color: #fff;

  }

/*

  #home-search form select, #home-search form input {

    color: #333;

	padding: .75em;

	font-size: 1em;

	-moz-appearance: menulist;

  }

  #search-form {

    display: flex;

  }

  #search-form input[type=text] {

	flex: 2;

  }

  #hero h3, #home-search-explanation {

    text-shadow: 0 0 5px rgba(0,0,0,1);

  }

  #hero h3 {

    font-size: 1.7em;

	font-weight: bold;

	margin-bottom: 1.5em;

  }

  @media screen and (max-width: 840px) {

	#hero h3 {

	  margin-bottom: 1em;

	}

  }

  @media screen and (max-width: 720px) {

    #hero h3 {

	  display: none;

	}

  }

  #home-search-explanation {

    margin-top: 1.5em;

  }

  @media screen and (max-width: 640px) {

	#home-search-explanation {

	  text-shadow: none;

	  color: #333;

	  margin: 0;

	  padding: 0.5em;

	}

  }

  #home-search-explanation a {

    text-decoration: underline;

  }

  #hero-image {

    width: 100%;

  }

*/

  #search-form {

    display: flex;

	align-items: center;

  }

  #internal-search #search-form {

	height: 3rem;

  }

  #search-form input[type=text] {

	flex: 2;

  }

  #internal-search #search-form input[type=text] {

	max-width: 100%; /* to override existing style */

  }

  #internal-search #search-form {

    width: 500px;

  }

  @media screen and (max-width: 1080px) {

    #internal-search #search-form {

	  width: 550px;

    }

  }

  @media screen and (max-width: 640px) {

    #internal-search #search-form {

	  width: 100%;

	}

  }

  #catalog-options, #journals-options {

    display: none;

  }

  #search-dropdown, #search-dropdown li {

    margin: 0;

	padding: 0;

	display: block;

	background-color: #0096d6;

	color: #fff;

	text-align: left;

  }

  #search-dropdown {

    position: relative;

	cursor: pointer;

  }

  #search-dropdown ul {

    position: absolute;

	display: none;

	top: 100%;

	margin: 0;

	padding: 0;

  }

  #search-dropdown li {

    padding: .75em 1em;

  }

  #search-dropdown a {

    color: #fff;

  }

  #search-dropdown a:hover {

    text-decoration: none;

  }

  .search-label {

    font-weight: bold;

  }

  .search-description {

    width: 350px;

    font-size: .85em;

    color: rgba(255,255,255,.9);

	margin-top: .5em;

  }

  #search-dropdown li:not(:first-child) {

    border-top: 1px dotted #007FB7;

  }

  #search-dropdown  ul li:hover {

    background-color: #007FB7;

  }

  #current-search-text {

	display: block;

	padding: .75em 2.5em .75em 1em;

  }

  #internal-search #current-search-text a {

    width: 0;

	overflow: hidden;

	display: block;

	height: 1.4em;

  }

  @media screen and (max-width: 1080px) {

    #internal-search #current-search-text a {

	  width: auto;

	  overflow: visible;

	  height: auto;

	  line-height: normal;

	}

  }

  #current-search-text::after {

    content: "";

	width: 0;

	height: 0;

	border-style: solid;

	border-width: 10.4px 6px 0 6px;

	border-color: #fff transparent transparent transparent;

	position: absolute;

	right: 1em;

	bottom: calc(50% - 6px);

  }

  

  </style>




<div id="internal-search">

	  <form id="search-form">

		<div id="search-dropdown">

		  <div id="current-search-text"><a href="#" aria-haspopup="true" aria-controls="home-search-dropdown-ul" id="current-search-text-a">Search All</a></div>

		  <ul id="home-search-dropdown-ul" aria-labelledby="current-search-text-a">

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

		<input type="image" src="../library_files/search.png" alt="Submit search"/>

	  </form>

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
