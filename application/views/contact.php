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
            <section class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.153590044365!2d151.2283635148165!3d-33.88569802736661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae064d4035c7%3A0xafd8ab9b32253d24!2sUnderwood+St%2C+Paddington+NSW+2021%2C+Australia!5e0!3m2!1sen!2s!4v1489007994183"></iframe>
            </section>
        </div>

        <div class="page-section white">
            <div class="container">
                <div class="row">
                    <section class="contactus-form yellow">
                        <form action="#">
                            <div class="form-row">
                                <div class="left-row">
                                    <input type="text" placeholder="Name*">
                                </div>
                                <div class="right-row">
                                    <input type="email" placeholder="Email*">
                                </div>
                            </div>
                            <div class="form-row">
                                <input type="text" placeholder="Subject">
                            </div>
                            <textarea placeholder="Message"></textarea>
                            <button type="submit">send</button>
                        </form>
                    </section>
                </div>
            </div>
        </div>

<?php include 'includes/footer.php' ; ?>