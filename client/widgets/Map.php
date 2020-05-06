<?php


namespace client\widgets;


use yii\base\Widget;

class Map extends Widget
{
    public function run()
    {
        return $this->render('map');
    }
}