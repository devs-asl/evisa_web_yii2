<?php

use common\assets\AuthAssetBundle;

use yii\helpers\Html;

AuthAssetBundle::register($this);
?>

<?php $this->beginPage(); ?>

<!DOCTYPE html>
<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title><?= Html::encode($this->title) ?></title>
    <link rel="icon" href="images/logo/eVISA-logo-favicon.ico" sizes="48x48" >
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!-- Style Customizer's stylesheets END -->
    <?php $this->head() ?>

</head>
<!-- end::Head -->

<!-- begin::Body -->

<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--desktop m-grid--ver-desktop m-grid--hor-tablet-and-mobile m-login m-login--6" id="m_login">
        <?= $content ?>
    </div>
</div>

<?php $this->endBody(); ?>
</body>
<!-- end::Body -->
</html>
<?php $this->endPage(); ?>
