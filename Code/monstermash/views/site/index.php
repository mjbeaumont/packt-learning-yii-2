<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\helpers\Html;

$btnClass = 'btn btn-lg ';
$btnClass .= (date('s')%2) ? 'btn-warning' : 'btn-success';

$this->title = 'Monster Mash';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome to Monster Mash!</h1>

        <p class="lead">The place to find love for life, the afterlife and beyond.</p>

        <p><?= Html::a('Find Your Match', '/monster', ['class'=>$btnClass]);?></p>
    </div>
</div>
