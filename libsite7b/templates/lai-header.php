<div id="container" class="three-six-three logo-slogan">

	<div id="skip">

	  <a href="#maincontent">Skip to Main Content</a>

	  <a href="#secondary-nav">Skip to Main Menu</a>

	</div>

</div>



<!-- Lib Header -->  





<!-- begin topheader -->





<style type="text/css">

  #topheader-container {

    background-image: none;

	background-color: transparent;

	height: 120px;

	margin-bottom: 0;

  }

  @media screen and (max-width: 960px) {

    #topheader-container {

	  margin-bottom: 0;

	}

  }

  #topheader-content {

	position: relative;

	max-width: 1080px;

  }

  #gwlogo-topheader, #gwlogo-topheader img {

    width: 250px;

  }

  #lai-division {

    position: absolute;

	top: 90px;

	left: 125px;

  }

  @media screen and (max-width: 960px) {

    #lai-division {

      left: 130px;

	}

  }

</style>





<div id="topheader-container">

  <div id="topheader-content">



<!--

	    <div id="gwlogo-topheader"><a href="<?php print $front_page; ?>" aria-label="GW Libraries home page"><img src="home_files/gw_iddol_libraries_wht_rev.png" alt="logo: The George Washington University Libraries" width="199" height="90"><span class="sr-only">GW Libraries home page</span></a>

	    </div>

		-->

		<div id="gwlogo-topheader"><a href="<?php print $front_page; ?>" aria-label="GW Libraries home page"><img src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/logos/gw_iddol_libraries_1cs_pos.png" alt="logo: The George Washington University Libraries" width="199" height="90"><span class="sr-only">GW Libraries home page</span></a>

	    </div>

		<p id="lai-division">

		A division of <a href="https://lai.gwu.edu">Libraries and Academic Innovation</a>

		</p>

		

		<style type="text/css">

		<!-- MAXS: Just inverting #fff and #005581 here -->

		/* Header hours block (week view) from gelmanWeek(). */



#header-hours {

  float: right;

  font-family: helvetica, arial;

  font-size: .7em;

}

#header-hours .handheld { display: none; }

#header-hours .header-hours-error { margin-top: 1em; color: #fff; }

#header-hours table {

  border-spacing: 0;

  float: right;

}

#header-hours table td {

  padding: .3em .4em;

  margin: 0;

  border-left: 4px solid #fff;

  max-width: 52px;

  white-space: initial;

}

#header-hours table tr:first-child {

  background-color: #fff;

  color: #005581;

}

#header-hours table tr:first-child td {

  padding-left: 0;

  font-size: 1.1em;

}

#header-hours table tr:nth-child(2) {

  background-color: #005581;

  color: #fff;

}

#header-hours table tr:nth-child(3) {

  color: #005581;

}

#header-hours table tr:nth-child(4) td {

  color: #005581 !important;

  text-align: right;

  padding-right: 0;

  padding-top: .4em;

  font-size: 1.1em;

  padding-bottom: 0;

}

#header-hours table tr:nth-child(4) td a {

  color: #005581;

  text-decoration: none;

}

#header-hours table tr:nth-child(4) td a:hover {

  text-decoration: underline;

}

#header-hours table tr:nth-child(2) td:first-child, #header-hours table tr:nth-child(3) td:first-child {

  background-color: #005581;

  color: #fff;

  padding-left: .6em;

  font-weight: bold;

}

#header-hours table tr:first-child td:first-child {

}

#header-hours table tr:nth-child(3) td:first-child {

}

#header-hours .container {

  padding:7px 0;

}



/* Styling for Gelman hours box (today's hours) block. */



#block-library_hours-library_hours_all { margin-top: -3em; }

.hoursText { margin-bottom: 0.6em; }

.hoursToday { font-weight: bold; }

.hoursDay { font-weight: bold; }

.gelman-hours { 

  margin-top: 1em;

  margin-bottom: .2em; 

}

.gelman-hours-day {

    display: inline-block;

    margin-bottom: .3em;

    margin-top: .2em;

}

.gelman-hours-day-suffix { display: none; }

.gelman-hours-time { font-size: 1.2em; }

.library-hours-last { margin-top: 1em; }



/* Styling for main Hours page block. */



.equalHMRWrap {

  /*justify-content: space-between;*/

  flex-wrap: wrap;

}

.eqWrap {

  display: flex;

}

.eq {

  padding: 10px;

  border: 1px solid #ccc;

  border-left: 0;

}

.headHMR .eq {

  padding-bottom: 0;  

  border: none;

}

.headTitleHMR.eq { padding-left: 0; }

.eq:first-child {

  background: #fff;

  border-left: 1px solid #ccc;

  color: #005581;

  border: 1px solid #fff;

}

