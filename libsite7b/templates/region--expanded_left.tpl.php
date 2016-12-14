<?php if ($content): ?>
<script>
  jQuery(window).resize(function() {
    if(window.innerWidth<1439)document.getElementById('expanded-regions').style.display='none';
    if(window.innerWidth>1440)document.getElementById('expanded-regions').style.display='block';
  });

  jQuery(document).ready(function() {
    if(window.innerWidth<1439)document.getElementById('expanded-regions').style.display='none';
    if(window.innerWidth>1440)document.getElementById('expanded-regions').style.display='block';
    jQuery( ".box-left" ).slideDown( "slow", function() {
    });
  });
</script>

  <div id="left-region" class="<?php print $classes; ?> box-left" style="display:none;"><div class="section">
    <?php print $content; ?>

  <script>
    // test for debugging
    jQuery(document).ready(function(){
      //alert( "region left tpl loaded" );
    });
  </script>

  </div></div><!-- /.section, /.region -->
<?php endif; ?>
