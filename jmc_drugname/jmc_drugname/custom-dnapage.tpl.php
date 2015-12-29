<?php
   drupal_add_css(drupal_get_path('module', 'jmc_drugname') . '/css/drugname.css' );
?>
<div class="dna-form">
  <?php print render($result); ?>
</div>
<div id="search_result_wrapper"></div>
