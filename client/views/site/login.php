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
<!-- start new -->
<!--begin::Login-->
<div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid">
    <!--begin::Content-->
    <div class="login-container order-2 order-lg-1 d-flex flex-center flex-row-fluid px-7 pt-lg-0 pb-lg-0 pt-4 pb-6 bg-white">
        <!--begin::Wrapper-->
        <div class="login-content d-flex flex-column pt-lg-0 pt-12">
            <!--begin::Logo-->
            <a href="<?php echo Url::home(true) ?>" class="login-logo mb-xl-20 mb-15">
                <img src="<?= UrlHelpers::url('images/logo/eVISA-logo.png') ?>" class="max-h-70px" alt="" />
                <span style="font-size: 28px;color: #000000;margin-left: 20px;">E-Visa</span>
            </a>
            <!--end::Logo-->
            <!--begin::Signin-->
            <div class="login-form">
                <!--begin::Form-->


                <?php $form = ActiveForm::begin(['id' => 'login-form kt_login_singin_form']); ?>
                <!--begin::Title-->
                <div class="pb-5 pb-lg-15">
                    <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Sign In</h3>
                    <div class="text-muted font-weight-bold font-size-h4">New Here?
                        <a href="/metronic/demo10/custom/pages/login/login-4/signup.html" class="text-primary font-weight-bolder">Create Account</a></div>
                </div>
                <!--begin::Title-->
                <?= $form->field($login, 'email')->textInput(['autofocus' => true,'value' => 'denver@as.cas', 'class' => 'form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0'])->label('Your Email',['class' => 'font-size-h6 font-weight-bolder text-dark']) ?>

                <?= $form->field($login, 'password')->passwordInput(['value'=>'123456','class' => 'form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0'])->label('Password',['class' => 'font-size-h6 font-weight-bolder text-dark']) ?>

                <div class="row m-login__form-sub">
                    <?= $form->field($login, 'rememberMe')->checkbox() ?>
                </div>
                <div class="form-group">
                    <?= Html::submitButton('Login', ['id'=>'kt_login_singin_form_submit_button','class' => 'btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3', 'name' => 'login-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
                <!--end::Form-->
            </div>
            <!--end::Signin-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--begin::Content-->
    <!--begin::Aside-->
    <div class="login-aside order-1 order-lg-2 bgi-no-repeat bgi-position-x-right">
        <div class="login-conteiner bgi-no-repeat bgi-position-x-right bgi-position-y-bottom" style="background-image: url(<?= UrlHelpers::url('images/svg/login-visual-4.svg') ?>);">
            <!--begin::Aside title-->
            <h3 class="pt-lg-40 pl-lg-20 pb-lg-0 pl-10 py-20 m-0 d-flex justify-content-lg-start font-weight-boldest display5 display1-lg text-white">We Got
                <br />A Surprise
                <br />For You</h3>
            <!--end::Aside title-->
        </div>
    </div>
    <!--end::Aside-->
</div>
<!--end::Login-->



<!-- end  -->





