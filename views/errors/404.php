<?php
$page_title = '404';
ob_start();
?>
<div class="well text-center" style="margin-top:20px">
    <div class="alert alert-danger" role="alert">
        <h3><b>Error 404 : Non-existent page</b></h3>
        You fell into an internet hole
    </div>
    <div class="alert alert-info alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        If you think this page is supposed to exist please contact the administrator of this platform.
    </div>
    <a href="/"><strong>Back to Home</strong></a>
</div>
<?php
$section_content = ob_get_clean();
include_once '../layouts/error.php';
