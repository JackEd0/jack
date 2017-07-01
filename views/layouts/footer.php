<div id="footerwrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h4><?php echo _l('about') ?></h4>
                <div class="hline-w"></div>
                <p><?php echo $user['about_' . $locale_lang] ?></p>
            </div>
            <div class="col-lg-4">
                <h4><?php echo _l('social links') ?></h4>
                <div class="hline-w"></div>
                <p>
                    <a href="/contact" title="contact"><i class="fa fa-envelope"></i></a>
                    <a href="<?php echo $user['resume_file'] ?>" target="_blank">
                        <i class="fa fa-book" title="<?php echo _l('resume') ?>"></i>
                    </a>
                    <a href="<?php echo $user['linkedin']; ?>" target="_blank" title="linkedin">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a href="<?php echo $user['github']; ?>" target="_blank" title="github">
                        <i class="fa fa-github"></i>
                    </a>
                </p>
            </div>
            <div class="col-lg-4">
                <h4><?php echo _l('navigation') ?></h4>
                <div class="hline-w"></div>
                <p class="custom_p">
                    <a href="/"><?php echo _l('home') ?></a>
                    <a href="/about"><?php echo _l('about') ?></a>
                    <a href="/contact"><?php echo _l('contact') ?></a>
                </p>
            </div>
        </div>
    </div>
</div>
