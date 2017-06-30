<?php
/**
 * Created by PhpStorm.
 * User: ploggmedia
 * Date: 2017-06-30
 * Time: 8:48 AM
 */
?>
<style>
    .custom_p a {
        margin-right: 20px;
    }
</style>
<div id="footerwrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h4>About</h4>
                <div class="hline-w"></div>
                <p>I am passionate about Technology and speak English and French. <br>
                Do not hesitate to contact me.</p>
            </div>
            <div class="col-lg-4">
                <h4>Social Links</h4>
                <div class="hline-w"></div>
                <p>
                    <a href="/contact" title="contact"><i class="fa fa-envelope"></i></a>
                    <a href="<?php echo $user['resume_file'] ?>" target="_blank"><i class="fa fa-book" title="resume"></i></a>
                    <a href="<?php echo $user['linkedin']; ?>" target="_blank" title="linkedin"><i class="fa fa-linkedin"></i></a>
                    <a href="<?php echo $user['github']; ?>" target="_blank" title="github"><i class="fa fa-github"></i></a>
                </p>
            </div>
            <div class="col-lg-4">
                <h4>Navigation</h4>
                <div class="hline-w"></div>
                <p class="custom_p">
                    <a href="/">Home</a>
                    <a href="/about">About</a>
                    <a href="/contact">Contact</a>
                </p>
            </div>
        </div>
    </div>
</div>
