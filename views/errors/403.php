<?php
$page_title = '403';
ob_start();
?>
<div class="well text-center" style="margin-top:20px">
    <div class="alert alert-danger" role="alert">
        <h3><b>Error 403 : Unauthorized access</b></h3>
        Put your hands up and drop your weapons.
    </div>
    <div class="alert alert-info alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        If you think you have the necessary rights but the problem persists please contact the administrator of this platform.
    </div>
    <a href="/"><strong>Back to Home</strong></a>
</div>
<?php
$section_content = ob_get_clean();
include_once '../layouts/error.php';
