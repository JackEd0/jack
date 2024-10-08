<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/settings.php';
$subbar = 'Home';
$page_title = _l('Home');
$blue_wrap = '<h3 class="tt-uppercase-fl tt-none text-center">' . _l('Welcome to my portfolio, my name is ') . $user['name'] . '.</h3>';
$section_scripts = '<script src="/js/about.js"></script>';
ob_start();
?>
<div class="row">
    <div class="col-lg-8 col-md-10 col-lg-offset-2 col-md-offset-1 centered">
        <h2 class="animated bounce"><?php echo _l('I create awesome designs to stand out your site or product. Check some of my latest works') ?>.</h2>
        <div class="hline "></div>
    </div>
</div>

<div id="portfoliowrap">
    <div class="portfolio-centered">
        <div class="recentitems portfolio">
            <?php foreach ($user['realisations'] as $realisation): ?>
                <div class="col-sm-6 col-md-4 mb">
                    <div class="cuadro_intro_hover">
                        <p style="text-align:center;">
                            <img src="/img/<?php echo $realisation['preview']; ?>" class="img-responsive" alt="<?php echo $realisation['title']; ?>">
                        </p>
                        <div class="caption">
                            <div class="blur"></div>
                            <div class="caption-text">
                                <h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;"><?php echo $realisation['title']; ?></h3>
                                <p><?php echo $realisation['description']; ?></p>
                                <a class=" btn btn-default" href="<?php echo $realisation['link']; ?>" target="_blank">
                                    <span class="glyphicon glyphicon-plus"> <?php echo _l('PREVIEW') ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div style="display: block; margin-top: 30px; clear: both;"></div>
    <div>
        <!-- <div class="col-lg-8 col-md-10 col-lg-offset-2 col-md-offset-1 centered"> -->
            <h3 class=""><?php echo _l('My latest jobs') ?>.</h3>
        <!-- </div> -->
    </div>

    <div class="portfolio-centered">
        <div class="recentitems portfolio">
            <?php foreach ($user['job_projects'] as $realisation): ?>
                <div class="col-sm-6 col-md-4 mb">
                    <div class="cuadro_intro_hover">
                        <p style="text-align:center;">
                            <img src="/img/<?php echo $realisation['preview']; ?>" class="img-responsive" alt="<?php echo $realisation['title']; ?>">
                        </p>
                        <div class="caption">
                            <div class="blur"></div>
                            <div class="caption-text">
                                <h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;"><?php echo $realisation['title']; ?></h3>
                                <p><?php echo $realisation['description']; ?></p>
                                <a class=" btn btn-default" href="<?php echo $realisation['link']; ?>" target="_blank">
                                    <span class="glyphicon glyphicon-plus"> <?php echo _l('PREVIEW') ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php
$section_content = ob_get_clean();
include_once DOCUMENT_ROOT . '/views/layouts/master.php';
