	<div class="limiter">
		<div id="local-header">	
		
			<div id="campuslibs-mobile">
			
				<div id="social-links-mobile" class="mobile-show">
					<div>
					<?php if ($campus == "none" || $campus == "gelman"): ?>
						<a href="http://twitter.com/gelmanlibrary">
							<img src="<?php print $front_page; ?><?php print drupal_get_path('theme', $themename); ?>/images/icons/icon-twitter.png" alt="Twitter" title="Twitter">
						</a>
						<a href="http://www.facebook.com/gelmanlibrary">
							<img src="<?php print $front_page; ?><?php print drupal_get_path('theme', $themename); ?>/images/icons/icon-fb.png" alt="Facebook" title="Facebook">
						</a>
					<?php elseif ($campus == "eckles"): ?>
						<a href="http://www.facebook.com/EcklesLibrary">
							<img src="<?php print $front_page; ?><?php print drupal_get_path('theme', $themename); ?>/images/icons/icon-fb.png" alt="Facebook" title="Facebook">
						</a>					
					<?php elseif ($campus == "virginia"): ?>
						<a href="http://www.facebook.com/vstcllibrary">
							<img src="<?php print $front_page; ?><?php print drupal_get_path('theme', $themename); ?>/images/icons/icon-fb.png" alt="Facebook" title="Facebook">
						</a>
					<?php endif; ?>						
					</div>
				</div>			
			
				<a href="<?php print $front_page; ?>">Gelman<? if ($campus == 'gelman') print ' Home';?></a> &#8226; <a href="<?php print $front_page; ?>eckles">Eckles<? if ($campus == 'eckles') print ' Home';?></a> &#8226; <a href="<?php print $front_page; ?>virginia">Virginia<? if ($campus == 'virginia') print ' Home';?></a>
				
					<div id="askalib-720">
							<a href="<?php print $front_page; ?>help/reference/ask-a-librarian"><img src="<?php print $front_page; ?><?php print drupal_get_path('theme', $themename); ?>/images/ask-a-librarian-blue-100.png" alt="ask a librarian" /></a>
					</div>
					<div id="aladin-720">
							<a href="https://www.aladin.wrlc.org/Z-WEB/PATPage?req=main"><img src="<?php print $front_page; ?><?php print drupal_get_path('theme', $themename); ?>/images/my-aladin.png" alt="my aladin" /></a>
					</div>
			
			</div>
			
			<div id="search-menu-mobile"><!-- main search located in libheader.php -->
				<form action="http://gw.summon.serialssolutions.com/search?" method="get" target="_blank">
					<input type="text" autocorrect="off" autocapitalize="off" id="mobile-search" name="s.q" value="" placeholder=" search ArticlesPlus for books & articles" />
					<input type="hidden" value="ContentType,Newspaper Article,t" name="s.fvf[]" />					
					<input type="submit" value="go" />
				</form>
			</div>		
		
			<nav id="secondary-nav">
					
				<ul class="menu">

					<!-- buttons -->
										
					<div id="askalib">
							<a href="<?php print $front_page; ?>help/reference/ask-a-librarian"><img src="<?php print $front_page; ?><?php print drupal_get_path('theme', $themename); ?>/images/ask-a-librarian-blue-100.png" alt="ask a librarian" /></a>
					</div>
					<div id="aladin">
							<a href="https://www.aladin.wrlc.org/Z-WEB/PATPage?req=main"><img src="<?php print $front_page; ?><?php print drupal_get_path('theme', $themename); ?>/images/my-aladin.png" alt="my aladin" /></a>
					</div>
					
				<?php
				switch ($campus) {
					case "none";
    				case "gelman":
    				print "

					<li class='first expanded'><div class='touch-hide-nav'><a href='" . $front_page . "research' onMouseover='javascript: pageTracker._trackPageview(&#39;/primary-nav/gelman/research&#39;)' title='Research at GW Libraries'>Research</a></div><div class='touch-show-nav'>Research</div>
					<ul class='menu'>
						<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "research'>RESEARCH MAIN PAGE</a></li>
						<li class='first leaf leaf-section'>Find</li>
						<li class='leaf'><a href='http://surveyor.library.gwu.edu/'>Books & Media</a><span class='leaf-extended'> | <a href='" . $front_page . "howdoi/findbooksbytitleorauthor'>Tutorial</a></span></li>
						<li class='leaf'><a href='http://findit.library.gwu.edu/'>Journals</a><span class='leaf-extended'> | <a href='" . $front_page . "howdoi/findarticlecitation'>Tutorial</a></span></li>
						<li class='leaf'><a href='http://libguides.gwu.edu/databases'>Subject Databases</a><span class='leaf-extended'> | <a href='" . $front_page . "howdoi/findarticlesbytopic'>Tutorial</a></span></li>
						<li class='leaf'><a href='http://gw.summon.serialssolutions.com/'>ArticlesPlus</a><span class='leaf-extended'> | <a href='" . $front_page . "howdoi/aboutarticlesplus'>Tutorial</a></span></li>
						<li class='leaf'><a href='http://catalog.wrlc.org'>Classic Catalog</a><span class='leaf-extended'></li>

						<li class='first leaf leaf-section'>Research Guides</li>
						<li class='leaf'><a href='http://libguides.gwu.edu/'>Subjects: </a><span class='leaf-extended'><a href='http://libguides.gwu.edu/content.php?pid=12823'>Art</a> | <a href='http://libguides.gwu.edu/content.php?pid=17054'>Psychology</a> | <a href='http://libguides.gwu.edu/'>More...</a></span></li>
						<li class='leaf'><a href='http://libguides.gwu.edu/'>Topics: </a><span class='leaf-extended'><a href='http://libguides.gwu.edu/content.php?pid=12069'>Industry</a> | <a href='http://libguides.gwu.edu/content.php?pid=112501'>Grants</a> | <a href='http://libguides.gwu.edu/'>More...</a></span></li>	
						<li class='leaf'><a href='http://libguides.gwu.edu/'>Tools: </a><span class='leaf-extended'><a href='http://libguides.gwu.edu/content.php?pid=23115'>RefWorks</a> | <a href='http://libguides.gwu.edu/content.php?pid=8881'>Citation Styles</a> | <a href='http://libguides.gwu.edu/'>More...</a></span></li>							
						<li class='leaf'><a href='" . $front_page . "howdoi'>How Do I? (Tutorials)</a></li>						
						
						<li class='leaf leaf-section'>Get Help</li>
						<li class='leaf'><a href='" . $front_page . "help/reference/ask-a-librarian'>Ask A Librarian</a></li>
						<li class='leaf'><a href='" . $front_page . "research/raa'>Research Consultation</a></li>
						<li class='leaf'><a href='" . $front_page . "howdoi'>How Do I? (Tutorials)</a></li>					
				   </ul>
				   </li>
											
					<li class='expanded'><div class='touch-hide-nav'><a href='" . $front_page . "collections' onMouseover='javascript: pageTracker._trackPageview(&#39;/primary-nav/gelman/collections&#39;)' title='Collections at GW Libraries'>Collections</a></div><div class='touch-show-nav'>Collections</div>
					<ul class='menu'>
						<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "collections'>COLLECTIONS MAIN PAGE</a></li>
						<li class='first leaf'><a href='" . $front_page . "collections/scrc' title=''>Special Collections Research Center</a></li>
						<li class='leaf'><a href='" . $front_page . "collections/GRC'>Global Resources Center</a></li>
						<li class='leaf'><a href='http://teamstersarchives.gwu.edu/'>Teamsters Labor History Research Center</a></li>
						<li class='leaf'><a href='" . $front_page . "collections/kiev'>Kiev Judaica Collection</a></li>
						<li class='leaf'><a href='" . $front_page . "collections/media-resources-center'>Media</a></li>
						<li class='last leaf'><a href='" . $front_page . "collections'>(more...)</a></li>
					</ul>
					</li>								
	
					<li class='expanded'><div class='touch-hide-nav'><a href='" . $front_page . "services' onMouseover='javascript: pageTracker._trackPageview(&#39;/primary-nav/gelman/services&#39;)' title='Services at GW Libraries'><span class='mobile-hide'>Library </span>Services</a></div><div class='touch-show-nav'>Library Services</div>
					<ul class='menu'>
						<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "services'>SERVICES MAIN PAGE</a></li>
						<li class='first leaf'><a href='" . $front_page . "services/computers-wireless' title=''>Computers & Wireless</a></li>
						<!--<li class='leaf'><a href='" . $front_page . "'>Account Help</a></li>-->
						<li class='leaf'><a href='" . $front_page . "services/borrowing-renewing'>Borrow & Renew</a></li>
						<li class='leaf'><a href='" . $front_page . "services/reserves'>Course Reserves</a></li>
						<li class='leaf'><a href='" . $front_page . "services/borrowing-renewing/consortium-loan'>Consortium Loan</a></li>
						<li class='leaf'><a href='" . $front_page . "services/interlibrary-loan'>Interlibrary Loan</a></li>
						<li class='leaf'><a href='" . $front_page . "services/library-instruction'>Library Instruction</a></li>
						<li class='leaf'><a href='" . $front_page . "contact'>Contact Us</a></li>
						<li class='last leaf'><a href='" . $front_page . "services'>(more...)</a></li>
					</ul>					
					</li>
					
					<li class='leaf'><div class='touch-hide-nav'><a href='" . $front_page . "news-events' onMouseover='javascript: pageTracker._trackPageview(&#39;/primary-nav/gelman/news-events&#39;)' title='New & Events at GW Libraries'>News & Events</a></div><div class='touch-show-nav'>News & Events</div>
					<ul class='menu'>
						<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "news-events'>NEWS & EVENTS MAIN PAGE</a></li>
						<li class='first leaf'><a href='" . $front_page . "news-events'>News</a></li>
						<li class='leaf'><a href='" . $front_page . "spotlights'>GW Libraries Spotlight</a></li>
						<li class='leaf'><a href='" . $front_page . "news-events/blogs-and-social-media'>Blogs and Social Media</a></li>
						<li class='leaf'><a href='" . $front_page . "changes'>Changes To Our Website</a></li>
						<li class='leaf'><a href='" . $front_page . "development-news'>Libraries&#39; e-newsletter</a></li>
						<!--<li class='last leaf'><a href='" . $front_page . "news-events'>(Magazine)</a></li>-->
					</ul>
					</li>
					
					<!--<li class='expanded'><a href='" . $front_page . "help'>FAQ & Help</a>
					<ul class='menu'>
						<li class='first leaf'><a href='" . $front_page . "help/how-do-i...'>How do I...?</a></li>
						<li class='leaf'><a href='http://libguides.gwu.edu/' title=''>Research Guides</a></li>
						<li class='leaf'><a href='" . $front_page . "services/reference/ask-a-librarian'>Ask a Librarian</a></li>
						<li class='leaf'><a href='http://www.gwu.edu/gelman/ref/appoint.html'>Research Appointments</a></li>
						<li class='leaf'><a href='" . $front_page . "help/reference'>Reference</a></li>
						<li class='leaf'><a href='" . $front_page . "help/feedback'>Site Feedback</a></li>
						<li class='leaf'><a href='" . $front_page . "help/sign-up-for-a-refworks-session'>Sign Up For a Refworks Session</a></li>
						<li class='last leaf'><a href='" . $front_page . "contact'>Contact Us</a></li>
					</ul>
					</li>-->
					
					<li class='expanded'><div class='touch-hide-nav'><a href='" . $front_page . "about' onMouseover='javascript: pageTracker._trackPageview(&#39;/primary-nav/gelman/about&#39;)' title='About GW Libraries'>About</a></div><div class='touch-show-nav'>About</div>
					<ul class='menu'>
						<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "about'>ABOUT MAIN PAGE</a></li>
						<li class='first leaf'><a href='" . $front_page . "hours'>Hours</a></li>
						<li class='leaf'><a href='" . $front_page . "about/facilities/maps'>Maps & Directions</a></li>
						<li class='leaf'><a href='" . $front_page . "about/organization/jobs'>Working at GW Libraries</a></li>
						<li class='leaf'><a href='" . $front_page . "about/organization/staff-directory'>Staff Directory</a></li>
						<li class='leaf'><a href='" . $front_page . "about/organization/library-departments'>Library Departments</a></li>
						<li class='leaf'><a href='" . $front_page . "about/facilities/entrance-policies/entrance-policy'>Entrance Policies</a></li>
						<li class='leaf'><a href='http://rooms.library.gwu.edu/'>Study Room Reservations</a></li>
						<li class='leaf'><a href='" . $front_page . "about/organization/development'>Donor Information</a></li>
						<li class='leaf'><a href='" . $front_page . "contact'>Contact Us</a></li>
						<li class='last leaf'><a href='" . $front_page . "about'>(more...)</a></li>
					</ul>
					</li>
					
					<li class='mobile-show'><a href='" . $front_page . "hours'>Hours</a></li>
					";
					break;
					
					case "eckles":
					print "
					
					<li class='first expanded'><div class='touch-hide-nav'><a href='" . $front_page . "eckles/reference'>Research</a></div><div class='touch-show-nav'>Research</div>
					<ul class='menu'>
						<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "eckles/reference'>RESEARCH MAIN PAGE</a></li>
						<li class='first leaf leaf-section'>Eckles</li>
						<li class='first leaf'><a href='" . $front_page . "eckles/reference'>Research Help at Eckles</a></li>
						<li class='first leaf'><a href='" . $front_page . "eckles/the-eckles-prize-for-freshman-research-excellence'>Eckles Prize</a></li>

						<li class='first leaf leaf-section'>Find</li>
						<li class='leaf'><a href='http://surveyor.library.gwu.edu/'>Books & Media</a><span class='leaf-extended'> | <a href='" . $front_page . "howdoi/findbooksbytitleorauthor'>Tutorial</a></span></li>
						<li class='leaf'><a href='http://findit.library.gwu.edu/'>Journals</a><span class='leaf-extended'> | <a href='" . $front_page . "howdoi/findarticlecitation'>Tutorial</a></span></li>
						<li class='leaf'><a href='http://libguides.gwu.edu/databases'>Subject Databases</a><span class='leaf-extended'> | <a href='" . $front_page . "howdoi/findarticlesbytopic'>Tutorial</a></span></li>
						<li class='leaf'><a href='http://gw.summon.serialssolutions.com/'>ArticlesPlus</a><span class='leaf-extended'> | <a href='" . $front_page . "howdoi/aboutarticlesplus'>Tutorial</a></span></li>
						<li class='leaf'><a href='http://catalog.wrlc.org'>Classic Catalog</a><span class='leaf-extended'></li>

						<li class='first leaf leaf-section'>Research Guides</li>
						<li class='leaf'><a href='http://libguides.gwu.edu/'>Subjects: </a><span class='leaf-extended'><a href='http://libguides.gwu.edu/content.php?pid=12823'>Art</a> | <a href='http://libguides.gwu.edu/content.php?pid=17054'>Psychology</a> | <a href='http://libguides.gwu.edu/'>More...</a></span></li>
						<li class='leaf'><a href='http://libguides.gwu.edu/'>Topics: </a><span class='leaf-extended'><a href='http://libguides.gwu.edu/content.php?pid=12069'>Industry</a> | <a href='http://libguides.gwu.edu/content.php?pid=112501'>Grants</a> | <a href='http://libguides.gwu.edu/'>More...</a></span></li>	
						<li class='leaf'><a href='http://libguides.gwu.edu/'>Tools: </a><span class='leaf-extended'><a href='http://libguides.gwu.edu/content.php?pid=23115'>RefWorks</a> | <a href='http://libguides.gwu.edu/content.php?pid=8881'>Citation Styles</a> | <a href='http://libguides.gwu.edu/'>More...</a></span></li>							
						<li class='leaf'><a href='" . $front_page . "howdoi'>How Do I? (Tutorials)</a></li>						
						
						<li class='leaf leaf-section'>Get Help</li>
						<li class='leaf'><a href='" . $front_page . "help/reference/ask-a-librarian'>Ask A Librarian</a></li>
						<li class='leaf'><a href='" . $front_page . "research/raa'>Research Consultation</a></li>
						<li class='leaf'><a href='" . $front_page . "howdoi'>How Do I? (Tutorials)</a></li>

					
					</ul>
					</li>
					
					<li class='expanded'><div class='touch-hide-nav'><a href='" . $front_page . "eckles/services'><span class='mobile-hide'>Library </span>Services</a></div><div class='touch-show-nav'>Library Services</div>
					<ul class='menu'>
						<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "eckles/services'>SERVICES MAIN PAGE</a></li>
						<li class='leaf'><a href='" . $front_page . "eckles/services/#borrow'>Borrow & Renew</a></li>
						<li class='leaf'><a href='" . $front_page . "eckles/services#reserves'>Course Reserves</a></li>
						<li class='leaf'><a href='" . $front_page . "eckles/services#print'>Photocopying & Printing</a></li>
						<li class='leaf'><a href='" . $front_page . "eckles/services#instruction'>Instruction Sessions</a></li>
						<li class='leaf'><a href='" . $front_page . "eckles/services#collections'>Collections</a></li>
						<li class='leaf'><a href='" . $front_page . "eckles/services#computing'>Computing in Eckles</a></li>
					</ul>
					</li>
					
					<li class='expanded'><div class='touch-hide-nav'><a href='" . $front_page . "eckles/about' title=''>About</a></div><div class='touch-show-nav'>About</div>
					<ul class='menu'>
						<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "eckles/about'>ABOUT MAIN PAGE</a></li>
					   <li class='first leaf'><a href='" . $front_page . "eckles/hours'>Hours</a></li>
						<li class='leaf'><a href='" . $front_page . "eckles/general-information' title=''>Visiting Eckles</a></li>
						<!--<li class='leaf'><a href='" . $front_page . "about/entrance-policies'>Entrance Policies</a></li>-->
						<li class='leaf'><a href='" . $front_page . "eckles/contact'>Contact Us</a></li>
						<li class='leaf'><a href='" . $front_page . "eckles/about'>About Eckles</a></li>
					</ul>
					</li>
					
					<li class='expanded'><div class='touch-hide-nav'><a href='" . $front_page . "eckles/academic-services-at-eckles' title=''>Academic Services</a></div><div class='touch-show-nav'>Academic Services</div>
					<ul class='menu'>
						<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "eckles/academic-services-at-eckles'>ACADEMIC SERVICES MAIN PAGE</a></li>
						<li class='first leaf'><a href='" . $front_page . "eckles/academic-services-at-eckles#a1' title=''>Economics, Mathematics and Chemistry Tutoring</a></li>
						<li class='leaf'><a href='" . $front_page . "eckles/academic-services-at-eckles#a2'>The Language Cafe</a></li>
						<li class='leaf'><a href='" . $front_page . "eckles/academic-services-at-eckles#a3'>The Writing Center</a></li>
						<!--<li class='leaf'><a href='" . $front_page . "eckles/academic-services-at-eckles#a4'>Other Tutoring Resources at GW</a></li>-->
					</ul>
					</li>
					
					<li class='expanded'><div class='touch-hide-nav'><a href='" . $front_page . "eckles/eckles-flix-1' title=''>Eckles Flix</a></div><div class='touch-show-nav'>Eckles Flix</div>
					<ul class='menu'>
						<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "eckles/eckles-flix-1'>ECKLES FLIX MAIN PAGE</a></li>
						<li class='first leaf'><a href='" . $front_page . "eckles/eckles-flix-1/alpha' title=''>Eckles Flix: Alphabetical Listing</a></li>
						<li class='leaf'><a href='" . $front_page . "eckles/eckles-flix-1/year'>Eckles Flix: Year Listing</a></li>
						<li class='leaf'><a href='" . $front_page . "eckles/eckles-flix-1/category'>Eckles Flix: Category Listing</a></li>
					</ul>
					</li>
					
					<li class='mobile-show'><a href='" . $front_page . "eckles/hours'>Hours</a></li>
					";
					break;
					
					case "virginia":
					print "

					<li class='first expanded'><div class='touch-hide-nav'><a href='" . $front_page . "virginia/research'>Research</a></div><div class='touch-show-nav'>Research</div>
					<ul class='menu'>
						
						<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "virginia/research'>RESEARCH MAIN PAGE</a></li>						
						<li class='first leaf leaf-section'>Find</li>
						<li class='leaf'><a href='http://surveyor.library.gwu.edu/'>Books & Media</a><span class='leaf-extended'> | <a href='" . $front_page . "howdoi/findbooksbytitleorauthor'>Tutorial</a></span></li>
						<li class='leaf'><a href='http://findit.library.gwu.edu/'>Journals</a><span class='leaf-extended'> | <a href='" . $front_page . "howdoi/findarticlecitation'>Tutorial</a></span></li>
						<li class='leaf'><a href='http://libguides.gwu.edu/databases'>Subject Databases</a><span class='leaf-extended'> | <a href='" . $front_page . "howdoi/findarticlesbytopic'>Tutorial</a></span></li>
						<li class='leaf'><a href='http://gw.summon.serialssolutions.com/'>ArticlesPlus</a><span class='leaf-extended'> | <a href='" . $front_page . "howdoi/aboutarticlesplus'>Tutorial</a></span></li>
						<li class='leaf'><a href='http://catalog.wrlc.org'>Classic Catalog</a><span class='leaf-extended'></li>

						<li class='first leaf leaf-section'>Research Guides</li>
						<li class='leaf'><a href='http://libguides.gwu.edu/'>Subjects: </a><span class='leaf-extended'><a href='http://libguides.gwu.edu/content.php?pid=12823'>Art</a> | <a href='http://libguides.gwu.edu/content.php?pid=17054'>Psychology</a> | <a href='http://libguides.gwu.edu/'>More...</a></span></li>
						<li class='leaf'><a href='http://libguides.gwu.edu/'>Topics: </a><span class='leaf-extended'><a href='http://libguides.gwu.edu/content.php?pid=12069'>Industry</a> | <a href='http://libguides.gwu.edu/content.php?pid=112501'>Grants</a> | <a href='http://libguides.gwu.edu/'>More...</a></span></li>	
						<li class='leaf'><a href='http://libguides.gwu.edu/'>Tools: </a><span class='leaf-extended'><a href='http://libguides.gwu.edu/content.php?pid=23115'>RefWorks</a> | <a href='http://libguides.gwu.edu/content.php?pid=8881'>Citation Styles</a> | <a href='http://libguides.gwu.edu/'>More...</a></span></li>							
						<li class='leaf'><a href='" . $front_page . "howdoi'>How Do I? (Tutorials)</a></li>											
		
						<li class='leaf leaf-section'>Get Help</li>
						<li class='leaf'><a href='" . $front_page . "virginia/reference'>Reference and Research Help</a></li>
						<li class='leaf'><a href='" . $front_page . "howdoi'>How Do I? (Tutorials)</a></li>				
					</ul>
					</li>
					
					<li class='expanded'><div class='touch-hide-nav'><a href='" . $front_page . "virginia/collections' title=''>Collections</a></div><div class='touch-show-nav'>Collections</div>
					<ul class='menu'>
						<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "virginia/collections'>COLLECTIONS MAIN PAGE</a></li>
						<li class='first leaf'><a href='" . $front_page . "virginia/grants' title=''>Grants & Foundations</a></li>
						<li class='leaf'><a href='" . $front_page . "virginia/new-books'>New Books</a></li>
						<li class='leaf'><a href='" . $front_page . "virginia/virginiacollection'>The Virginia Collection</a></li>						
					</ul>
					</li>
					
					<li class='expanded'><div class='touch-hide-nav'><a href='" . $front_page . "virginia/services'><span class='mobile-hide'>Library </span>Services</a></div><div class='touch-show-nav'>Library Services</div>
					<ul class='menu'>
						<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "virginia/services'>SERVICES MAIN PAGE</a></li>
						<li class='leaf'><a href='" . $front_page . "services/borrowing-renewing'>Borrow & Renew</a></li>
						<li class='leaf'><a href='" . $front_page . "services/reserves'>Course Reserves</a></li>
						<li class='leaf'><a href='" . $front_page . "services/borrowing-renewing/consortium-loan'>Consortium Loan</a></li>
						<li class='leaf'><a href='" . $front_page . "services/interlibrary-loan'>Interlibrary Loan</a></li>
						<li class='leaf'><a href='http://www.gwu.edu/~etds/index.html'>Electronic Theses & Dissertations</a></li>
						<li class='leaf'><a href='" . $front_page . "virginia/contact-us'>Contact Us</a></li>						
						<li class='leaf'><a href='" . $front_page . "virginia/reference'>Reference & Research Help</a></li>
						<li class='first leaf'><a href='" . $front_page . "virginia/computers' title=''>Computers in the Library</a></li>		
						<li class='first leaf'><a href='" . $front_page . "virginia/wireless' title=''>Wireless Access</a></li>
						<li class='first leaf'><a href='" . $front_page . "virginia/printing' title=''>Printing</a></li>
						<li class='first leaf'><a href='" . $front_page . "virginia/photocopy' title=''>Photocopying & Scanning</a></li>
					</ul>					
					</li>
					
					<li class='leaf'><div class='touch-hide-nav'><a href='" . $front_page . "news-events'>News & Events</a></div><div class='touch-show-nav'>News & Events</div>
					<ul class='menu'>
						<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "news-events'>NEWS & EVENTS MAIN PAGE</a></li>
						<li class='first leaf'><a href='" . $front_page . "news-events'>News</a></li>
						<li class='leaf'><a href='" . $front_page . "spotlights'>GW Libraries Spotlight</a></li>
						<li class='leaf'><a href='" . $front_page . "news-events/blogs-and-social-media'>Blogs and Social Media</a></li>
					</ul>
					</li>
					
					<li class='expanded'><div class='touch-hide-nav'><a href='" . $front_page . "virginia/about' title=''>About</a></div><div class='touch-show-nav'>About</div>
					<ul class='menu'>
						<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "virginia/about'>ABOUT MAIN PAGE</a></li>
						<li class='first leaf'><a href='" . $front_page . "virginia/hours' title=''>Hours</a></li>
						<li class='leaf'><a href='" . $front_page . "virginia/map'>Map & Directions</a></li>
						<li class='leaf'><a href='" . $front_page . "virginia/access'>Access</a></li>
						<li class='leaf'><a href='" . $front_page . "virginia/staff'>Staff</a></li>
						<li class='leaf'><a href='" . $front_page . "virginia/contact-us'>Contact Us</a></li>
					</ul>
					</li>

					<li class='mobile-show'><a href='" . $front_page . "virginia/hours'>Hours</a></li>
					";
					break;				
				}
				?>
				</ul>		
			</nav>
		</div>
	</div>