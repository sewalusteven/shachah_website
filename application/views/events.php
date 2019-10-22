<?php include 'includes/header.php'?>
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
                <?php if (empty($events)){ ?>
                    <div class="col-md-12"><br /></div>
                    <div class="col-md-12">
                        <h1 style="text-align: center"> NO EVENTS POSTED YET </h1>
                    </div>
                    <div class="col-md-12"><br /></div>
                <?php }else{ ?>
                <section class="p_courses yellow">


                    <div class="update-holder">
                        <?php foreach ($events as $event){ ?>
                        <div class="update-box">
                            <div class="row">
                                <div class="col-md-6 col-xs-12 img-block">
                                    <img src="<?=$uploads.$event['tmp_name']?>" width="570" height="260" alt="image">
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="text-block">
                                        <div class="holder_1">
                                            <span class="date"><?=date('F d, Y',strtotime($event['when']))?></span>
                                        </div>
                                        <span class="title"><?=strtoupper($event['name'])?></span>
                                        <p><?=strip_tags(truncbyword($event['description'],32))?></p>
                                        <div class="register-holder">
                                            <a href="<?=site_url('blogs/single/'.$event['event_id'])?>">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                    </div>

                    <div class="col-xs-12">
                        <ul class="pagination inner yellow">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div>
                </section>
                <?php } ?>
            </div>
        </div>
    </div>
<?php include "includes/footer.php"; ?>