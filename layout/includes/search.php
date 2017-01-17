<form id="coursesearch" class="my_search" action="<?php echo $CFG->wwwroot.'/course/search.php' ?>" method="get" role="form">
    <div class="search-wrap clearfix">
        <input type="text" id="coursesearchbox" size="20" name="search" class="form-control" value="" placeholder="<?php echo get_string('side_menu_search', 'theme_shafla'); ?>">
        <button type="submit">
            <i class="fa fa-search" aria-hidden="true"></i>
        </button>
    </div>
</form>