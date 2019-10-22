

<div class="bottom-footer inner">
    <span>&copy; Copyrights <?=date('Y')?> Shachah Christian Academy. All Rights Reserved</span>
</div>

</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<?php if (isset($base)){ ?>
    <script src="<?=$base.'assets/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js'?>" type="text/javascript"></script>
    <script src="<?=$base.'assets/pages/scripts/portfolio-3.min.js'?>" type="text/javascript"></script>
<?php } ?>
<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
<script src="<?=base_url('assets/js/switcher.js')?>"></script>
<script src="<?=base_url('assets/js/custom.js')?>"></script>


</body>
</html>