.headHMR .eq:first-child {

  color: #333;

  background: #005581;

  border: none;

}

.eq:nth-of-type(odd) {

  /*background: yellow;*/

}

.eq:nth-of-type(even) {

  /*background: lightblue;*/

}

.paddingBlock {

  padding: 0;

}

.paddingBlock h3 { 

  font-weight: bold; 

  margin: 0; 

}

.equalHMR {

  width: 12%;

  margin-bottom: 2%;

}

.headHMR .headTitleHMR {

  min-width: 30%;

  margin-bottom: 0;

} 

.headHMR .headTextHMR {

  min-width: 56%;

  margin-bottom: 0;

}



.hours-joiner { font-size: 90%; }



/* MEDIA QUERIES */



@media screen and (max-width:965px) {

  #topheader-container #header-hours {

    margin-right: .5em;

    display: inline-block;

    overflow: hidden;

    max-width: 62%;

    white-space: nowrap;

  }

}



@media screen and (max-width:950px) {

  .equalHMR { width: 11%; }

}



@media screen and (max-width:850px) {

  .headHMR .headTitleHMR {

    width: 90%;

  }

  .headHMR .headTextHMR {

    padding-left: 0;

    padding-top: 1px;

  }

}



@media screen and (max-width:750px) {

  .equalHMR { width: 10%; }

}



@media screen and (max-width:720px) {

  #topheader-container #header-hours { height: 50px; }

  #header-hours table { margin-bottom: 0; }

  #header-hours table tr:first-child { display: none; }

  #header-hours .container { padding: 7px 0 0 !important; }

  #header-hours table { display: none; }

  #header-hours .handheld { display: inline-block }

  #header-hours .handheld {

    display: inline-block;

    margin-right: 4px;

  }

  #header-hours .handheld > * {

    color: #005581;

    display: block;

  }

  #header-hours .handheld-hours { font-size: 1.4em; margin-top: 4px; }

  #header-hours .handheld-hours-links { font-size: 1.2em; margin-top: 6px; text-align: right; }

  #header-hours .handheld-hours-links a { color: #fff; text-decoration: none; font-style: italic; }

  #header-hours .handheld-hours-links a:hover { text-decoration: underline; }

}



