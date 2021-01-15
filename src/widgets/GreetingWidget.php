<?php
namespace vendor\ilkerozcn\yii2proje\src\widgets;
use Cassandra\Time;
use yii\base\Widget;
use yii\helpers\Html;
class GreetingWidget extends Widget
{

    public $greeting;
    public function init()
    {
        parent::init();
        $hour = date('G');
        if ( $hour >= 3 && $hour <= 8 )
            $this->greeting = "Günaydin";
        else if ( $hour >= 8 && $hour <= 14 )
            $this->greeting = "Good Afternoon";
        else if ( $hour >= 14 || $hours <= 3 )
            $this->greeting = "Good Evening";
    }
    public function run()
    { return "<h1 style='color: #0a73bb'> $this->greeting </h1> ";

    }
}
