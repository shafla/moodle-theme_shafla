<div class="parallax-window" data-position="bottom" data-over-scroll-fix data-parallax="scroll" data-image-src="
        <?php echo $PAGE->theme->setting_file_url('parallaximg', 'parallaximg');?>">

	<div id="page-parallax-wrapper" class="container-fluid clearfix">
        <div class="parallax-region-wrapper grid-row clearfix">
            <div class="parallax-region-one grid-2-col grid-tab-2-col grid-mobile-1-col">
                <?php if ($knownparallaxregioni) { echo $OUTPUT->blocks('side-parallaxi'); }?>
            </div>
            <div class="parallax-region-two grid-2-col grid-tab-2-col grid-mobile-1-col">
                <?php if ($knownparallaxregionii) { echo $OUTPUT->blocks('side-parallaxii'); }?>
            </div>
        </div>
    </div>

</div>