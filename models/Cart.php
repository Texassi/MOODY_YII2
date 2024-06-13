<?php

namespace app\models;

use yii\db\ActiveRecord;

class Cart extends ActiveRecord
{
    public static function tableName()
    {
        return 'products';
    }

    public function rules()
    {
        return [
            [['name', 'price', 'image'], 'required'],
            [['price'], 'number'],
            [['image'], 'string'],
        ];
    }

}