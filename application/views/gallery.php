<?php include 'includes/header.php' ; ?>

<div class="banner-2 yellow">
    <img src="<?=base_url('assets/bg1.png')?>" width="1920" height="157" alt="image">
    <div class="banner-text">
        <h2><?=$title?></h2>
        <ul class="breadcrumb yellow">
            <li><a href="<?=site_url('/')?>">home</a></li>
            <li><?=ucwords($title)?></li>
        </ul>
    </div>

</div>

<div class="page-section white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br />
            </div>
            <div class="col-md-12">
                <div class="portfolio-content portfolio-3">
                    <div class="clearfix">
                        <div id="js-filters-lightbox-gallery1" class="cbp-l-filters-dropdown cbp-l-filters-dropdown-floated">
                            <div class="cbp-l-filters-dropdownWrap border-grey-salsa">
                                <div class="cbp-l-filters-dropdownHeader uppercase">Sort Gallery</div>
                                <div class="cbp-l-filters-dropdownList">
                                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item uppercase"> All (
                                        <div class="cbp-filter-counter"></div> Images) </div>

                                    <?php foreach ($categories as $key => $category) { ?>

                                        <div data-filter=".<?=slugify($category['category'])?>" class="cbp-filter-item uppercase"> <?=$category['category']?> (
                                            <div class="cbp-filter-counter"></div> Images) </div>

                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="js-grid-lightbox-gallery" class="cbp">
                        <?php  foreach ($galleries as $key => $gallery) { ?>
                            <div class="cbp-item <?=slugify($gallery['category'])?>">
                                <a class="cbp-caption cbp-singlePageInline" data-title="<?=$gallery['name']?>" rel="nofollow">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="<?=$uploads.$gallery['tmp_name']?>" width="600" height="600" alt=""> </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignLeft">
                                            <div class="cbp-l-caption-body">
                                                <div class="cbp-l-caption-title"><?=ucwords($gallery['name'])?></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        <?php } ?>

                    </div>

                </div>
            </div>
            <div class="col-md-12">
                <br />
            </div>
        </div>
    </div>
</div>


<?php include 'includes/footer.php' ; ?>
