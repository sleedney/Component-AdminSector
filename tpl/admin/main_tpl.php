<!DOCTYPE html>
<html lang="<?= LANG?>" dir="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=<?= $g_config['charset']?>" />
        <title><?= $g_title?></title>
        <?php if (!empty($g_description)):?><meta name="description" content="<?= $g_description?>" /><?php endif?>
        <?php if (!empty($g_keywords)):?><meta name="keywords" content="<?= $g_keywords?>" /><?php endif?>

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= Root('i/image/touch_icon/favicon_144x144.png')?>" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= Root('i/image/touch_icon/favicon_114x114.png')?>" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= Root('i/image/touch_icon/favicon_72x72.png')?>" />
        <link rel="apple-touch-icon-precomposed" href="<?= Root('i/image/touch_icon/favicon_57x57.png')?>" />

        <link rel="icon" href="<?= Root('favicon.ico')?>" type="image/x-icon" />
        <link rel="shortcut icon" href="<?= Root('favicon.ico')?>" type="image/x-icon" />

        <meta http-equiv="cleartype" content="on">

        <link rel="stylesheet" type="text/css" href="<?= Root('i/css/dev/funcs.css')?>" />
        <?php IncludeCom('dev/bootstrap')?>
        <?php IncludeCom('dev/font_ptsans')?>
        <!-- extraPacker -->

        <meta name="robots" content="noindex, nofollow">
    </head>
    <body>
        <?php IncludeCom('dev/bootstrap3_menu', array('menu' => $menu, 'logo' => $logo))?>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?= $content?>
                </div>
            </div>
        </div>
    </body>
</html>