<?php include 'includes/header.php' ; ?>
<!-- BEGIN: PAGE CONTAINER -->
<div class="c-layout-page">
    <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
    <div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
        <div class="container">
            <div class="c-page-title c-pull-left">
                <h3 class="c-font-uppercase c-font-sbold"><?=$title?></h3>
            </div>
            <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                <li>
                    <a href="#">Pages</a>
                </li>
                <li>/</li>
                <li class="c-state_active"><?=$title?></li>
            </ul>
        </div>
    </div>
    <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
    <!-- BEGIN: PAGE CONTENT -->
    <!-- BEGIN: BLOG LISTING -->
    <div class="c-content-box c-size-md">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="c-content-blog-post-card-1-grid">
                        <div class="row">
                            <?php
                            if(sizeof($blogs) == 0)
                            {
                                echo '<div class="col-md-12"><h1>No Articles or blogs posted yet !!</h1></div>';
                            }
                            else
                            {
                                $x = 1;
                                echo '<div class="col-md-6">';
                                foreach ($blogs as $key => $blog)
                                {
                                    $created = date("d M Y, h:i A", strtotime($blog['created']));
                                    $liststr = '';
                                    foreach ($blog['tags'] as $keym => $tag) {

                                        $liststr .='<li>'.$tag['tag'].'</li>';

                                    }

                                    if($x%2 == 1)
                                    {
                                        echo '<div class="c-content-blog-post-card-1 c-option-2 c-bordered">
                                            <div class="c-media c-content-overlay">
                                                <div class="c-overlay-wrapper">
                                                    <div class="c-overlay-content">
                                                        <a href="'.site_url('blogs/single/'.$blog['blog_id']).'">
                                                            <i class="icon-link"></i>
                                                        </a>
                                                        <a href="'.$baselink.'cblogs/'.$blog['tmp_name'].'" data-lightbox="fancybox" data-fancybox-group="gallery">
                                                            <i class="icon-magnifier"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <img class="c-overlay-object img-responsive" src="'.$baselink.'cblogs/'.$blog['tmp_name'].'" alt=""> </div>
                                            <div class="c-body">
                                                <div class="c-title c-font-bold c-font-uppercase">
                                                    <a href="'.site_url('blogs/single/'.$blog['blog_id']).'">'.$blog['title'].'</a>
                                                </div>
                                                <div class="c-author"> By
                                                    <a href="#">
                                                        <span class="c-font-uppercase">'.$blog['author'].'</span>
                                                    </a> on
                                                    <span class="c-font-uppercase">'.$created.'</span>
                                                </div>
                                                <div class="c-panel">
                                                    <ul class="c-tags c-theme-ul-bg">
                                                       '.$liststr.' 
                                                    </ul>                                                    
                                                </div>
                                                <p> '.$blog['short'].' </p>
                                            </div>
                                        </div>';
                                    }
                                    $x++;
                                }

                                echo "</div>";
                                $x = 1;
                                echo '<div class="col-md-6">';
                                foreach ($blogs as $key => $blog)
                                {
                                    $created = date("d M Y, h:i A", strtotime($blog['created']));
                                    $liststr = '';
                                    foreach ($blog['tags'] as $keym => $tag) {

                                        $liststr .='<li>'.$tag['tag'].'</li>';

                                    }

                                    if($x%2 == 0)
                                    {
                                        echo '<div class="c-content-blog-post-card-1 c-option-2 c-bordered">
                                            <div class="c-media c-content-overlay">
                                                <div class="c-overlay-wrapper">
                                                    <div class="c-overlay-content">
                                                        <a href="'.site_url('blogs/single/'.$blog['blog_id']).'">
                                                            <i class="icon-link"></i>
                                                        </a>
                                                        <a href="'.$baselink.'cblogs/'.$blog['tmp_name'].'" data-lightbox="fancybox" data-fancybox-group="gallery">
                                                            <i class="icon-magnifier"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <img class="c-overlay-object img-responsive" src="'.$baselink.'cblogs/'.$blog['tmp_name'].'" alt=""> </div>
                                            <div class="c-body">
                                                <div class="c-title c-font-bold c-font-uppercase">
                                                    <a href="'.site_url('blogs/single/'.$blog['blog_id']).'">'.$blog['title'].'</a>
                                                </div>
                                                <div class="c-author"> By
                                                    <a href="#">
                                                        <span class="c-font-uppercase">'.$blog['author'].'</span>
                                                    </a> on
                                                    <span class="c-font-uppercase">'.$created.'</span>
                                                </div>
                                                <div class="c-panel">
                                                    <ul class="c-tags c-theme-ul-bg">
                                                       '.$liststr.' 
                                                    </ul>                                                    
                                                </div>
                                                <p>'.$blog['short'].' </p>
                                            </div>
                                        </div>';
                                    }
                                    $x++;
                                }

                                echo "</div>";



                            }

                            ?>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <!-- BEGIN: CONTENT/BLOG/BLOG-SIDEBAR-1 -->
                    <a class="twitter-timeline" data-height="900" data-link-color="#FAB81E" href="https://twitter.com/Conexusoilgas?ref_src=twsrc%5Etfw">Tweets by Conexusoilgas</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    <!-- END: CONTENT/BLOG/BLOG-SIDEBAR-1 -->
                </div>
            </div>
        </div>
    </div>
    <!-- END: BLOG LISTING  -->
    <!-- END: PAGE CONTENT -->
</div>
<!-- END: PAGE CONTAINER -->

<?php include 'includes/footer.php' ; ?>
