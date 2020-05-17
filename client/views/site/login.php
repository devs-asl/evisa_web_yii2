<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\helpers\UrlHelpers;
use common\widgets\Alert;
use yii\helpers\Url;

$this->title = 'e-Visa | Bangladesh | Login';

?>

<div class="m-grid__item   m-grid__item--order-tablet-and-mobile-2  m-grid m-grid--hor m-login__aside " style="background-image: url(<?= UrlHelpers::url('images/bg-4.jpg') ?>);">
    <div class="m-grid__item">
        <div class="m-login__logo">
            <a href="<?php echo Url::home(true) ?>">
                <img src="<?= UrlHelpers::url('images/logo/eVISA-logo.png') ?>">
            </a>
        </div>
    </div>
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver">
        <div class="m-grid__item m-grid__item--middle">
            <span class="m-login__title">Whatever CTA's wave purpose important exit element</span>
            <span class="m-login__subtitle">Lorem ipsum amet estudiat</span>
        </div>
    </div>
    <div class="m-grid__item">
        <div class="m-login__info">
            <div class="m-login__section">
                <a href="#" class="m-link">&copy 2018 Metronic</a>
            </div>
            <div class="m-login__section">
                <a href="#" class="m-link">Privacy</a>
                <a href="#" class="m-link">Legal</a>
                <a href="#" class="m-link">Contact</a>
            </div>
        </div>
    </div>
</div>
<div class="m-grid__item m-grid__item--fluid  m-grid__item--order-tablet-and-mobile-1  m-login__wrapper">

    <h3>Login</h3>



    <?= Alert::widget() ?>

    <!--begin::Body-->
    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
    <?= $form->field($login, 'email')->textInput(['autofocus' => true]) ?>

    <?= $form->field($login, 'password')->passwordInput() ?>

    <div class="row m-login__form-sub">
        <?= $form->field($login, 'rememberMe')->checkbox() ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Login', ['class' => 'btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air', 'name' => 'login-button']) ?>
    </div>
    <?php ActiveForm::end(); ?>




    <!--end::Body-->
</div>


