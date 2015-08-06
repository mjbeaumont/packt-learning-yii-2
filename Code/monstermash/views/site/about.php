<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\models\Monstertest;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You will find information about our site, but not any garlic. We avoid garlic, because it is dangerous to some of our users.
    </p>

    <p>
    <?php

    // Invalid Data
    $data = [
        'name' => 'Wolfman',
        'age' => 'invalidstring',
        'gender' => 'male'
    ];

    // Valid Data
    /*$data = [
        'name' => 'Wolfman',
        'age' => '32',
        'gender' => 'm'
    ];*/

    $validateMonster1 = new Monstertest($data);
    $validateMonster1->save();

    // Example of deleting a record
    //$deleteMonster = MonsterTest::findOne(['name'=>'Wolfman'])->delete();

    // Examples of Yii Active Record finders
    $foundMonster1 = MonsterTest::findOne(1);
    $foundMonster2 = MonsterTest::findAll(['gender' => 'm']);

    ?>
    <hr>
    <p>
        Found Monster 1 Name: <?= $foundMonster1->name?><br>
        Found Monster 2 Count: <?= count($foundMonster2)?><br>
    </p>
    <hr>
    <p>
        Validate Monster 1 Errors: <pre><?= var_dump($validateMonster1->getErrors())?></pre>
    </p>



    <code><?= __FILE__ ?></code>
</div>
