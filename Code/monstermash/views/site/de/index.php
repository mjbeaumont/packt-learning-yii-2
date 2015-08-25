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
        <h1>Herzlichen Wilkommen bei Monster Mash!</h1>

        <p class="lead">Wo die ewige Liebe lebt!</p>

        <p><?= Html::a('Liebe Finden', '/monster', ['class'=>$btnClass]);?></p>
    </div>
</div>
