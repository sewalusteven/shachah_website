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

    <div class="accordion-1 first">
        <div class="col-xs-12 heading-short">
            <div class="row">
                <h1 class="short"><?=strtoupper($title)?></h1>
            </div>
        </div>
        <div class="container">
            <?php if (empty($faqs)){ ?>
                <h1 style="text-align: center"> NO FAQS POSTED YET </h1>
            <?php }else{ ?>
            <div class="row">
                <div class="panel-group" id="accordion">
                    <?php $x = 1; foreach ($faqs as $faq){ ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$faq['content_id']?>">
                                        <span class="glyphicon glyphicon-minus"></span>
                                        <?=$faq['title']?>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse<?=$faq['content_id']?>" class="panel-collapse collapse <?=($x == 1)?'in':''?>">
                                <div class="panel-body">
                                    <?=$faq['details']?>
                                </div>
                            </div>
                        </div>
                    <?php $x++; } ?>

                </div>
            </div>
            <?php } ?>
        </div>
    </div>

<?php include 'includes/footer.php' ; ?>