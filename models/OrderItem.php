<?php

namespace app\models;

class OrderItem extends \yii\db\ActiveRecord
{
        public static function tableName()
    {
        return 'order_item';
    }
        public function rules()
    {
        return [
            [['order_id', 'user_id', 'name', 'price', 'color', 'size', 'quantity'], 'required'],
            [['order_id', 'user_id', 'price'], 'number'],
            [['name', 'color', 'size', 'quantity'], 'string'],
        ];
    }
}