@media screen and (max-width:640px) {

  .equalHMR { width: 21%; }

  .eq { padding: 6px; }

  .eq:nth-child(5) { border-left: 1px solid #ccc; }

  .paddingBlock h3 { margin-top: 0.5em; }

}



@media screen and (max-width:360px) {

  #topheader-container #header-hours { max-width: 50%; }

}





		</style>

		

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

        <td>7:00AM - 6:00PM</td>

        <td>7:00AM - 6:00PM</td>

        <td>7:00AM - 6:00PM</td>

        <td>7:00AM - 6:00PM</td>

        <td>(closed)</td>

        <td>(closed)</td>

        <td>7:00AM - 6:00PM</td>

      </tr>

      <tr>

        <td colspan="7">

        <a href="<?php print $front_page; ?>hours/visitors">Visitor Hours</a> • <a href="<?php print $front_page; ?>hours">Complete Hours Information</a> • <a href="<?php print $front_page; ?>hours/closures">Holidays and Closures</a>

        </td>

      </tr><tr>

    </tr></tbody></table>

    <div class="handheld">

      <div class="handheld-hours"><i class="fa fa-clock-o" aria-hidden="true"></i> GELMAN: 24 hours</div>

      <div class="handheld-hours-links"><a href="<?php print $front_page; ?>hours">Complete Hours Information</a></div>

    </div>

  </div>      </div>

      </div><!-- /inner-inner -->

	  </div><!-- /inner-wrapper -->

  </div><!-- /block-inner -->

</div><!-- /block -->  </div>

  <!-- hours grid html will be replaced by block (generated by Hours module) -->

  <!--<div class="container">

    <table>

      <tr>

        <td colspan="7">

        Hours for GWorld Holders

        </td>

      </tr>

      <tr>

        <td>TODAY</td>

        <td>SAT</td>

        <td>SUN</td>

        <td>MON</td>

        <td>TUE</td>

        <td>WED</td>

        <td>THU</td>

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

        <a href="/hours/visitors">Visitor Hours</a> &bull; <a href="/hours">Complete Hours Information</a> &bull; <a href="/hours/closures">Holidays and Closures</a>

        </td>

      <tr>

    </table>

    <div class="handheld">

      <div class="handheld-hours">GELMAN: Open 24 hours</div>

      <div class="handheld-hours-links"><a href="/hours">Complete Hours Information</a></div>

    </div>

  </div>-->



    </div>

    

  </div>

</div>



<!-- begin library unit section header -->

<div id="libheader-front" style="display: none;">

<div class="sr-only">

                <a href="<?php print $front_page; ?>about" itemprop="copyrightNotice">

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

						<a href="<?php print $front_page; ?>">Estelle<span class="three-libs-smalltype"> and </span>Melvin Gelman Library</a>&nbsp;•

						<a href="<?php print $front_page; ?>eckles/">Eckles Library<span class="three-libs-smalltype"> at the </span>Mount Vernon Campus</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php print $front_page; ?>virginia/">Virginia Science<span class="three-libs-smalltype"> and </span>Technology Campus Library</a>

						</div>			

					</div><!-- closes <div class="banner-container">-->

				</div><!-- closes <div id="innerBannerDiv"> -->

			</section>

		

		</div><!-- closes library specific div set in opening php-->



		<!-- campus libs -->

		<!--

		<div id="three-libs-container" class="">

                        <div id="three-libs"><span id="lib-left"> <a href="<?php print $front_page; ?>">Estelle<span class="three-libs-smalltype"> and </span>Melvin Gelman Library</a></span><span id="lib-center"><a href="<?php print $front_page; ?>eckles/">Eckles Library<span class="three-libs-smalltype"> at the </span>Mount Vernon Campus</a></span><span id="lib-right"><a href="<?php print $front_page; ?>virginia/">Virginia Science<span class="three-libs-smalltype"> and </span>Technology Campus Library</a></span></div>

                        </div>

						-->



<!-- Lib Nav -->

	<div class="limiter">

		<div id="local-header">		

		<!--

			<div id="campuslibs-mobile">

			

				<div id="social-links-mobile" class="mobile-show">

					<div>

											<a title="follow Gelman Library on Twitter" href="https://twitter.com/gelmanlibrary">

                                                  <i class="fa fa-twitter"></i><span class="sr-only">follow Gelman Library on Twitter</span>

						</a>

						<a title="follow Gelman Library on Facebook" href="https://www.facebook.com/gelmanlibrary">

						  <i class="fa fa-facebook-square"></i><span class="sr-only">follow Gelman Library in Facebook</span>

						</a>

											

					</div>

				</div>			

			

	                                <a href="<?php print $front_page; ?>">Gelman</a><span class="seperator-bull">•</span><a href="<?php print $front_page; ?>eckles">Eckles</a><span class="seperator-bull">•</span><a href="<?php print $front_page; ?>virginia">Virginia</a>

	

					<div id="askalib-720">

							<a href="<?php print $front_page; ?>help/reference/ask-us" onclick="ga('send', 'event', 'button', 'ask us', 'header-720');"><img src="home_files/ask-us-4.png" alt="link to Ask Us help page" width="100" height="27"><span class="sr-only">Ask A Librarian</span></a>

					</div>

                                        <div id="askalib-720-show">

                                          <a href="<?php print $front_page; ?>help/reference/ask-us" onclick="ga('send', 'event', 'button', 'ask us', 'header-720');"><i class="fa fa-question-circle"></i></a>

                                        </div>

					<div id="aladin-720">

							<a href="https://mylibrary.wrlc.org/" onclick="ga('send', 'event', 'button', 'my library', 'header-720');" target="_blank"><img src="home_files/my-account-3.png" alt="link to My Library account" width="100" height="27"><span class="sr-only">My Library Account</span></a>

					</div>

                                        <div id="aladin-720-show">

                                          <a href="https://mylibrary.wrlc.org/" onclick="ga('send', 'event', 'button', 'my library', 'header-720');"><i class="fa fa-bookmark"></i></a>

                                        </div>

	

			</div>

			-->

			

			<div id="search-menu-mobile" style="display: none;"><!-- main search located in libheader.php -->

				<!-- summon single search -->

				<!--<form action="http://gw.summon.serialssolutions.com/search?" method="get" target="_blank" onSubmit="ga('send','event','single-search','http://gw.summon.serialssolutions.com/search','ArticlesPlus (Home handheld)');">

					<label for='mobile-search'>enter your search terms</label>

					<input type="text" id="mobile-search" name="s.q" value="" placeholder=" search ArticlesPlus for books & articles" />

					<input type="hidden" value="ContentType,Newspaper Article,t" name="s.fvf[]" />					

					<input type="submit" value="go" />

				</form>-->

				<!-- SEARCH ALL single search -->

				<form action="/search-all" method="get" onsubmit="ga('send','event','single-search','/search-all','Single Search (handheld)');">

					<label for="mobile-search">enter your search terms</label>

					<input id="mobile-search" name="query" style="padding-left:.5em;" placeholder="search everything (catalogs and website)" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="100" type="text">					

					<input value="go" type="submit">

				</form>

				<div style="margin-top:.4em;"><a href="http://gw.summon.serialssolutions.com/">ArticlesPlus</a> • <a href="http://findit.library.gwu.edu/catalog/" target="_blank">Catalog</a> • <a href="http://findit.library.gwu.edu/?L=UZ4UG4LZ9G&amp;" target="_blank">Journals</a> • <a href="http://refuniv.odyssi.com/cgi-bin/phtml?newsearch.htm" target="_blank">Reference</a> • <a href="<?php print $front_page; ?>search">Site</a>

				</div>

			</div>		



			

			<style type="text/css">

			  #secondary-nav {

			    width: 100%;

				background-color: #004065;

				height: auto;

				margin: 0;

			  }

			  #secondary-nav > ul {

			    max-width: 1080px;

				margin: auto;

				text-align: right;

			  }

			  @media screen and (max-width: 960px) {

			    #secondary-nav >  ul {

				  width: auto;

			    }

			  }

			  @media screen and (max-width: 840px) {

			    #secondary-nav ul.menu {

				  background-color: #004065;

				  border-top-width: 0;

				}

			  }

			  .nav-item {

			    text-align: left;

				background-color: transparent;

				min-height: 3rem;

				line-height: 3em;

				position: relative;

				display: inline-block;

			  }

			  #nav-hours {

			    display: none;

			  }

			  .nav-item > a.open, .nav-item > a:focus {

			    background-color: #0096d6;

				border-bottom-color: #0096d6;

				border-bottom-width: 0;

			  }

			  .nav-menu li a {

			    padding: 0 .75rem;

			    color: #fff;

				text-transform: none;

				font-size: 1em;

				font-weight: normal;

				min-height: 3rem;

				line-height: 3em;

			  }

			  .nav-menu > li:not(:first-child):before {

			    content: "|";

				color: #688A9C;

				text-align: center;

				display: inline-block;

			  }

			  @media screen and (max-width: 640px) {

			    .nav-menu > li:not(:first-child):before {

				  content: "";

				  display: none;

				}

				#secondary-nav ul.menu li {

				  width: calc(33% - .5em);

				  background-color: #0096d6;

				  display: inline-block;

				  float: left;

				  min-height: 0;

				  line-height: normal;

				  margin: 0 .5em .5em 0 !important;

				}

				#secondary-nav ul.menu li a {

				  min-height: 0;

				  line-height: normal;

				  padding: .5em;

				}

			  }

			  .sub-nav {

			    background-color: #0096d6;

				border-width: 0;

				box-shadow: #333 2px 2px 10px;

				margin-top: 0;

				top: 100%;

				right: 0;

				white-space: nowrap;

			  }

			  .nav-item:first-child .sub-nav {

			    right: auto;

				left: 0;

			  }

			  .sub-nav * {

				color: #fff;

			  }

			  .sub-nav a {

			    text-decoration: none;

				line-height: normal !important;

				height: normal !important;

			  }

			  .sub-nav li:hover{

			    background-color: #004065;

			  }

			  .sub-menu-group .leaf-section-title:hover {

			    background-color: #0096d6;

			  }

			  #secondary-nav ul li.expanded {

			    border-width: 0;

				margin: 0;

				height: auto;

			  }

			</style>


			

			<nav id="secondary-nav" role="navigation"><!-- this is gw libraries 'primary nav' -->

				<!-- handheld ios button behavior is controlled in jsbottom -->						

				<ul class="menu nav-menu"><!-- determine campus -->

				



	        <li class="first-prim expanded nav-item" id="nav-research">

	          <a href="<?php print $front_page; ?>research" onmouseover="ga('send', 'event', 'primary-nav', '/primary-nav/gelman/research-hover', {'nonInteraction': 1});" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research/main');" id="accessible-megamenu-1481550812558-1" aria-haspopup="true" aria-controls="accessible-megamenu-1481550812558-2" aria-expanded="false">Research</a>

	          <div class="sub-nav research-nav" id="accessible-megamenu-1481550812558-2" role="group" aria-expanded="false" aria-hidden="true" aria-labelledby="accessible-megamenu-1481550812558-1">

	          <ul class="sub-menu-group">

							<li class="touch-show-nav touch-nav-main-link"><a href="<?php print $front_page; ?>research">RESEARCH</a></li>

							<li class="first leaf leaf-section-title">Find</li>

							<li class="leaf"><a href="http://findit.library.gwu.edu/catalog/" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research/books-media');">Books &amp; Media</a></li>

							<li class="leaf"><a href="http://findit.library.gwu.edu/" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research/journals');">Journals</a><span class="leaf-extended"> | <a href="<?php print $front_page; ?>howdoi/findarticlecitation" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research/journals-tut');">Tutorial</a></span></li>

							<li class="leaf"><a href="http://libguides.gwu.edu/databases" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research/subject-db');">Subject Databases</a><span class="leaf-extended"> | <a href="<?php print $front_page; ?>howdoi/findarticlesbytopic" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research/subject-db-tut');">Tutorial</a></span></li>

							<li class="leaf"><a href="http://gw.summon.serialssolutions.com/" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research/articlesplus');">ArticlesPlus</a><span class="leaf-extended"> | <a href="<?php print $front_page; ?>howdoi/aboutarticlesplus" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research/articlesplus-tut');">Tutorial</a></span></li>

							<li class="leaf"><a href="http://catalog.wrlc.org/" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research/classic-cat');">Classic Catalog</a></li>

                                                        <li class="leaf"><a href="https://scholarspace.library.gwu.edu/" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research/scholarspace');">GW ScholarSpace</a></li>





							<li class="first leaf leaf-section-title">Research Guides</li>

							<li class="leaf"><a href="http://libguides.gwu.edu/" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research/subject');">Subjects: </a><span class="leaf-extended"><a href="http://libguides.gwu.edu/content.php?pid=12823" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research/subject/art');">Art</a> | <a href="http://libguides.gwu.edu/content.php?pid=17054" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research/subject/psych');">Psychology</a> | <a href="http://libguides.gwu.edu/" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research/subject/more');">More...</a></span></li>

							<li class="leaf"><a href="http://libguides.gwu.edu/" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research/topic');">Topics: </a><span class="leaf-extended"><a href="http://libguides.gwu.edu/content.php?pid=12069" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research/topic/industry');">Industry</a> | <a href="http://libguides.gwu.edu/content.php?pid=112501" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research/topic/grants');">Grants</a> | <a href="http://libguides.gwu.edu/" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research/topic/more');">More...</a></span></li>	

							<li class="leaf"><a href="http://libguides.gwu.edu/" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research/tools');">Tools: </a><span class="leaf-extended"><a href="http://libguides.gwu.edu/content.php?pid=23115" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research/tools/refworks');">RefWorks</a> | <a href="http://libguides.gwu.edu/content.php?pid=8881" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research/tools/citations');">Citation Styles</a> | <a href="http://libguides.gwu.edu/" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research/tools/more');">More...</a></span></li>

							<li class="leaf"><a href="<?php print $front_page; ?>howdoi" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research/guides/howdoi');">How Do I? (Tutorials)</a></li>						

							

							<li class="leaf leaf-section-title">Get Help</li>

							<li class="leaf"><a href="<?php print $front_page; ?>help/reference/ask-us" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research/ask');">Ask A Librarian</a></li>

							<li class="leaf"><a href="https://gwu.mywconline.net/" onclick="ga('send','event','primary-nav','/primary-nav/gelman/wconline');">Research Consultation</a></li>

	            <li class="leaf"><a href="<?php print $front_page; ?>reference/directory" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research-staff');">Research Staff</a></li>

							<li class="leaf"><a href="<?php print $front_page; ?>howdoi" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research/help/howdoi');">How Do I? (Tutorials)</a></li>					

                                                        <li class="leaf"><a href="https://undergraduate.research.gwu.edu/" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research/help/cufr');">Center for Undergraduate Fellowships &amp; Research</a></li>                              

					  </ul>

					  </div>

					</li>

												

					<li class="expanded nav-item" id="nav-collections">

					  <a href="<?php print $front_page; ?>collections" onmouseover="ga('send', 'event', 'primary-nav', '/primary-nav/gelman/collections-hover', {'nonInteraction': 1});" onclick="ga('send','event','primary-nav','/primary-nav/gelman/collections/main');" id="accessible-megamenu-1481550812561-3" aria-haspopup="true" aria-controls="accessible-megamenu-1481550812561-4" aria-expanded="false">Collections</a>

					  <div class="sub-nav" id="accessible-megamenu-1481550812561-4" role="group" aria-expanded="false" aria-hidden="true" aria-labelledby="accessible-megamenu-1481550812561-3">

						<ul class="sub-menu-group">

							<li class="touch-show-nav touch-nav-main-link"><a href="<?php print $front_page; ?>collections">COLLECTIONS</a></li>

							<li class="first leaf"><a href="<?php print $front_page; ?>scrc" onclick="ga('send','event','primary-nav','/primary-nav/gelman/scrc');">Special Collections Research Center</a></li>

							<li class="leaf"><a href="<?php print $front_page; ?>grc" onclick="ga('send','event','primary-nav','/primary-nav/gelman/collections/grc');">Global Resources Center</a></li>

							<li class="leaf"><a style="text-transform:none;" href="<?php print $front_page; ?>art-design" onclick="ga('send','event','primary-nav','/primary-nav/gelman/art-design');">Art &amp; Design Collection from the Corcoran</a></li>

							<li class="leaf"><a href="http://teamstersarchives.gwu.edu/" onclick="ga('send','event','primary-nav','/primary-nav/gelman/collections/teamstersarchives');">Teamsters Labor History Research Center</a></li>

							<li class="leaf"><a href="<?php print $front_page; ?>scrc/university-archives" onclick="ga('send','event','primary-nav','/primary-nav/gelman/scrc/university-archives');">University Archives</a></li>

							<li class="leaf"><a href="<?php print $front_page; ?>collections/kiev" onclick="ga('send','event','primary-nav','/primary-nav/gelman/collections/kiev');">Kiev Judaica Collection</a></li>

							<li class="leaf"><a href="<?php print $front_page; ?>churchillcenter" onclick="ga('send','event','primary-nav','/primary-nav/gelman/collections/churchill');">National Churchill Library &amp; Center</a></li>

							<li class="leaf"><a href="<?php print $front_page; ?>collections/media-resources-center" onclick="ga('send','event','primary-nav','/primary-nav/gelman/collections/media');">Media</a></li>

							<li class="leaf"><a href="<?php print $front_page; ?>collections/collection-development-librarians" onclick="ga('send','event','primary-nav','/primary-nav/gelman/collections/collection-development-librarians');">Collection Development Librarians</a></li>

							<li class="last leaf"><a href="<?php print $front_page; ?>collections" onclick="ga('send','event','primary-nav','/primary-nav/gelman/collections/more');">(more...)</a></li>

						</ul>

						</div>

					</li>								

		

					<li class="expanded nav-item" id="nav-services">

					  <a href="<?php print $front_page; ?>services" onmouseover="ga('send', 'event', 'primary-nav', '/primary-nav/gelman/services-hover', {'nonInteraction': 1});" onclick="ga('send','event','primary-nav','/primary-nav/gelman/services/main');" id="accessible-megamenu-1481550812564-5" aria-haspopup="true" aria-controls="accessible-megamenu-1481550812565-6" aria-expanded="false" class="">Library Services</a>

					  <div class="sub-nav" id="accessible-megamenu-1481550812565-6" role="group" aria-expanded="false" aria-hidden="true" aria-labelledby="accessible-megamenu-1481550812564-5">

						<ul class="sub-menu-group">

							<li class="touch-show-nav touch-nav-main-link"><a href="<?php print $front_page; ?>services">LIBRARY SERVICES</a></li>

							<li class="first leaf"><a href="https://writingcenter.gwu.edu/" onclick="ga('send', 'event', 'primary-nav', '/primary-nav/gelman/services/writing-center');">Writing Center</a>

							</li><li class="leaf"><a href="<?php print $front_page; ?>services/computers-wireless" onclick="ga('send', 'event', 'primary-nav', '/primary-nav/gelman/services/computers-wireless');">Computers &amp; Wireless</a></li>

							<li class="leaf"><a href="http://rooms.library.gwu.edu/" onclick="ga('send','event','primary-nav','/primary-nav/gelman/services/study-rooms');">Study Room Reservations</a></li>

							<!--<li class='leaf'><a href='/' onClick="ga('send','event','primary-nav','/primary-nav/gelman/services/account-help');">Account Help</a></li>-->

							<li class="leaf"><a href="<?php print $front_page; ?>services/borrowing-renewing" onclick="ga('send','event','primary-nav','/primary-nav/gelman/services/borrow-renew');">Borrow &amp; Renew</a></li>

							<li class="leaf"><a href="<?php print $front_page; ?>services/reserves" onclick="ga('send','event','primary-nav','/primary-nav/gelman/services/course-reserves');">Course Reserves</a></li>

							<li class="leaf"><a href="<?php print $front_page; ?>services/consortium-loan" onclick="ga('send','event','primary-nav','/primary-nav/gelman/services/consortium-loan');">Consortium Loan</a></li>

							<li class="leaf"><a href="<?php print $front_page; ?>etd" onclick="ga('send','event','primary-nav','/primary-nav/gelman/services/etd');">Electronic Dissertations</a></li>

							<li class="leaf"><a href="<?php print $front_page; ?>research/data-services" onclick="ga('send','event','primary-nav','/primary-nav/gelman/research/data-services');">Data Services</a></li>

							<li class="leaf"><a href="<?php print $front_page; ?>services/interlibrary-loan" onclick="ga('send','event','primary-nav','/primary-nav/gelman/services/interlibrary-loan');">Interlibrary Loan</a></li>

							<li class="leaf"><a href="<?php print $front_page; ?>services/library-instruction" onclick="ga('send','event','primary-nav','/primary-nav/gelman/services/instruction');">Library Instruction</a></li>

							<li class="leaf"><a href="<?php print $front_page; ?>contact" onclick="ga('send','event','primary-nav','/primary-nav/gelman/services/contact-us');">Contact Us</a></li>

							<li class="last leaf"><a href="<?php print $front_page; ?>services" onclick="ga('send','event','primary-nav','/primary-nav/gelman/services/more');">(more...)</a></li>

						</ul>

						</div>					

					</li>

						

					<li class="expanded nav-item" id="nav-news">

					  <a href="<?php print $front_page; ?>news-events" onmouseover="ga('send', 'event', 'primary-nav', '/primary-nav/gelman/news-events-hover', {'nonInteraction': 1});" onclick="ga('send','event','primary-nav','/primary-nav/gelman/news-events/main');" id="accessible-megamenu-1481550812566-7" aria-haspopup="true" aria-controls="accessible-megamenu-1481550812566-8" aria-expanded="false">News &amp; Events</a>

					  <div class="sub-nav" id="accessible-megamenu-1481550812566-8" role="group" aria-expanded="false" aria-hidden="true" aria-labelledby="accessible-megamenu-1481550812566-7">

						<ul class="sub-menu-group">

							<li class="touch-show-nav touch-nav-main-link"><a href="<?php print $front_page; ?>news-events">NEWS &amp; EVENTS</a></li>

							<li class="first leaf"><a href="<?php print $front_page; ?>news-events" onclick="ga('send','event','primary-nav','/primary-nav/gelman/news-events/news');">News</a></li>

                                                        <li class="leaf"><a href="<?php print $front_page; ?>news-events/upcoming-events" onclick="ga('send','event','primary-nav','/primary-nav/gelman/news-events/events');">Upcoming Events</a></li>

							<li class="leaf"><a href="<?php print $front_page; ?>news-events/blogs-and-social-media" onclick="ga('send','event','primary-nav','/primary-nav/gelman/news-events/blogs-social');">Blogs and Social Media</a></li>

							<li class="leaf"><a href="<?php print $front_page; ?>news-events/vision" onclick="ga('send','event','primary-nav','/primary-nav/gelman/news-events/vision');">Vision Magazine</a></li>

                                                        <li class="leaf"><a href="http://acadtech.gwu.edu/press-room" onclick="ga('send','event','primary-nav','/primary-nav/gelman/news-events/acadtech-pressroom');">Academic Technologies Press Room</a></li>

						</ul>

						</div>

					</li>

						

					<li class="expanded nav-item" id="nav-about">

					  <a href="<?php print $front_page; ?>about" onmouseover="ga('send', 'event', 'primary-nav', '/primary-nav/gelman/about-hover', {'nonInteraction': 1});" onclick="ga('send','event','primary-nav','/primary-nav/gelman/about/main');" id="accessible-megamenu-1481550812568-9" aria-haspopup="true" aria-controls="accessible-megamenu-1481550812568-10" aria-expanded="false">About</a>

					  <div class="sub-nav" id="accessible-megamenu-1481550812568-10" role="group" aria-expanded="false" aria-hidden="true" aria-labelledby="accessible-megamenu-1481550812568-9">

						<ul class="sub-menu-group">

						  <li class="touch-show-nav touch-nav-main-link"><a href="<?php print $front_page; ?>about">ABOUT GW LIBRARIES</a></li>

							<li class="first leaf"><a href="<?php print $front_page; ?>hours" onclick="ga('send','event','primary-nav','/primary-nav/gelman/about/hours');">Hours</a></li>

							<li class="leaf"><a href="<?php print $front_page; ?>about/facilities/maps" onclick="ga('send','event','primary-nav','/primary-nav/gelman/about/maps-directions');">Maps &amp; Directions</a></li>

							<li class="leaf"><a href="<?php print $front_page; ?>about/organization/jobs" onclick="ga('send','event','primary-nav','/primary-nav/gelman/about/jobs');">Working at GW Libraries</a></li>

							<li class="leaf"><a href="<?php print $front_page; ?>about/staff-directory" onclick="ga('send','event','primary-nav','/primary-nav/gelman/about/directory');">Staff Directory</a></li>

							<li class="leaf"><a href="<?php print $front_page; ?>about/library-departments" onclick="ga('send','event','primary-nav','/primary-nav/gelman/about/departments');">Library Departments</a></li>

							<li class="leaf"><a href="<?php print $front_page; ?>about/entrance-policies" onclick="ga('send','event','primary-nav','/primary-nav/gelman/about/entrance-policies');">Entrance Policies</a></li>

							<li class="leaf"><a href="<?php print $front_page; ?>strategic-plan" onclick="ga('send','event','primary-nav','/primary-nav/gelman/about/strategic-plan');">Vision &amp; Strategic Plan</a></li>

							<li class="leaf"><a href="<?php print $front_page; ?>about/giving" onclick="ga('send','event','primary-nav','/primary-nav/gelman/about/donor-info');">Donor Information</a></li>

							<li class="leaf"><a href="<?php print $front_page; ?>contact" onclick="ga('send','event','primary-nav','/primary-nav/gelman/about/contact-us');">Contact Us</a></li>

							<li class="last leaf"><a href="<?php print $front_page; ?>about" onclick="ga('send','event','primary-nav','/primary-nav/gelman/about/more');">(more...)</a></li>

						</ul>

						</div>

					</li>

						

					<li class="expanded nav-item mobile-show" id="nav-hours">

					  <a href="<?php print $front_page; ?>hours" onclick="ga('send','event','primary-nav','/primary-nav/gelman/handheld/hours');">Hours</a>

					  <div class="sub-nav" id="accessible-megamenu-1481550812568-12" role="group" aria-expanded="false" aria-hidden="true"><!-- empty div for accessibleMegaMenu -->

					  </div>

					</li>

					                    <!-- help buttons for wider views -->

										<!--

                    <li id="askalib" class="nav-item">

                      <a href="<?php print $front_page; ?>help/reference/ask-us" onclick="ga('send', 'event', 'button', 'ask us', 'header-desktop');" id="accessible-megamenu-1481550812572-13"><img src="home_files/ask-us-4.png" alt="link to Ask Us help page" width="100" height="27"></a>

                    </li>

                    <li id="aladin" class="nav-item">

                      <a href="https://mylibrary.wrlc.org/" onclick="ga('send', 'event', 'button', 'my library', 'header');" target="_blank" id="accessible-megamenu-1481550812574-14"><img src="home_files/my-account-3.png" alt="link to My Library account" width="100" height="27"></a>

                    </li>

					-->

				</ul>		

			</nav>

		</div>

	</div>

	

  

