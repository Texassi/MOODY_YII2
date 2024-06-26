<?php

namespace app\models;

use yii\db\ActiveRecord;

class LikeItem extends ActiveRecord
{
    public static function tableName()
    {
        return 'like';
    }

    public function rules()
    {
        return [
            [['product_id', 'user_id', 'name', 'price', 'color', 'size'], 'required'],
            [['product_id', 'user_id'], 'integer'],
            [['name', 'color', 'size'], 'string'],
            [['price'], 'number'],
        ];
    }

    public function getProduct()
    {
        return $this->hasOne(Product::class, ['id' => 'product_id']);
    }
}