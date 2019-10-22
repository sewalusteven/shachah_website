<?php include 'includes/header.php'; ?>
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
        <div class="container">
            <div class="row">
                <?php if (empty($news)){ ?>
                    <div class="col-md-12"><br /></div>
                    <div class="col-md-12">
                        <h1 style="text-align: center"> NO ANNOUNCEMENTS POSTED YET </h1>
                    </div>
                    <div class="col-md-12"><br /></div>
                <?php }else{ ?>
                <section class="l-events">
                    <div id="carousel-example-generic221" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <?php $n = 1; foreach ($news as $new){ ?>
                                <?php if(($n%2) == 1){ //if it has a remainder, it means it shows up first ?>
                                    <?php if($n == count($news)){ //if last item ?>
                                        <div class="item active">
                                            <div class="row">
                                                <div class="col-sm-6 col-xs-12 l-column">
                                                    <img src="<?=$uploads.$new['tmp_name']?>" width="570" height="260" alt="image">
                                                </div>
                                                <div class="col-sm-6 col-xs-12 l-column">
                                                    <span class="count"><?=$new['event_id']?></span>
                                                    <span class="date"><?=date('F d, Y',strtotime($new['when']))?></span>
                                                    <strong><?=$new['name']?></strong>
                                                    <?=truncbyword($new['description'],32,'...</p>')?>
                                                    <a href="<?=site_url('blogs/single/'.$new['event_id'])?>">view details</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }else{ //if not last item ?>
                                        <div class="item active">
                                            <div class="row">
                                                <div class="col-sm-6 col-xs-12 l-column">
                                                    <img src="<?=$uploads.$new['tmp_name']?>" width="570" height="260" alt="image">
                                                </div>
                                                <div class="col-sm-6 col-xs-12 l-column">
                                                    <span class="count"><?=$new['event_id']?></span>
                                                    <span class="date"><?=date('F d, Y',strtotime($new['when']))?></span>
                                                    <strong><?=$new['name']?></strong>
                                                    <?=truncbyword($new['description'],32,'...</p>')?>
                                                    <a href="<?=site_url('blogs/single/'.$new['event_id'])?>">view details</a>
                                                </div>
                                            </div>

                                <?php }}else{  //shows up second?>
                                    <?php if($n == count($news)){ //if last item ?>
                                        <div class="row align-right">
                                            <div class="col-sm-6 col-xs-12 l-column pull-right">
                                                <img src="<?=$uploads.$new['tmp_name']?>" width="570" height="260" alt="image">
                                            </div>
                                            <div class="col-sm-6 col-xs-12 l-column">
                                                <span class="count"><?=$new['event_id']?></span>
                                                <span class="date"><?=date('F d, Y',strtotime($new['when']))?></span>
                                                <strong><?=$new['name']?></strong>
                                                <?=truncbyword($new['description'],32,'...</p>')?>
                                                <a href="<?=site_url('blogs/single/'.$new['event_id'])?>">view details</a>
                                            </div>
                                        </div>
                                        </div>
                                    <?php }else{//if not last item ?>
                                            <div class="row align-right">
                                                <div class="col-sm-6 col-xs-12 l-column pull-right">
                                                    <img src="<?=$uploads.$new['tmp_name']?>" width="570" height="260" alt="image">
                                                </div>
                                                <div class="col-sm-6 col-xs-12 l-column">
                                                    <span class="count"><?=$new['event_id']?></span>
                                                    <span class="date"><?=date('F d, Y',strtotime($new['when']))?></span>
                                                    <strong><?=$new['name']?></strong>
                                                    <?=truncbyword($new['description'],32,'...</p>')?>
                                                    <a href="<?=site_url('blogs/single/'.$new['event_id'])?>">view details</a>
                                                </div>
                                            </div>
                                        </div>

                            <?php }} $n++; } ?>
                        </div>
                    </div>
                </section>
                 <?php } ?>
            </div>
        </div>
    </div>
<?php include "includes/footer.php"; ?>

