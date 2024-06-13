<?php

namespace app\models;

class ProductItem extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'product';
    }

    public function rules()
    {
        return [
            [['name', 'price', 'image', 'сomposition', 'size', 'description', 'color'], 'required'],
            [['price', ], 'number'],
            [['name', 'image', 'сomposition', 'size', 'description', 'color'], 'string'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'price' => 'Price',
            'image' => 'Image',
            'сomposition' => 'Composition',
            'size' => 'Size',
            'description' => 'Description',
            'color' => 'Color',
        ];
    }
}