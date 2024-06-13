<?php

namespace app\models;

class Product extends \yii\db\ActiveRecord
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