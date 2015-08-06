<?php

namespace app\commands;

use yii\console\Controller;
use app\models\Monster;

class MonsterController extends Controller
{
    public function actionLoadMonsters()
    {

        Monster::deleteAll();

        $monsterData = [
            [
                'name' => 'Dracula',
                'age' => 999,
                'gender' => 'm',
                'username' => 'fangman999',
                'password' => 'yummyblood'
            ],
            [
                'name' => 'Frankenstein',
                'age' => 2,
                'gender' => 'm',
                'username' => 'stitchedtogether',
                'password' => 'boltneck'
            ],
            [
                'name' => 'Medusa',
                'age' => 34,
                'gender' => 'f',
                'username' => 'snakehairgirl',
                'password' => 'dontlooknow'
            ],
            [
                'name' => 'Mummy',
                'age' => 86,
                'gender' => 'm',
                'username' => 'dirtyragdude',
                'password' => 'wrappedtight'
            ],
            [
                'name' => 'Wicked Witch',
                'age' => 40,
                'gender' => 'f',
                'username' => 'broomrider4eva',
                'password' => 'getyoumypretty'
            ],

        ];

        foreach ($monsterData as $data) {
            $monster = new Monster($data);
            $monster->save();
        }
    }
}
