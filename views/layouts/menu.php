<?php
$navbar = array('Home' => '', 'About' => '', 'Contact' => '');
if (isset($subbar)) {
    $navbar[$subbar] = 'active';
}
?>

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand text-uppercase" href="/"><?php echo $user['name'] ?>.</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">
                <li class="<?php echo $navbar['Home']; ?>"><a href="/"><?php echo _l('home') ?></a></li>
                <li class="<?php echo $navbar['About']; ?>"><a href="/about"><?php echo _l('about') ?></a></li>
                <li class="<?php echo $navbar['Contact']; ?>"><a href="/contact"><?php echo _l('contact') ?></a></li>
                <li class="dropdown lang-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <img src="/img/flags/<?php echo $locale_lang; ?>.gif" alt="<?php echo $locale_lang; ?>" class="img-thumbnail icon-small" height="100" width="100"> 
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
        			    <li>
                            <a href="#" data-event="set_locale" data-value="fr">
                                <img src="/img/flags/fr.gif" alt="fr" class="img-thumbnail icon-small" height="100" width="100">
                            </a>
                        </li>
        			    <li>
                            <a href="#" data-event="set_locale" data-value="en">
                                <img src="/img/flags/en.gif" alt="en" class="img-thumbnail icon-small" height="100" width="100">
                            </a>
                        </li>
        	        </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<form id="lang_form" action="/" method="POST" style="display: none;"><input type="text" name="lang" id="input_lang"></form>