<script>document.createElement('main'); //for IE compatibility with semantic elements</script>


i
<main id="maincontent" class="main-container center-content">



  <style type="text/css">

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

	  width: auto !important; /* ? */

	}

	#hero-image {

	  display: none;

	}

  }

  #home-search, #home-search form input[type=submit], #home-search-explanation, #home-search h3, #home-search a, #internal-search a {

	color: #fff;

  }

  #home-search form select, #home-search form input {

    color: #333;

	padding: 1.2em .75em;

	font-size: 1em;

	-moz-appearance: menulist;

  }

  #search-form {

    display: flex;

	align-items: center;

  }

  #search-form input[type=text] {

	flex: 2;

	max-width: 100%;

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

  #internal-search #search-form {

	height: 3rem;

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

  .search-dropdown, .search-dropdown li {

    margin: 0;

	padding: 0;

	display: inline-block;

	background-color: #0096d6;

	color: #fff;

	text-align: left;

  }

  .search-dropdown {

    position: relative;

	cursor: pointer;

  }

  .search-dropdown ul {

    position: absolute;

	display: none;

	top: 100%;

	left: 0;

	margin: 0;

	padding: 0;

  }

  .search-dropdown li {

    padding: .75em 1em;

	margin: 0 !important;

  }

  .search-dropdown a:hover {

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

  .search-dropdown li:not(:first-child) {

    border-top: 1px dotted #007FB7;

  }

  .search-dropdown  ul li:hover {

    background-color: #007FB7;

  }

  .search-dropdown-inner {

	display: block;

	padding: 1.25em 1em;

  }

  .current-search-text {

    padding-right: 1.5em; 

  }

  #internal-search .current-search-text {

    width: 0;

	overflow: hidden;

	display: block;

	height: 1.4em;

  }

  @media screen and (max-width: 1080px) {

    #internal-search .current-search-text {

	  width: auto;

	  overflow: visible;

	  height: auto;

	  line-height: normal;

	}

  }

  .current-search-text::after {

    /* CSS triangle */

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

  

  

  <div id="hero">

    <div id="hero-image">

      <img src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/editorial-bg-23.jpg"/>

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

	    Articles and books, plus library databases, research guides and tutorials. <!-- <a href="#">Tutorial</a>. -->

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

	  jQuery("#search-form input[type=text]").focus();

	}

  </script>

