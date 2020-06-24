<?php

/* @var $this yii\web\View */

use client\widgets\HomeSlider;
use client\widgets\MapDescription;
use client\widgets\Map;
use client\widgets\ImageCarousel;
use client\widgets\EvisaForm;

$this->title = 'e-Visa | Bangladesh';
?>

<div class="clearfix"></div>

<?= HomeSlider::widget() ?>

<div class="clearfix"></div>

<?= EvisaForm::widget() ?>

<div class="clearfix"></div>

<?= MapDescription::widget(); ?>

<div class="clearfix"></div>

<?= Map::widget(); ?>

<div class=" clearfix"></div>

<?= ImageCarousel::widget(); ?>

<div class="clearfix"></div>

