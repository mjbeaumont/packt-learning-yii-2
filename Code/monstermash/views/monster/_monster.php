<?php
use yii\helpers\Html;
use yii\helpers\Url;

$photoInfo = $model->PhotoInfo;
$photo = Html::img($photoInfo['url'],['alt'=>$photoInfo['alt']]);
$detailLink = Url::toRoute(['/monster/view','id'=>$model->id]);
?>

<figure>
    <?=Html::a($photo,$detailLink,['class'=>'profile-thumb'])?>
</figure>

<ul class="details">
    <li><span>Name:</span> <?=$model->name?></li>
    <li><span>Age:</span> <?=$model->age?></li>
    <li><span>Gender:</span> <?=$model->ProfileGender?></li>
    <li><span>Skin Tone:</span> <?=$model->skin->description?></li>
</ul>

<p><?=Html::a('View complete profile',$detailLink)?></p>
