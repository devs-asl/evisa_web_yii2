<?php
namespace client\widgets;


use yii\base\Widget;

class Header extends Widget
{
    public function run()
    {
        return $this->render('page-header');
    }
}