<?php


namespace client\widgets;


use yii\base\Widget;

class MapDescription extends Widget
{
    public function run()
    {
        return $this->render('map-description');
    }
}