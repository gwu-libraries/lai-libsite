    <nav id="secondary-nav"><!-- this is gw libraries 'primary nav' -->
				<!-- handheld ios button behavior is controlled in jsbottom -->						
				<ul class="menu nav-menu"><!-- determine campus -->
				<?php
				switch ($campus) {
					case "none";
    			case "gelman":
          print "

	        <li class=\"first-prim expanded nav-item\" id=\"nav-research\">
	          <a href=\"" . $front_page . "research\" onMouseOver=\"ga('send', 'event', 'primary-nav', '/primary-nav/gelman/research-hover', {'nonInteraction': 1});\" onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/research/main');\">Research</a>
	          <div class='sub-nav research-nav'>
	          <ul class='sub-menu-group'>
							<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "research'>RESEARCH</a></li>
							<li class='first leaf leaf-section-title'>Find</li>
							<li class='leaf'><a href='https://wrlc-gwu.primo.exlibrisgroup.com/discovery/search?vid=01WRLC_GWA:live' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/research/books-articles-more');\">Books, Articles and More</a></li>
							<li class='leaf'><a href='https://wrlc-gwu.primo.exlibrisgroup.com/discovery/jsearch?vid=01WRLC_GWA:live' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/research/journals-primo');\">Journals</a></li>
							<li class='leaf'><a href='http://libguides.gwu.edu/databases' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/research/subject-db');\">Subject Databases</a><span class='leaf-extended'> | <a href='" . $front_page . "howdoi/findarticlesbytopic' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/research/subject-db-tut');\">Tutorial</a></span></li>
                                                        <li class='leaf'><a href='https://scholarspace.library.gwu.edu' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/research/scholarspace');\">GW ScholarSpace</a></li>


							<li class='first leaf leaf-section-title leaf-section-title-linked'><a href='http://libguides.gwu.edu/'>Research Guides</a></li>
							<li class='leaf'><a href='http://libguides.gwu.edu/' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/research/subject');\">Subjects: </a><span class='leaf-extended'><a href='http://libguides.gwu.edu/content.php?pid=12823' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/research/subject/art');\">Art</a> | <a href='http://libguides.gwu.edu/content.php?pid=17054' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/research/subject/psych');\">Psychology</a> | <a href='http://libguides.gwu.edu/' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/research/subject/more');\">More...</a></span></li>
							<li class='leaf'><a href='http://libguides.gwu.edu/' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/research/topic');\">Topics: </a><span class='leaf-extended'><a href='http://libguides.gwu.edu/content.php?pid=12069' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/research/topic/industry');\">Industry</a> | <a href='https://libguides.gwu.edu/sb.php?subject_id=53283' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/research/topic/international-relations');\">International Relations</a> | <a href='http://libguides.gwu.edu/' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/research/topic/more');\">More...</a></span></li>
							<li class='leaf'><a href='http://libguides.gwu.edu/' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/research/tools');\">Tools: </a><span class='leaf-extended'><a href='http://libguides.gwu.edu/content.php?pid=23115' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/research/tools/refworks');\">RefWorks</a> | <a href='http://libguides.gwu.edu/content.php?pid=8881' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/research/tools/citations');\">Citation Styles</a> | <a href='http://libguides.gwu.edu/' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/research/tools/more');\">More...</a></span></li>
							<li class='leaf'><a href='" . $front_page . "howdoi' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/research/guides/howdoi');\">How Do I? (Tutorials)</a></li>						
							
							<li class='leaf leaf-section-title'>Get Help</li>
							<li class='leaf'><a href='" . $front_page . "help/reference/ask-us' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/research/ask');\">Ask Us</a></li>
							<li class='leaf'><a href='" . $front_page . "reference/research-consultations' onClick=\"ga('send','event','primary-nav','/primary-nav/reference/research-consultations');\">Research Consultation</a></li>
	            <li class='leaf'><a href='" . $front_page . "reference/directory' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/research-staff');\">Research Staff</a></li>
							<li class='leaf'><a href='" . $front_page . "howdoi' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/research/help/howdoi');\">How Do I? (Tutorials)</a></li>					
                                                        <li class='leaf'><a href='https://undergraduate.research.gwu.edu/' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/research/help/cufr');\">Center for Undergraduate Fellowships & Research</a></li>                              
					  </ul>
					  </div>
					</li>
												
					<li class=\"expanded nav-item\" id=\"nav-collections\">
					  <a href=\"" . $front_page . "collections\" onMouseOver=\"ga('send', 'event', 'primary-nav', '/primary-nav/gelman/collections-hover', {'nonInteraction': 1});\" onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/collections/main');\">Collections</a>
					  <div class='sub-nav'>
						<ul class='sub-menu-group'>
							<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "collections'>COLLECTIONS</a></li>
							<li class='first leaf'><a href='" . $front_page . "scrc' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/scrc');\">Special Collections Research Center</a></li>
							<li class='leaf'><a href='" . $front_page . "grc' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/collections/grc');\">Global Resources Center</a></li>
							<li class='leaf'><a href='http://teamstersarchives.gwu.edu/' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/collections/teamstersarchives');\">Teamsters Labor History Research Center</a></li>
							<li class='leaf'><a href='" . $front_page . "scrc/university-archives' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/scrc/university-archives');\">University Archives</a></li>
							<li class='leaf'><a href='" . $front_page . "collections/kiev' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/collections/kiev');\">Kiev Judaica Collection</a></li>
							<li class='leaf'><a href='" . $front_page . "churchillcenter' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/collections/churchill');\">National Churchill Library & Center</a></li>
							<li class='leaf'><a href='" . $front_page . "showcases' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/collections/digital-showcases');\">Digital Showcases</a></li>
							<li class='leaf'><a href='" . $front_page . "collections/media-resources-center' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/collections/media');\" >Media</a></li>
							<li class='leaf'><a href='" . $front_page . "collections-assessment' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/collections-assessment');\" >Collections Assessment &amp; Development</a></li>
							<li class='last leaf'><a href='" . $front_page . "collections' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/collections/more');\">(more...)</a></li>
						</ul>
						</div>
					</li>								
		
					<li class=\"expanded nav-item\" id=\"nav-services\">
					  <a href=\"" . $front_page . "services\" onMouseOver=\"ga('send', 'event', 'primary-nav', '/primary-nav/gelman/services-hover', {'nonInteraction': 1});\" onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/services/main');\">Library Services</a>
					  <div class='sub-nav'>
						<ul class='sub-menu-group'>
							<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "services'>LIBRARY SERVICES</a></li>
							<li class='first leaf'><a href='https://academiccommons.gwu.edu/' onClick=\"ga('send', 'event', 'primary-nav', '/primary-nav/gelman/services/academiccommons');\">Academic Commons</a></li>
							<li class='leaf'><a href='https://writingcenter.gwu.edu/' onClick=\"ga('send', 'event', 'primary-nav', '/primary-nav/gelman/services/writing-center');\">Writing Center</a></li>
							<li class='leaf'><a href='" . $front_page . "services/computers-wireless' onClick=\"ga('send', 'event', 'primary-nav', '/primary-nav/gelman/services/computers-wireless');\">Computers & Wireless</a></li>
                                                        <li class='leaf'><a href='" . $front_page . "services/computers-wireless/printing' onClick=\"ga('send', 'event', 'primary-nav', '/primary-nav/gelman/services/computers-wireless/printing');\">Printing</a></li>
							<li class='leaf'><a href='" . $front_page . "services/off-campus-services' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/services/off-campus-students');\">Off-Campus Students</a></li>
							<li class='leaf'><a href='" . $front_page . "services/borrowing-renewing' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/services/borrow-renew');\">Borrow & Renew</a></li>
							<li class='leaf'><a href='" . $front_page . "services/reserves' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/services/course-reserves');\">Course Reserves</a></li>
							<li class='leaf'><a href='" . $front_page . "services/consortium-loan' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/services/consortium-loan');\">Consortium Loan</a></li>
							<li class='leaf'><a href='" . $front_page . "etd' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/services/etd');\">Electronic Dissertations</a></li>
							<li class='leaf'><a href='" . $front_page . "research/data-services' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/research/data-services');\">Data Services</a></li>
							<li class='leaf'><a href='" . $front_page . "services/interlibrary-loan' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/services/interlibrary-loan');\">Interlibrary Loan</a></li>
							<li class='leaf'><a href='" . $front_page . "services/library-instruction' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/services/instruction');\">Library Instruction</a></li>
							<li class='leaf'><a href='http://libguides.gwu.edu/facultyresources' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/services/faculty-resources');\">Faculty Resources</a></li>
							<li class='leaf'><a href='" . $front_page . "contact' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/services/contact-us');\">Contact Us</a></li>
							<li class='last leaf'><a href='" . $front_page . "services' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/services/more');\">(more...)</a></li>
						</ul>
						</div>					
					</li>
						
					<li class=\"expanded nav-item\" id=\"nav-about\">
					  <a href=\"" . $front_page . "about\" onMouseOver=\"ga('send', 'event', 'primary-nav', '/primary-nav/gelman/about-hover', {'nonInteraction': 1});\" onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/about/main');\">About</a>
					  <div class='sub-nav'>
						<ul class='sub-menu-group'>
						  <li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "about'>ABOUT GW LIBRARIES</a></li>
							<li class='first leaf'><a href='" . $front_page . "hours' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/about/hours');\">Hours</a></li>
							<li class='leaf'><a href='" . $front_page . "events' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/about/events');\">Events</a></li>
							<li class='leaf'><a href='" . $front_page . "about/facilities/maps' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/about/maps-directions');\">Maps & Directions</a></li>
							<li class='leaf'><a href='" . $front_page . "about/entrance-policies' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/about/entrance-policies');\">Entrance Policies</a></li>
							<li class='leaf'><a href='" . $front_page . "about/organization/jobs' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/about/jobs');\">Working at GW Libraries</a></li>
							<li class='leaf'><a href='" . $front_page . "about/staff-directory' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/about/directory');\">Staff Directory</a></li>
							<li class='leaf'><a href='" . $front_page . "about/library-departments' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/about/departments');\">Library Departments</a></li>
                                                        <li class='leaf'><a target='_blank' href='https://lai.gwu.edu' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/about/lai');\">Libraries & Academic Innovation</a></li>
                                                        <li class='leaf'><a target='_blank' href='https://lai.gwu.edu/about' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/about/about-lai');\">About GWLAI</a></li>
							<li class='leaf'><a href='" . $front_page . "about/giving' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/about/donor-info');\">Donor Information</a></li>
							<li class='leaf'><a target='_blank' href='https://lai.gwu.edu/magazine' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/about/vision-magazine');\">Vision Magazine</a></li>
							<li class='leaf'><a href='" . $front_page . "contact' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/about/contact-us');\">Contact Us</a></li>
							<li class='last leaf'><a href='" . $front_page . "about' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/about/more');\">(more...)</a></li>
						</ul>
						</div>
					</li>
						
					<li class=\"expanded nav-item mobile-show\" id=\"nav-events\">
					  <a href=\"" . $front_page . "events\" onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/events/main');\">Events</a>
					  <div class='sub-nav'><!-- empty div for accessibleMegaMenu -->
					  </div>
					</li>
						
					<li class='expanded nav-item mobile-show' id=\"nav-hours\">
					  <a href='" . $front_page . "hours' onClick=\"ga('send','event','primary-nav','/primary-nav/gelman/handheld/hours');\">Hours</a>
					  <div class='sub-nav'><!-- empty div for accessibleMegaMenu -->
					  </div>
					</li>
					";
					break;
					
					case "eckles":
					print "
					
					<li class='first-prim expanded nav-item' id=\"nav-eckles-research\">
					  <a href='" . $front_page . "eckles/reference' onMouseOver=\"ga('send', 'event', 'primary-nav', '/primary-nav/eckles/research-hover', {'nonInteraction': 1});\">Research</a>
					  <div class='sub-nav'>
					  <ul class='sub-menu-group'>
							<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "eckles/reference'>RESEARCH</a></li>

							<li class='first leaf leaf-section-title'>Eckles</li>
							<li class='first leaf'><a href='" . $front_page . "eckles/the-eckles-prize-for-freshman-research-excellence'>Eckles Prize</a></li>

							<li class='first leaf leaf-section-title'>Find</li>
							<li class='leaf'><a href='https://wrlc-gwu.primo.exlibrisgroup.com/discovery/search?vid=01WRLC_GWA:live'>Books, Articles and More</a></li>
							<li class='leaf'><a href='https://wrlc-gwu.primo.exlibrisgroup.com/discovery/jsearch?vid=01WRLC_GWA:live'>Journals</a></li>
							<li class='leaf'><a href='http://libguides.gwu.edu/databases'>Subject Databases</a><span class='leaf-extended'> | <a href='" . $front_page . "howdoi/findarticlesbytopic'>Tutorial</a></span></li>

							<li class='first leaf leaf-section-title'>Research Guides</li>
							<li class='leaf'><a href='http://libguides.gwu.edu/'>Subjects: </a><span class='leaf-extended'><a href='http://libguides.gwu.edu/content.php?pid=12823'>Art</a> | <a href='http://libguides.gwu.edu/content.php?pid=17054'>Psychology</a> | <a href='http://libguides.gwu.edu/'>More...</a></span></li>
							<li class='leaf'><a href='http://libguides.gwu.edu/'>Topics: </a><span class='leaf-extended'><a href='http://libguides.gwu.edu/content.php?pid=12069'>Industry</a> | <a href='https://libguides.gwu.edu/sb.php?subject_id=53283'>International Relations</a> | <a href='http://libguides.gwu.edu/'>More...</a></span></li>
							<li class='leaf'><a href='http://libguides.gwu.edu/'>Tools: </a><span class='leaf-extended'><a href='http://libguides.gwu.edu/content.php?pid=23115'>RefWorks</a> | <a href='http://libguides.gwu.edu/content.php?pid=8881'>Citation Styles</a> | <a href='http://libguides.gwu.edu/'>More...</a></span></li>							
							<li class='leaf'><a href='" . $front_page . "howdoi'>How Do I? (Tutorials)</a></li>

							<li class='leaf leaf-section-title'>Get Help</li>
							<li class='leaf'><a href='" . $front_page . "help/reference/ask-us'>Ask Us</a></li>
							<li class='leaf'><a href='" . $front_page . "reference/research-consultations'>Research Consultation</a></li>
							<li class='leaf'><a href='" . $front_page . "howdoi'>How Do I? (Tutorials)</a></li>		
					  </ul>
					  </div>
					</li>
					
					<li class='expanded nav-item' id=\"nav-eckles-services\">
					  <a href='" . $front_page . "eckles/services' onMouseOver=\"ga('send','event','primary-nav','/primary-nav/eckles/services-hover',{'nonInteraction': 1});\">Library Services</a>
					  <div class='sub-nav'>
						<ul class='sub-menu-group'>
							<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "eckles/services'>LIBRARY SERVICES</a></li>
							<li class='leaf'><a href='" . $front_page . "eckles/services#borrow'>Borrow & Renew</a></li>
							<li class='leaf'><a href='" . $front_page . "eckles/services#reserves'>Course Reserves</a></li>
							<li class='leaf'><a href='" . $front_page . "eckles/services#print'>Photocopying & Printing</a></li>
							<li class='leaf'><a href='" . $front_page . "eckles/services#instruction'>Instruction Sessions</a></li>
							<li class='leaf'><a href='" . $front_page . "eckles/services#collections'>Collections</a></li>
							<li class='leaf'><a href='" . $front_page . "eckles/services#computing'>Computing in Eckles</a></li>
						</ul>
						</div>
				  </li>
					
				  <li class='expanded nav-item' id=\"nav-eckles-about\">
					  <a href='" . $front_page . "eckles/about' onMouseOver=\"ga('send','event','primary-nav','/primary-nav/eckles/about-hover',{'nonInteraction': 1});\">About</a>
					  <div class='sub-nav'>
						<ul class='sub-menu-group'>
							<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "eckles/about'>ABOUT ECKLES</a></li>
						   <li class='first leaf'><a href='" . $front_page . "eckles/hours'>Hours</a></li>
							<li class='leaf'><a href='" . $front_page . "eckles/general-information' title=''>Visiting Eckles</a></li>
							<!--<li class='leaf'><a href='" . $front_page . "about/entrance-policies'>Entrance Policies</a></li>-->
							<li class='leaf'><a href='" . $front_page . "eckles/contact'>Contact Us</a></li>
							<li class='leaf'><a href='" . $front_page . "eckles/about'>About Eckles</a></li>
                                                        <li class='leaf'><a target='_blank' href='https://lai.gwu.edu' onClick=\"ga('send','event','primary-nav','/primary-nav/eckles/about/lai');\">Libraries & Academic Innovation</a></li>
                                                        <li class='leaf'><a href='" . $front_page . "eckles/study-rooms-at-eckles'>Study Rooms at Eckles</a></li>
						</ul>
						</div>
					</li>
						
					<li class='expanded nav-item' id=\"nav-eckles-top-textbooks\">
					  <a href='" . $front_page . "eckles-top-textbooks' onMouseOver=\"ga('send','event','primary-nav','/primary-nav/eckles-top-textbooks',{'nonInteraction': 1});\">Top Textbooks</a>
					  <div class='sub-nav'>
						<ul class='sub-menu-group'>
							<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "eckles-top-textbooks'>TOP TEXTBOOKS</a></li>
						</ul>
					  </div>
					</li>

					<li class='expanded nav-item' id=\"nav-eckles-writing-center\">
					  <a href='" . $front_page . "eckles/writing-center' onMouseOver=\"ga('send','event','primary-nav','/primary-nav/eckles/writing-center-hover',{'nonInteraction': 1});\">Writing Center</a>
					  <div class='sub-nav'>
						<ul class='sub-menu-group'>
							<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "eckles/writing-center'>WRITING CENTER</a></li>
						</ul>
					  </div>
					</li>
					
					<li class='expanded nav-item mobile-show' id=\"nav-eckles-hours\">
					  <a href='" . $front_page . "eckles/hours'>Hours</a>
					  <div class='sub-nav'><!-- empty div for accessibleMegaMenu -->
					  </div>
					</li>
					";
					break;
					
					case "virginia":
					print "

					<li class='first-prim expanded nav-item' id=\"nav-virginia-research\">
					  <a href='" . $front_page . "virginia/research' onMouseOver=\"ga('send','event','primary-nav','/primary-nav/virginia/research-hover',{'nonInteraction': 1});\">Research</a>
					  <div class='sub-nav'>
						<ul class='sub-menu-group'>			
							<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "virginia/research'>RESEARCH</a></li>						
							<li class='first leaf leaf-section-title'>Find</li>
							<li class='leaf'><a href='https://wrlc-gwu.primo.exlibrisgroup.com/discovery/search?vid=01WRLC_GWA:live'>Books, Articles and More</a></li>
							<li class='leaf'><a href='https://wrlc-gwu.primo.exlibrisgroup.com/discovery/jsearch?vid=01WRLC_GWA:live'>Journals</a></li>
							<li class='leaf'><a href='http://libguides.gwu.edu/databases'>Subject Databases</a><span class='leaf-extended'> | <a href='" . $front_page . "howdoi/findarticlesbytopic'>Tutorial</a></span></li>

							<li class='first leaf leaf-section-title'>Research Guides</li>
							<li class='leaf'><a href='http://libguides.gwu.edu/'>Subjects: </a><span class='leaf-extended'><a href='http://libguides.gwu.edu/content.php?pid=12823'>Art</a> | <a href='http://libguides.gwu.edu/content.php?pid=17054'>Psychology</a> | <a href='http://libguides.gwu.edu/'>More...</a></span></li>
							<li class='leaf'><a href='http://libguides.gwu.edu/'>Topics: </a><span class='leaf-extended'><a href='http://libguides.gwu.edu/content.php?pid=12069'>Industry</a> | <a href='https://libguides.gwu.edu/sb.php?subject_id=53283'>International Relations</a> | <a href='http://libguides.gwu.edu/'>More...</a></span></li>	
							<li class='leaf'><a href='http://libguides.gwu.edu/'>Tools: </a><span class='leaf-extended'><a href='http://libguides.gwu.edu/content.php?pid=23115'>RefWorks</a> | <a href='http://libguides.gwu.edu/content.php?pid=8881'>Citation Styles</a> | <a href='http://libguides.gwu.edu/'>More...</a></span></li>							
							<li class='leaf'><a href='" . $front_page . "howdoi'>How Do I? (Tutorials)</a></li>			
			
							<li class='leaf leaf-section-title'>Get Help</li>
							<li class='leaf'><a href='" . $front_page . "virginia/reference'>Reference and Research Help</a></li>
							<li class='leaf'><a href='" . $front_page . "howdoi'>How Do I? (Tutorials)</a></li>				
						</ul>
						</div>
					</li>
					
					<li class='expanded nav-item' id=\"nav-virginia-collections\">
						<a href='" . $front_page . "virginia/collections' onMouseOver=\"ga('send','event','primary-nav','/primary-nav/virginia/collections-hover',{'nonInteraction': 1});\">Collections</a>
						<div class='sub-nav'>
						<ul class='sub-menu-group'>
							<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "virginia/collections'>COLLECTIONS</a></li>
							<li class='first leaf'><a href='" . $front_page . "virginia/grants' title=''>Grants & Foundations</a></li>
							<li class='leaf'><a href='http://reports.library.gwu.edu/virginiacampus/newbookshelf/'>New Books</a></li>
							<li class='leaf'><a href='http://reports.library.gwu.edu/virginiacampus/virginiacollection/'>The Virginia Collection</a></li>		
						</ul>
						</div>
					</li>
					
					<li class='expanded nav-item' id=\"nav-virginia-services\">
						<a href='" . $front_page . "virginia/services' onMouseOver=\"ga('send','event','primary-nav','/primary-nav/virginia/services-hover',{'nonInteraction': 1});\"><span class='mobile-hide'>Library </span>Services</a>
						<div class='sub-nav'>
						<ul class='sub-menu-group'>
							<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "virginia/services'>LIBRARY SERVICES</a></li>
							<li class='first leaf'><a href='" . $front_page . "services/borrowing-renewing'>Borrow & Renew</a></li>
							<li class='leaf'><a href='" . $front_page . "services/reserves'>Course Reserves</a></li>
							<li class='leaf'><a href='" . $front_page . "services/consortium-loan'>Consortium Loan</a></li>
							<li class='leaf'><a href='" . $front_page . "services/interlibrary-loan'>Interlibrary Loan</a></li>
							<li class='leaf'><a href='" . $front_page . "services/proctoring'>Proctoring</a></li>
							<li class='leaf'><a href='" . $front_page . "virginia/contact-us'>Contact Us</a></li>
							<li class='leaf'><a href='" . $front_page . "etd'>Electronic Theses & Dissertations</a></li>
							<li class='leaf'><a href='" . $front_page . "virginia/reference'>Reference & Research Help</a></li>
							<li class='leaf'><a href='" . $front_page . "virginia/computers'>Computers in the Library</a></li>
						</ul>	
						</div>				
					</li>
					
					<li class='expanded nav-item' id=\"nav-virginia-news\">
					  <a href='" . $front_page . "news-events' onMouseOver=\"ga('send','event','primary-nav','/primary-nav/virginia/news-events-hover',{'nonInteraction': 1});\">News<span class=\"mobile-hide\"> & Events</span></a>
					  <div class='sub-nav'>
						<ul class='sub-menu-group'>
							<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "news-events'>NEWS & EVENTS</a></li>
							<li class='first leaf'><a href='" . $front_page . "news-events'>News</a></li>
							<li class='leaf'><a href='" . $front_page . "news-events/blogs-and-social-media'>Blogs and Social Media</a></li>
							<li class='leaf'><a href='" . $front_page . "news-events/update' onClick=\"ga('send','event','primary-nav','/primary-nav/virginia/news-events/newsletter');\">Library Update</a></li>
							<li class='leaf'><a href='" . $front_page . "news-events/vision' onClick=\"ga('send','event','primary-nav','/primary-nav/virginia/news-events/vision');\">Vision Magazine</a></li>
						</ul>
						</div>
					</li>
					
					<li class='expanded nav-item' id=\"nav-virginia-about\">
					  <a href='" . $front_page . "virginia/about' onMouseOver=\"ga('send','event','primary-nav','/primary-nav/virginia/about-hover',{'nonInteraction': 1});\">About</a>
					  <div class='sub-nav'>
						<ul class='sub-menu-group'>
							<li class='touch-show-nav touch-nav-main-link'><a href='" . $front_page . "virginia/about'>ABOUT THE VSTC LIBRARY</a></li>
							<li class='first leaf'><a href='" . $front_page . "virginia/hours'>Hours</a></li>
							<li class='leaf'><a href='" . $front_page . "virginia/map'>Map & Directions</a></li>
							<li class='leaf'><a href='" . $front_page . "virginia/access'>Access</a></li>
							<li class='leaf'><a href='" . $front_page . "virginia/staff'>Staff</a></li>
							<li class='leaf'><a href='" . $front_page . "virginia/jobs'>Positions Available</a></li>
                                                        <li class='leaf'><a target='_blank' href='https://lai.gwu.edu' onClick=\"ga('send','event','primary-nav','/primary-nav/virginia/about/lai');\">Libraries & Academic Innovation</a></li>
							<li class='leaf'><a href='" . $front_page . "virginia/contact-us'>Contact Us</a></li>
						</ul>
						</div>
					</li>

					<li class='expanded nav-item mobile-show' id=\"nav-virginia-hours\">
					  <a href='" . $front_page . "virginia/hours'>Hours</a>
					  <div class='sub-nav'><!-- empty div for accessibleMegaMenu -->
					  </div>
					</li>
					";
					break;				

                    case "utlc":

					// include the custom navigation for UTLC
                    include 'libnav_utlc.php';
                    
                    break;

				}

                                if ($campus == 'utlc') {$specialClass = 'hide';} else {$specialClass = '';}
				?>
                    <!-- help buttons for wider views -->
                    <li id="askalib" class="<?php print $specialClass; ?>" style="display:none;">
                      <a href="<?php print $front_page; ?>help/reference/ask-us" onClick="ga('send', 'event', 'button', 'ask us', 'header-desktop');"><img width=100 height=27 src="<?php print $front_page; ?><?php print drupal_get_path('theme', $themename); ?>/images/ask-us-4.png" alt="link to Ask Us help page" /></a>
                    </li>
                    <li id="aladin" class="<?php print $specialClass; ?>" style="display:none;">
                      <a href="https://mylibrary.wrlc.org/" onClick="ga('send', 'event', 'button', 'my library', 'header');" target="_blank"><img width=100 height=27 src="<?php print $front_page; ?><?php print drupal_get_path('theme', $themename); ?>/images/my-account-3.png" alt="link to My Library account" /></a>
                    </li>
				</ul>		
			</nav>
