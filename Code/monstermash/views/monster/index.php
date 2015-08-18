<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MonsterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Monsters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monster-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_monster',
        'itemOptions' => ['class'=>'list-monster'],
        'layout' => "{sorter}\n{summary}\n{items}\n{pager}"
    ]);?>

</div>
