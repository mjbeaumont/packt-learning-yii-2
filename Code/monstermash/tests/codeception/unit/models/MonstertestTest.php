<?php

namespace tests\codeception\unit\models;

use yii\codeception\TestCase;
use app\models\Monstertest;

class MonstertestTest extends TestCase
{
    public function testIsOld()
    {
        $dracula = Monstertest::findOne(['name'=>'Dracula']);
        $this->assertTrue($dracula->IsOld);

        $medusa = Monstertest::findOne(['name'=>'Medusa']);
        $this->assertFalse($medusa->IsOld);
        //$this->assertTrue($medusa->IsOld);

    }

    public function fixtures()
    {
        return [
            'monsters' => 'app\tests\codeception\fixtures\MonstertestFixture'
        ];
    }
}
