<!--<footer id="footer">--> 
	
<!--<section class="pane clear" id="local-footer">-->

	<?php 

	  // expand this to include the contact info variables for each library

	  if ($campus == "utlc") {
	    $page_group = 'University Teaching & Learning Center';
	  }
	  else {
	    $page_group = 'GW Libraries';
	  }
	?>

	<!--<div class="footer-lib-logo">
		<h2><?php print $page_group ?></h2>
	</div>-->


 <!-- MAXS: The Library/LAI footer -->
    <div class="panel-pane pane-views-panes pane-local-footer-gwtoday-footer-panel-pane">
      <div class="view view-local-footer view-id-local_footer view-display-id-gwtoday_footer_panel_pane view-dom-id-35ea9cc01c7b4ca0fc9260235ad89820">
        <div class="view-content">
          <div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
            <div id="gwtoday-local-footer">
              <div id="gwtoday-footer">
                <div class="promotional-four-col">
                  <div class="footer-logo" id="promo-item-1">
                    <div class="field field-name-field-gwtoday-logo field-type-text-long field-label-hidden">
                      <div class="field-items">
                        <div class="field-item even">
                          <p><img alt="logo: GW Libraries and Academic Innovation" src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/logos/gw_iddol_libraries_2c-90.png"></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="footer-address" id="promo-item-2">
                    <div class="field field-name-field-gwtoday-address field-type-text-long field-label-hidden">
                      <div class="field-items">
                        <div class="field-item even">
                          <div>
                            <span style="line-height: 1.5em;">2130 H St NW<br></span>
                          </div>
                          <div>
                            Washington, DC 20052<br>
                            <br>
                            <p><span style="line-height: 1.5em;">202-994-6558</span></p>
                            <p><span style="line-height: 1.5em;"><a href="mailto:gelman@gwu.edu">gelman@gwu.edu</a></span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="footer-social-links" id="promo-item-3">
                    <div class="field field-name-field-gwtoday-social-links field-type-text-long field-label-hidden">
                      <div class="field-items">
                        <div class="field-item even">
                          <p><a href="https://twitter.com/GWOnlineEd" alt="logo: Twitter" target="_blank"><img alt="" src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/icons/twitter-logo.png" style="width: 33px; height: 26px;"></a></p>
                          <p><a href="https://twitter.com/GWOnlineEd" target="_blank">Follow us on Twitter</a></p>
                          <p><a href="https://twitter.com/GWOnlineEd" alt="logo: Facebook" arget="_blank"><img alt="" src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/icons/facebook-logo.png" style="width: 33px;"></a></p>
                          <p><a href="#">Like us on Facebook</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="footer-quick-links" id="promo-item-4">
                    <div class="field field-name-field-gwtoday-quick-links field-type-text-long field-label-hidden">
                      <div class="field-items">
                        <div class="field-item even">
                          <a href="#">Hours</a><br>
                          <a href="#">Contact Us</a><br>
                          <a href="#">Maps &amp; Directions</a><br>
                          <a href="#">Accessibility</a><br>
                          <a href="#">Giving to GW Libraries</a><br>
                          <a href="#">Staff Information</a><br>
                          <a href="#">Staff Login</a><br>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<!-- MAXS: The blue GW-wide footer -->
<footer class="region region-footer" id="footer">
  <div id="footer-wrapper">
    <div class="footer-logof">
      <a href="http://www.gwu.edu/" rel="home" alt="logo: the George Washington University" target="_blank"><img alt="GW logo" height="42" src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/logos/gw_txh_2cs_rev.png" typeof="foaf:Image" width="300"></a>
    </div>
    <div class="row-one">
      <ul>
        <li>
          <a href="http://www.campusadvisories.gwu.edu/" target="_blank">Campus Advisories</a>
        </li>
        <li>
          <a href="http://my.gwu.edu/files/policies/EqualEmploymentOpportunityStatement.pdf" target="_blank">Non-Discrimination Policy</a>
        </li>
        <li>
          <a href="http://www.gwu.edu/privacy-policy" target="_blank">Privacy Policy</a>
        </li>
      </ul>
    </div>
    <div class="row-two">
      <ul>
        <li>
          <a href="http://www.gwu.edu/contact-gw" target="_blank">Contact GW</a>
        </li>
        <li>
          <a href="http://www.gwu.edu/terms-use" target="_blank">Terms of Use</a>
        </li>
        <li>
          <a href="http://www.gwu.edu/copyright" target="_blank">Copyright</a>
        </li>
        <li>
          <a href="http://www.gwu.edu/az-index" target="_blank">A-Z Index</a>
        </li>
      </ul>
    </div>
  </div>
</footer>

	<!-- responsive opt-out links -->
	<div>
	  <?php echo $_SESSION['respOptString'] ?>
	</div>
