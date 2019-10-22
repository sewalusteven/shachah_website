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



        <div class="page-section">
            <section class="clients team_2 yellow">
                <div class="row">
                    <div class="col-sm-6 col-xs-12 right-client ">
                        <img src="<?=base_url('assets/services.jpg')?>" alt="image">
                    </div>
                    <div class="col-sm-6 col-xs-12 right-client ">
                        <?php $n = 1; foreach ($services as $service) { ?>
                            <div class="box_<?=($n%2 == 1)?'1':'2'?>">
                                <i class="fa fa-bullseye"></i>
                                <span><?=$service['service']?></span>
                            </div>


                        <?php $n++; } ?>
                    </div>
                </div>
            </section>
        </div>

<?php include 'includes/footer.php' ; ?>