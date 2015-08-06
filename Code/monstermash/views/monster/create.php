<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Monster */

$this->title = 'Create Monster';
$this->params['breadcrumbs'][] = ['label' => 'Monsters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monster-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
