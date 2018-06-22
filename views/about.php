<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/settings.php';
$subbar = 'About';
$page_title = _l('About');
$blue_wrap = '<h3 class="tt-uppercase-fl tt-none">' . _l('A bit about me') . '.</h3>';
$section_scripts = '<script src="/js/about.js"></script>';
ob_start();
?>
<?php if (isset($_SESSION['page_content'])): ?>
    <div class="col-lg-8 notice-success">
        <?php echo $_SESSION['page_content']; unset($_SESSION['page_content']); ?>
    </div>
<?php endif; ?>
<div class="col-sm-6">
    <img class="img-responsive" src="/img/solid/agency.jpg" alt="">
</div>

<div class="col-sm-6">
    <h4><?php echo $user['full_name'] . ' | ' . $user['profession_' . $locale_lang]; ?></h4>
    <?php echo $user['description_' . $locale_lang]; ?>
    <p>
        <br/><a href="/contact" class="btn btn-theme"><?php echo _l('Contact Me') ?></a>
        <a href="<?php echo $user['resume_file'] ?>" target="_blank" class="btn btn-theme">
            <?php echo _l('Download my resume') ?>
        </a>
    </p>
    <div class="custom_img mb-30-px">
        <a href="https://www.usherbrooke.ca/">
            <img src="/img/udes.jpg" title="Universite de Sherbrooke">
        </a>
        <a href="https://www.plogg.ca/"><img src="/img/plogg.jpg" title="Plogg Media"></a>
    </div>
</div>

<div class="mt col-md-8 col-md-offset-2">
    <h4 class="text-capitalize"><?php echo _l('my skills') ?></h4>
    <div class="hline"></div>
    <p><?php echo _l('Most of my work are in') . ' ' . $user['main_language'] ?>.</p>
    <p>
        <?php foreach ($user['main_skills'] as $skill): ?>
            <a class="btn btn-theme" href="#" role="button"><?php echo $skill ?></a>
        <?php endforeach; ?>
    </p>
    <p class="mt-30-px"><?php echo _l('I also know about') ?>.</p>

    <?php
    for ($i=0, $m = count($user['skills']); $i < $m; $i++) {
        echo "<p>";
        foreach ($user['skills'][$i] as $skill) {
            echo '<a class="btn btn-theme" href="#" role="button">' . $skill . '</a>';
        }
        echo "</p>";
    }
    ?>
</div>
<?php
$section_content = ob_get_clean();
include_once $_SERVER['DOCUMENT_ROOT'] . '/views/layouts/master.php';
