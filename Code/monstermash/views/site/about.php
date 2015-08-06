<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You will find information about our site, but not any garlic. We avoid garlic, because it is dangerous to some of our users.
    </p>

    <code><?= __FILE__ ?></code>
</div>
