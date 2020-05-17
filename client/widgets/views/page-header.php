<?php
use yii\helpers\Html;
use yii\helpers\Url;

?>
<div class="col-md-12 nopadding">
      <div class="header-section style1 pin-style">
        <div class="container">
          <div class="mod-menu">
            <div class="row">
              <div class="col-sm-2"> <a href="<?php \common\helpers\UrlHelpers::url('/') ?>" title="" class="logo style-2 mar-4"> <img src="images/logo/eVISA-logo.png" alt=""> </a> </div>
              <div class="col-sm-10">
                <div class="main-nav">
                  <ul class="nav navbar-nav top-nav">


                    <li class="visible-xs menu-icon"> <a href="javascript:void(0)" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false"> <i aria-hidden="true" class="fa fa-bars"></i> </a> </li>
                  </ul>
                  <div id="menu" class="collapse">
                    <ul class="nav navbar-nav">
                      <li class="mega-menu  ">  <a href="<?= \common\helpers\UrlHelpers::url('/') ?>">Home</a> </li>
                      <li> <a href="#">Services</a> </li>
                      <li> <a href="#">About</a> </li>
                      <li class="mega-menu  >" > <a href="contact.php ">Contact</a> </li>
                        <?php if(Yii::$app->user->isGuest) { ?>
                        <li class="mega-menu  >" > <a href="site/registration">Registration</a> </li>
                        <li class="mega-menu  >" > <a href="site/login">Login</a> </li>
                        <?php }else {  ?>
                            <li class="m-nav__item">
<!--                                --><?php //   echo
//                                    Html::beginForm(['/site/logout'], 'post')
//                                    .Html::submitButton(
//                                        'Logout'
//                                    ).
//                                    Html::endForm() ?>
                            <?=    Html::a('Logout', ['site/logout'], ['data-method' => 'post']) ?>


                            </li>
                        <?php } ?>






                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end menu-->

    </div>