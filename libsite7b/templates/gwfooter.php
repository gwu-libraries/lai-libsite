<footer id="footer"> 
	
	<!-- Libraries footer -->
	<section class="pane clear" id="local-footer"> 

	<?php 
	  if ($campus == "utlc") {
	    $page_group = 'University Teaching & Learning Center';
	  }
	  else {
	    $page_group = 'GW Libraries';
	  }
	?>

	<div class="footer-lib-logo">
		<h2><?php print $page_group ?></h2>
	</div>
	
	<?php if ($campus == "gelman" || $campus == "none"): ?> 
	<article class="address">
		<p class="address">
		<span class="address">2130 H Street, NW</span><br />
		<span class="city">Washington, DC 20052</span><br />
		<span class="phone"><span class="tel">(202) 994-6558</span></span> | <span class="email"><a href="mailto:gelman@gwu.edu">gelman@gwu.edu</a></span></p>
	</article>
	<div id="local-footer-mobile" class="mobile-show">
		<a href="<?php print $front_page; ?>">GW Libraries</a> | <span class="phone"><a href="tel:12029946558" class="tel">202.994.6558</a></span> | <a href="<?php print $front_page; ?>hours">Hours</a> | <a href="<?php print $front_page; ?>contact">Contact</a>
	</div>

        <?php elseif ($campus == "utlc"): ?>
        <article class="address">
                <p class="address">
                <span class="address">2130 H Street, NW</span><br />
                <span class="city">Washington, DC 20052</span><br />
                <span class="phone"><span class="tel">(202) 994-4026</span></span> | <span class="email"><a href="mailto:utlc@gwu.edu">utlc@gwu.edu</a></span></p>
        </article>
        <div id="local-footer-mobile" class="mobile-show">
                <a href="<?php print $front_page; ?>utlc">UTLC</a> | <span class="phone"><a href="tel:12029944026" class="tel">202.994.4026</a></span> | <a href="<?php print $front_page; ?>utlc/contact">Contact UTLC</a>
        </div>
	
	<?php elseif ($campus == "eckles"): ?>
	<article class="address">
		<p class="address">
		<span class="address">2100 Foxhall Road, NW</span><br />
		<span class="city">Washington, DC 20007</span><br />
		<span class="phone"><span class="tel">(202) 242-6620</span></span> | <span class="email"><a href="mailto:eckles@gwu.edu">eckles@gwu.edu</a></span></p>
	</article>
	<div id="local-footer-mobile" class="mobile-show">
		<a href="<?php print $front_page; ?>eckles">Eckles Library</a> | <span class="phone"><a href="tel:12022426620" class="tel">202.242.6620</a></span> | <a href="<?php print $front_page; ?>eckles/hours">Hours</a> | <a href="<?php print $front_page; ?>eckles/contact">Contact</a>
	</div>
	
	<?php elseif ($campus == "virginia"): ?>
	<article class="address">
		<p class="address">
		<span class="address">44983 Knoll Square #179</span><br />
		<span class="city">Ashburn, VA 20147</span><br />
		<span class="phone"><span class="tel">(703) 726-8230</span></span> | <span class="email"><a href="mailto:virginia@gwu.edu">virginia@gwu.edu</a></span></p>
	</article>
	<div id="local-footer-mobile" class="mobile-show">
		<a href="<?php print $front_page; ?>virginia">VSTC Library</a> | <span class="phone"><a href="tel:17037268230" class="tel">703.726.8230</a></span> | <a href="<?php print $front_page; ?>virginia/hours">Hours</a> | <a href="<?php print $front_page; ?>virginia/contact-us">Contact</a>
	</div>
	<?php endif; ?>	
		
	<div class="right" id="local-footer-links">
	  <?php if ($campus == 'utlc'): ?>
		<article>
		<div class="local-links">
			<a href="<?php print $front_page; ?>utlc/contact">Contact UTLC</a> | <a href="http://www.gwu.edu/explore/visitingcampus/">Maps &amp; Directions</a> | <a href="<?php print $front_page; ?>accessibility">Accessibility</a> | </span><span class="mobile-hide-720"><a href="/staff-info">Staff Information</a> | </span><a href="<?php print $front_page; ?>user">Staff Login</a></div>
		</article> 
		<article>
	  <?php else: ?>
                <article>
                <div class="local-links">
                        <a href="<?php print $front_page; ?>hours">Hours</a> | <a href="<?php print $front_page; ?>contact">Contact Us</a> | <a href="http://www.gwu.edu/explore/visitingcampus/">Maps &amp; Directions</a> | <a href="<?php print $front_page; ?>accessibility">Accessibility</a> | <span class="mobile-hide-720"><a href="http://go.gwu.edu/gwlibraries" onclick="ga('send', 'event', 'footer', 'go.gwu.edu/gwlibraries');">Give to GW Libraries</a> | </span><span class="mobile-hide-720"><a href="/staff-info">Staff Information</a> | </span><a href="<?php print $front_page; ?>user">Staff Login</a></div>
                </article> 
	  <?php endif; ?>
		<div class="social-links">
			<ul>
			<?php if ($campus == "gelman" || $campus == "none"): ?> 
				<li>
					<a href="https://www.facebook.com/gelmanlibrary"><i class="fa fa-facebook-square"></i>&nbsp;Gelman Library<span class="sr-only">follow Gelman Library on Facebook</span></a>
				</li>
				<li>
					<a href="https://twitter.com/gelmanlibrary"><i class="fa fa-twitter"></i>&nbsp;@GelmanLibrary<span class="sr-only">follow Gelman Library on Twitter</span></a>
				</li>
				<li>
					<a href="https://pinterest.com/gelmanlibrary/"><i class="fa fa-pinterest"></i>&nbsp;Gelman Library<span class="sr-only">follow Gelman Library on Pinterest</span></a>
				</li>
			<?php elseif ($campus == "eckles"): ?>
			        <li>
                                        <a href="https://twitter.com/eckleslibrary"><i class="fa fa-twitter"></i>&nbsp;@EcklesLibrary<span class="sr-only">follow Eckles Library on Twitter</span></a>
                                </li>
				<li>			
					<a href="https://www.facebook.com/EcklesLibrary"><i class="fa fa-facebook-square"></i>&nbsp;Eckles Library<span class="sr-only">follow Eckles Library on Facebook</span></a>
				</li>
			<?php elseif ($campus == "virginia"): ?>
				<li>
					<a href="https://www.facebook.com/vstclibrary"><i class="fa fa-facebook-square"></i>&nbsp;VSTC Library<span class="sr-only">follow VTSC Library on Facebook</span></a>
				</li>
                        <?php elseif ($campus == "utlc"): ?>
                                <li>
                                        <a href="https://www.youtube.com/user/GWUTLC"><i class="fa fa-youtube-square"></i>&nbsp;UTLC on YouTube<span class="sr-only">follow the UTLC channel on youtube</span></a>
                                </li>
                         <?php endif; ?>

			</ul>
		</div>
		</article>
	</div>
	</section> 
	<!-- end Libraries Footer -->	
	
	<!-- GW Footer -->
	<section id="global-footer" style="width:100% !important;"> 
		<article> 
			<div class="footer-gw-logo"><a href="http://www.gwu.edu"><img id="gw-footer-logo" alt="logo: The George Washington University" class="logo" src="<?php print $front_page; ?><?php print drupal_get_path('theme', $themename); ?>/images/gwfooterlogo.png" width=36 height=27 title="The George Washington University" /></a>
			</div>
		<ul>
			<span class="mobile-show-960"><li><a href="http://www.gwu.edu/">GW</a></li></span>
			<li><a href="http://www.campusadvisories.gwu.edu/">Campus Advisories</a></li>
			<li><a href="http://www.gwu.edu/legal/copyright">Copyright</a></li>
			<li><a href="http://www.gwu.edu/legal/privacypolicy">Privacy Policy</a></li>
			<li><a href="http://www.gwu.edu/legal/termsofuse">Terms of Use</a></li>
			<li><a href="http://www.gwu.edu/contact.cfm">Contact GW</a></li>
			<li style="white-space:nowrap;"><a href="http://www.gwu.edu/azindex">A - Z Index</a></li>
		</ul>
		</article> 
	</section>

		<!-- responsive opt-out links -->
		<div>
		  <?php echo $_SESSION['respOptString'] ?>
		</div>
</footer>
