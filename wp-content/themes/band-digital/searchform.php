<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" class="form-group">
    <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="search" class="searchform form-control">
    <button class="searchform-button">
        <i class="fa fa-search"></i>
    </button>
</form>