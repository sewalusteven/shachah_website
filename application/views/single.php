<?php include 'includes/header.php' ; ?>

<div class="banner-2 yellow">
    <img src="<?=base_url('assets/bg1.png')?>" width="1920" height="157" alt="image">
    <div class="banner-text">
        <h2><?=truncbyword($title,2)?></h2>
        <ul class="breadcrumb yellow">
            <li><a href="<?=site_url('/')?>">home</a></li>
            <li><a href="<?=site_url($crumburl)?>"><?=truncbyword($crumb,2)?></a></li>
            <li><?=ucwords($title)?></li>
        </ul>
    </div>

</div>

    <div id="main">
        <div class="container">
            <div class="col-md-8 col-sm-7 col-xs-12">
                <div class="row">
                    <section class="latest-news inner yellow">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="img-holder">
                                    <img src="<?=$uploads.$single['tmp_name']?>" width="370" height="168" alt="image">
                                    <span class="date">
										<?=date('d',strtotime($single['when']))?>
										<em><?=date('M',strtotime($single['when']))?></em>
									</span>
                                </div>
                                <div class="news-text">
                                    <span class="title"><?=strtoupper($single['name'])?></span>
                                    <?=$single['description']?>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-md-4 col-sm-5 col-xs-12">
                <div class="wedget">

                    <span class="title recent yellow">recent posts</span>
                    <ul class="post-list yellow">
                        <li>
                            <a class="img-holder" href="#">
                                <img src="http://placehold.it/60x60" width="60" height="60" alt="image">
                            </a>
                            <div class="post-text">
                                <a href="#">The sweeping the cloud what might be right for you may</a>
                                <span class="date">AUGUST 03, 2016</span>
                            </div>
                        </li>
                        <li>
                            <a class="img-holder" href="#">
                                <img src="http://placehold.it/60x60" width="60" height="60" alt="image">
                            </a>
                            <div class="post-text">
                                <a href="#">The sweeping the cloud what might be right for you may</a>
                                <span class="date">july 23, 2016</span>
                            </div>
                        </li>
                        <li>
                            <a class="img-holder" href="#">
                                <img src="http://placehold.it/60x60" width="60" height="60" alt="image">
                            </a>
                            <div class="post-text">
                                <a href="#">The sweeping the cloud what might be right for you may</a>
                                <span class="date">june 19, 2016</span>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
<?php include 'includes/footer.php' ; ?>
