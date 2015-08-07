<?php

namespace app\rbac;

use yii\rbac\Rule;

class ProfileRule extends Rule {

    public $name = 'ownsProfile';

    public function execute($user, $item, $params) {
        return (isset($params)) ? ($user === $params['user']->getId()) : false;
    }
}