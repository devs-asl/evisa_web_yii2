<?php


namespace client\widgets;


use yii\base\Widget;

class ImageCarousel extends Widget
{
    public function run()
    {
        return $this->render('image-carousel');
    }
}