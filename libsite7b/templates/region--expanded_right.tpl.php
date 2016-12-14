<?php if ($content): ?>
<script>
jQuery(document).ready(function() {

  jQuery( ".box-right" ).slideDown( "slow", function() {
  });

});
</script>

  <div id="right-region" class="<?php print $classes; ?> box-right" style="display:none;"><div class="section">
    <?php print $content; ?>

  <script>
    // test for debugging
    jQuery(document).ready(function(){
      //alert( "region right tpl loaded" );
    });
  </script>

  </div></div><!-- /.section, /.region -->
<?php endif; ?>

