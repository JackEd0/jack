<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/settings.php';

if (isset($_POST['email'])) {
    $page_content = contact_by_mail($user);
    $_SESSION['page_content'] = $page_content;
    header('Location: about');
}

$subbar = 'Contact';
$page_title = 'Contact';
$blue_wrap = '<h3 class="tt-uppercase-fl tt-none">' . _l('Contact Me') . '.</h3>';
$section_scripts = '<script src="/js/about.js"></script>';
ob_start();
?>
<div class="col-lg-8">
    <h4><?php echo _l('Let\'s Get In Touch') ?></h4>
    <div class="hline"></div>
    <form method="POST" action="/contact" id="contact_form">
        <div class="form-group mt">
            <label for="InputName1"><?php echo _l('name') ?> *</label>
            <input type="text" class="form-control" id="InputName1" name="name" required="">
        </div>
        <div class="form-group">
            <label for="InputEmail1"><?php echo _l('email') ?> *</label>
            <input type="email" class="form-control" id="InputEmail1" name="email" required="">
        </div>
        <div class="form-group">
            <label for="InputSubject1"><?php echo _l('subject') ?></label>
            <input type="text" name="subject" class="form-control" id="InputSubject1">
        </div>
        <div class="form-group">
            <label for="message1"><?php echo _l('message') ?> *</label>
            <textarea class="form-control" id="message1" rows="3" name="message" required=""></textarea>
        </div>
        <button type="submit" class="btn btn-theme"><?php echo _l('submit') ?></button>
    </form>
</div>
<?php
$section_content = ob_get_clean();
include_once $_SERVER['DOCUMENT_ROOT'] . '/views/layouts/master.php';

function contact_by_mail($user)
{
    $message = '<h4>This message was sent from your portfolio by ' . $_POST['name'] . ' :</h4>' . $_POST['message'];
    $message .= '<br /><br />you can reply at ' . $_POST['email'];
    $headers = "MIME-Version: 1.0 \r\n";
    $headers .= "Content-type:text/html;charset=UTF-8 \r\n";
    $headers .= "From: $_POST[email]\r\n";
    $headers .= "Reply-To: $_POST[email]\r\n";
    if (mail($user['email'], $_POST['subject'], $message, $headers)) {
        $page_content = _l('The mail was successfully sent');
    } else {
        $page_content = _l('The mail could not be sent');
    }

    return $page_content;
}
