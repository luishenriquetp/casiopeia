<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url(home_url('/')); ?>">
  <label class="sr-only"><?php _e('Buscar por:', 'roots'); ?></label>
  <div class="input-group">
    <input type="search" value="<?php echo get_search_query(); ?>" name="s" class="search-field form-control" placeholder="<?php _e('Busque aqui'); ?>">
    <span class="input-group-btn">
      <button class="btn btn-default" type="button"><i class="ion-search"></i></button>
    </span>
  </div>
</form>
