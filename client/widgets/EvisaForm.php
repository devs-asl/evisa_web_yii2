<?php


namespace client\widgets;


use yii\base\Widget;

class EvisaForm extends Widget
{
    public function run()
    {
        return $this->render('evisa-form');
    }
}