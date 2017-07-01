<?php
/**
 * Created by jack.
 * Date: 2017-06-30
 */
?>
<!DOCTYPE html>
<html lang="<?php echo $locale_lang ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/favicon.ico">

    <title><?php echo $user['name'] . ' | ' . $page_title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/layouts.css" rel="stylesheet">
    <link href="/css/views.css" rel="stylesheet">
    <?php echo isset($section_styles) ? $section_styles : ''; ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <?php include_once 'menu.php'; ?>

    <div id="blue">
        <div class="container">
            <div class="row">
                <?php echo $blue_wrap ?>
            </div>
        </div>
    </div>

    <div class="container mtb">
        <div class="row">
            <?php echo $section_content; ?>
        </div>
    </div>
    <?php include_once 'footer.php'; ?>

    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/scripts.js"></script>
    <?php echo isset($section_scripts) ? $section_scripts : ''; ?>
</body>
</html>
