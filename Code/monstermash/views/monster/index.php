<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MonsterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Monsters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monster-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Monster', ['create'], ['class' => 'btn btn-success']) ?>
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
            'username',
            // 'password',
            // 'authKey',

            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'update' => function($url, $model, $key) {
                        $options = [
                            'title' => Yii::t('yii', 'Update'),
                            'aria-label' => Yii::t('yii', 'Update'),
                            'data-pjax' => '0',
                        ];
                      return (Yii::$app->user->can('admin') || Yii::$app->user->can('updateMonster', ['user' => $model])) ? Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, $options) : '';
                    }
                ]
            ],
        ],
    ]); ?>

</div>
