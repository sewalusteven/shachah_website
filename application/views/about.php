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
    <div class="page-section white short">
        <div class="container">
            <div class="row">
                <section class="services-tab short col-md-6 col-sm-12 col-xs-12">
                    <div>
                        <div class="tab-area">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                                        <i class="icon-anchor"></i>
                                        <?=strtoupper($core['title'])?>
                                    </a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                                        <i class="icon-hourglass"></i>
                                        <?=strtoupper($char['title'])?>
                                    </a></li>
                                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
                                        <i class="icon-rocket"></i>
                                        <?=strtoupper($aim['title'])?>
                                    </a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                    <?=$core['details']?>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile">
                                    <?=$char['details']?>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="messages">
                                    <?=$aim['details']?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="services-tab short col-md-6 col-sm-12 col-xs-12">
                    <img src="<?=base_url('assets/sec2.jpg')?>" alt="image">
                </section>
            </div>
        </div>
    </div>

        <div class="page-section">
            <div class="container">
                <div class="row">
                    <section class="about">
                        <div class="col-sm-6 col-xs-12">
                            <img src="<?=base_url('assets/about.jpg')?>" alt="image">
                        </div>
                        <div class="col-sm-6 col-xs-12 pull-right">
                            <h1><?=$principle['title']?></h1>
                            <span class="sub"><?=$principle['details']?></span>

                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="page-section white short">
            <div class="container">
                <div class="row">

                    <section class="services-tab short col-md-6 col-sm-12 col-xs-12">
                        <div>
                            <div class="tab-area left-img">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home11" aria-controls="home11" role="tab" data-toggle="tab">
                                            <i class="icon-anchor"></i>
                                            <?=strtoupper($staff['title'])?>
                                        </a></li>
                                    <li role="presentation"><a href="#profile11" aria-controls="profile11" role="tab" data-toggle="tab">
                                            <i class="icon-hourglass"></i>
                                            <?=strtoupper($registration['title'])?>
                                        </a></li>
                                    <li role="presentation"><a href="#messages11" aria-controls="messages11" role="tab" data-toggle="tab">
                                            <i class="icon-rocket"></i>
                                            <?=strtoupper($parent['title'])?>
                                        </a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="home11">
                                        <?=$staff['details']?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="profile11">
                                        <?=$registration['details']?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="messages11">
                                        <?=$parent['details']?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="services-tab short col-md-6 col-sm-12 col-xs-12">
                        <img src="<?=base_url('assets/sec1.jpg')?>" alt="image">
                    </section>

                </div>
            </div>
        </div>
<?php include 'includes/footer.php' ; ?>