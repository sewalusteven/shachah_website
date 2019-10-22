
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- title of the page -->
    <title>Shachah Christian Academy Official Website | <?=$title?></title>

    <!-- Bootstrap style sheet -->
    <link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- css style sheet -->
    <link id="style" rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">

    <link id="colors" rel="stylesheet" href="<?=base_url('assets/css/color.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/switcher.css')?>">

    <link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.min.css')?>">
    <link rel="shortcut icon" href="<?=base_url('clogo.png')?>" />
    <?=(isset($base))?'<link rel="stylesheet" href="'.$base.'assets/global/plugins/cubeportfolio/css/cubeportfolio.css">':''?>
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i%2cOxygen:300,400,700" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- main wrapper of the page -->
<div id="wrapper">
    <div class="top-bar4">
        <div class="container">
            <div class="logo"><a href="#"><img src="<?=base_url('clogo.png')?>" width="120" height="50" alt="shachah"></a></div>
        </div>
    </div>

    <header id="header2" class="header4">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li <?=($page == 'home')?'class="active"':''?>><a href="<?=site_url('/')?>">Home</a></li>
                        <li <?=($page == 'about')?'class="active"':''?>><a href="<?=site_url('about')?>">About Us</a></li>
                        <li <?=($page == 'services')?'class="active"':''?>><a href="<?=site_url('services')?>">Co Curricullum</a></li>
                        <li <?=($page == 'events')?'class="active"':''?>><a href="<?=site_url('blogs/events')?>">Events</a></li>
                        <li <?=($page == 'news')?'class="active"':''?>><a href="<?=site_url('blogs/news')?>">Announcements</a></li>
                        <li <?=($page == 'gallery')?'class="active"':''?>><a href="<?=site_url('gallery')?>">Gallery</a></li>
                        <li <?=($page == 'faq')?'class="active"':''?>><a href="<?=site_url('services/faqs')?>">FAQs</a></li>
                        <li <?=($page == 'contact')?'class="active"':''?>><a href="<?=site_url('contact')?>">Contact Us</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="tel home layer"><i class="fa fa-phone" aria-hidden="true"></i><a href="#"><?=$phone['contact']?></a></div>

    </header>