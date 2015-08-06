<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Monstertest */

$this->title = 'Create Monstertest';
$this->params['breadcrumbs'][] = ['label' => 'Monstertests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monstertest-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
