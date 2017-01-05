<?php
  // Define the themename for drupal_get_path calls
  $themename = 'libsite7b';
?>

<div id="container" class="three-six-three logo-slogan">
	<div id="skip">
	  <a href="#maincontent"><?php print t('Skip to Main Content'); ?></a>
	  <a href="#secondary-nav"><?php print t('Skip to Main Menu'); ?></a>
	</div>
</div>

<!-- Lib Header -->  
<?php include 'lai-header.php'; ?>

<!-- Lib Nav (included in lai-header now) -->
<?php // include 'libnav.php'; ?>
	
<?php // navigation ?>
  <?php // print render($page['navbar']); ?>

<script>document.createElement('main'); //for IE compatibility with semantic elements</script>

<!-- this is in the new header file at the moment <main id="maincontent" class="main-container center-content">-->

        <?php if(!drupal_is_front_page() && ($_SERVER["REQUEST_URI"] != '/news-events')): ?>
	<!-- floating navigation "top" button -->
	<script>
		function someScroll(ev){
	    if(window.pageYOffset>160 && window.innerWidth>1220)document.getElementById("backToTopContainer").style.display = "block";
	    if(window.pageYOffset<160 && window.innerWidth>1220)document.getElementById("backToTopContainer").style.display = "none";
		}
		window.onscroll=someScroll;

		jQuery(window).resize(function() {
			if(window.innerWidth<1220)document.getElementById("backToTopContainer").style.display = "none";
			if(window.innerWidth>1219 && window.pageYOffset>160)document.getElementById("backToTopContainer").style.display = "block";   
		});
	</script>

	<div style="display:none;" id="backToTopContainer">
		<a href="#" title="top of page">
		  <div class="back-to-top" id="backToTop" style="background-position:0 -40px;" onmouseover="javascript:document.getElementById('backToTop').style.backgroundPosition='0 0px';" onmouseout="javascript:document.getElementById('backToTop').style.backgroundPosition='0 -40px';" onblur="javascript:document.getElementById('backToTop').style.backgroundPosition='0 -40px';">
		  </div>
	  </a>
	</div>
        <!-- end floating navigation -->
	<?php endif; ?>

  <div id="content-container"> 
 
    <?php if ($tabs): ?><div class="tabs mobile-hide"><?php print render($tabs); ?></div><?php endif; ?>

    <?php if(isset($messages) && isset($node)): ?>
	    <?php if (($messages) && ($node->type == 'webform')): ?>
		    <div id="messages">
		    	<div class="section clearfix">
		        <?php print $messages; ?>
		      </div>
		    </div> <!-- /.section, /#messages -->
		  <?php endif; ?>  
	  <?php endif; ?>  

    <?php print render($page['help']); ?>
    <?php if ($action_links): ?>
      <ul class="action-links">
      	<?php print render($action_links); ?>
      </ul>
    <?php endif; ?>

    <!-- expanded content regions -->
    <?php if(drupal_is_front_page() || ($_SERVER["REQUEST_URI"] == '/news-events')): ?>
      <div id='expanded-regions' style='display:block;'>
      <?php print render($page['expanded_left']); ?>
      <?php print render($page['expanded_right']); ?>
      </div>
    <?php endif; ?>
    <!-- end expanded content regions -->

	  <!-- start sidebars -->	
	  <?php if ($page['rsidebar']): 	// drupal_add_library('system', 'drupal.collapse'); ?>
		  <div id="right-sidebar">
		    <div class="sidebar-content">
		      <?php print render($page['rsidebar']); ?>
		    </div>
		  </div>		
	  <?php endif; ?>  
	  
	  <?php if ($page['sidebar']): ?>
		  <div id="main-sidebar">
			  <div id="expand-sidebar-spot">
				  <div class="expand-sidebar mobile-show">
					  <a href="" onclick="show('sidebar-content'); show('sidebarshow'); show('sidebarhide'); return false;" class=""><span id="sidebarshow" style="display:block;"><i class="fa fa-bars fa-lg"></i> show more <i class="fa fa-arrow-right"></i></span><span id="sidebarhide" style="display:none;"><i class="fa fa-bars fa-lg"></i> show less <i class="fa fa-arrow-down"></i></span></a>
				  </div>
			  </div>

        <script type="text/javascript">
        function sidebarHide(sh){
          if(window.innerWidth > 640)document.getElementById("sidebar-content").style.display = "block";
          if(document.getElementById('sidebarshow').style.display == 'block' && window.innerWidth < 640)document.getElementById('sidebar-content').style.display = 'none';
        }
        window.onresize=sidebarHide
        window.onload=sidebarHide
        </script>
		
			  <div id="sidebar-content" class="sidebar-content" style="display:block;">
				  <?php print render($page['sidebar']); ?>
			  </div>
			
		  </div>
	  <?php endif; ?>
	  <!-- end sidebars -->

	<!-- main content -->
	
	<!-- determine main content width -->
	<?php if ((!$page['sidebar']) && (!$page['rsidebar'])): $primwid='363'; ?>		
	<?php endif; ?>
	<?php if (($page['sidebar']) && (!$page['rsidebar'])): $primwid='063'; ?>		
	<?php endif; ?>
	<?php if ((!$page['sidebar']) && ($page['rsidebar'])): $primwid='360'; ?>
	<?php endif; ?>
	<?php if (($page['sidebar']) && ($page['rsidebar'])): $primwid='060'; ?>		
	<?php endif; ?>
	
	<div class="primary-content-<?php echo $primwid ?>">
		<section class="all-purpose-detail pane">

      <?php if ($page['content_above_title']): ?>	
			  <div id="content-above-title">
			    <?php print render($page['content_above_title']); ?>
			  </div>
      <?php endif; ?>

		  <!-- page title -->
	    <?php if(!drupal_is_front_page()): ?>
	      <?php print render($title_prefix); ?>
	        <?php if ($title): ?>
	          <h1 class="page-title"><?php print $title; ?></h1>
	        <?php endif; ?>
	      <?php print render($title_suffix); ?>
	    <?php endif; ?>

	    <?php print render($page['content_top']); ?>
		
      <?php print render($page['content']); ?>
      
      <?php if(drupal_is_front_page()): ?>

        <?php // Front page regions ?>

        <div id="frontPageBanner">
         	<?php print render($page['page_banner']); ?>
    	  </div>
    	
    	</div>
        
	    <?php elseif ($_SERVER["REQUEST_URI"] == '/news-events'): ?>
  
        <?php // News and Events page content goes here ?>      
 		    <div id="newsBottomBoxes">
	        <div id="frontBottomRegion">
	          <?php print render($page['content_front_bottom']); ?>
	        </div>
	        <div id="frontBottomRegionRight">
	          <?php print render($page['content_front_bottom_right']); ?>
	        </div>
        </div>
 
        <?php // This is just a clear all div ?>
        <div class="clear"></div>

		  <?php elseif ($_SERVER["REQUEST_URI"] == '/scrc'): ?>

        <?php // SCRC main page content goes here ?>      
 		    <div id="scrcBottomBoxes">
	        <div id="frontBottomRegion">
	          <?php print render($page['content_front_bottom']); ?>
	        </div>
	        <div id="frontBottomRegionRight">
	          <?php print render($page['content_front_bottom_right']); ?>
	        </div>
        </div>

		<?php endif; ?>
			<div id="contentBottom">
			  <?php print render($page['content_bottom']); ?>
			</div>
		</section>
  
  	<div class="clear"></div>
  	
	</div> <!-- close primary content -->
  </div> <!-- close content container -->
</main> <!-- close main container -->

<div class="clear"></div>
	
<!-- GW Footer -->
<?php include 'lai-footer.php'; include 'jsbottom.html';?>
<?php
// print '<pre>';
// print_r($variables);
// print_r($node);
// print '</pre>';
?>
