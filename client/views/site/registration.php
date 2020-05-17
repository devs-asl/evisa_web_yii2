<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \client\models\RegistrationForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\helpers\UrlHelpers;
use common\widgets\Alert;


$this->title = 'e-Visa | Bangladesh | Registration';
?>
<div class="m-grid__item   m-grid__item--order-tablet-and-mobile-2  m-grid m-grid--hor m-login__aside " style="background-image: url(<?= UrlHelpers::url('images/bg-4.jpg') ?>);">
    <div class="m-grid__item">
        <div class="m-login__logo">
            <a href="<?php  ?>">
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

    <h3>Registration</h3>

    <?= Alert::widget() ?>

    <!--begin::Body-->
    <?php $form = ActiveForm::begin(
        ['id' => 'form-signup'],
        ['options' => ['class' => 'm-login__form m-form']]
    ); ?>



    <?= $form->field($registration, 'first_name') ?>
    <?= $form->field($registration, 'last_name') ?>
    <?= $form->field($registration, 'username') ?>
    <?= $form->field($registration, 'email') ?>
    <?= $form->field($registration, 'password')->passwordInput() ?>


    <div class="form-group">
        <?= Html::submitButton('Registration', ['class' => 'btn btn-primary btn-focus m-btn m-btn--pill m-btn--custom m-btn--air', 'name' => 'registration-button']) ?>

        <button id="m_login_signup_cancel" class="btn btn-outline-focus  m-btn m-btn--pill m-btn--custom">Cancel</button>
    </div>

    <?php
    ActiveForm::end();
    ?>



    <!--end::Body-->
</div>

