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
            <a class="navbar-brand" href="/">WASP.</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">
                <li class="<?php echo $navbar['Home']; ?>"><a href="/">HOME</a></li>
                <li class="<?php echo $navbar['About']; ?>"><a href="/about">ABOUT</a></li>
                <li class="<?php echo $navbar['Contact']; ?>"><a href="/contact">CONTACT</a></li>
            </ul>
        </div>
    </div>
</div>
