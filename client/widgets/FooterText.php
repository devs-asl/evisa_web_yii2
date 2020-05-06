<?php


namespace client\widgets;


use yii\base\Widget;

class FooterText extends Widget
{
    public function run()
    {
        return $this->render('footer-text');
    }
}