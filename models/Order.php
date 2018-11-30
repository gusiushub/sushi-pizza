<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $client_name
 * @property int $price
 * @property string $pay_type
 * @property string $phone
 * @property string $delivery_type
 * @property string $text
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'client_name', 'price', 'pay_type', 'phone', 'delivery_type', 'text'], 'required'],
            [['title', 'description', 'client_name', 'pay_type', 'phone', 'delivery_type', 'text'], 'string'],
            [['price'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'client_name' => 'Client Name',
            'price' => 'Price',
            'pay_type' => 'Pay Type',
            'phone' => 'Phone',
            'delivery_type' => 'Delivery Type',
            'text' => 'Text',
        ];
    }
}
