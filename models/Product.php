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
            [['id', 'name', 'price', 'сomposition', 'size', 'description', 'place', 'belonging', 'concept', 'gender', 'color', 'image'], 'required'],
            [['id', 'price'], 'number'],
            [['name', 'сomposition', 'size', 'place', 'belonging', 'concept', 'gender', 'color', 'image'], 'string', 'max' => 255],
            [['description'], 'string'],
        ];
    }

}