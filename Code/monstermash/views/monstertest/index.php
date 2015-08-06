<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MonstertestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Monstertests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monstertest-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Monstertest', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'age',
            'gender',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
