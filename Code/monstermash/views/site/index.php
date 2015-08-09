<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Monster Mash';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome to Monster Mash!</h1>

        <p class="lead">The place to find love for life, the afterlife and beyond.</p>

        <p><a class="btn btn-lg btn-success" href="<?=Url::to('/monster')?>">Find Your Match</a></p>
    </div>
</div>
