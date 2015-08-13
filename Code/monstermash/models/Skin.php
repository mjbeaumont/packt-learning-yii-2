<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "skin".
 *
 * @property integer $id
 * @property string $description
 *
 * @property Monster[] $monsters
 */
class Skin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'skin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMonsters()
    {
        return $this->hasMany(Monster::className(), ['skin_id' => 'id']);
    }
}
