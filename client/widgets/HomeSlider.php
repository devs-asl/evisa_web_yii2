<?php


namespace client\widgets;


use yii\base\Widget;

class HomeSlider extends Widget
{
    public function run()
    {
        return $this->render('home-slider');
    }
}