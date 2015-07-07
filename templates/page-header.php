<?php if (is_category()) : ?>
	<div class="page-header" style="background:no-repeat center center url(<?php if (function_exists('z_taxonomy_image_url')) {echo z_taxonomy_image_url();} else {echo 'http://storage.googleapis.com/casioevoce/produto-detalhe.jpg';} ?>);"></div>
<?php else: ?>
	<div class="page-header" style="background:no-repeat center center url(http://storage.googleapis.com/casioevoce/produto-detalhe.jpg);"></div>
<?php endif; ?>


