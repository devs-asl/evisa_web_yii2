<?php

use common\assets\AuthAssetBundle;

use yii\helpers\Html;
use common\helpers\UrlHelpers;


AuthAssetBundle::register($this);
?>

<?php $this->beginPage(); ?>

<!DOCTYPE html>
<html lang="en">

<!-- begin::Head -->
<head>

    <meta charset="utf-8" />
    <title>E-Visa | Sign In</title>
    <link rel="icon" href="<?= UrlHelpers::url('images/logo/eVISA-logo-favicon.ico') ?>" sizes="48x48">
    <meta name="description" content="Singin page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <?php $this->registerCsrfMetaTags() ?>

    <?php $this->head() ?>

    <link rel="shortcut icon" href="/metronic/theme/html/demo10/dist/assets/media/logos/favicon.ico" />

</head>

<!-- end::Head -->

<!-- begin::Body -->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled sidebar-enabled page-loading">

<!--begin::Main-->
<div class="d-flex flex-column flex-root">



        <?= $content ?>




</div>

<?php $this->endBody(); ?>
</body>
<!-- end::Body -->
</html>
<?php $this->endPage(); ?>
