<?php include 'includes/header.php'?>

    <div class="justics-holder">
        <div id="carousel-example-generic102" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php $x = 1; foreach ($slides as $slide){ ?>
                    <div class="item <?=($x == 1)?'active':''?>">
                        <div class="justices-img">
                            <img src="<?=$uploads.$slide['tmp_name']?>" width="1920" height="1060" alt="image" class="img">
                            <div class="justics-text">
                                <div class="txt">
                                    <h1><?=$slide['caption']?></h1>
                                    <a class="more courses" href="<?=$slide['url']?>"><?=$slide['link_text']?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $x++; } ?>

            </div>
            <!-- Controls -->
            <a class="left carousel-control prev-2" href="#carousel-example-generic102" role="button" data-slide="prev">
                <span><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control next-2" href="#carousel-example-generic102" role="button" data-slide="next">
                <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="page-section white yellow">
        <div class="container">
            <section class="welcome yellow">
                <div class="row">
                    <div class="col-sm-4 col-xs-12 yellow">
                        <div class="column yellow-1">
                            <div class="img-holder">
                                <i class="icon-anchor"></i>
                            </div>
                            <span class="title"><?=$core['title']?></span>
                            <p><?=truncbyword($core['details'],25)?></p>
                            <a href="<?=site_url('about')?>">read more</a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 yellow">
                        <div class="column yellow-2">
                            <div class="img-holder">
                                <i class="icon-hourglass"></i>
                            </div>
                            <span class="title"><?=$char['title']?></span>
                            <p><?=truncbyword($char['details'],25)?></p>
                            <a href="<?=site_url('about')?>">read more</a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 yellow">
                        <div class="column yellow-3">
                            <div class="img-holder">
                                <i class="icon-rocket"></i>
                            </div>
                            <span class="title"><?=$aim['title']?></span>
                            <p><?=truncbyword($aim['details'],25)?></p>
                            <a href="<?=site_url('about')?>">read more</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="welcome-d col-sm-8 col-xs-12">
                        <h1><?=strtoupper($principle['title'])?></h1>
                        <?=truncbyword($principle['details'],150,'..</p>')?>
                        <a class="more" href="<?=site_url('about')?>">read more</a>
                    </div>
                    <div class="col-sm-4 col-xs-12 welcome-img">
                        <img src="<?=base_url('assets/principle.jpg')?>" width="373" height="569" alt="image">
                    </div>
                </div>
            </section>
        </div>
    </div>


    <div class="page-section black">
        <section class="gallery">
            <div class="container">
                <div class="row">
                    <div class="gallery-heading">
                        <h1>OUR GALLERY</h1>
                    </div>
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="row">
                                    <?php foreach ($galleries as $gallery){ ?>
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="gallery-img">
                                            <img src="<?=$uploads.$gallery['tmp_name']?>" width="360" height="350" alt="image">
                                            <div class="hover">
                                                <span><?=$gallery['name']?></span>

                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>

                        <!-- Controls -->

                    </div>
                    <div class="control-box">
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>

        </section>
        <div class="view-more" ><a href="<?=site_url('gallery')?>"> view more</a></div>
    </div>


    <div class="page-section white">
        <div class="container">
            <div class="row">
                <section class="w-choose">
                    <div class="col-md-4 col-sm-12 col-xs-12 pull-right w-choose-image">
                        <img src="<?=base_url('assets/registration.jpg')?>" width="373" height="569" alt="image">

                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="heading-area welcome-d">
                            <h1><?=strtoupper($registration['title'])?></h1>
                            <?=truncbyword($registration['details'],150,'...</p>')?>
                            <a class="more" href="<?=site_url('about')?>">read more</a>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </div>

<?php include 'includes/footer.php' ?>