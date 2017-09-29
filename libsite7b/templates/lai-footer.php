<!--<footer id="footer">--> 
	
<!--<section class="pane clear" id="local-footer">-->

	<?php 
	  if ($campus == "gelman" || $campus == "none") {
            $streetAdd = "2130 H Street NW";
            $cityAdd = "Washington, DC 20052";
            $phoneAdd = "202.994.6558";
            $phoneAddLink = "12029946558";
            $emailAdd = "<a href='mailto:gelman@gwu.edu'>gelman@gwu.edu</a>";
	  }
	  elseif ($campus == "eckles") {
            $streetAdd = "Eckles Library<br>2100 Foxhall Road, NW";
            $cityAdd = "Washington, DC 20007";
            $phoneAdd = "202.242.6620";
            $phoneAddLink = "12022426620";
            $emailAdd = "<a href='mailto:eckles@gwu.edu'>eckles@gwu.edu</a>";
	  }
          elseif ($campus == "virginia") {
            $streetAdd = "VSTC Library<br>44983 Knoll Square #179";
            $cityAdd = "Ashburn, VA 20147";
            $phoneAdd = "571.553.8230";
            $phoneAddLink = "17037268230";
            $emailAdd = "<a href='mailto:virginia@gwu.edu'>virginia@gwu.edu</a>";
          }
          elseif ($campus == "utlc") {
            $streetAdd = "2130 H Street NW";
            $cityAdd = "Washington, DC 20052";
            $phoneAdd = "202.994.4026";
            $phoneAddLink = "12029944026";
            $emailAdd = "<a href='mailto:utlc@gwu.edu'>utlc@gwu.edu</a>";
          }
	?>

  <!-- MAXS: The Library/LAI footer -->
    <div class="panel-pane pane-views-panes pane-local-footer-gwtoday-footer-panel-pane">
      <div class="view view-local-footer view-id-local_footer view-display-id-gwtoday_footer_panel_pane view-dom-id-35ea9cc01c7b4ca0fc9260235ad89820">
        <div class="view-content">
          <div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
            <div id="gwtoday-local-footer">
              <div id="gwtoday-footer">
                <div class="promotional-four-col">
                  <div class="footer-logo" id="footer-promo-item-1">
                    <div class="field field-name-field-gwtoday-logo field-type-text-long field-label-hidden">
                      <div class="field-items">
                        <div class="field-item even">
                          <p><a href="https://lai.gwu.edu"><img alt="logo: GW Libraries and Academic Innovation" src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/logos/gw_iddol_libraries_2c-90.png"></a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="footer-address" id="footer-promo-item-2">
                    <div class="field field-name-field-gwtoday-address field-type-text-long field-label-hidden">
                      <div class="field-items">
                        <div class="field-item even">
                          <div>
                            <span style="line-height: 1.5em;"><?php echo $streetAdd; ?><br></span>
                          </div>
                          <div><?php echo $cityAdd; ?><br>
                            <br>
                            <p class="mobile-show"><span class="phone" style="line-height: 1.5em;"><a href='<?php echo $phoneAddLink; ?>' class='tel'><?php echo $phoneAdd; ?></a></span></p>
                            <p class="mobile-hide" style="display: inline-block;"><span class="phone" style="line-height: 1.5em;"><?php echo $phoneAdd; ?></span></p>
                            <p><span style="line-height: 2.5em;"><?php echo $emailAdd; ?></span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="footer-social-links" id="footer-promo-item-3">
                    <div class="field field-name-field-gwtoday-social-links field-type-text-long field-label-hidden">
                      <div class="field-items">
                        <div class="field-item even">
                        <?php if ($campus == "gelman" || $campus == "none"): ?>
                          <p><a href="https://twitter.com/gelmanlibrary" target="_blank"><img alt="logo: Twitter" src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/icons/twitter-logo.png" style="width: 33px; height: 26px;"></a></p>
                          <p><a href="https://twitter.com/gelmanlibrary" target="_blank">Follow us on Twitter</a></p>
                          <p><a href="https://www.facebook.com/gelmanlibrary" target="_blank"><img alt="logo: Facebook" src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/icons/facebook-logo.png" style="width: 33px;"></a></p>
                          <p><a href="https://www.facebook.com/gelmanlibrary" target="_blank">Like us on Facebook</a></p>
                        <?php elseif ($campus == "eckles"): ?>
                          <p><a href="https://twitter.com/eckleslibrary" target="_blank"><img alt="logo: TWitter" src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/icons/twitter-logo.png" style="width: 33px; height: 26px;"></a></p>
                          <p><a href="https://twitter.com/eckleslibrary" target="_blank">Follow us on Twitter</a></p>
                          <p><a href="https://www.facebook.com/eckleslibrary" target="_blank"><img alt="logo: Facebook" src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/icons/facebook-logo.png" style="width: 33px;"></a></p>
                          <p><a href="https://www.facebook.com/eckleslibrary" target="_blank">Like us on Facebook</a></p>

                        <?php elseif ($campus == "virginia"): ?>
                          <p><a href="https://www.facebook.com/vstclibrary" target="_blank"><img alt="logo: Facebook" src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/icons/facebook-logo.png" style="width: 33px;"></a></p>
                          <p><a href="https://www.facebook.com/vstclibrary" target="_blank">Like us on Facebook</a></p>

                        <?php elseif ($campus == "utlc"): ?>
                          <p><a href="https://www.youtube.com/user/GWUTLC" target="_blank"><img alt="logo: YouTube" src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/icons/youtube-logo.png" style="width: 33px;"></a></p>
                          <p><a href="https://www.youtube.com/user/GWUTLC" target="_blank">UTLC on YouTube</a></p>

                        <?php endif; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="footer-quick-links" id="footer-promo-item-4">
                    <div class="field field-name-field-gwtoday-quick-links field-type-text-long field-label-hidden">
                      <div class="field-items">
                        <div class="field-item even">
                          <?php if ($campus == "utlc"): ?>
                          <a href="/utlc/contact">Contact UTLC</a><br/>
                          <a href="/about/facilities/maps">Maps &amp; Directions</a><br/>
                          <a href="/accessibility">Accessibility</a><br/>
                          <a href="https://lai.gwu.edu/staff-info">Staff Information</a><Br/>
                          <a href="/user">Staff Login</a><br/>
                          <?php else: ?>
                          <a href="/hours">Hours</a><br>
                          <a href="/contact">Contact Us</a><br>
                          <a href="/about/feedback">Send Feedback</a><br>
                          <a href="/about/facilities/maps">Maps &amp; Directions</a><br>
                          <a href="http://library.gwu.edu/accessibility">Accessibility</a><br>
                          <a href="http://go.gwu.edu/gwlibraries">Give to GW Libraries</a><br>
                          <a target="_blank" href="https://lai.gwu.edu/staff-info">Staff Information</a><br>
                          <a href="https://<?php print $_SERVER['SERVER_NAME']; ?>/user">Staff Login</a><br>
                          <?php endif; ?>
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
