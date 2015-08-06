<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\base\NotSupportedException;

/**
 * This is the model class for table "monster".
 *
 * @property integer $id
 * @property string $name
 * @property integer $age
 * @property string $gender
 * @property string $username
 * @property string $password
 * @property string $authKey
 */
class Monster extends ActiveRecord implements IdentityInterface
{

    public $hashPassword  = false;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'monster';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['age'], 'integer'],
            [['name', 'username', 'password', 'authKey'], 'string', 'max' => 255],
            [['gender'], 'string', 'max' => 1],
            [['username'], 'unique'],
            [['password'], 'string', 'min' => 6],
            [['gender'], 'in', 'range' => ['m','f']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Full Name',
            'age' => 'Age',
            'gender' => 'Gender',
            'username' => 'Username',
            'password' => 'Password',
            'authKey' => 'Auth Key'
        ];
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    public function validatePassword($password)
    {
        return \Yii::$app->security->validatePassword($password, $this->password);
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->hashPassword) {
                $this->password = \Yii::$app->security->generatePasswordHash($this->password, 10);
            }
            return true;
        } else {
            return false;
        }
    }
}
